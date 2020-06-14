<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller {

	public function notif()
	{
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
		$data['from'] = 'transaksi';
		$pusher->trigger('my-channel', 'my-event2', $data);
	}

}

/* End of file Test.php */
/* Location: ./application/controllers/api/Test.php */