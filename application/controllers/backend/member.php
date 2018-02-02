<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Member extends CI_Controller {

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

    if($this->session->userdata('STATUS_USER') == 'ADMIN') {

    } else {
      $cek = $this->M_cek_status->cek_tim()->num_rows();
			if($cek < 1) {
				redirect('team/');
			}
    }

	 }

	public function index() {
    $data['cek'] = $this->M_cek_status->cek_anggota()->num_rows();
		$data['tim_cek'] = $this->M_cek_status->cek_tim()->num_rows();

		$data['anggota'] = $this->M_cek_status->cek_anggota()->result();
		$data['tim'] = $this->M_cek_status->cek_tim()->result();
    $this->load->view('backend/member',$data);

	}

	public function input() {
		$A = $this->input->post('NAMA_ANGGOTA');
		$B = $this->input->post('PT_ANGGOTA');
		$C = $this->input->post('NIM_ANGGOTA');

		$POST = $this->db->insert('anggota',array(
						'NAMA_ANGGOTA' => $A,
						'PT_ANGGOTA' => $B,
						'NIM_ANGGOTA' => $C,
						'USERNAME_ANGGOTA' => $this->session->userdata('USERNAME_USER')
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
