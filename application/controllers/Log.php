<?php
class Log extends CI_Controller {
 
    public function __construct()
    {
        parent::__construct();
        $this->load->model('news_model');
        $this->load->helper('url_helper');
        $this->load->helper('form');
        $this->load->library('javascript');
    }

    public function index(){
        $this->load->view('templates/login');

      }
    }


 