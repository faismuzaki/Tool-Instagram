<?php
	
	echo "Username Instagram : ";
	$username = trim(fgets(STDIN));
    	$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL, 'https://www.instagram.com/'.$username.'/');
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
		$data = curl_exec($ch);
#Get Foto Profile
	preg_match('/profile_pic_url_hd":"(.*?)",/', $data,$w8);
	$coba = explode("\u", $w8[1]);
	preg_match('/<meta content="(.*?)" name="description" \/>/', $data, $follower);
	$asw = explode(" ", $follower[1]);
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
					'Foto Profile' => $coba[0]);
	print_r($result);
