<?php
class MediPimService{
	var $id = 123; // your api user id
	var $key = "IGuh829DevvUZYVwNnTDTvFPkLdm08EhGcUG72Y20peYhStZ2Ugj7AnsRTXZgf8g"; // your secret api key
	
	function loadProductData($cnks,$lastmodified) {
		try{
			$purl = "https://api.medipim.be/v2/rest/products";
			$datalabel=explode(",","id,cnk,language,last_updated_at,status,name,febelco_name,ean,atc,apb_category,weight,prescription,tax,public_price_apb,public_price_febelco,public_price_manufacturer,fagg_publ_notice,fagg_spc_notice,pharma_publ_notice,pharma_spc_notice,indication,contra_indication,usage,public_name,description,full_description,composition,properties,width,height,depth,diameter,udi,nut,supplier_reference,labo_publ_notice,labo_spc_notice");
	
			//brands, consumer_categories, appstores, leaflets,videos,websites, media<450x450,900x900>
			$data=array("cnks"=>$cnks,"modified_since"=>$lastmodified);
			$data_string = json_encode($data);
	
			$prodfile = fopen("../test/products2.csv","wr");
			$catfile = fopen("../test/categories.csv","wr");
			//fputcsv($file,$datalabel);
				
			//returns unique cnks numbers
			$response = file_get_contents($purl, false, stream_context_create(array(
					'http' => array(
							'method' => 'POST',
							'header' => array('Content-Type: application/json'."\r\n"
									. "Authorization: Basic " . base64_encode("$this->id:$this->key")."\r\n"
									. 'Content-Length: ' . strlen($data_string) . "\r\n"),
							'content' => $data_string)
			)
			));
	
			$productList = json_decode($response);
			$mgt_label;
			$categories=array();
			$all_categories=array();
				
			foreach($productList->products as $product){
				//$newProductData = array();
				$newProductData = "<product>";
				foreach($datalabel as $label){
					if(property_exists($product,$label)){
						$mgt_label = $label;
						if($label == "cnk"){
							$mgt_label = "sku";
						}elseif ($label =="status"){
							$mgt_label = "medipim_status";
						}elseif($label == "tax"){
							$newProductData .="<tax_class_id>tax-".$product->$label."</tax_class_id>";//$newProductData["tax_class_id"]="tax-".$product->$label;
						}elseif($label == "public_price_manufacturer"){
							$mgt_label = "msrp";
						}elseif ($label == "public_name"){
							$mgt_label = "name";
						}elseif ($label == "description"){
							$mgt_label = "short_description";
						}elseif ($label == "full_description"){
							$mgt_label = "description";
						}
						//$newProductData[$mgt_label]= $product->$label;
						$newProductData .="<".$mgt_label.">".$product->$label."</".$mgt_label.">";
					}
				}
				//set the last synced date
				$newProductData.="<last_sync>".date("Y-m-d")."</last_sync>";
	
				foreach($product->consumer_categories as $cat){
					$categories[]=$cat->consumer_category_id;
					$all_categories[]=$cat->consumer_category_id;
				}
				$newProductData.="<mp_categories>".implode(";", $categories)."</mp_categories>"; //test
				$categories=array();
	
				if(property_exists($product,'media')){
					if(property_exists($product->media,'900x900')){
						foreach ($product->media->{'900x900'} as $image){
							// + show picture, - dont show picture
							// 							$newProductData['image']='+'.(string)$image->file_path;
							$newProductData.="<image>".$image->file_path."</image>";  //test
								
						}
					}
					if(property_exists($product->media,'450x450')){
						foreach ($product->media->{'450x450'} as $image){
							// + show picture, - dont show picture
							// 							$newProductData['small_image']='+'.(string)$image->file_path;
							$newProductData.="<small_image>".$image->file_path."</small_image>"; //test
								
						}
					}
				}
	
				$newProductData .= "</product>";
				fwrite($prodfile, $newProductData);
				$newProductData=null;    //clear memory
				unset($newProductData); //clear memory
	
			}
				
			fputcsv($catfile, array_unique($all_categories));
	
		}catch(Exception $e){
			echo 'Error: '.$e;
		}
	}
		
