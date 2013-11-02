<?php

class testmodel extends CI_Model {
	
	public function getEverything() {

		$tables = $this->db->list_tables();

			foreach ($tables as $table)
			{
			   echo "asdfsdf";
			}


		return $tables->result();
	}


?>