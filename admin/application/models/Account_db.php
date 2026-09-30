<?php
base_path();

class Account_db extends CI_Model
{
    public function __construct() {
        $this->load->model('data_db');
    }

    public function get_stock_report($data){
        $this->db->select(['product.product','stock.quantity', 'purchase_items.purchase_price','purchase_items.id as purchaseId']);
        $this->db->from('stock');
        $this->db->join('product', 'product.id = stock.product_id');
        $this->db->join('purchase', 'purchase.id = stock.purchase_id');
        $this->db->join('purchase_items', 'purchase_items.product_id = stock.product_id');
        if($data['category_id'] > 0){
            $this->db->where('product.category_id', $data['category_id']);
        }
        if($data['category_id'] > 0){
            $this->db->where('stock.product_id', $data['product_id']);
        }
        $this->db->where('purchase.purchase_date', $data['purchase_date']);
        $this->db->where('purchase_items.date', $data['purchase_date']);
        return $this->db->get()->result_array();
    }

    public function get_stock_report_new($data){
        $this->db->select(['product.id as product_id', 'product.product']);
        $this->db->from('product');
        if($data['category_id'] > 0){
            $this->db->where('product.category_id', $data['category_id']);
        }
        $products = $this->db->get()->result_array();

        foreach($products as $key => $product){
            $products[$key]['quantity'] = $this->data_db->get_stock_by_product_id($product['product_id']);
        }
        return $this->data_db->sort_product_array_by_stock_status($products, 'quantity');
    }

	public function get_item_report($data){
		$products = $this->data_db->get_product_all(null, ['product.id as product_id', 'product.product as product_name']);
		$item_array = [];
		foreach($products as $key => $product){

			//get purchase by date
			$this->db->select([
				'SUM(purchase_items.quantity) as quantity_total',
				'SUM(purchase_items.quantity * purchase_items.purchase_price) as purchase_price_total'
			]);
			$this->db->from('purchase_items');
			$this->db->join('purchase', 'purchase.id = purchase_items.purchase_id');
			$this->db->where('purchase.purchase_date >=', $data['from_date']);
			$this->db->where('purchase.purchase_date <=', $data['to_date']);
			$this->db->where('purchase_items.product_id =', $product['product_id']);
			$purchase = $this->db->get()->row();
			$products[$key]['purchase_quantity'] 	= $purchase->quantity_total;
			$products[$key]['purchase_price'] 		= $purchase->purchase_price_total;
			if($purchase->purchase_price_total > 0){
				$products[$key]['purchase_price_average'] = $purchase->purchase_price_total/$purchase->quantity_total;
			}else{
				$products[$key]['purchase_price_average'] = 0;
			}

			//purchase return quantity
			$this->db->select([
				'SUM(purchase_return.quantity) as quantity_total',
				'SUM(purchase_return.return_price) as return_price_total'
			]);
			$this->db->from('purchase_return');
			$this->db->join('purchase', 'purchase.id = purchase_return.purchase_id');
			$this->db->where('date(purchase_return.datetime) >=', $data['from_date']);
			$this->db->where('date(purchase_return.datetime) <=', $data['to_date']);
			$this->db->where('purchase_return.product_id =', $product['product_id']);
			$purchase_return = $this->db->get()->row();
			$products[$key]['purchase_return_quantity'] 	= $purchase_return->quantity_total;
			$products[$key]['purchase_return_price'] 		= $purchase_return->return_price_total;

			//order item quantity
			$this->db->select([
				'SUM(order_items.quantity) as quantity_total',
				'SUM(order_items.total_amount) as total_amount'
			]);
			$this->db->from('order_items');
			$this->db->join('orders', 'orders.id = order_items.order_id');
			$this->db->where('date(orders.order_date) >=', $data['from_date']);
			$this->db->where('date(orders.order_date) <=', $data['to_date']);
			$this->db->where('order_items.product_id =', $product['product_id']);
			$this->db->where('orders.order_status!=', 'cancelled');
			$orders = $this->db->get()->row();
			$products[$key]['order_quantity'] 	= $orders->quantity_total;
			$products[$key]['order_amount'] 	= $orders->total_amount;
			$products[$key]['order_return_quantity'] 	= '-';

			$products[$key]['stock_balance'] = $products[$key]['purchase_quantity'] - $products[$key]['purchase_return_quantity'] - $products[$key]['order_quantity'];
			$products[$key]['stock_value']	= $this->data_db->get_stock_by_product_id($product['product_id']);
		}
		log_message('error', print_r($products, true));
		return $this->data_db->sort_product_array_by_stock_status($products, 'stock_balance');
	}

