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
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */

			function __construct(){
					parent::__construct();
					$this->load->helper(array('form','url'));
					$this->load->model('m_login');
					$this->load->library('session');
				}

		 public function index(){
			 		$this->load->view('signin/index');
				}

		 function aksi(){

			 		$data=array(
						'USERNAME'=>$this->input->post('uname'),
						'PASSWORD'=>$this->input->post('pass')
					);

					$cek=$this->m_login->m_aksi($data);
					if($cek == 1){
						$x=$this->session->set_userdata($data);
						redirect(site_url('dashbord'));
						// redirect('login/sukses');
					}else{
						echo "login gagal";

				}
			}


		function sukses(){
			$data = array(
				'USERNAME' => $this->session->userdata('USERNAME')
			);
			$this->load->view('admin/header1');
			$this->load->view('exadmin/dashbord',$data);
	 		$this->load->view('admin/footer1');
		}

		function logout(){
			$this->session->sess_destroy();
			redirect('login/');
		}

}
