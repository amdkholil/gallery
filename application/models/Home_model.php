<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * admin model class
 */
class Home_model extends CI_Model
{
		public function get_randphoto($idalbum)
		{
			$this->db->where("id_album", $idalbum);
			$this->db->order_by('rand()');
			return $this->db->get("foto",1);
		}

		public function get_album()
	    {
	        return $this->db->get('album');
	    }

	    public function get_datapaging_album($halaman,$batas)
	    {
	    	$this->db->order_by("id_album desc");
	        return $this->db->get('album',$batas,$halaman);
	    }

	    public function get_photo()
	    {
	    	$this->db->order_by('id_foto desc');
	    	return $this->db->get("foto");
	    }

	    public function get_datapaging_photo($halaman,$batas)
	    {
	    	$this->db->order_by("id_foto desc");
	        return $this->db->get('foto',$batas,$halaman);
	    }

		public function get_photobyalbum($id)
		{
			$this->db->where('id_album',$id);
			$this->db->order_by('id_foto desc');
			return $this->db->get('foto');
		}

		public function get_dp_photobyalbum($id,$halaman,$batas)
		{
			$this->db->where('id_album',$id);
			$this->db->order_by('id_foto desc');
			return $this->db->get('foto',$batas,$halaman);
		}

		public function get_photoslider($jmlhslide)
		{
			$this->db->order_by('rand()');
			return $this->db->get("foto",$jmlhslide);
		}

}
