<?php
$id = 123; // your api user id
$key = "IGuh829DevvUZYVwNnTDTvFPkLdm08EhGcUG72Y20peYhStZ2Ugj7AnsRTXZgf8g"; // your secret api key
//getcategories
echo "getting categories <br>";
$url = "https://api.medipim.be/v2/rest/categories";
$context = stream_context_create(array(
		'http' => array(
				'header'  => "Authorization: Basic " . base64_encode("$id:$key")
		)
));
$response = file_get_contents($url, false, $context);
echo $response;