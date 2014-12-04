<?php 	     
class Note extends CI_Model 
{
	function getnotesdb(){
    	return $this->db->query("SELECT * FROM notes")->result_array();
 	}
 	function createnotedb($newnote){
 		$query = "INSERT INTO notes(title, created_at, updated_at) VALUES (?,NOW(),NOW())";
    	$result = $this->db->query($query, $newnote);
    	return $this->db->query("SELECT * FROM notes ORDER BY id DESC LIMIT 1")->row_array();
 	}
  	function updatenotedb($oldnote){
 		$query = "UPDATE notes SET content = ?, updated_at = NOW() WHERE id = ?";
    	return $this->db->query($query, $oldnote);
 	}
   	function deletenotedb($oldnote){
 		$query = "DELETE FROM notes WHERE id = ?";
    	return $this->db->query($query, $oldnote);
 	}
}
?>