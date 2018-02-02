<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Doc extends CI_Controller {

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
      $cek = $this->M_cek_status->cek_foto()->num_rows();
      if($cek < 2) {
        redirect('photo/');
      }
    }

	 }

	public function index() {
    $data['cek'] = $this->M_cek_status->cek_doc()->num_rows();
		$data['doc'] = $this->M_cek_status->cek_doc()->result();

		if($this->session->userdata('STATUS_USER') == "ADMIN") {
			$data['admin'] = $this->M_cek_status->cek_doc_admin()->result();
		}

    $this->load->view('backend/doc',$data);
	}

	public function input() {

    $A = $this->session->userdata('USERNAME_USER');

    $config['upload_path'] = './img/doc/';
    $config['allowed_types'] = '*';
    $config['file_name']	= $A . '_DOCUMENT';


    $this->upload->initialize($config);
    $this->load->library('upload', $config);
    $this->upload->do_upload();

    $filename = $this->upload->data('file_name');


		$POST = $this->db->insert('doc',array(
						'NAMA_DOC' => $filename['orig_name'],
						'USERNAME_DOC' => $this->session->userdata('USERNAME_USER'),
						'PENGUMUMAN_DOC' => 'AWAL'
		));

		if($POST) {
			redirect('login/sukses');
		} else {
			echo "Gagal!";
		}
	}

	public function edit($id=NULL) {
			$where = array('USERNAME_DOC' => $id);
			$where2 = array('USERNAME_FOTO' => $id);

			$data['doc'] = $this->M_cek_status->edit_doc($where,'doc')->result();
			$data['foto'] = $this->M_cek_status->edit_foto($where2,'foto')->result();
			//print_r($data['foto']);
			$this->load->view('backend/docedit',$data);
	}

	public function update() {
		$A = $this->input->post('ID_DOC');
		$B = $this->input->post('PENGUMUMAN_DOC');

		$data = array(
			'PENGUMUMAN_DOC' => $B
		);

		$where = array(
			'ID_DOC' => $A
		);

		$update = $this->M_cek_status->update_doc($where,$data,'doc');

		if($data && $where) {
			redirect('login/sukses');
		} else {
			echo "gagal";
		}
	}

	public function delete($id=NULL) {

    $where = array('USERNAME_ANGGOTA' => $id);
    $delete = $this->M_cek_status->delete($where,'anggota');

		$where = array('USERNAME_FOTO' => $id);
    $delete = $this->M_cek_status->delete($where,'foto');

		$where = array('USERNAME_TIM' => $id);
    $delete = $this->M_cek_status->delete($where,'tim');

		$where = array('USERNAME_DOC' => $id);
    $delete = $this->M_cek_status->delete($where,'doc');

		$where = array('USERNAME_YOUTUBE' => $id);
		$delete = $this->M_cek_status->delete($where,'youtube');

		$where = array('USERNAME_USER' => $id);
    $delete = $this->M_cek_status->delete($where,'user');

    redirect('login/sukses');
  }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
