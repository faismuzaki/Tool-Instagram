<?php
/*
    SMILEBOYS (c) 2019
    https://github.com/faismuzaki/Tool-Instagram
    Made by :3
*/
	echo "Username Instagram : ";
	$username = trim(fgets(STDIN));
    	$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL, 'https://www.instagram.com/'.$username.'/');
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
		$data = curl_exec($ch);
#Get Foto Profile
	$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL, 'https://www.instadp.com/profile/'.$username.'');
			curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
			curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
		$output = curl_exec($ch);
	preg_match('/<a class="download-btn" href="(.*?)" target="_blank"><i><\/i>Download<\/a>/', $output,$smile);
#Get follower
			$fix = str_replace(',', '', $asw[0]);
				$foll = str_replace(",",  " ", $asw[1]);
#Get Following
		$following = explode(" ", $asw[2]);
#Get Total Post
		$post = $asw[4].$asw[5];
#Get UserID
	preg_match('/"id":"(.*?)","/', $data, $userid);
		$jancok = $userid[1];
	$result = array('UserID' => $jancok,
					'Follower' => $fix.' '.$foll,
					'Following' => $following[0],
					'Jumlah Post' => $post,
					'Foto Profile' => $smile[1]);
	print_r($result);



