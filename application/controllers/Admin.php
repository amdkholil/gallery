<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * class admin
 */
class Admin extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        check_session();
        $this->load->model('admin_model');
    }

    public function index()
    {
        $this->template->load('template/index','admin/home');
    }

    public function add_album()
    {
        if(isset($_POST['submit']))
        {
            $album  = $this->input->post('album');
            $desk   = $this->input->post('deskripsi');
            $data   = array('nama_album' => $album, 'deskripsi' => $desk);
            $this->admin_model->add_album($data);

            $this->session->set_flashdata('pesan',
                    '<div class="alert alert-success"><i class="fa fa-check-square"> </i> Berhasil menambahkan album!</div>'
                );
            redirect('admin/view_album');
        }
        else {
            $this->template->load('template/index','admin/add_album_view');
        }
    }

    public function view_album()
    {
          $batas                = 3;
          $config['base_url']   = base_url().'admin/view_album';
          $config['total_rows'] = $this->admin_model->get_album()->num_rows();
          $config['per_page']   = $batas;

          $this->pagination->initialize($config);

          $data['paging']     = $this->pagination->create_links();
          $halaman            = $this->uri->segment(3);
          $halaman            = $halaman==''?0:$halaman;
          $data['album']      = $this->admin_model->get_datapaging_album($halaman,$batas);

          $this->template->load('template/index','admin/album_view',$data);
    }

    public function edit_album()
    {
        if(isset($_POST['submit']))
        {
            $album  = $this->input->post('album');
            $desk   = $this->input->post('deskripsi');
            $id     = $this->input->post('id');
            $data   = array('nama_album' => $album, 'deskripsi' => $desk);

            $this->admin_model->edit_album($data,$id);
            $this->session->set_flashdata('pesan',
                    '<div class="alert alert-success"><i class="fa fa-check-square"> </i> Berhasil Mengubah album!</div>'
                );
            redirect('admin/view_album');
        }
        else {
            $id = $this->uri->segment(3);
            $data['album']  = $this->admin_model->get_id_album($id);
            $this->template->load('template/index','admin/edit_album_view',$data);
        }
    }

    public function del_album()
    {
        $id = $this->uri->segment(3);

        $this->admin_model->del_album($id);
        $this->session->set_flashdata('pesan','<div class="alert alert-success"><i class="fa fa-check-square"> </i>Album berhasil dihapus!!</div>');
        redirect(base_url().'admin/view_album/');
    }

    public function upload_photo($value='')
    {
        if(isset($_POST['submit']))
        {
            
            $file           = $this->input->post('filefoto',true);
            $id_album       = $this->input->post('id_album',true);
            $nama_file      = $this->input->post('nama_foto',true);
            $deskripsi      = $this->input->post('deskripsi',true);
            $tanggal        = date('d-m-Y');

            $config['upload_path']   =  'assets/gallery';
            $config['allowed_types'] =  'gif|jpg|jpeg|png|bmp';
            // $config['max_size']      =  '2048';
            // $config['max_width']     =  '1288';
            // $config['max_height']    =  '1288';
            $config['file_name']     =  $id_album.'_'.time();

            $this->upload->initialize($config);
            if(!$this->upload->do_upload('filefoto'))
            {
                $error =  $this->upload->display_errors();
                $this->session->set_flashdata('pesan','<div class="alert alert-danger">'.$error.'</div>');
                redirect('admin/upload_photo');
            }
            else
            {
                $foto   = $this->upload->data();

                $data   = array('id_album' => $id_album, 'nama_foto' => $nama_file, 'tgl' => $tanggal, 'deskripsi' => $deskripsi, 'link' => $foto['file_name']);
                $this->admin_model->upload_foto($data);
                $this->session->set_flashdata('pesan','<div class="alert alert-success"><i class="fa fa-check-square"> </i>Upload foto berhasil!!</div>');
                redirect('admin/upload_photo');
            }
        }
        else {
            $data['album']  = $this->admin_model->get_album();
            $this->template->load('template/index','admin/upload_photo.php',$data);
        }
    }

    public function photos()
    {
        $batas                = 14;
          $config['base_url']   = base_url().'admin/photos';
          $config['total_rows'] = $this->admin_model->get_photo()->num_rows();
          $config['per_page']   = $batas;

          $this->pagination->initialize($config);

          $data['paging']     = $this->pagination->create_links();
          $halaman            = $this->uri->segment(3);
          $halaman            = $halaman==''?0:$halaman;
          $data['foto']      = $this->admin_model->get_datapaging_photo($halaman,$batas);

        // $data['foto']   = $this->admin_model->get_photo();
        $this->template->load('template/index','admin/photos',$data);
    }

    public function edit_photo()
    {
        if(isset($_POST['submit']))
        {
            $id_foto        = $this->input->post('id_foto', true);
            $id_album       = $this->input->post('id_album',true);
            $nama_foto      = $this->input->post('nama_foto',true);
            $deskripsi      = $this->input->post('deskripsi',true);

            $data       = array('id_album' => $id_album, 'nama_foto' => $nama_foto, 'deskripsi' =>$deskripsi);

            $this->admin_model->edit_photo($data,$id_foto);
            $this->session->set_flashdata('pesan','<div class="alert alert-success"><i class="fa fa-check-square"> </i>Ubah foto berhasil!!</div>');
            redirect('admin/photos/');
        }
        else
        {
            $id = $this->uri->segment(3);
            $data['album']  = $this->admin_model->get_album();
            $data['foto']   = $this->admin_model->get_id_photo($id);
            $this->template->load('template/index','admin/edit_photo_view.php',$data);
        }
    }

    public function del_photo()
    {
        $id = $this->uri->segment(3);

        

        $data   = $this->admin_model->get_id_photo($id);
        $foto   = $data->row();
        $foto   = $_SERVER['DOCUMENT_ROOT'].'/gallery/assets/gallery/'.$foto->link;

        if(!unlink($foto))
        {
            $this->session->set_flashdata('pesan','<div class="alert alert-danger"><i class="fa fa-cross-square"> </i>foto gagal dihapus!!</div>');
        }
        else
        {
            $this->admin_model->del_photo($id);
            $this->session->set_flashdata('pesan','<div class="alert alert-success"><i class="fa fa-check-square"> </i>foto berhasil dihapus!!</div>');
            redirect(base_url().'admin/photos/');
        }

    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url().'login');
    }

}
