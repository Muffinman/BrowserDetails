<?php

class DeployController extends BaseController {

	public function gitHook() {

		// Limit to Orphans GitLab server
		if (!in_array($_SERVER['REMOTE_ADDR'], [ '5.9.195.233', '::1' ])) {
			return Response::json([
				'success' => FALSE,
				'message' => 'Illegal Git web hook request'
			]);
		}

		// Collect the posted data
		$request = Request::instance();
		$postdata = json_decode($request->getContent(), TRUE);
		if (empty($postdata)) {
			return Response::json([
				'success' => FALSE,
				'message' => 'Invalid Git web hook request'
			]);
		}

		// Git pull
		$response = json_encode(shell_exec('git pull origin master 2>&1'));


		// Humanise the commit log
		foreach ($postdata['commits'] as $commit_key => $commit) {

			// Split message into subject + description (Assumes Git's recommended standard where first line is the main summary)
			$subject = strtok($commit['message'], "\n");
			$description = '';

			// Beautify date
			$date = new DateTime($commit['timestamp']);
			$date_str = $date->format('d/m/Y, g:ia');

			$postdata['commits'][$commit_key]['human_id'] = substr($commit['id'], 0, 9);
			$postdata['commits'][$commit_key]['human_subject'] = $subject;
			$postdata['commits'][$commit_key]['human_description'] = $description;
			$postdata['commits'][$commit_key]['human_date'] = $date_str;
		}

		Mail::send('emails.deploy', [ 'git' => $postdata ], function($message) use ($postdata) {
			$message->to('matt@orphans.co.uk', 'Matt Jones')->subject('GitLab: ' . $postdata['repository']['name'] . ' updated');
		});
		
		return Response::json(TRUE);

	}

}
