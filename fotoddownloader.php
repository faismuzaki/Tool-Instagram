<?php
    
    echo "Url Foto Instagram yang ingin di download : ";
    $urlna = trim(fgets(STDIN));
    	$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL, $urlna);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
		$data = curl_exec($ch);

		preg_match('/<meta property="og:image" content="(.*?)" \/>/', $data, $matches);
	$smileboys = $matches[1];
echo "Copy url dibawah ini ke browser kalian ! \n\n";
echo $smileboys."\n";


