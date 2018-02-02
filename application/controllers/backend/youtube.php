<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Youtube extends CI_Controller {

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
      $cek = $this->M_cek_status->cek_doc()->num_rows();
			$cek2 = $this->M_cek_status->cek_doc()->result();

      if($cek < 1) {
        redirect('doc/');
      }

      if(date("d-m-Y") > date("23-03-2018") ) {
	        redirect('doc/');
      }

			if($cek2[0]->PENGUMUMAN_DOC != "BAYAR") {
				redirect('doc/');
			}
    }

	 }

	public function index() {
		$data['cek'] = $this->M_cek_status->cek_youtube()->num_rows();
		$data['youtube'] = $this->M_cek_status->cek_youtube()->result();

		if($this->session->userdata('STATUS_USER') == "ADMIN") {
			$data['admin'] = $this->M_cek_status->cek_youtube_admin()->result();
		}

		$this->load->view('backend/youtube',$data);
	}

	public function input() {
		$A = $this->input->post('LINK_YOUTUBE');
		$B = explode('watch?v=',$A);
		$C = $B['0'] . "embed/" . $B['1'];

		$POST = $this->db->insert('youtube',array(
						'LINK_YOUTUBE' => $C,
						'USERNAME_YOUTUBE' => $this->session->userdata('USERNAME_USER')
		));

		if($POST) {
			redirect('login/sukses');
		} else {
			echo "Gagal!";
		}
	}

	public function edit($id=NULL) {
		$where = array('ID_YOUTUBE' => $id);
		$data['youtube'] = $this->M_cek_status->edit_youtube($where,'youtube')->result();
		$this->load->view('backend/youtubeedit',$data);
	}

	public function update() {
		$A = $this->input->post('ID_YOUTUBE');
		$B = $this->input->post('PENGUMUMAN_YOUTUBE');

		$data = array(
			'PENGUMUMAN_YOUTUBE' => $B
		);

		$where = array(
			'ID_YOUTUBE' => $A
		);

		$update = $this->M_cek_status->update_doc($where,$data,'youtube');

		if($data && $where) {
			redirect('login/sukses');
		} else {
			echo "gagal";
		}
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
