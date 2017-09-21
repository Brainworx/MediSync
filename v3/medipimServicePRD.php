<?php
require_once 'MedipimApiV3Client.php';
$client = new MedipimApiV3Client(123,'IGuh829DevvUZYVwNnTDTvFPkLdm08EhGcUG72Y20peYhStZ2Ugj7AnsRTXZgf8g');
$r = $client->post("/v3/products/search", ["filter" => ["status" => "active"]]);
$prodList = $r['results'];//json_decode($r);
$meta = $r['meta'];
$newProdData="";
$processed = 0;

echo "Got url";


$offset=$meta['page']['no'];//no -> offset
$prodfile = fopen("../test/products".$offset.".csv","w");
	
$titles = "sku,store_view_code,attribute_set_code,product_type,categories,product_websites,name,description,short_description,weight,product_online,tax_class_name,visibility,price,special_price,special_price_from_date,special_price_to_date,url_key,meta_title,meta_keywords,meta_description,base_image,base_image_label,small_image,small_image_label,thumbnail_image,thumbnail_image_label,created_at,updated_at,new_from_date,new_to_date,display_product_options_in,map_price,msrp_price,map_enabled,gift_message_available,custom_design,custom_design_from,custom_design_to,custom_layout_update,page_layout,product_options_container,msrp_display_actual_price_type,country_of_manufacture,additional_attributes,qty,out_of_stock_qty,use_config_min_qty,is_qty_decimal,allow_backorders,use_config_backorders,min_cart_qty,use_config_min_sale_qty,max_cart_qty,use_config_max_sale_qty,is_in_stock,notify_on_stock_below,use_config_notify_stock_qty,manage_stock,use_config_manage_stock,use_config_qty_increments,qty_increments,use_config_enable_qty_inc,enable_qty_increments,is_decimal_divided,website_id,related_skus,crosssell_skus,upsell_skus,additional_images,additional_image_labels,custom_options,configurable_variations,configurable_variation_prices,configurable_variation_labels,bundle_price_type,bundle_sku_type,bundle_price_view,bundle_weight_type,bundle_values";
//fputcsv($prodfile, explode(",",$titles));
fwrite($prodfile,$titles.PHP_EOL);
foreach($prodList as $product){
	echo ".";
	$newProdData .= $product['cnk'];//sku;
	$newProdData .=","."nl";//store_view_code;
	$newProdData .=","."Default";//.attribute_set_code; --?
	$newProdData .=","."simple";//product_type;
	$categories = "";
	$meta_keywords=$product['name']['nl'];
	foreach($product['publicCategories'] as $cat){
		if(empty($cat ) || empty($cat['name']['nl'])){
			continue;
		}
		if(!empty($categories)){
			$categories .= ",";
		}
		$categories .= "Default Category/".$cat['name']['nl'];
		$meta_keywords .= ','.$cat['name']['nl'];
	}
	if(empty($categories)){
		$categories="Default Category";
	}
	$newProdData .=",".'"'.$categories.'"';
	$newProdData .=","."base";//product_websites;
	$newProdData .=",".'"'.$product["name"]["nl"].'"'; 
	$full_description ="";
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
		}
	}
	$newProdData .=",".'"'.$full_description.'"';
	$newProdData .=",".'"'.$product['short_description']['nl'].'"';
	$newProdData .=",".$product['weight'];
	$newProdData .=","."1";//product_online;
	$newProdData .=","."tax-".$product['vat'];//tax_class_name; -- todo check vat = float
	$newProdData .=",".'"Catalog, Search"';//visibility;
	$newProdData .=",".$product['publicPrice']/100;//price; -- in eurocent -- todo add discount
	$newProdData .=",";//.special_price;
	$newProdData .=",";//.special_price_from_date;
	$newProdData .=",";//.special_price_to_date;
	$newProdData .=",".strtolower(preg_replace(array('/[^a-zA-Z0-9 -]/', '/[ -]+/', '/^-|-$/'),   array('', '-', ''), ($product['name']['nl'])));
	
	//$newProdData .=",".strtolower(preg_replace(array('/[^a-zA-Z0-9 -]/', '/[ -]+/', '/^-|-$/'),   array('', '-', ''), remove_accent($product['name']['nl'])));
	//preg_replace('/[^A-Za-z0-9]/', "", str_replace(' ', '-', $product['name']['nl']));//url_key;
	$newProdData .=",".'"'.$product['name']['nl'].'"';//meta_title;
	$newProdData .=",".'"'.$meta_keywords.'"';//meta_keywords;
	$newProdData .=",";//.meta_description;
	$base_image = "";
	$base_image_label  ="";
	foreach ($product['photos'] as $photo){
		if($photo['type']=="public"){
			$base_image = $photo['formats']['medium'];
			$base_image_label = $photo['type'];
		}
	}
	$newProdData .=",".$base_image;
	$newProdData .=",".$base_image_label;
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
	
	fwrite($prodfile, $newProdData);
	//fputcsv($prodfile,explode(",",$newProdData));
	unset($newProdData);
}
$processed += $meta['page']['size'];
echo "Total processed = ".$processed." of ".$meta['total'];
fclose($prodfile);
	
//var_dump($r);