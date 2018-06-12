<?php
class Log extends CI_Controller {
 
    public function __construct()
    {
        parent::__construct();
        $this->load->model('logar_model');
        $this->load->helper('url_helper');
        $this->load->helper('form');
        $this->load->library('javascript');
    }

    public function index(){
        $this->load->view('templates/login');
    }

    public function logar(){

        $username = $this->input->post('user');
        $password = $this->input->post('pass');

        $data['success'] = $this->logar_model->get_usu($username, $password);

        $this->output->set_content_type('aplication/json');
        $this->output->set_output(json_encode($data));
 
    }
}