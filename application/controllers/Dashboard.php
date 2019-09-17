<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

  class Dashboard extends CI_Controller
  {
    public function __construct()
    {
      parent::__construct();

      if($this->session->userdata('status') != "online")
      {
        redirect('login');
      }
    }

    public function index()
    {

      $data['user']	= $this->model_user->getAll(array("id_user !=" => $this->session->userdata('id')));

      $this->load->view('layout/header');
      $this->load->view('layout/navbar');
      $this->load->view('layout/sidebar', $data);
      $this->load->view('layout/content', $data);
      $this->load->view('layout/footer');
      $this->load->view('layout/script', $data);
    }
    function getChat(){

  		$id_user	= $this->input->post("id_user",true); //tujuan
  		$id			= $this->session->userdata('id'); //dari
  		$id_max		= $this->input->post('id_max'); //dari

  		$where	= "(((user_1 = '$id_user' AND user_2 = '$id') OR (user_2 = '$id_user' AND user_1 = '$id')) AND id_chat > '$id_max')";
  		$chat	= $this->model_chat->getAll($where);
  		$data['id_max']		= $id_max;
  		$data['id_user']	= $id_user;
  		$data['chat'] 		= $chat;
  		$this->load->view("vwChatBox",$data);
  	}

  	function getChatAll(){

  		$id_user	= $this->input->post("id_user",true); //tujuan
  		$id			= $this->session->userdata('id'); //dari
  		$id_max		= $this->input->post('id_max'); //dari

  		$where	= "(((user_1 = '$id_user' AND user_2 = '$id') OR (user_2 = '$id_user' AND user_1 = '$id')))";
  		$chat	= $this->model_chat->getAll($where);

  		$where2	= "(((user_1 = '$id_user' AND user_2 = '$id') OR (user_2 = '$id_user' AND user_1 = '$id')) AND id_chat > '$id_max')";
  		$get_id = $this->model_chat->getLastId($where2);

  		$data['id_max']		= $get_id['id_chat'];
  		$data['id_user']	= $id_user;
  		$data['chat'] 		= $chat;
  		$this->load->view("vwChatBox",$data);
  	}

  	function getLastId(){

  		$id_user	= $this->input->post("id_user",true); //tujuan
  		$id			= $this->session->userdata('id'); //dari
  		$id_max		= $this->input->post('id_max'); //dari

  		$where	= "(((user_1 = '$id_user' AND user_2 = '$id') OR (user_2 = '$id_user' AND user_1 = '$id')) AND id_chat > '$id_max')";
  		$get_id = $this->model_chat->getLastId($where);

  		echo json_encode(array("id" => $get_id['id_chat'] != '' ?  $get_id['id_chat'] : $id_max ));
  	}

  	function sendMessage(){
  		$id_user	= $this->input->post("id_user",true); //tujuan/user_2
  		$id			= $this->session->userdata('id'); //dari/user_1
  		$pesan		= addslashes($this->input->post("pesan",true));

  		$data	= array(
  			'user_1' => $id,
  			'user_2' => $id_user,
  			'pesan' => $pesan,
  		);

  		$query	=	$this->model_chat->getInsert($data);

  		if($query){
  			$rs = 1;
  		}else{
  			$rs	= 2;
  		}

  		echo json_encode(array("result"=>$rs));

  	}

  	function masuk(){

  		$id		= $this->input->post("id_user",true);
  		$data	= $this->model_user->getAll(array("id_user" => $id))->row_array();

  		$session = array("id" => $id, "nama" => $data['nama'], "loggin" => true);
  		$this->session->set_userdata($session);
  		redirect("index.php/welcome","refresh");
  	}

  	function keluar(){
  		session_destroy();
  		redirect("index.php/welcome/login");
  	}
  }
