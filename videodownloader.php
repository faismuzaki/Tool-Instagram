<?php

	echo "Url Video : ";
	$urlna = trim(fgets(STDIN));
    	$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $urlna);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
	$data = curl_exec($ch);
	preg_match('/<meta property="og:video" content="(.*?)" \/>/', $data, $matches);
	$smile = $matches[1];
echo "Copy url dibawah ini ke browser kalian ! \n\n";
print_r($smile);
echo "\n"



