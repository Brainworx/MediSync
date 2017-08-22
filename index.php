<?php
/* var_dump(class_exists(“SOAPClient”)); 
 phpinfo();*/
 /*
  * 
use brainworx\farmadsync\Synchronizer;
require_once ('farmadsync\Synchronizer.php');

$client = new farmadsync\Synchronizer();
$param = new GetCategories();
$param->setGuid("");
$param->setWebshopId(1);
$param->setYourCurrentVersion(1);
$cats = $client->GetCategories();
*/

// function __autoload($classname) {

//     $filename = "farmadsync/classes/".$classname.".php";
//     print("Loading $filename<br>\n");
//     if(file_exists($filename)) {
//         include_once($filename);
//    } else {
//     	include_once($classname . '.php'); // looking for the class in include_path
//     }

// }
//auth test







// $sync = new Synchronizer();
// $param = new GetCategories("", 1, 1);
// $cats = $sync->GetCategories($param);
echo "Complete:".$response;
