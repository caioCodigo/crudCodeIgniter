<?php
class Logar_model extends CI_Model {
 
    public function __construct()
    {
        $this->load->database();
    }
    
    public function get_usu($username,$password)
    {
        print_r($username).die();
        print_r($password);
        if ($username === FALSE)
        {
            $query = $this->db->get('usuarios');
            echo "erro";
            return true;
        }
               
        
         $this->db->where('username',$username);
         $users = $this->db->get('usuarios')->result();

        return $users;
    }        
}