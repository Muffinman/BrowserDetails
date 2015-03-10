<?php

class BrowserController extends BaseController {

	public function welcomePage() {

		$ip = $_SERVER['REMOTE_ADDR'];
		$proxy = 'None detected';

		if (isset($_SERVER['HTTP_X_FORWARDED_FOR'])){
			$proxy = $ip;
			$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
		}

		$isp = 'Unknown';
	
		$info = json_decode(file_get_contents('http://ipinfo.io/' . $ip));
		if (is_object($info) && isset($info->org)){
			$isp = $info->org;
		}

		if (Input::has('browser-data')) {

			$validator = Validator::make(
				[
					'name' => Input::get('name'),
					'email' =>Input::get('email'),
				],
				[
					'name' => 'required|min:3',
					'email' => 'required|email',
				]
			);

			if ($validator->fails()) {
				$messages = $validator->messages();
				return Redirect::to('')->with([
					'message' => $messages->first(),
					'name' => Input::get('name'),
					'email' => Input::get('email'),
				]);
			}

			$data = Input::get('browser-data');
			$parsed_data = false;
			parse_str($data, $parsed_data);

			if (sizeof($parsed_data) > 0) {
				Mail::send('emails.browserdetails', [ 'data' => $parsed_data, 'ipaddress' => $ip, 'proxy' => $proxy, 'isp' => $isp ], function($message) use ($parsed_data) {
					
					$to = Config::get('app.emails_to');
					foreach ($to as $email){
						$message->to($email['email'], $email['name']);
					}

					$message->subject('Browser Details from ' . Input::get('name'));
					$message->replyTo(Input::get('email'), Input::get('name'));
				});
				return Redirect::to('')->with([
					'message' => 'Thank you, your data has been emailed to the Orphans web team.',
				]);
			}
		}

		return View::make('welcome', [
			'ipaddress' => $ip,
			'proxy' => $proxy,
			'isp' => $isp,
			'name' => Session::get('name'),
			'email' => Session::get('email'),
		]);
	}
}