<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Team extends CI_Controller {

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

		if($this->session->userdata('status') != "login"){
			redirect ('login/');
		}

	 }

	public function index() {
		$cek = $this->M_cek_status->cek_tim()->num_rows();

		if($cek < 1) {
			$this->load->view('backend/team');
		} else {
			$data['team'] = $this->M_cek_status->cek_tim()->result();
			$this->load->view('backend/teamdone',$data);
		}

	}

	public function input() {
		$A = $this->input->post('NAMA_TIM');
		$B = $this->input->post('PT_TIM');
		$C = $this->input->post('KETUA_TIM');
		$D = $this->input->post('NIM_TIM');
		$E = $this->input->post('EMAIL_TIM');
		$F = $this->input->post('HP_TIM');

		$POST = $this->db->insert('tim',array(
						'NAMA_TIM' => $A,
						'PT_TIM' => $B,
						'KETUA_TIM' => $C,
						'NIM_TIM' => $D,
						'EMAIL_TIM' => $E,
						'HP_TIM' => $F,
						'USERNAME_TIM' => $this->session->userdata('USERNAME_USER')
		));

		if($POST) {
			redirect('login/sukses');
		} else {
			echo "Gagal!";
		}
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
