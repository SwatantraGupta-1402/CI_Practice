<?php 

class Upload extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->helper(array('form','url'));
	}

	public function index(){
		$this->load->view('Upload_Form', array('error' => ''));
	}

	public function do_upload(){
		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'jpg|png|gif';
		$config['max_size'] = '500';
		$config['max_width'] = '1024';
		$config['max_height'] = '780';
		$this->load->library('upload', $config);

		if (!$this->upload->do_upload('upload_file')) {
			$error = array('error' =>$this->upload->display_errors());
			$this->load->views('Upload_Form', $error);
			# code...
		}

		else {

			$data = array('upload_data' => $this->upload->data());
			$this->load->view('Upload_Success', $data);
		}
	}
}

?>