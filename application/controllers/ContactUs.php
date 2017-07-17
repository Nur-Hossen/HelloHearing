<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: nur
 * Date: 7/14/17
 * Time: 3:19 PM
 */
class ContactUs extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('', '', TRUE);
    }

    public function index()
    {
        $data['headline'] = $data['title'] = 'Hello Hearing';
        //$this->printR($data);
        $this->Layout('ContactUs', $data);
    }

    public function send_mail()
    {
        $data = $this->input->post();
        $this->load->library('email');
        $email_config = $this->config->item('email_config');
        //$this->printR($email_config);
        $this->email->initialize($email_config);
        $this->email->from($data['from_email'],$data['name']);
        $this->email->to('info@hellohearingbd.com');
        $this->email->subject($data['subject']);
        $this->email->message($data['message']);
        if ($this->email->send()) {
            $this->session->set_flashdata('success', 'Message Send successful.');
        } else {
            $this->session->set_flashdata('error', 'Message Sending Failed');
        }
        redirect('/ContactUs/index/');
    }
}