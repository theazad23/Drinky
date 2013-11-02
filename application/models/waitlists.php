<?php
// depricated
class waitlist_model extends CI_Model {
	public function getWaitlists($school_id) {

		$this->db->select('*');
		$this->db->from('lottery.waitlist');
		$this->db->where('school_id', $school_id);
		$query = $this->db->get();
		return $query->result();
	}
}

?>