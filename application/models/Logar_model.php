<?php
class Logar_model extends CI_Model {
 
 public function __construct()
 {
     $this->load->database();
 }
 
 public function get_news($slug = FALSE)
 {
     if ($slug === FALSE)
     {
         $query = $this->db->get('usuarios');
         return $query->result_array();
     }

     $query = $this->db->get_where('usuarios', array('username' => $username));
     return $query->row_array();
 }
 
 