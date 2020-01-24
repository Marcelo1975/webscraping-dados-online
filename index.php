<?php

$curl = curl_init();
curl_setopt_array($curl, array(
	CURLOPT_URL => "https://www.zapimoveis.com.br/venda/imoveis/rj+rio-de-janeiro/?__zt=rnk_gz%3Arescore_default",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "GET",
	CURLOPT_POSTFIELDS => "<?xml version='1.0' encoding='UTF-8'?>",
));

$res = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if($err) {
	echo "curl error: ".$err;
} else {
	file_put_contents("zapimoveis.php", $res);
	echo $res;
}












