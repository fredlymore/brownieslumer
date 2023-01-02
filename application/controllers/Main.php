<?php
defined('BASEPATH') or exit('no direct script access allowed');

class Main extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

    }

    public function index()
    {
        $data['judul_menu'] = 'Halaman';
        $this->template->load('home_template', 'main/home', $data);
    }

}
