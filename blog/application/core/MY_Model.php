<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Model extends CI_Model {
	/*
		| -----------------------------------------------------
		| PRODUCT NAME: 	ECOPEN
		| -----------------------------------------------------
		| AUTHOR:			TROGON MEDIA PVT LTD
		| -----------------------------------------------------
		| EMAIL:			mail@trogonmedia.com
		| -----------------------------------------------------
		| COPYRIGHT:		RESERVED BY TROGON MEDIA PVT LTD
		| -----------------------------------------------------
		| WEBSITE:			http://trogonmedia.com
		| -----------------------------------------------------
		*/
	protected string $_table_name = '';

	function __construct() {
		parent::__construct();
		$this->load->database();
	}

	/**
	 * Insert
	 * @param $data
	 * @return int
	 */
	public function insert($data): int {
		$this->db->insert($this->_table_name, $data);
		return $this->db->insert_id();
	}

	/**
	 * Insert Batch
	 * @param $data
	 * @return int
	 */
	public function insert_batch($data): int {
		$this->db->insert_batch($this->_table_name, $data);
		return $this->db->insert_id();
	}

	/**
	 * Update
	 * @param $data
	 * @param $where
	 * @return bool
	 */
	public function update($data, $where = null): bool {
		if ($where != null) {
			$this->db->where($where);
		}
		return $this->db->update($this->_table_name, $data) != false;
	}

	/**
	 * Get
	 * @param $where
	 * @param $select
	 * @param $order_by
	 * @return object
	 */
	public function get($where = null, $select = null, $order_by = ['key' => 'id', 'direction' => 'ASC']): object {
		if ($select != null) {
			$this->db->select($select);
		}
		if ($where != null) {
			$this->db->where($where);
		}
		if ($order_by != null) {
			$this->db->order_by($order_by['key'], $order_by['direction']);
		}
		return $this->db->get($this->_table_name);
	}

	/**
	 * Delete
	 * @param $where
	 * @return boolean
	 */
	public function delete($where = null): bool {
		if ($where != null) {
			$this->db->where($where);
			return $this->db->delete($this->_table_name);
		}else{
			return false;
		}
	}
}