	function loadProductDataXML($cnks,$lastmodified) {
		try{
			$purl = "https://api.medipim.be/v2/rest/products";
			$datalabel=explode(",","id,cnk,language,last_updated_at,status,name,febelco_name,ean,atc,apb_category,weight,prescription,tax,public_price_apb,public_price_febelco,public_price_manufacturer,fagg_publ_notice,fagg_spc_notice,pharma_publ_notice,pharma_spc_notice,indication,contra_indication,usage,public_name,description,full_description,composition,properties,width,height,depth,diameter,udi,nut,supplier_reference,labo_publ_notice,labo_spc_notice");
				
			//brands, consumer_categories, appstores, leaflets,videos,websites, media<450x450,900x900>
			$data=array("cnks"=>$cnks,"modified_since"=>$lastmodified);
			$data_string = json_encode($data);

			$prodfile = fopen("../test/products2.xml","wr");
			$catfile = fopen("../test/categories.csv","wr");
			//fputcsv($file,$datalabel);
			
			//returns unique cnks numbers
			$response = file_get_contents($purl, false, stream_context_create(array(
					'http' => array(
							'method' => 'POST',
							'header' => array('Content-Type: application/json'."\r\n"
									. "Authorization: Basic " . base64_encode("$this->id:$this->key")."\r\n"
									. 'Content-Length: ' . strlen($data_string) . "\r\n"),
							'content' => $data_string)
			)
			));
				
			$productList = json_decode($response);
			$mgt_label;
			$categories=array();
			$all_categories=array();
			
			foreach($productList->products as $product){
				//$newProductData = array();
				$newProductData = "<product>";
				foreach($datalabel as $label){
					if(property_exists($product,$label)){
						$mgt_label = $label;
						if($label == "cnk"){
							$mgt_label = "sku";
						}elseif ($label =="status"){
							$mgt_label = "medipim_status";
						}elseif($label == "tax"){
							$newProductData .="<tax_class_id>tax-".$product->$label."</tax_class_id>";//$newProductData["tax_class_id"]="tax-".$product->$label;
						}elseif($label == "public_price_manufacturer"){
							$mgt_label = "msrp";
						}elseif ($label == "public_name"){
							$mgt_label = "name";
						}elseif ($label == "description"){
							$mgt_label = "short_description";
						}elseif ($label == "full_description"){
							$mgt_label = "description";
						}
						//$newProductData[$mgt_label]= $product->$label;
						$newProductData .="<".$mgt_label.">".$product->$label."</".$mgt_label.">";
					}
				}
				//set the last synced date
				$newProductData.="<last_sync>".date("Y-m-d")."</last_sync>";
								
				foreach($product->consumer_categories as $cat){
					$categories[]=$cat->consumer_category_id;
					$all_categories[]=$cat->consumer_category_id;
				}				
				$newProductData.="<mp_categories>".implode(";", $categories)."</mp_categories>"; //test
				$categories=array();
				
				if(property_exists($product,'media')){
					if(property_exists($product->media,'900x900')){
						foreach ($product->media->{'900x900'} as $image){
							// + show picture, - dont show picture
// 							$newProductData['image']='+'.(string)$image->file_path;
							$newProductData.="<image>".$image->file_path."</image>";  //test
							
						}
					}
					if(property_exists($product->media,'450x450')){
						foreach ($product->media->{'450x450'} as $image){
							// + show picture, - dont show picture
// 							$newProductData['small_image']='+'.(string)$image->file_path;
							$newProductData.="<small_image>".$image->file_path."</small_image>"; //test
											
						}
					}
				}

				$newProductData .= "</product>";				
				fwrite($prodfile, $newProductData);
				$newProductData=null;    //clear memory
				unset($newProductData); //clear memory
	
			}
			
			fputcsv($catfile, array_unique($all_categories));
				
		}catch(Exception $e){
			echo 'Error: '.$e;
		}
	}
	function loadCategories($lastmodified,$cat_id=null){
		try {
			$purl = "https://api.medipim.be/v2/rest/categories";
			
			//brands, consumer_categories, appstores, leaflets,videos,websites, media<450x450,900x900>
			if(!empty($cat_id)){
				$data=array("id"=>$cat_id,"modified_since"=>$lastmodified);
				$data_string = json_encode($data);
			}else{
				$data=array("modified_since"=>$lastmodified);
				$data_string = json_encode($data);
			}
			
			$catfile = fopen("../test/categories.xml","wr");
				
			//returns unique cnks numbers
			$response = file_get_contents($purl, false, stream_context_create(array(
					'http' => array(
							'method' => 'GET',
							'header' => array('Content-Type: application/json'."\r\n"
									. "Authorization: Basic " . base64_encode("$this->id:$this->key")."\r\n"
									. 'Content-Length: ' . strlen($data_string) . "\r\n"),
							'content' => $data_string)
			)
			));
			$catList = json_decode($response);
			$newCatData="";
			
			fwrite($catfile, "<version>".$catList->version."</version>");
				
			$parent_cats=0;
			foreach($catList->categories as $categorie){
				$newCatData = "<categorie>";
				if(property_exists($categorie,"consumer_category_id")){
					$newCatData .="<consumer_category_id>".$categorie->consumer_category_id."</consumer_category_id>";
				}
				if(property_exists($categorie,"name")){
					$newCatData .="<name>".$categorie->name."</name>";
				}
				if(property_exists($categorie,"parent_id")){
					$newCatData .="<parent_id>".$categorie->parent_id."</parent_id>";
					if($categorie->parent_id == 0){
						$parent_cats +=1;
						echo $categorie->name ." ". $categorie->consumer_category_id;
					}
				}
				if(property_exists($categorie,"last_updated_at")){
					$newCatData .="<last_updated_at>".$categorie->last_updated_at."</last_updated_at>";
				}
				if(property_exists($categorie,"translations")){
					if(property_exists($categorie->translations, "nl")){
						$newCatData .="<translation_nl>".$categorie->translations->nl->name."</translation_nl>";
					}
					if(property_exists($categorie->translations, "fr")){
						$newCatData .="<translation_fr>".$categorie->translations->fr->name."</translation_fr>";
					}
					if(property_exists($categorie->translations, "en")){
						$newCatData .="<translation_en>".$categorie->translations->en->name."</translation_en>";
					}
					
				}			
				
				$newCatData .= "</categorie>";
				fwrite($catfile, $newCatData);
				unset($newCatData);
			}
			echo "Parent cats = ".$parent_cats;
			
		}catch (Exception $e){
			echo 'Error: '.$e;
		}
	}
}