<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

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
	}

	public function index() {
		$this->load->view('login');
	}

	public function cek_login() {
		$A = $this->input->post('username');
		$B = $this->input->post('password');

		$where = array(
			'USERNAME_USER' => $A,
			'PASSWORD_USER' => $B
		);

		$cek = $this->M_login->cek_login("user",$where)->num_rows();
		$set = $this->M_login->cek_login("user",$where)->result();

		if($cek > 0) {
			$data_session = array(
				'ID_USER' => $set[0]->ID_USER,
				'USERNAME_USER' => $set[0]->USERNAME_USER,
				'STATUS_USER' => $set[0]->STATUS_USER,
				'status' => "login",
			);

			$this->session->set_userdata($data_session);
			redirect('login/sukses');
		} else {
			echo "Gagal!";
		}

	}

	public function sukses() {
		$this->load->view('login_sukses');
	}

	public function register() {
		$A = $this->input->post('username');
		$B = $this->input->post('password');

		$POST = $this->db->insert('user',array(
						'USERNAME_USER' => $A,
						'PASSWORD_USER' => $B,
						'STATUS_USER' => 'PESERTA'
		));

		if($POST) {
			redirect('login/sukses');
		} else {
			echo "Gagal!";
		}
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect ('login/');
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
