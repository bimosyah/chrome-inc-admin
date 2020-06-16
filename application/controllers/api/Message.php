<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Message extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_chat','chat');
	}

	public function sentMessage()
	{
		$sender = 1;
		$message = $this->input->post('message');
		$result = array();

		$object = array(
			'sender' => $sender,
			'message' => $message
		);

		$query = $this->chat->insert($object);
		if ($query) {
			$result = array(
				'status' => 1,
				'message' => "sukses",
			);

			require_once(APPPATH.'views/vendor/autoload.php');
			$options = array(
				'cluster' => 'ap1',
				'useTLS' => true
			);
			$pusher = new Pusher\Pusher(
				'fbe5e22f9f78edda72c3',
				'f8cc57c1d3dbcfc9525f',
				'1014149',
				$options
			);

			$data['message'] = 'sukses';
			$data['from'] = 'chat';
			$pusher->trigger('my-channel', 'my-event', $data);
			
			$result = array(
				'status' => 1,
				'message' => "sukses"
			);
		}else {
			$result = array(
				'status' => 0,
				'message' => "gagal",
			);
		}

		echo json_encode($result);

	}

	public function loadMessage()
	{
		$query = $this->chat->get();
		if ($query) {
			$result = array(
				'status' => 1,
				'message' => "sukses",
				'chat' => $query
			);
		}else {
			$result = array(
				'status' => 1,
				'message' => "sukses",
				'chat' => array()
			);
		}

		echo json_encode($result);
	}

}

/* End of file Chat.php */
/* Location: ./application/controllers/api/Chat.php */