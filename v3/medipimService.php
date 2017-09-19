<?php
require_once 'MedipimApiV3Client.php';
$client = new MedipimApiV3Client(123,'IGuh829DevvUZYVwNnTDTvFPkLdm08EhGcUG72Y20peYhStZ2Ugj7AnsRTXZgf8g');
$r = $client->get("/v3/public-categories/all");
$catfile = fopen("../test/categoriesv3.xml","wr");
$catList = $r['results'];//json_decode($r);
$meta = $r['meta'];
$newCatData="";
	
fwrite($catfile, "<total>".$meta['total']."</total>");

$parent_cats=0;
foreach($catList as $categorie){
	$newCatData = "<categorie>";
	$newCatData .="<id>".$categorie['id']."</id>";
	
	$newCatData .="<name_nl>".$categorie['name']['nl']."</name_nl>";
	$newCatData .="<name_fr>".$categorie['name']['fr']."</name_fr>";
	$newCatData .="<name_en>".$categorie['name']['en']."</name_en>";
	
	$newCatData .="<parent_id>".$categorie['parent']."</parent_id>";
	if(empty($categorie['parent'])){
		$parent_cats +=1;
		echo $categorie['name']['nl'] ." ". $categorie['id']."<br>";
	}
	
	$newCatData .="<created_at>".$categorie['meta']['createdAt']."</created_at>";
	$newCatData .="<last_updated_at>".$categorie['meta']['updatedAt']."</last_updated_at>";
	

	$newCatData .= "</categorie>";
	fwrite($catfile, $newCatData);
	unset($newCatData);
}
echo "Parent cats = ".$parent_cats;
	
//var_dump($r);