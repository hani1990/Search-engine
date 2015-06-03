<?php

require(APPPATH.'/libraries/API_Controller.php');

class User extends API_Controller {

/**
 * 用户注册
 * @post tel 
 * @post pwd
 * post 传入 电话号码 和 密码 ，对比数据库 是否有相同的电话号码，否则返回错误
 * 保存数据 
*/

	public function reg(){
		
		$this->load->library('session');
		$tel = $this->input->get('tel');
		$pwd = $this->input->get('pwd');

		$data['tel']  =  (string)$tel;
		$data['pwd']  =  (string)$pwd;
		$this->session->set_userdata( $data );
	
		$data_session = $this->session->all_userdata();
	
		$this->responce($data, 200 ) ; // 200 being the HTTP responce code
	}

/**
 * 用户登录
 * post 传入 电话和密码 存入session
 *
*/

	 function login(){

	 	// $data_member = $this->db->count_all('member');
	 	// var_dump( $data_member );
	 	// $res = $this->db->query( "select * from opensns_member" );
	 	// //var_dump( $res );
	 	// foreach ($res->result_array() as $row) {
	 	// 	//var_dump( $row);
	 	// 	echo $row['uid'];
	 	// 	echo "\r\n";
	 	// }
	 	$res = $this->db->get_where( 'member' , array( 'uid'=>1 ) );
	 	//var_dump( $res );
	 	foreach ($res->result_array() as $row) {
	 		//echo $row;
	 		var_dump( $row );
	 	}

	}

/**
 * 用户登出
*/

	 function logout(){

	}

	function test(){
		$this->load->library('session');
		$data = $this->session->all_userdata();
		var_dump( $data );
	}

}