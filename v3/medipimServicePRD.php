<?php
require_once 'MedipimApiV3Client.php';
$client = new MedipimApiV3Client(123,'IGuh829DevvUZYVwNnTDTvFPkLdm08EhGcUG72Y20peYhStZ2Ugj7AnsRTXZgf8g');
$r = $client->get("/v3/products/search");
$prodList = $r['results'];//json_decode($r);
$meta = $r['meta'];
$newProdData="";
$processed = 0;

$offset=$meta['page']['no'];//no -> offset
$processed += $meta['page']['offset'];
$prodfile = fopen("../test/products".$offset.".csv","wr");
	
$titles = "sku,store_view_code,attribute_set_code,product_type,categories,product_websites,name,description,short_description,weight,product_online,tax_class_name,visibility,price,special_price,special_price_from_date,special_price_to_date,url_key,meta_title,meta_keywords,meta_description,base_image,base_image_label,small_image,small_image_label,thumbnail_image,thumbnail_image_label,created_at,updated_at,new_from_date,new_to_date,display_product_options_in,map_price,msrp_price,map_enabled,gift_message_available,custom_design,custom_design_from,custom_design_to,custom_layout_update,page_layout,product_options_container,msrp_display_actual_price_type,country_of_manufacture,additional_attributes,qty,out_of_stock_qty,use_config_min_qty,is_qty_decimal,allow_backorders,use_config_backorders,min_cart_qty,use_config_min_sale_qty,max_cart_qty,use_config_max_sale_qty,is_in_stock,notify_on_stock_below,use_config_notify_stock_qty,manage_stock,use_config_manage_stock,use_config_qty_increments,qty_increments,use_config_enable_qty_inc,enable_qty_increments,is_decimal_divided,website_id,related_skus,crosssell_skus,upsell_skus,additional_images,additional_image_labels,custom_options,configurable_variations,configurable_variation_prices,configurable_variation_labels,bundle_price_type,bundle_sku_type,bundle_price_view,bundle_weight_type,bundle_values";
foreach($prodList as $product){
	$newProdData .= $product['cnk'];//sku;
	$newProdData .=",".store_view_code;
	$newProdData .=",".attribute_set_code;
	$newProdData .=",".product_type;
	$categories = "";
	foreach($product['publicCategories'] as $cat){
		$categories .= $cat['name']['nl'];
	}
	$newProdData .=",".categories;
	$newProdData .=",".product_websites;
	$newProdData .=",".name;
	$newProdData .=",".description;
	$newProdData .=",".short_description;
	$newProdData .=",".weight;
	$newProdData .=",".product_online;
	$newProdData .=","."tax-".$product['vat'];//tax_class_name;
	$newProdData .=",".visibility;
	$newProdData .=",".price;
	$newProdData .=",".special_price;
	$newProdData .=",".special_price_from_date;
	$newProdData .=",".special_price_to_date;
	$newProdData .=",".url_key;
	$newProdData .=",".meta_title;
	$newProdData .=",".meta_keywords;
	$newProdData .=",".meta_description;
	$newProdData .=",".base_image;
	$newProdData .=",".base_image_label;
	$newProdData .=",".small_image;
	$newProdData .=",".small_image_label;
	$newProdData .=",".thumbnail_image;
	$newProdData .=",".thumbnail_image_label;
	$newProdData .=",".created_at;
	$newProdData .=",".updated_at;
	$newProdData .=",".new_from_date;
	$newProdData .=",".new_to_date;
	$newProdData .=",".display_product_options_in;
	$newProdData .=",".map_price;
	$newProdData .=",".msrp_price;
	$newProdData .=",".map_enabled;
	$newProdData .=",".gift_message_available;
	$newProdData .=",".custom_design;
	$newProdData .=",".custom_design_from;
	$newProdData .=",".custom_design_to;
	$newProdData .=",".custom_layout_update;
	$newProdData .=",".page_layout;
	$newProdData .=",".product_options_container;
	$newProdData .=",".msrp_display_actual_price_type;
	$newProdData .=",".country_of_manufacture;
	$newProdData .=",".additional_attributes;
	$newProdData .=",".qty;
	$newProdData .=",".out_of_stock_qty;
	$newProdData .=",".use_config_min_qty;
	$newProdData .=",".is_qty_decimal;
	$newProdData .=",".allow_backorders;
	$newProdData .=",".use_config_backorders;
	$newProdData .=",".min_cart_qty;
	$newProdData .=",".use_config_min_sale_qty;
	$newProdData .=",".max_cart_qty;
	$newProdData .=",".use_config_max_sale_qty;
	$newProdData .=",".is_in_stock;
	$newProdData .=",".notify_on_stock_below;
	$newProdData .=",".use_config_notify_stock_qty;
	$newProdData .=",".manage_stock;
	$newProdData .=",".use_config_manage_stock;
	$newProdData .=",".use_config_qty_increments;
	$newProdData .=",".qty_increments;
	$newProdData .=",".use_config_enable_qty_inc;
	$newProdData .=",".enable_qty_increments;
	$newProdData .=",".is_decimal_divided;
	$newProdData .=",".website_id;
	$newProdData .=",".related_skus;
	$newProdData .=",".crosssell_skus;
	$newProdData .=",".upsell_skus;
	$newProdData .=",".additional_images;
	$newProdData .=",".additional_image_labels;
	$newProdData .=",".custom_options;
	$newProdData .=",".configurable_variations;
	$newProdData .=",".configurable_variation_prices;
	$newProdData .=",".configurable_variation_labels;
	$newProdData .=",".bundle_price_type;
	$newProdData .=",".bundle_sku_type;
	$newProdData .=",".bundle_price_view;
	$newProdData .=",".bundle_weight_type;
	$newProdData .=",".bundle_values;
	
	fwrite($prodfile, $newProdData);
	unset($newProdData);
}
echo "Total processed = ".$processed." of ".$meta['page']['total'];
	
//var_dump($r);