<?php

defined('BASEPATH') OR exit('No direct script access allowed');


class M_cek_status extends CI_Model {

  function cek_tim(){
      $this->db->select('*');
      $this->db->from('tim');
      $this->db->where('USERNAME_TIM',$this->session->userdata('USERNAME_USER'));
      return $this->db->get('');
	}

  function cek_anggota(){
      $this->db->select('*');
      $this->db->from('anggota');
      $this->db->where('USERNAME_ANGGOTA',$this->session->userdata('USERNAME_USER'));
      return $this->db->get('');
  }

  function cek_foto(){
      $this->db->select('*');
      $this->db->from('foto');
      $this->db->where('USERNAME_FOTO',$this->session->userdata('USERNAME_USER'));
      return $this->db->get('');
  }

  function cek_doc(){
      $this->db->select('*');
      $this->db->from('doc');
      $this->db->where('USERNAME_DOC',$this->session->userdata('USERNAME_USER'));
      return $this->db->get('');
  }

  function cek_doc_admin(){
      $this->db->select('*');
      $this->db->from('user');
      $this->db->join('tim','tim.USERNAME_TIM = user.USERNAME_USER');
      $this->db->join('doc','doc.USERNAME_DOC = user.USERNAME_USER');
      return $this->db->get('');
  }

  function edit_doc($where,$tabel){
    $this->db->join('tim','tim.USERNAME_TIM = doc.USERNAME_DOC');
    $this->db->join('user','user.USERNAME_USER = doc.USERNAME_DOC');
    //$this->db->join('foto','foto.USERNAME_FOTO = doc.USERNAME_DOC');
    return $this->db->get_where($tabel,$where);
  }

  function edit_foto($where,$tabel){
    return $this->db->get_where($tabel,$where);
  }


  function cek_youtube() {
    $this->db->select('*');
    $this->db->from('youtube');
    $this->db->where('USERNAME_YOUTUBE',$this->session->userdata('USERNAME_USER'));
    return $this->db->get('');
  }

  function cek_youtube_admin() {
    $this->db->select('*');
    $this->db->from('user');
    $this->db->join('tim','tim.USERNAME_TIM = user.USERNAME_USER');
    $this->db->join('youtube','youtube.USERNAME_YOUTUBE = user.USERNAME_USER');
    $this->db->join('doc','doc.USERNAME_DOC = user.USERNAME_USER');
    $this->db->where('doc.PENGUMUMAN_DOC','BAYAR');
    return $this->db->get('');
  }

  function edit_youtube($where,$tabel){
    $this->db->join('tim','tim.USERNAME_TIM = youtube.USERNAME_YOUTUBE');
    $this->db->join('user','user.USERNAME_USER = youtube.USERNAME_YOUTUBE');
    return $this->db->get_where($tabel,$where);
  }

  function update_doc($where,$data,$tabel){
    $this->db->where($where);
    $this->db->update($tabel,$data);
  }

  function delete($where,$tabel) {
    $this->db->where($where);
    $this->db->delete($tabel);
  }




}

?>
