<?php
base_path();

class Data_db extends CI_Model
{



	/**
	 * COMMON
	 */
	public function sort_array_by_key($array, $sort_key = 'is_stock'){
		$key_array = array_column($array, $sort_key);
		array_multisort($key_array, SORT_DESC, $array);
		return $array;
	}






    /**
     * PROFILE DETAILS
     */
    public function get_profile() {
        $this->db->where('id', 1);
        return $this->db->get('admin')->row_array();
    }
    public function get_settings(): array {
        return array_column($this->db->get('settings')->result_array(), 'value', 'key');
    }

    public function get_app_version() {
        $this->db->select('app_version');
        $result = $this->db->get_where('admin', ['id' => 1])->row_array();
        return $result['app_version'];
    }

    public function update_profile($data) {
        $this->db->where('id', 1);
        $this->db->update('admin', ['username' => $data['username'], 'password' => md5($data['password'])]);
        return ['status' => true, 'message' => 'Updated Successfully!'];
    }

    public function update_version_code($data) {
        $this->db->where('id', 1);
        $this->db->update('admin', ['app_version' => $data['app_version']]);
        return ['status' => true, 'message' => 'Updated Successfully!'];
    }

    public function login_admin($data) {
        $this->db->select('*');
        $this->db->where('username', $data['username']);
        $this->db->where('password', md5($data['password']));
        $result = $this->db->get('admin')->row_array();
       //return ['status' => false, 'message' => 'Site can\'t be reached!'];

        if ($result) {
            return ['status' => true, 'message' => $result];
        } else {
            return ['status' => false, 'message' => 'Invalid login credentials!'];
        }
    }
    
    
}
