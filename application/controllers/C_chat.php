<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_chat extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_chat','chat');
	}

	public function index()
	{
		$data['chat'] = $this->chat->get();
		$this->load->view('chat/index',$data);		
	}

	public function insert()
	{
		$sender = 0;
		$message = $this->input->post('message');
		$result = array();

		$object = array(
			'sender' => $sender,
			'message' => $message
		);

		$query = $this->chat->insert($object);
		if ($query) {

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
			$pusher->trigger('my-channel', 'my-event2', $data);
			
			redirect('pesan','refresh');	
		}
	}

}

/* End of file C_pesan.php */
/* Location: ./application/controllers/C_pesan.php */