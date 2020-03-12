<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$data['err_msg'] = false;
		$this->load->view('template_front',$data);
	}

	public function login_state(){
		$name = $this->input->post('name');
		$psw = $this->input->post('psw');

		$check = $this->main_model->loginState($name,$psw);
		if($check == true){
			redirect('ignite/index');
		}
			else{
				$data['err_msg'] = true;
				$this->load->view('template_front',$data);
			}
	}
}
