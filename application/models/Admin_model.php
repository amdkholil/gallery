<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * admin model class
 */
class Admin_model extends CI_Model
{
    public function get_datapaging_album($halaman,$batas)
    {
        return $this->db->get_where('album',['id_album >' => 0],$batas,$halaman);
    }

    public function get_album()
    {
        return $this->db->get_where('album', ['id_album >' => 0]);
    }

    public function add_album($data)
    {
        $this->db->insert('album',$data);
    }

    public function get_id_album($id)
    {
        return $this->db->get_where('album',['id_album' => $id]);
    }

    public function edit_album($data,$id)
    {
        $this->db->where('id_album', $id);
        $this->db->update('album', $data);
    }

    public function del_album($id)
    {
        $this->db->where('id_album', $id);
        $this->db->delete('album');
    }

    public function upload_foto($data)
    {
        $this->db->insert('foto',$data);
    }

    public function get_photo()
    {
        return $this->db->get('foto');
    }

    public function get_datapaging_photo($halaman,$batas)
    {
        return $this->db->get('foto',$batas,$halaman);
    }

    public function get_id_photo($id)
    {
        return $this->db->get_where('foto',['id_foto' => $id]);
    }

    public function edit_photo($data,$id)
    {
        $this->db->where('id_foto', $id);
        $this->db->update('foto', $data);
    }

    public function del_photo($id)
    {
        $this->db->where('id_foto', $id);
        $this->db->delete('foto');
    }


    public function login($username, $password)
    {
        $query=$this->db->get_where('user', array('username'=> $username, 'password' => $password));
        if($query->num_rows()>0){
            return 1;
        }
        else{
            return 0;
        }
    }
}
