<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: nur
 * Date: 7/18/17
 * Time: 12:24 AM
 */
class insert extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
    }

    function index()
    {
        $data['headline'] = $data['title'] = 'Add Hearing machine';
        $this->layout('add',$data);
    }

}