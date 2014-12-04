<?php  
class Notes extends CI_Controller 
{

	public function index()
	{
		$send['notes'] = $this->getnotes();
		$this->load->view('note_view', $send);
	}
	function getnotes()
	{
	    $this->load->model('note');
	    $result = $this->note->getnotesdb();
	    return $result;
	}
	function createnote()
	{
		$newnote=array($this->input->post('title'));
        $this->load->model('note');
        $result = $this->note->createnotedb($newnote);
	    echo json_encode($result);
	} 
	function updatenote()
	{
		$oldnote=array($this->input->post('notecontent'), $this->input->post('id'));
        $this->load->model('note');
        $this->note->updatenotedb($oldnote);
	} 
	function deletenote()
	{
		$oldnote=array($this->input->post('id'));
        $this->load->model('note');
        $result = $this->note->deletenotedb($oldnote);
	    echo json_encode($result);
	} 
}
?>