	public function get_purchase_by_date($data, $product_id){

	}

    public function get_order_report($data){
        $this->db->select([
            'users.name',
            'users.phone',
            'order_items.quantity_no',
            'order_items.quantity',
            'order_items.unit_text',
            'product.product',
            'orders.order_status',
        ]);
        $this->db->from('order_items');
        $this->db->join('orders', 'order_items.order_id = orders.id', 'left');
        $this->db->join('users', 'orders.user_id = users.id');
        $this->db->join('product', 'order_items.product_id = product.id');
        if($data['product_id']>0 ){
            $this->db->where('order_items.product_id', $data['product_id']);
        }
        $this->db->where('orders.order_status!=', 'cancelled');
        $this->db->where('date(`order_date`) >=', $data['from_date']);
        $this->db->where('date(`order_date`) <=', $data['to_date']);

        $order_report = $this->db->get()->result_array();
        return $order_report;
    }

    public function get_supplier_report($data){
        $this->db->select([
            'supplier.supplier',
            'supplier.phone',
            'purchase.*',
        ]);
        $this->db->from('purchase');
        $this->db->join('supplier', 'supplier.id = purchase.supplier_id', 'left');
        if($data['supplier_id']!=0){
            $this->db->where('purchase.supplier_id', $data['supplier_id']);
        }
        $this->db->where('purchase_date', $data['purchase_date']);
        $supplier_report = $this->db->get()->result_array();
        return $supplier_report;
    }
    
     public function get_user_order_report($data){
        $this->db->from('orders');
        $this->db->where('order_status', 'delivered');
        $this->db->where('user_id', $data['user_id']);
        $this->db->where("date(order_date) >=", $data['from_date']);
        $this->db->where("date(order_date) <=", $data['to_date']);
        $purchase_report = $this->db->get()->result_array();
        return $purchase_report;
    }
    public function get_user_order_report_amount($data){
        $this->db->select('SUM(amount) as amount');
        $this->db->from('orders');
        $this->db->where('order_status', 'delivered');
        $this->db->where('user_id', $data['user_id']);
        $this->db->where("date(order_date) >=", $data['from_date']);
        $this->db->where("date(order_date) <=", $data['to_date']);
        $purchase_report_amount = $this->db->get()->row()->amount;
        return $purchase_report_amount;
    }
    
    
    public function get_product_data($date){
        $this->db->select('product.id,product.product');
        $data['products'] = $this->db->get('product')->result_array();
        foreach ($data['products'] as $key => $row){
            $product_id =$row["id"];

            $this->db->select('product_variant.title,product_variant.id as variant_id, product_variant_price.net_weight, product_variant_price.gross_weight');
            $this->db->from('product_variant');
            $this->db->join('product_variant_price', 'product_variant.id = product_variant_price.variant_id', 'left');
            $this->db->where('product_variant_price.product_id', $product_id);
            $product_variant = $this->db->get()->result_array();
            $data['products'][$key]['product_variants'] = $product_variant;
            
            foreach ($data['products'][$key]['product_variants'] as $key1 => $row){
                $variant_id = $row["variant_id"];
                
                $this->db->select('sum(order_items.quantity_no) as total_quantity');
                $this->db->from('orders');
                $this->db->join('order_items', 'orders.id = order_items.order_id');
                $this->db->where('order_items.product_id', $product_id);
                $this->db->where('order_items.variant_id', $variant_id);
                $this->db->where('orders.order_status!=', 'cancelled');
                $this->db->where('date(`order_date`)', $date);
                $order_count = $this->db->get()->result_array();;
                $data['products'][$key]['product_variants'][$key1]['orders'] = $order_count;
            }
        }
        return $data;
    }

	/**
	 * PURCHASE REPORT
	 */
	public function get_purchase_report($data){
		$this->db->where('purchase_date >=', $data['purchase_date']);
		$this->db->where('purchase_date <=', $data['purchase_date']);

		if($data['supplier_id'] > 0){
			$this->db->where('supplier_id', $data['supplier_id']);
		}
		return $this->db->get('purchase')->result_array();
	}
  
}
