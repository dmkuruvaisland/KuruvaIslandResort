<?php defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
		ini_set('display_errors', 1);
		$this->load->library('session');
    }
}

class Admin_Controller extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
    }
	//UPLOAD FILES
	protected function upload_file($upload_folder, $file_name, $type = 'image')
	{
		if (isset($_FILES[$file_name]['name'])) {
			//UPLOAD FILE
			$uploadPath = 'uploads/' . $upload_folder . '/' . date("mY");
			createFolder($uploadPath);
			$configUpload = array(
				'upload_path' => $uploadPath,
				'allowed_types' => getFileFormats($type),
				'encrypt_name' => true
			);
			$this->load->library('upload', $configUpload);
			if (!$this->upload->do_upload($file_name)) {
				return false;
			} else {
				$data['file'] = array('upload_data' => $this->upload->data());
				return $uploadPath . "/" . $data['file']['upload_data']['file_name'];
			}
		} else {
			return false;
		}
	}
}

class Api_Controller extends MY_Controller
{
	function __construct()
	{
		parent::__construct();
	}

	protected function create_response($status, $message, $data){
		$data = ['status' => $status, 'message' => $message, 'data' => $data];
		echo json_encode($data);
	}
}

class Public_Controller extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
    }
}
