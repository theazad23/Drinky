<?php

Class user extends CI_Model {
   
   function login($username, $password) {
      
      $salt          = crypt($username, $password);
      $password_hash = crypt($password, $salt);
      
      $this->db->select('username');
      $this->db->from('drinky.admin_info');
      $this->db->where('username', $username);
      $this->db->where('password_hash', $password_hash);
      $this->db->limit(1);
      
      $query = $this->db->get();
      
      if ($query->num_rows() == 1) {
         return $query->result();
      } else {
         return false;
      }
   }
   
   public function create_account($username, $password) {
      $salt          = crypt($username, $password);
      $password_hash = crypt($password, $salt);
      $this->db->insert('drinky.user_info', array(
         'username' => $username
      ));

      $this->db->insert('drinky.admin_info', array(
         'username' => $username,
         'password_hash' => $password_hash,
         'salt' => $salt
      ));
      return true;
   }
}



?>

