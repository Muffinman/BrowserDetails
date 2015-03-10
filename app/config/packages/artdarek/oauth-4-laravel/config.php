<?php 

return array( 
	
	/*
	|--------------------------------------------------------------------------
	| oAuth Config
	|--------------------------------------------------------------------------
	*/

	/**
	 * Storage
	 */
	'storage' => 'Session', 

	/**
	 * Consumers
	 */
	'consumers' => array(

		/**
		 * Facebook
		 */
        'Google' => array(
            'client_id'     => '310842036894-ugrs6hklb5dkg9429srr472fcpulp7tl.apps.googleusercontent.com',
            'client_secret' => 'thB3vh846FMtHE5YEXk-32PL',
            'scope'         => array('userinfo_email', 'userinfo_profile'),
        ),		

	)

);