<?php
class Blog extends CI_Controller{
	function __construct(){
		parent::__construct();
	}

	public function index($to="world"){

		$data['title']    = "My Real Title";
		$data['heading']  = 'Heading';
		$data['list']     = array( 'clean house' , 'call mom' );
		$buffer = $this->load->view('Blog/index.html',$data , true);
		//var_dump( $buffer );
		//var_dump( $this->input->is_cli_request() );
		//echo "hello {$to} ";
		//show_404();
		log_message('error', 'Some variable did not contain a value.');

	}

	public function test(){
		$this->load->library('calendar');
		$data = array( 
               3  => 'http://example.com/news/article/2006/03/',
               7  => 'http://example.com/news/article/2006/07/',
               13 => 'http://example.com/news/article/2006/13/',
               26 => 'http://example.com/news/article/2006/26/'
		 );
		echo $this->calendar->generate(2006,6,$data);
	}

	public function ip(){
		echo $this->input->ip_address();
	}

	public function agent(){

		$agent = $this->load->library( 'user_agent' );
		var_dump( $agent );
	}

}

?>