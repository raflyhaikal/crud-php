<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
        // $data = array(
        //     'nama' => 'Rafly Haikal',
        //     'status' => 'Mahasiswa'
        // );
        
        $data['nama'] = 'Rafly Haikal';
        $data['status'] = 'Mahasiswa';

        $this->header();
        $this->load->view('index', $data);
		$this->footer();
    }
    
    public function controllerprofil()
    {
        echo "Halaman Profile";
    }

    public function controllercontact($value='')
    {
        echo "Halaman Contact";
    }
    
    public function nama($value='', $value1='')
    {
        echo "Nama Saya ".$value." dan Nama keren Saya ".$value1;
    }


    //---- views -----
    public function header()
    {
        $this->load->view('header');
        
    }

    public function footer()
    {
        $this->load->view('footer');
        
    }
}
