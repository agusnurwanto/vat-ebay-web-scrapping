<?php
require __DIR__ . '/vendor/autoload.php';

// https://github.com/dompdf/dompdf
define('DOMPDF_ENABLE_AUTOLOAD', false);
require_once __DIR__ . '/vendor/dompdf/dompdf/dompdf_config.inc.php';

$url["detail"] = "http://www.ebay.co.uk/itm/";

if(empty($_POST['getDetail'])){
	die(json_encode(array( "error"=>1, "msg"=>"undefained param!")));
}else{
	$key = $_POST['key'];
	$res["error"] = 0;
	$res["msg"]["page"] = getDetail($key);
	echo json_encode($res);
}

function getDetail($id){
	global $url;
	$body = request(array('url'=>$url["detail"].rawurlencode($id)));
	return $body;
}

// http://www.jacobward.co.uk/using-proxies-for-scraping-with-php-curl/
function getProxy(){
	if(!empty($_GET['radomProxy'])){
		require __DIR__ . '/library/getProxy.php';
		$hoge = new Proxy();
		$hoge->setRandomProxyAndPort();
		$proxy = $hoge->getProxy().":".$hoge->getPort();
		return $proxy;
	}else{
		return false;
	}
}

function request($option){
	$url = $option['url'];
	$ch = curl_init();
	$proxy = getProxy();

	if (isset($proxy)) {
	    curl_setopt($ch, CURLOPT_PROXY, $proxy);
	}

	curl_setopt($ch, CURLOPT_URL,$url);
	if(!empty($option['param'])){
		$param = http_build_query($option['param']);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $param);
	}
  	curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (X11; Linux i686) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/44.0.2403.89 Safari/537.36");
  	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 30);
  	curl_setopt($ch, CURLOPT_TIMEOUT, 60);
	$server_output = curl_exec ($ch);
	curl_close ($ch);
	return $server_output;
}