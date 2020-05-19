<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Temp_model', 'Temp');
    }

    public function index()
    {
        $this->Temp->view('home2');
    }

    public function listbisnis()
    {
        $this->Temp->view('list_bisnis');
    }
}
