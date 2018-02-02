<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Photo extends CI_Controller {

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
      $cek = $this->M_cek_status->cek_anggota()->num_rows();
      if($cek < 1) {
        redirect('member/');
      }
    }

	 }

	public function index() {
    $data['cek'] = $this->M_cek_status->cek_foto()->num_rows();
		$data['foto'] = $this->M_cek_status->cek_foto()->result();
    $this->load->view('backend/photo',$data);
	}

	public function input() {

    $A = $this->session->userdata('USERNAME_USER');

    $config['upload_path'] = './img/team/';
    $config['allowed_types'] = '*';
    $config['file_name']	= $A . '_FOTO_TIM';


    $this->upload->initialize($config);
    $this->load->library('upload', $config);
    $this->upload->do_upload();

    $filename = $this->upload->data('file_name');


		$POST = $this->db->insert('foto',array(
						'KELOMPOK_FOTO' => $filename['orig_name'],
						'USERNAME_FOTO' => $this->session->userdata('USERNAME_USER')
		));

		if($POST) {
			redirect('login/sukses');
		} else {
			echo "Gagal!";
		}
	}

	public function ktm() {

		$A = $this->session->userdata('USERNAME_USER');

		$config['upload_path'] = './img/team/';
		$config['allowed_types'] = '*';
		$config['file_name']	= $A . '_FOTO_KTM';


		$this->upload->initialize($config);
		$this->load->library('upload', $config);
		$this->upload->do_upload();

		$filename = $this->upload->data('file_name');


		$POST = $this->db->insert('foto',array(
						'KELOMPOK_FOTO' => $filename['orig_name'],
						'USERNAME_FOTO' => $this->session->userdata('USERNAME_USER')
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
