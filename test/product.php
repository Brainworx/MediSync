<?php
$id = 123; // your api user id
$key = "IGuh829DevvUZYVwNnTDTvFPkLdm08EhGcUG72Y20peYhStZ2Ugj7AnsRTXZgf8g"; // your secret api key

//getproducts
echo "Getting product <br>";
$purl = "https://api.medipim.be/v2/rest/products";
$data=array("cnks"=>[1070515,1416452],"modified_since"=>"20000101000000");
$data_string = json_encode($data);//'{"cnks":[1070515,1416452],"modified_since":"20000101000000"}';
$response = file_get_contents($purl, false, stream_context_create(array(
		'http' => array(
				'method' => 'POST',
				'header' => array('Content-Type: application/json'."\r\n"
						. "Authorization: Basic " . base64_encode("$id:$key")."\r\n"
						. 'Content-Length: ' . strlen($data_string) . "\r\n"),
				'content' => $data_string)
)
));
$file = fopen("test.txt","w");
echo fwrite($file,$response);
fclose($file);