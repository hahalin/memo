<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class UploadTestController extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->helper('form');
		$this -> output -> enable_profiler(TRUE);
	}
	
	function index()
	{
		$this->load->view('upload');
	}
	
	function getUploadConfig()
	{
		$config['upload_path'] = './assets/img/';
    	$config['allowed_types'] = 'jpg|jpeg|gif|png';
    	$config['max_size'] = '6048';
		return $config;
	}
	
	function getResizeConfig($sourceimage)
	{
	 				
		$rconfig['image_library'] = 'gd2';
		$rconfig['source_image']	= $sourceimage; //'/path/to/image/mypic.jpg';
		$rconfig['create_thumb'] = TRUE;
		$rconfig['maintain_ratio'] = TRUE;
		$rconfig['width']	 = 600;
		$rconfig['height']	= 400;
		return $rconfig;
	}
	
	function doupload()
	{
			
		//echo $file;
		
		$config=$this->getUploadConfig();
        $this->load->library('upload', $config);
		$this->upload->do_upload('userfile');
		
		$data = array('upload_data' => $this->upload->data());
		$filename=$data['upload_data']['full_path'];
		
		echo '<pre>';
		print_r($_FILES);
		print_r ($data);
		echo '</pre>';
		echo $data['upload_data']['file_name'];
		$sourceimage='./assets/img/'.$data['upload_data']['file_name'];
		$rconfig['overwrite'] = TRUE;
		$rconfig=$this->getResizeConfig($sourceimage);
		$rconfig['new_image'] = './assets/img/thumbs/'.$data['upload_data']['file_name'];
		$rconfig['overwrite'] = TRUE;
		
		$rwconfig['image_library'] = 'gd2';
		//$rconfig['source_image']	= './assets/img/thumbs/Water_lilies60_thumb.jpg';
		//$rconfig['new_image']	= './assets/img/thumbs/Water_lilies60_thumbn.jpg';
		$rconfig['wm_text'] = 'Copyright 2013 - CodeSamplez.com';
        $rconfig['wm_type'] = 'text';

		$this->load->library('image_lib', $rconfig); 
		
		
		//$rconfig['source_image']=$rconfig['new_image'];
		$this->image_lib->initialize($rconfig);
    	if ( ! $this->image_lib->resize())
		{
    		echo $this->image_lib->display_errors();
		}
		
		//$this->image_lib->clear();
		$wconfig['image_library'] = 'gd2';
		$wconfig['source_image']	= './assets/img/thumbs/'.$data['upload_data']['raw_name'].'_thumb.jpg';
		//$wconfig['new_image']	= './assets/img/thumbs/'.$data['upload_data']['raw_name'].'-n.jpg';
		$wconfig['wm_text'] = 'Copyright 2013 - CodeSamplez.com';
        $wconfig['wm_type'] = 'text';
		$wconfig['overwrite'] = TRUE;
        $this->image_lib->initialize($wconfig);
    	if ( ! $this->image_lib->watermark())
		{
    		echo $this->image_lib->display_errors();
		}
		
		 
		return;
			
		if ( ! $this->image_lib->resize())
		{
    		echo $this->image_lib->display_errors();
		}


		$wconfig['image_library'] = 'gd2';
		$wconfig['source_image']	= $rconfig['new_image'];
		$wconfig['new_image']='./assets/img/thumbs/w/'.$data['upload_data']['file_name'];
		$wconfig['wm_text'] = 'Copyright 2006 - John Doe';
		$wconfig['wm_type'] = 'text';
		$wconfig['wm_font_path'] = './system/fonts/texb.ttf';
		$wconfig['wm_font_size']	= '16';
		$wconfig['wm_font_color'] = 'ffffff';
		$wconfig['wm_vrt_alignment'] = 'bottom';
		$wconfig['wm_hor_alignment'] = 'center';
		$wconfig['wm_padding'] = '20';
		$this->load->library('image_lib', $wconfig);
		
		if ( ! $this->image_lib->watermark())
		{
    		echo $this->image_lib->display_errors();
		}
		
		
		
	}
	


}

?>