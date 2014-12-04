<?php  
class Posts extends CI_Controller 
{

	public function index()
	{
		$send['posts'] = $this->getposts();
		$this->load->view('post_view', $send);
	}
	function getposts()
	{
	    $this->load->model('post');
	    $result = $this->post->getpostdb();
	    return $result;
	}
	function addpost()
	{
		$newpost=array($this->input->post('content'));
        $this->load->model('post');
        $result = $this->post->addpostdb($newpost);
	    echo json_encode($result);
	} 
}
?>