<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends MY_Controller {


	public function index()
	{
        $data['headline'] = $data['title'] = 'Hello Hearing';
        $data['banner'] = $this->load->view('Layout/banner','',true);
        //$this->printR($data);
        $this->Layout('Home/index', $data);
	}

}
