<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* index homepage of gallery
* by Kholil
*/
class Home extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model("home_model");
	}

	public function index()
	{

		$batas                = 9;
        $config['base_url']   = base_url().'admin/view_album';
        $config['total_rows'] = $this->home_model->get_album()->num_rows();
        $config['per_page']   = $batas;

        $this->pagination->initialize($config);

        $data['paging']     = $this->pagination->create_links();
        $halaman            = $this->uri->segment(3);
        $halaman            = $halaman==''?0:$halaman;
        $data['album']      = $this->home_model->get_datapaging_album($halaman,$batas);

		$this->template->load('template/gallery','home',$data);

	}

	public function album()
	{
		if (!$this->uri->segment(3)) 
		{
			$batas                = 14;
	        $config['base_url']   = base_url().'home/album';
	        $config['total_rows'] = $this->home_model->get_photo()->num_rows();
	        $config['per_page']   = $batas;

	        $this->pagination->initialize($config);

	        $data['paging']     = $this->pagination->create_links();
	        $halaman            = $this->uri->segment(3);
	        $halaman            = $halaman==''?0:$halaman;
	        $data['photo']      = $this->home_model->get_datapaging_photo($halaman,$batas);

	        $this->template->load('template/gallery','album',$data);
		}
	}
}