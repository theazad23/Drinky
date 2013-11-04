<?php

Class tags extends CI_Model {
   

   public function getAllTags() {
      
      $query = this->db->get('drinky.tags');
      return $query->result();


   }
   
   public function getTags($drink_name) {



   }

   public function addTag($username, $drink_name, $tag) {

      $this->db->insert('drinky.tags', array(
         'username' => $username,
         'drink_name' => $drink_name,
         'tag' => $tag,
      ));

   }


}
?>

