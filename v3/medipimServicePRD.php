<?php
require_once 'MedipimApiV3Client.php';
$client = new MedipimApiV3Client(123,'IGuh829DevvUZYVwNnTDTvFPkLdm08EhGcUG72Y20peYhStZ2Ugj7AnsRTXZgf8g');

//prepare filter
$cnks = array();
$cnks_details = array();
$teller=0;

$allcategories = array("dieet"/*,"baby","haarhuid","homeo","kruiden","mond","reis","sport","voedingssupplementen"*/);
foreach($allcategories as $key => $maincategory){
	if (($handle = fopen("../files/".$maincategory.".csv", "r")) !== FALSE) {
		while (($data = fgetcsv($handle, 0, ";")) !== FALSE ) {
			if($teller>1000)
				break;
			$teller++;
			if($data[0]=='CNK'){
				continue;
			}
			$num = count($data);
			$cnks[]=$data[0];
			//main cat
			$cnks_details[$data[0]]['cat'] = $key;
			$cnks_details[$data[0]]['price'] = $data[3];
		}
		fclose($handle);
	}
}

//cat translations
$allcategories_nl = array("Dieet","Baby","Haar en huid","Homeo","Kruiden","Mond","Reis","Sport","Voedingssupplementen");
$allcategories_fr = array("Diète","Bébé","Cheveux et peau","Homéo","Herbe","Bouche","Voyage","Sport","Aliments et supplément");
$allcategories_en = array("Diet","Baby","Hair and skin","Homeo","Herb","Mouth","Travel","Sport","Dietary supplements");

//get products
$totalamount = 0;
$processed = 0;
$size = 250;
$counter = 0;

$prodfile = fopen("../test/products.csv","w");

