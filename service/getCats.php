<?php
//init
require_once 'MediPimService.php';
$service = new MediPimService();
//read input file
// $cnks = array();
// $all_cnks = array();
// $row = 1;
// $counter = 0;
// if (($handle = fopen("../files/articles1.csv", "r")) !== FALSE) {
// 	while (($data = fgetcsv($handle, 1000, ",")) !== FALSE ) {
// 		$counter +=1;
// 		$num = count($data);
// 		$row++;
// 		for ($c=0; $c < $num; $c++) {
// 			$cnks[] = $data[$c];
// 		}
// 		if($counter == 1000){
// 			$all_cnks[]=$cnks;
// 			$cnks = array();
// 			$counter=0;
// 		}
// 	}
// 	if($counter>0){
// 		$all_cnks[]=$cnks;
// 	}
// 	fclose($handle);
// }
// print_r( $cnks);
// $number = 0;
// foreach($all_cnks as $cnks_group){
	$service->loadCategories("200100101000000");
// 	$number += sizeof($cnks_group);
// }

echo "completed - cats loaded.";