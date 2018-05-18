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
		$jmlhslide			  = 5;
		$data['slider']		  = $this->home_model->get_photoslider($jmlhslide);
		$batas                = 8;
        $config['base_url']   = base_url().'home/index';
        $config['total_rows'] = $this->home_model->get_album()->num_rows();
        $config['per_page']   = $batas;

        $this->pagination->initialize($config);

        $data['paging']     = $this->pagination->create_links();
        $halaman            = $this->uri->segment(3);
        $halaman            = $halaman==''?0:$halaman;
        $data['album']      = $this->home_model->get_datapaging_album($halaman,$batas);

		$this->template->load('template/half-slider','home',$data);

	}

	public function photo()
	{
		$uri = $this->uri->uri_to_assoc(3);

		if (!isset($uri['album']))
		{
			$batas                = 14;
	        $config['base_url']   = base_url().'home/photo';
	        $config['total_rows'] = $this->home_model->get_photo()->num_rows();
	        $config['per_page']   = $batas;

	        $this->pagination->initialize($config);

	        $data['paging']     = $this->pagination->create_links();
	        $halaman            = $this->uri->segment(3);
	        $halaman            = $halaman==''?0:$halaman;
	        $data['photo']      = $this->home_model->get_datapaging_photo($halaman,$batas);

	        $this->template->load('template/half-slider','album',$data);
		}
		else {
			$id_album			  = $uri['album'];
			$batas                = 14;
			$config['base_url']   = base_url().'home/photo/album/'.$uri['album'].'/p';
			$config['total_rows'] = $this->home_model->get_photobyalbum($id_album)->num_rows();
			$config['per_page']   = $batas;

			$this->pagination->initialize($config);
			if(isset($uri['p']))
			{
				$p=$uri['p'];
			}
			else {
				$p=0;
			}
			$data['paging']     = $this->pagination->create_links();
			$halaman            = $p;
			$halaman            = $halaman==''?0:$halaman;
			$data['photo']      = $this->home_model->get_dp_photobyalbum($id_album,$halaman,$batas);

			$this->template->load('template/half-slider','album',$data);
		}
	}
}
