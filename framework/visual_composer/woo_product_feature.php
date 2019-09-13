<?php
// ! File Security Check
if ( ! defined( 'ABSPATH' ) ) { exit; }
// **********************************************************************// 
// ! Register New Element: WD Recent Products By Category Products
// **********************************************************************//
$woo_products_params = array(
	"name" => esc_html__("Products Features", 'wdjewelry'),
	"base" => "woo_product_feature",
	"icon" => "icon-wpb-woo",
	"category" => 'WPDance Woocommerce',
	"description"	=> '',
	"params" => array(		
		
		array(
			"type" => "textfield",
			"class" => "",
			"heading" => esc_html__("Number Product", 'wdjewelry'),
			"admin_label" => true,
			"param_name" => "per_page",
			"value" => "",
			"description" => ''
		),
		// Columns
		array(
			"type" => "textfield",
			"class" => "",
			"heading" => esc_html__("Columns", 'wdjewelry'),
			"admin_label" => true,
			"param_name" => "columns",
			"value" => "4",
			"description" => ''
		),
		array(
			"type" => "dropdown",
			"class" => "",
			"heading" => esc_html__("Order By", 'wdjewelry'),
			"admin_label" => true,
			"param_name" => "orderby",
			"value" => array(
				"Date" => "date",
				"Title" => "title",
				"Rand" => "rand"
			),
			"description" => ''
		),
		array(
			"type" => "dropdown",
			"class" => "",
			"heading" => esc_html__("Order way", 'wdjewelry'),
			"param_name" => "order",
			"value" => array(
				"Descending" => "desc",
				"Ascending" => "asc"
			),
			"description" => esc_html__("Designates the ascending or descending order.", 'wdjewelry')
		),
	)
);
vc_map( $woo_products_params );
?>