do{
	$filter = array("filter"=>array("cnk"=>$cnks),"page"=>array("no"=>$counter,"size"=>$size));
	
	//echo ["filter" => ["cnk" => json_encode($cnks)],"page" => ["no" => $processed,"size" => $size]];
	$r = $client->post("/v3/products/search", $filter);
	
	//$r = $client->post("/v3/products/search", ["filter" => ["cnk" => implode(",",$cnks)],"page" => ["no" => $processed,"size" => $size]]);
	$prodList = $r['results'];//json_decode($r);
	$meta = $r['meta'];
	$totalamount=$meta['total'];
	
	$newProdData="";
	$newProdData_fr="";
	$newProdData_en="";
	
	$offset=$meta['page']['offset'];//no -> offset
	echo "Starting to process ".$offset;
		
	$titles = "sku,store_view_code,attribute_set_code,product_type,categories,product_websites,name,description,short_description,weight,product_online,tax_class_name,visibility,price,special_price,special_price_from_date,special_price_to_date,url_key,meta_title,meta_keywords,meta_description,base_image,base_image_label,small_image,small_image_label,thumbnail_image,thumbnail_image_label,created_at,updated_at,new_from_date,new_to_date,display_product_options_in,map_price,msrp_price,map_enabled,gift_message_available,custom_design,custom_design_from,custom_design_to,custom_layout_update,page_layout,product_options_container,msrp_display_actual_price_type,country_of_manufacture,additional_attributes,qty,out_of_stock_qty,use_config_min_qty,is_qty_decimal,allow_backorders,use_config_backorders,min_cart_qty,use_config_min_sale_qty,max_cart_qty,use_config_max_sale_qty,is_in_stock,notify_on_stock_below,use_config_notify_stock_qty,manage_stock,use_config_manage_stock,use_config_qty_increments,qty_increments,use_config_enable_qty_inc,enable_qty_increments,is_decimal_divided,website_id,related_skus,crosssell_skus,upsell_skus,additional_images,additional_image_labels,custom_options,configurable_variations,configurable_variation_prices,configurable_variation_labels,bundle_price_type,bundle_sku_type,bundle_price_view,bundle_weight_type,bundle_values";
	//fputcsv($prodfile, explode(",",$titles));
	fwrite($prodfile,$titles.PHP_EOL);
	foreach($prodList as $product){
		echo ".";
		$newProdData .= $product['cnk'];//sku;
		$newProdData_fr .= $product['cnk'];//sku;
		$newProdData_en .= $product['cnk'];//sku;
		$newProdData .=","."nl";//store_view_code;
		$newProdData_fr .=","."fr";//store_view_code;
		$newProdData_en .=","."en";//store_view_code;
		$newProdData .=","."Default";//.attribute_set_code; --?
		$newProdData_fr .=","."Default";//.attribute_set_code; --?
		$newProdData_en .=","."Default";//.attribute_set_code; --?
		$newProdData .=","."simple";//product_type;
		$newProdData_fr .=","."simple";//product_type;
		$newProdData_en .=","."simple";//product_type;
		$categories = "";
		$categories_fr = "";
		$categories_en = "";
		$meta_keywords=$product['name']['nl'];
		$meta_keywords_fr=$product['name']['fr'];
		$meta_keywords_en=$product['name']['nl'];
		$previous="";
		foreach($product['publicCategories'] as $cat){ //eventueel apbCategory checken als deze null, opgelet is ook soms onbekend
			if(empty($cat ) || $previous == $cat['name']['nl']){
				continue;
			}
			$previous=$cat['name']['nl'];
			if(!empty($cat['name']['nl'])){
				if(!empty($categories)){
					$categories .= ",";
				}
				$categories .= "Default Category/".$allcategories_nl[$cnks_details[$product['cnk']]].'/'.$cat['name']['nl'];
				$meta_keywords .= ','.$cat['name']['nl'];
			}
			if(!empty($cat['name']['fr'])){
				if(!empty($categories_fr)){
					$categories_fr .= ",";
				}
				$categories_fr .= "Default Category/".$allcategories_fr[$cnks_details[$product['cnk']]].'/'.$cat['name']['fr'];
				$meta_keywords_fr .= ','.$cat['name']['fr'];
			}
			if(!empty($cat['name']['en'])){
				if(!empty($categories_en)){
					$categories_en .= ",";
				}
				$categories_en .= "Default Category/".$allcategories_en[$cnks_details[$product['cnk']]].'/'.$cat['name']['en'];
				$meta_keywords_en .= ','.$cat['name']['en'];
			}
		}
		if(empty($categories)){
			$categories="Default Category/".$allcategories_nl[$cnks_details[$product['cnk']]];
		}
		$newProdData .=",".'"'.$categories.'"';
		if(empty($categories_fr)){
			$categories_fr="Default Category/".$allcategories_fr[$cnks_details[$product['cnk']]];
		}
		$newProdData_fr .=",".'"'.$categories_fr.'"';
		if(empty($categories_en)){
			$categories_en="Default Category/".$allcategories_en[$cnks_details[$product['cnk']]];
		}
		$newProdData_en .=",".'"'.$categories_en.'"';
		$newProdData .=","."base";//product_websites;
		$newProdData_fr .=","."base";
		$newProdData_en .=","."base";
		$newProdData .=",".'"'.$product["name"]["nl"].'"'; 
		if(!empty($product["name"]["fr"])){
			$newProdData_fr .=",".'"'.$product["name"]["fr"].'"';
		}else{
			$newProdData_fr .=",".'"'.$product["name"]["nl"].'"';
		}
		if(!empty($product["name"]["en"])){
			$newProdData_en .=",".'"'.$product["name"]["en"].'"';
		}else{
			$newProdData_en .=",".'"'.$product["name"]["nl"].'"';
		}
		$full_description ="";
		$full_description_fr ="";
		$full_description_en ="";
		foreach($product['descriptions'] as $description){
			if(!empty($description)){
				if(in_array("nl",$description['locales']) && in_array("public",$description['targetGroups'])){
					if($description['type']=="full_description"){
						$full_description .= $description['content']['nl']['html'];
					}
					if($description['type']=="composition"){
						$full_description .= $description['content']['nl']['html'];
					}
					if($description['type']=="properties"){
						$full_description .= $description['content']['nl']['html'];
					}
				}
				if(in_array("fr",$description['locales']) && in_array("public",$description['targetGroups'])){
					if($description['type']=="full_description"){
						$full_description_fr .= $description['content']['fr']['html'];
					}
					if($description['type']=="composition"){
						$full_description_fr .= $description['content']['fr']['html'];
					}
					if($description['type']=="properties"){
						$full_description_fr .= $description['content']['fr']['html'];
					}
				}
				if(in_array("en",$description['locales']) && in_array("public",$description['targetGroups'])){
					if($description['type']=="full_description"){
						$full_description_en .= $description['content']['en']['html'];
					}
					if($description['type']=="composition"){
						$full_description_en .= $description['content']['en']['html'];
					}
					if($description['type']=="properties"){
						$full_description_en .= $description['content']['en']['html'];
					}
				}
			}
		}	
		$newProdData .=",".'"'.preg_replace('/\n/','',$full_description).'"';
		$newProdData_fr .=",".'"'.preg_replace('/\n/','',$full_description_fr).'"';
		$newProdData_en .=",".'"'.preg_replace('/\n/','',$full_description_en).'"';
		$newProdData .=",".'"'.$product['short_description']['nl'].'"';
		$newProdData_fr .=",".'"'.$product['short_description']['fr'].'"';
		$newProdData_en .=",".'"'.$product['short_description']['en'].'"';
		$newProdData .=",".$product['weight'];
		$newProdData_fr .=",".$product['weight'];
		$newProdData_en .=",".$product['weight'];
		if($product['status']=='active' && !(empty($product['publicPrice'])||$product['publicPrice']==0)){
			$newProdData .=","."1";//product_online;
			$newProdData_fr .=","."1";//product_online;
			$newProdData_en .=","."1";//product_online;
		}else{
			$newProdData .=","."0";//product_online;
			$newProdData_fr .=","."0";//product_online;
			$newProdData_en .=","."0";//product_online;
		}
		if(empty($product['vat'])){
			$newProdData .=","."tax-21";//tax_class_name; -- todo check vat = float
			$newProdData_fr .=","."tax-21";
			$newProdData_en .=","."tax-21";
		}else{
			$newProdData .=","."tax-".$product['vat'];//tax_class_name; -- todo check vat = float
			$newProdData_fr .=","."tax-".$product['vat'];
			$newProdData_en .=","."tax-".$product['vat'];
		}
		$newProdData .=",".'"Catalog, Search"';//visibility;
		$newProdData_fr .=",".'"Catalog, Search"';
		$newProdData_en .=",".'"Catalog, Search"';
		
		$newProdData .=",".$product['publicPrice']/100;//price; -- in eurocent -- todo add discount + check for 0
		$newProdData_fr .=",".$product['publicPrice']/100;//price; -- in eurocent -- todo add discount + check for 0
		$newProdData_en .=",".$product['publicPrice']/100;//price; -- in eurocent -- todo add discount + check for 0
		$newProdData .=",";//.special_price;
		$newProdData_fr .=",";//.special_price;
		$newProdData_en .=",";//.special_price;
		$newProdData .=",";//.special_price_from_date;	
		$newProdData_fr .=",";//.special_price_from_date;
		$newProdData_en .=",";//.special_price_from_date;
		$newProdData .=",";//.special_price_to_date;
		$newProdData_fr .=",";//.special_price_to_date;
		$newProdData_en .=",";//.special_price_to_date;
		$newProdData .=",".strtolower(preg_replace(array('/[^a-zA-Z0-9 -]/', '/[ -]+/', '/^-|-$/'),   array('', '-', ''), ($product['name']['nl'])));
		$newProdData .=",".'"'.$product['name']['nl'].'"';//meta_title;
		if(!empty($product['name']['fr'])){
			$newProdData_fr .=",".strtolower(preg_replace(array('/[^a-zA-Z0-9 -]/', '/[ -]+/', '/^-|-$/'),   array('', '-', ''), ($product['name']['fr'])));
			$newProdData_fr .=",".'"'.$product['name']['fr'].'"';//meta_title;
		}else{
			$newProdData_fr .=",".strtolower(preg_replace(array('/[^a-zA-Z0-9 -]/', '/[ -]+/', '/^-|-$/'),   array('', '-', ''), ($product['name']['nl'])));	
			$newProdData_fr .=",".'"'.$product['name']['nl'].'"';//meta_title;
		}
		if(!empty($product['name']['en'])){
			$newProdData_en .=",".strtolower(preg_replace(array('/[^a-zA-Z0-9 -]/', '/[ -]+/', '/^-|-$/'),   array('', '-', ''), ($product['name']['en'])));
			$newProdData_en .=",".'"'.$product['name']['en'].'"';//meta_title;
		}else{
			$newProdData_en .=",".strtolower(preg_replace(array('/[^a-zA-Z0-9 -]/', '/[ -]+/', '/^-|-$/'),   array('', '-', ''), ($product['name']['nl'])));
			$newProdData_en .=",".'"'.$product['name']['nl'].'"';//meta_title;	
		}
		//$newProdData .=",".strtolower(preg_replace(array('/[^a-zA-Z0-9 -]/', '/[ -]+/', '/^-|-$/'),   array('', '-', ''), remove_accent($product['name']['nl'])));
		//preg_replace('/[^A-Za-z0-9]/', "", str_replace(' ', '-', $product['name']['nl']));//url_key;
	
		$newProdData .=",".'"'.$meta_keywords.'"';//meta_keywords;
		$newProdData_fr .=",".'"'.$meta_keywords_fr.'"';//meta_keywords;
		$newProdData_en .=",".'"'.$meta_keywords_en.'"';//meta_keywords;
		$newProdData .=",";//.meta_description;
		$newProdData_fr .=",";//.meta_description;
		$newProdData_en .=",";//.meta_description;
		
		$base_image = "";
		$base_image_label  ="";
		foreach ($product['photos'] as $photo){
			if(in_array("public",$photo['targetGroups'])){
				$base_image = $photo['formats']['medium'];
				$base_image_label = $photo['type'];
			}
		}
		$newProdData .=",".$base_image;
		$newProdData .=",".$base_image_label;
		$newProdData_fr .=",".$base_image;
		$newProdData_fr .=",".$base_image_label;
		$newProdData_en .=",".$base_image;
		$newProdData_en .=",".$base_image_label;
		
		$newProdData .=",";//.small_image;
		$newProdData .=",";//.small_image_label;
		$newProdData .=",";//.thumbnail_image;
		$newProdData .=",";//.thumbnail_image_label;
		$newProdData .=",".date("d.m.Y H:m",$product['meta'].['created_at']);
		$newProdData .=",".date("d.m.Y H:m",$product['meta'].['updated_at']);
		$newProdData .=",";//.new_from_date;
		$newProdData .=",";//.new_to_date;
		$newProdData .=",";//.display_product_options_in;
		$newProdData .=",";//.map_price;
		$newProdData .=",";//.msrp_price;
		$newProdData .=",";//.map_enabled;
		$newProdData .=",";//.gift_message_available;
		$newProdData .=",";//.custom_design;
		$newProdData .=",";//.custom_design_from;
		$newProdData .=",";//.custom_design_to;
		$newProdData .=",";//.custom_layout_update;
		$newProdData .=",";//page_layout;
		$newProdData .=",";//product_options_container;
		$newProdData .=",";//msrp_display_actual_price_type;
		$newProdData .=",";//.country_of_manufacture;
		$newProdData .=",";//.additional_attributes;
		$newProdData .=","."100";//qty;
		$newProdData .=","."0";//out_of_stock_qty;
		$newProdData .=","."0";//use_config_min_qty;
		$newProdData .=","."0";//is_qty_decimal;
		$newProdData .=","."0";//allow_backorders;
		$newProdData .=","."0";//use_config_backorders;
		$newProdData .=","."1";//min_cart_qty;
		$newProdData .=","."0";//use_config_min_sale_qty;
		$newProdData .=","."50";//max_cart_qty; TODO: ask input
		$newProdData .=","."0";//use_config_max_sale_qty;
		$newProdData .=","."1";//s_in_stock;
		$newProdData .=","."0";//notify_on_stock_below;
		$newProdData .=","."0";//use_config_notify_stock_qty;
		$newProdData .=","."0";//manage_stock;
		$newProdData .=","."0";//use_config_manage_stock;
		$newProdData .=","."0";//use_config_qty_increments;
		$newProdData .=","."0";//qty_increments;
		$newProdData .=","."0";//use_config_enable_qty_inc;
		$newProdData .=","."0";//enable_qty_increments;
		$newProdData .=","."0";//is_decimal_divided;
		$newProdData .=","."1";//website_id; TODO check
		$newProdData .=",";//.related_skus;
		$newProdData .=",";//.crosssell_skus;
		$newProdData .=",";//.upsell_skus;
		$newProdData .=",";//.additional_images;
		$newProdData .=",";//.additional_image_labels;
		$newProdData .=",";//.custom_options;
		$newProdData .=",";//.configurable_variations;
		$newProdData .=",";//.configurable_variation_prices;
		$newProdData .=",";//.configurable_variation_labels;
		$newProdData .=",";//.bundle_price_type;
		$newProdData .=",";//.bundle_sku_type;
		$newProdData .=",";//.bundle_price_view;
		$newProdData .=",";//.bundle_weight_type;
		$newProdData .=",";//.bundle_values;
		$newProdData .=PHP_EOL;
		
		$newProdData_fr .=",";//.small_image;
		$newProdData_fr .=",";//.small_image_label;
		$newProdData_fr .=",";//.thumbnail_image;
		$newProdData_fr .=",";//.thumbnail_image_label;
		$newProdData_fr .=",".date("d.m.Y H:m",$product['meta'].['created_at']);
		$newProdData_fr .=",".date("d.m.Y H:m",$product['meta'].['updated_at']);
		$newProdData_fr .=",";//.new_from_date;
		$newProdData_fr .=",";//.new_to_date;
		$newProdData_fr .=",";//.display_product_options_in;
		$newProdData_fr .=",";//.map_price;
		$newProdData_fr .=",";//.msrp_price;
		$newProdData_fr .=",";//.map_enabled;
		$newProdData_fr .=",";//.gift_message_available;
		$newProdData_fr .=",";//.custom_design;
		$newProdData_fr .=",";//.custom_design_from;
		$newProdData_fr .=",";//.custom_design_to;
		$newProdData_fr .=",";//.custom_layout_update;
		$newProdData_fr .=",";//page_layout;
		$newProdData_fr .=",";//product_options_container;
		$newProdData_fr .=",";//msrp_display_actual_price_type;
		$newProdData_fr .=",";//.country_of_manufacture;
		$newProdData_fr .=",";//.additional_attributes;
		$newProdData_fr .=","."100";//qty;
		$newProdData_fr .=","."0";//out_of_stock_qty;
		$newProdData_fr .=","."0";//use_config_min_qty;
		$newProdData_fr .=","."0";//is_qty_decimal;
		$newProdData_fr .=","."0";//allow_backorders;
		$newProdData_fr .=","."0";//use_config_backorders;
		$newProdData_fr .=","."1";//min_cart_qty;
		$newProdData_fr .=","."0";//use_config_min_sale_qty;
		$newProdData_fr .=","."50";//max_cart_qty; TODO: ask input
		$newProdData_fr .=","."0";//use_config_max_sale_qty;
		$newProdData_fr .=","."1";//s_in_stock;
		$newProdData_fr .=","."0";//notify_on_stock_below;
		$newProdData_fr .=","."0";//use_config_notify_stock_qty;
		$newProdData_fr .=","."0";//manage_stock;
		$newProdData_fr .=","."0";//use_config_manage_stock;
		$newProdData_fr .=","."0";//use_config_qty_increments;
		$newProdData_fr .=","."0";//qty_increments;
		$newProdData_fr .=","."0";//use_config_enable_qty_inc;
		$newProdData_fr .=","."0";//enable_qty_increments;
		$newProdData_fr .=","."0";//is_decimal_divided;
		$newProdData_fr .=","."1";//website_id; TODO check
		$newProdData_fr .=",";//.related_skus;
		$newProdData_fr .=",";//.crosssell_skus;
		$newProdData_fr .=",";//.upsell_skus;
		$newProdData_fr .=",";//.additional_images;
		$newProdData_fr .=",";//.additional_image_labels;
		$newProdData_fr .=",";//.custom_options;
		$newProdData_fr .=",";//.configurable_variations;
		$newProdData_fr .=",";//.configurable_variation_prices;
		$newProdData_fr .=",";//.configurable_variation_labels;
		$newProdData_fr .=",";//.bundle_price_type;
		$newProdData_fr .=",";//.bundle_sku_type;
		$newProdData_fr .=",";//.bundle_price_view;
		$newProdData_fr .=",";//.bundle_weight_type;
		$newProdData_fr .=",";//.bundle_values;
		$newProdData_fr .=PHP_EOL;
		
		$newProdData_en .=",";//.small_image;
		$newProdData_en .=",";//.small_image_label;
		$newProdData_en .=",";//.thumbnail_image;
		$newProdData_en .=",";//.thumbnail_image_label;
		$newProdData_en .=",".date("d.m.Y H:m",$product['meta'].['created_at']);
		$newProdData_en .=",".date("d.m.Y H:m",$product['meta'].['updated_at']);
		$newProdData_en .=",";//.new_from_date;
		$newProdData_en .=",";//.new_to_date;
		$newProdData_en .=",";//.display_product_options_in;
		$newProdData_en .=",";//.map_price;
		$newProdData_en .=",";//.msrp_price;
		$newProdData_en .=",";//.map_enabled;
		$newProdData_en .=",";//.gift_message_available;
		$newProdData_en .=",";//.custom_design;
		$newProdData_en .=",";//.custom_design_from;
		$newProdData_en .=",";//.custom_design_to;
		$newProdData_en .=",";//.custom_layout_update;
		$newProdData_en .=",";//page_layout;
		$newProdData_en .=",";//product_options_container;
		$newProdData_en .=",";//msrp_display_actual_price_type;
		$newProdData_en .=",";//.country_of_manufacture;
		$newProdData_en .=",";//.additional_attributes;
		$newProdData_en .=","."100";//qty;
		$newProdData_en .=","."0";//out_of_stock_qty;
		$newProdData_en .=","."0";//use_config_min_qty;
		$newProdData_en .=","."0";//is_qty_decimal;
		$newProdData_en .=","."0";//allow_backorders;
		$newProdData_en .=","."0";//use_config_backorders;
		$newProdData_en .=","."1";//min_cart_qty;
		$newProdData_en .=","."0";//use_config_min_sale_qty;
		$newProdData_en .=","."50";//max_cart_qty; TODO: ask input
		$newProdData_en .=","."0";//use_config_max_sale_qty;
		$newProdData_en .=","."1";//s_in_stock;
		$newProdData_en .=","."0";//notify_on_stock_below;
		$newProdData_en .=","."0";//use_config_notify_stock_qty;
		$newProdData_en .=","."0";//manage_stock;
		$newProdData_en .=","."0";//use_config_manage_stock;
		$newProdData_en .=","."0";//use_config_qty_increments;
		$newProdData_en .=","."0";//qty_increments;
		$newProdData_en .=","."0";//use_config_enable_qty_inc;
		$newProdData_en .=","."0";//enable_qty_increments;
		$newProdData_en .=","."0";//is_decimal_divided;
		$newProdData_en .=","."1";//website_id; TODO check
		$newProdData_en .=",";//.related_skus;
		$newProdData_en .=",";//.crosssell_skus;
		$newProdData_en .=",";//.upsell_skus;
		$newProdData_en .=",";//.additional_images;
		$newProdData_en .=",";//.additional_image_labels;
		$newProdData_en .=",";//.custom_options;
		$newProdData_en .=",";//.configurable_variations;
		$newProdData_en .=",";//.configurable_variation_prices;
		$newProdData_en .=",";//.configurable_variation_labels;
		$newProdData_en .=",";//.bundle_price_type;
		$newProdData_en .=",";//.bundle_sku_type;
		$newProdData_en .=",";//.bundle_price_view;
		$newProdData_en .=",";//.bundle_weight_type;
		$newProdData_en .=",";//.bundle_values;
		$newProdData_en .=PHP_EOL;
		
		fwrite($prodfile, $newProdData);
		fwrite($prodfile, $newProdData_fr);
		fwrite($prodfile, $newProdData_en);
		$processed++;
		//fputcsv($prodfile,explode(",",$newProdData));
		unset($newProdData);
		unset($newProdData_fr);
		unset($newProdData_en);
	}
	$counter++;
	echo "Total processed = ".$processed." of ".$totalamount. '\n';
}while($processed < $totalamount);
fclose($prodfile);
	
//var_dump($r);