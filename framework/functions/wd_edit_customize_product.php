<?php
add_action( 'wp_enqueue_scripts', 'wdjewelry_eidt_customize_css_product' );
if(!function_exists('wdjewelry_eidt_customize_css_product')){
	function wdjewelry_eidt_customize_css_product(){ 
		/********SETTING CUSSTOM CSS HEADER*******/ 
		//btn
		$custom_css = '';
		$custom_css .= '.pro_bg, .woocommerce div.product .woocommerce-tabs, .woocommerce .woocommerce-cart #content table.cart td, .woocommerce.woocommerce-cart #content table.cart td, .woocommerce-page .woocommerce-cart #content table.cart td, .woocommerce-page.woocommerce-cart #content table.cart td, .woocommerce .woocommerce-cart #content table.cart th, .woocommerce.woocommerce-cart #content table.cart th, .woocommerce-page .woocommerce-cart #content table.cart th, .woocommerce-page.woocommerce-cart #content table.cart th, .woocommerce .woocommerce-cart .cart-collaterals table.shop_table, .woocommerce.woocommerce-cart .cart-collaterals table.shop_table, .woocommerce-page .woocommerce-cart .cart-collaterals table.shop_table, .woocommerce-page.woocommerce-cart .cart-collaterals table.shop_table, .cart_content .wd_content_mini_cart li, nav#options ul li, .woocommerce .products.grid .row-container, .woocommerce ul.products.grid .row-container, .woocommerce-page .products.grid .row-container, .woocommerce-page ul.products.grid .row-container, .woocommerce .products.grid li.product .product-content-left, .woocommerce ul.products.grid li.product .product-content-left, .woocommerce-page .products.grid li.product .product-content-left, .woocommerce-page ul.products.grid li.product .product-content-left, .woocommerce .products.grid li.product .product-content-right, .woocommerce ul.products.grid li.product .product-content-right, .woocommerce-page .products.grid li.product .product-content-right, .woocommerce-page ul.products.grid li.product .product-content-right, .woocommerce .products.grid li.product .product-content-cart, .woocommerce ul.products.grid li.product .product-content-cart, .woocommerce-page .products.grid li.product .product-content-cart, .woocommerce-page ul.products.grid li.product .product-content-cart, .woocommerce .products.list .row-container, .woocommerce ul.products.list .row-container, .woocommerce-page .products.list .row-container, .woocommerce-page ul.products.list .row-container, .single-post .wd_content_single > article, .single-post .wd_content_single .content, div.ts-team2, .wd_pricing_style_image, .wd_princing_style_text, .woocommerce .widget_shopping_cart li, .woocommerce.widget_shopping_cart li, .woocommerce ul.product_list_widget li, .woocommerce .widget_price_filter .ui-slider .ui-slider-handle, .woocommerce.widget_price_filter .ui-slider .ui-slider-handle, .woocommerce-page .widget_price_filter .ui-slider .ui-slider-handle, .woocommerce-page.widget_price_filter .ui-slider .ui-slider-handle, .woocommerce .price_slider_wrapper .ui-widget-content, .woocommerce-page .price_slider_wrapper .ui-widget-content{background-color:'.get_theme_mod('pro_bg','#fff').'}';
		$custom_css .= '.pro_label, .woocommerce span.onsale, .woocommerce-page span.onsale{background-color:'.get_theme_mod('pro_label','#a07936').'}';
		$custom_css .= '.pro_label, .woocommerce span.onsale, .woocommerce-page span.onsale {color:'.get_theme_mod('pro_label_color','#fff').'}';
		$custom_css .= '.pro_title, .woocommerce div.product .product_title, .woocommerce div.product .related h2, .woocommerce div.product #tab-reviews .woocommerce-Reviews-title, .woocommerce a.title-product, .woocommerce-page a.title-product, .woocommerce .products.list .add_to_cart_button.button, .woocommerce .products.list .product_type_simple.button, .woocommerce ul.products.list .add_to_cart_button.button, .woocommerce ul.products.list .product_type_simple.button, .woocommerce-page .products.list .add_to_cart_button.button, .woocommerce-page .products.list .product_type_simple.button, .woocommerce-page ul.products.list .add_to_cart_button.button, .woocommerce-page ul.products.list .product_type_simple.button, .woocommerce .products.list .wd_quickshop_handler, .woocommerce ul.products.list .wd_quickshop_handler, .woocommerce-page .products.list .wd_quickshop_handler, .woocommerce-page ul.products.list .wd_quickshop_handler, .woocommerce .products.list .compare-button, .woocommerce ul.products.list .compare-button, .woocommerce-page .products.list .compare-button, .woocommerce-page ul.products.list .compare-button, .woocommerce .products.list .yith-wcwl-add-to-wishlist, .woocommerce ul.products.list .yith-wcwl-add-to-wishlist, .woocommerce-page .products.list .yith-wcwl-add-to-wishlist, .woocommerce-page ul.products.list .yith-wcwl-add-to-wishlist, .woocommerce div.product .compare-button, .woocommerce div.product .yith-wcwl-add-to-wishlist, .woocommerce .woocommerce-cart .cart_totals h2, .woocommerce.woocommerce-cart .cart_totals h2, .woocommerce-page .woocommerce-cart .cart_totals h2, .woocommerce-page.woocommerce-cart .cart_totals h2, .woocommerce .woocommerce-checkout h3, .woocommerce.woocommerce-checkout h3, .woocommerce-page .woocommerce-checkout h3, .woocommerce-page.woocommerce-checkout h3, .woocommerce .product-title, .woocommerce .widget_shopping_cart li > a:nth-child(2), .woocommerce.widget_shopping_cart li > a:nth-child(2), .woocommerce ul.product_list_widget li > a:nth-child(1),.product-name {color:'.get_theme_mod('pro_title','#202020').'}';

		$custom_css .= '.pro_title_hover, .pro_title:focus, .woocommerce div.product .product_title:hover, .woocommerce div.product .product_title:focus, .woocommerce div.product .related h2:hover, .woocommerce div.product .related h2:focus, .woocommerce div.product #tab-reviews .woocommerce-Reviews-title:hover, .woocommerce div.product #tab-reviews .woocommerce-Reviews-title:focus, .woocommerce a.title-product:hover, .woocommerce a.title-product:focus, .woocommerce-page a.title-product:hover, .woocommerce-page a.title-product:focus, .woocommerce .products.list .add_to_cart_button.button:hover, .woocommerce .products.list .add_to_cart_button.button:focus, .woocommerce .products.list .product_type_simple.button:hover, .woocommerce .products.list .product_type_simple.button:focus, .woocommerce ul.products.list .add_to_cart_button.button:hover, .woocommerce ul.products.list .add_to_cart_button.button:focus, .woocommerce ul.products.list .product_type_simple.button:hover, .woocommerce ul.products.list .product_type_simple.button:focus, .woocommerce-page .products.list .add_to_cart_button.button:hover, .woocommerce-page .products.list .add_to_cart_button.button:focus, .woocommerce-page .products.list .product_type_simple.button:hover, .woocommerce-page .products.list .product_type_simple.button:focus, .woocommerce-page ul.products.list .add_to_cart_button.button:hover, .woocommerce-page ul.products.list .add_to_cart_button.button:focus, .woocommerce-page ul.products.list .product_type_simple.button:hover, .woocommerce-page ul.products.list .product_type_simple.button:focus, .woocommerce .products.list .wd_quickshop_handler:hover, .woocommerce .products.list .wd_quickshop_handler:focus, .woocommerce ul.products.list .wd_quickshop_handler:hover, .woocommerce ul.products.list .wd_quickshop_handler:focus, .woocommerce-page .products.list .wd_quickshop_handler:hover, .woocommerce-page .products.list .wd_quickshop_handler:focus, .woocommerce-page ul.products.list .wd_quickshop_handler:hover, .woocommerce-page ul.products.list .wd_quickshop_handler:focus, .woocommerce .products.list .compare-button:hover, .woocommerce .products.list .compare-button:focus, .woocommerce ul.products.list .compare-button:hover, .woocommerce ul.products.list .compare-button:focus, .woocommerce-page .products.list .compare-button:hover, .woocommerce-page .products.list .compare-button:focus, .woocommerce-page ul.products.list .compare-button:hover, .woocommerce-page ul.products.list .compare-button:focus, .woocommerce .products.list .yith-wcwl-add-to-wishlist:hover, .woocommerce .products.list .yith-wcwl-add-to-wishlist:focus, .woocommerce ul.products.list .yith-wcwl-add-to-wishlist:hover, .woocommerce ul.products.list .yith-wcwl-add-to-wishlist:focus, .woocommerce-page .products.list .yith-wcwl-add-to-wishlist:hover, .woocommerce-page .products.list .yith-wcwl-add-to-wishlist:focus, .woocommerce-page ul.products.list .yith-wcwl-add-to-wishlist:hover, .woocommerce-page ul.products.list .yith-wcwl-add-to-wishlist:focus, .woocommerce div.product .compare-button:hover, .woocommerce div.product .compare-button:focus, .woocommerce div.product .yith-wcwl-add-to-wishlist:hover, .woocommerce div.product .yith-wcwl-add-to-wishlist:focus, .woocommerce .woocommerce-cart .cart_totals h2:hover, .woocommerce .woocommerce-cart .cart_totals h2:focus, .woocommerce.woocommerce-cart .cart_totals h2:hover, .woocommerce.woocommerce-cart .cart_totals h2:focus, .woocommerce-page .woocommerce-cart .cart_totals h2:hover, .woocommerce-page .woocommerce-cart .cart_totals h2:focus, .woocommerce-page.woocommerce-cart .cart_totals h2:hover, .woocommerce-page.woocommerce-cart .cart_totals h2:focus, .woocommerce .woocommerce-checkout h3:hover, .woocommerce .woocommerce-checkout h3:focus, .woocommerce.woocommerce-checkout h3:hover, .woocommerce.woocommerce-checkout h3:focus, .woocommerce-page .woocommerce-checkout h3:hover, .woocommerce-page .woocommerce-checkout h3:focus, .woocommerce-page.woocommerce-checkout h3:hover, .woocommerce-page.woocommerce-checkout h3:focus, .woocommerce .product-title:hover, .woocommerce .product-title:focus, .woocommerce .widget_shopping_cart li > a:nth-child(2):hover, .woocommerce .widget_shopping_cart li > a:nth-child(2):focus, .woocommerce.widget_shopping_cart li > a:nth-child(2):hover, .woocommerce.widget_shopping_cart li > a:nth-child(2):focus, .woocommerce ul.product_list_widget li > a:nth-child(1):hover, .woocommerce ul.product_list_widget li > a:nth-child(1):focus{color:'.get_theme_mod('pro_title_hover','#a07936').'}';
		$custom_css .= '.pro_rating, .woocommerce .star-rating span:before, .woocommerce-page .star-rating span:before {color:'.get_theme_mod('pro_rating','#a07936').'}';
		$custom_css .= '.pro_price, .woocommerce .products li.product .price, .woocommerce ul.products li.product .price, .woocommerce-page .products li.product .price, .woocommerce-page ul.products li.product .price, .woocommerce .amount, .woocommerce-page .amount{color:'.get_theme_mod('pro_price','#202020').'}';
		$custom_css .= '.pro_price_sale, .woocommerce .products li.product .price ins, .woocommerce-page .products li.product .price ins, .woocommerce ins .amount, .woocommerce-page ins .amount{color:'.get_theme_mod('pro_price_sale','#a07936').'}';

		$custom_css .= '.pro_options_bg, .wd_before_shop_loop nav#options ul li {background-color:'.get_theme_mod('pro_options_bg','#fff').'}';
		$custom_css .= '.pro_options_border, nav#options ul li {border-color:'.get_theme_mod('pro_options_border','#ebebeb').'}';
		$custom_css .= '.pro_options_color, .wd_before_shop_loop nav#options ul li:after, .woocommerce nav.woocommerce-pagination, .woocommerce-page nav.woocommerce-pagination {color:'.get_theme_mod('pro_options_color','#c7c7c7').'}';
		$custom_css .= '.pro_options_active, .wd_before_shop_loop nav#options ul li#grid:hover, .wd_before_shop_loop nav#options ul li#grid.active, .wd_before_shop_loop nav#options ul li#list:hover, .wd_before_shop_loop nav#options ul li#list.active {background-color:'.get_theme_mod('pro_options_active_bg','#a07936').'}';
		$custom_css .= '.pro_options_active, .wd_before_shop_loop nav#options ul li#grid:hover, .wd_before_shop_loop nav#options ul li#grid.active, .wd_before_shop_loop nav#options ul li#list:hover, .wd_before_shop_loop nav#options ul li#list.active{border-color:'.get_theme_mod('pro_options_active_bd','#a07936').'}';

		$custom_css .= '.pro_btn, html .site-header .woocommerce #respond input#submit:disabled, html .site-header .woocommerce #respond input#submit[disabled]:disabled, html .site-header .woocommerce a.button:disabled, html .site-header .woocommerce a.button[disabled]:disabled, html .site-header .woocommercebutton.button:disabled,html .site-header .woocommerce button.button[disabled]:disabled, html .site-header .woocommerce input.button:disabled, html .site-header .woocommerce input.button[disabled]:disabled, html .woocommerce div.product .single_add_to_cart_button, html .woocommerce .woocommerce-cart .wc-proceed-to-checkout a.checkout-button, html .woocommerce.woocommerce-cart .wc-proceed-to-checkout a.checkout-button, html .woocommerce-page .woocommerce-cart .wc-proceed-to-checkout a.checkout-button, html .woocommerce-page.woocommerce-cart .wc-proceed-to-checkout a.checkout-button{background-color:'.get_theme_mod('pro_btn_bg','#f7f7f7').'}';
		$custom_css .= '.pro_btn, html .site-header .woocommerce #respond input#submit:disabled, html .site-header .woocommerce #respond input#submit[disabled]:disabled, html .site-header .woocommerce a.button:disabled, html .site-header .woocommerce a.button[disabled]:disabled, html .site-header .woocommercebutton.button:disabled,html .site-header .woocommerce button.button[disabled]:disabled, html .site-header .woocommerce input.button:disabled, html .site-header .woocommerce input.button[disabled]:disabled, html .woocommerce div.product .single_add_to_cart_button, html .woocommerce .woocommerce-cart .wc-proceed-to-checkout a.checkout-button, html .woocommerce.woocommerce-cart .wc-proceed-to-checkout a.checkout-button, html .woocommerce-page .woocommerce-cart .wc-proceed-to-checkout a.checkout-button, html .woocommerce-page.woocommerce-cart .wc-proceed-to-checkout a.checkout-button{color:'.get_theme_mod('pro_btn_color','#a07936').'}';
		$custom_css .= '.pro_btn, html .site-header .woocommerce #respond input#submit:disabled, html .site-header .woocommerce #respond input#submit[disabled]:disabled, html .site-header .woocommerce a.button:disabled, html .site-header .woocommerce a.button[disabled]:disabled, html .site-header .woocommercebutton.button:disabled,html .site-header .woocommerce button.button[disabled]:disabled, html .site-header .woocommerce input.button:disabled, html .site-header .woocommerce input.button[disabled]:disabled, html .woocommerce div.product .single_add_to_cart_button, html .woocommerce .woocommerce-cart .wc-proceed-to-checkout a.checkout-button, html .woocommerce.woocommerce-cart .wc-proceed-to-checkout a.checkout-button, html .woocommerce-page .woocommerce-cart .wc-proceed-to-checkout a.checkout-button, html .woocommerce-page.woocommerce-cart .wc-proceed-to-checkout a.checkout-button{border-color:'.get_theme_mod('pro_btn_bd','#a07936').'}';

		$custom_css .= '.pro_btn:hover, .site-header .woocommerce #respond input#submit:hover:disabled, .site-header .woocommerce a.button:hover:disabled, .site-header .woocommerce button.button:hover:disabled, .site-header .woocommerce input.button:hover:disabled, .woocommerce div.product .single_add_to_cart_button:hover, .woocommerce .woocommerce-cart .wc-proceed-to-checkout a.checkout-button:hover, .woocommerce.woocommerce-cart .wc-proceed-to-checkout a.checkout-button:hover, .woocommerce-page .woocommerce-cart .wc-proceed-to-checkout a.checkout-button:hover, .woocommerce-page.woocommerce-cart .wc-proceed-to-checkout a.checkout-button:hover, .pro_btn:focus, .site-header .woocommerce #respond input#submit:focus:disabled, .site-header .woocommerce a.button:focus:disabled, .site-header .woocommerce button.button:focus:disabled, .site-header .woocommerce input.button:focus:disabled, .woocommerce div.product .single_add_to_cart_button:focus, .woocommerce .woocommerce-cart .wc-proceed-to-checkout a.checkout-button:focus, .woocommerce.woocommerce-cart .wc-proceed-to-checkout a.checkout-button:focus, .woocommerce-page .woocommerce-cart .wc-proceed-to-checkout a.checkout-button:focus, .woocommerce-page.woocommerce-cart .wc-proceed-to-checkout a.checkout-button:focus, html .site-header .woocommerce #respond input#submit:disabled:hover, html .site-header .woocommerce #respond input#submit:disabled:focus, html .site-header .woocommerce #respond input#submit[disabled]:disabled:hover, html .site-header .woocommerce #respond input#submit[disabled]:disabled:focus, html .site-header .woocommerce a.button:disabled:hover, html .site-header .woocommerce a.button:disabled:focus, html .site-header .woocommerce a.button[disabled]:disabled:hover, html .site-header .woocommerce a.button[disabled]:disabled:focus, html .site-header .woocommercebutton.button:disabled:hover, html .site-header .woocommercebutton.button:disabled:focus, html .site-header .woocommerce button.button[disabled]:disabled:hover, html .site-header .woocommerce button.button[disabled]:disabled:focus, html .site-header .woocommerce input.button:disabled:hover, html .site-header .woocommerce input.button:disabled:focus, html .site-header .woocommerce input.button[disabled]:disabled:hover, html .site-header .woocommerce input.button[disabled]:disabled:focus, html .woocommerce div.product .single_add_to_cart_button:hover, html .woocommerce div.product .single_add_to_cart_button:focus, html .woocommerce .woocommerce-cart .wc-proceed-to-checkout a.checkout-button:hover, html .woocommerce .woocommerce-cart .wc-proceed-to-checkout a.checkout-button:focus, html .woocommerce.woocommerce-cart .wc-proceed-to-checkout a.checkout-button:hover, html .woocommerce.woocommerce-cart .wc-proceed-to-checkout a.checkout-button:focus, html .woocommerce-page .woocommerce-cart .wc-proceed-to-checkout a.checkout-button:hover, html .woocommerce-page .woocommerce-cart .wc-proceed-to-checkout a.checkout-button:focus, html .woocommerce-page.woocommerce-cart .wc-proceed-to-checkout a.checkout-button:hover, html .woocommerce-page.woocommerce-cart .wc-proceed-to-checkout a.checkout-button:focus{background-color:'.get_theme_mod('pro_btn_bg_hv','#a07936').'}';
		$custom_css .= '.pro_btn:hover, .site-header .woocommerce #respond input#submit:hover:disabled, .site-header .woocommerce a.button:hover:disabled, .site-header .woocommerce button.button:hover:disabled, .site-header .woocommerce input.button:hover:disabled, .woocommerce div.product .single_add_to_cart_button:hover, .woocommerce .woocommerce-cart .wc-proceed-to-checkout a.checkout-button:hover, .woocommerce.woocommerce-cart .wc-proceed-to-checkout a.checkout-button:hover, .woocommerce-page .woocommerce-cart .wc-proceed-to-checkout a.checkout-button:hover, .woocommerce-page.woocommerce-cart .wc-proceed-to-checkout a.checkout-button:hover, .pro_btn:focus, .site-header .woocommerce #respond input#submit:focus:disabled, .site-header .woocommerce a.button:focus:disabled, .site-header .woocommerce button.button:focus:disabled, .site-header .woocommerce input.button:focus:disabled, .woocommerce div.product .single_add_to_cart_button:focus, .woocommerce .woocommerce-cart .wc-proceed-to-checkout a.checkout-button:focus, .woocommerce.woocommerce-cart .wc-proceed-to-checkout a.checkout-button:focus, .woocommerce-page .woocommerce-cart .wc-proceed-to-checkout a.checkout-button:focus, .woocommerce-page.woocommerce-cart .wc-proceed-to-checkout a.checkout-button:focus, html .site-header .woocommerce #respond input#submit:disabled:hover, html .site-header .woocommerce #respond input#submit:disabled:focus, html .site-header .woocommerce #respond input#submit[disabled]:disabled:hover, html .site-header .woocommerce #respond input#submit[disabled]:disabled:focus, html .site-header .woocommerce a.button:disabled:hover, html .site-header .woocommerce a.button:disabled:focus, html .site-header .woocommerce a.button[disabled]:disabled:hover, html .site-header .woocommerce a.button[disabled]:disabled:focus, html .site-header .woocommercebutton.button:disabled:hover, html .site-header .woocommercebutton.button:disabled:focus, html .site-header .woocommerce button.button[disabled]:disabled:hover, html .site-header .woocommerce button.button[disabled]:disabled:focus, html .site-header .woocommerce input.button:disabled:hover, html .site-header .woocommerce input.button:disabled:focus, html .site-header .woocommerce input.button[disabled]:disabled:hover, html .site-header .woocommerce input.button[disabled]:disabled:focus, html .woocommerce div.product .single_add_to_cart_button:hover, html .woocommerce div.product .single_add_to_cart_button:focus, html .woocommerce .woocommerce-cart .wc-proceed-to-checkout a.checkout-button:hover, html .woocommerce .woocommerce-cart .wc-proceed-to-checkout a.checkout-button:focus, html .woocommerce.woocommerce-cart .wc-proceed-to-checkout a.checkout-button:hover, html .woocommerce.woocommerce-cart .wc-proceed-to-checkout a.checkout-button:focus, html .woocommerce-page .woocommerce-cart .wc-proceed-to-checkout a.checkout-button:hover, html .woocommerce-page .woocommerce-cart .wc-proceed-to-checkout a.checkout-button:focus, html .woocommerce-page.woocommerce-cart .wc-proceed-to-checkout a.checkout-button:hover, html .woocommerce-page.woocommerce-cart .wc-proceed-to-checkout a.checkout-button:focus{color:'.get_theme_mod('pro_btn_color_hv','#f7f7f7').'}';
		$custom_css .= '.pro_btn:hover, .site-header .woocommerce #respond input#submit:hover:disabled, .site-header .woocommerce a.button:hover:disabled, .site-header .woocommerce button.button:hover:disabled, .site-header .woocommerce input.button:hover:disabled, .woocommerce div.product .single_add_to_cart_button:hover, .woocommerce .woocommerce-cart .wc-proceed-to-checkout a.checkout-button:hover, .woocommerce.woocommerce-cart .wc-proceed-to-checkout a.checkout-button:hover, .woocommerce-page .woocommerce-cart .wc-proceed-to-checkout a.checkout-button:hover, .woocommerce-page.woocommerce-cart .wc-proceed-to-checkout a.checkout-button:hover, .pro_btn:focus, .site-header .woocommerce #respond input#submit:focus:disabled, .site-header .woocommerce a.button:focus:disabled, .site-header .woocommerce button.button:focus:disabled, .site-header .woocommerce input.button:focus:disabled, .woocommerce div.product .single_add_to_cart_button:focus, .woocommerce .woocommerce-cart .wc-proceed-to-checkout a.checkout-button:focus, .woocommerce.woocommerce-cart .wc-proceed-to-checkout a.checkout-button:focus, .woocommerce-page .woocommerce-cart .wc-proceed-to-checkout a.checkout-button:focus, .woocommerce-page.woocommerce-cart .wc-proceed-to-checkout a.checkout-button:focus, html .site-header .woocommerce #respond input#submit:disabled:hover, html .site-header .woocommerce #respond input#submit:disabled:focus, html .site-header .woocommerce #respond input#submit[disabled]:disabled:hover, html .site-header .woocommerce #respond input#submit[disabled]:disabled:focus, html .site-header .woocommerce a.button:disabled:hover, html .site-header .woocommerce a.button:disabled:focus, html .site-header .woocommerce a.button[disabled]:disabled:hover, html .site-header .woocommerce a.button[disabled]:disabled:focus, html .site-header .woocommercebutton.button:disabled:hover, html .site-header .woocommercebutton.button:disabled:focus, html .site-header .woocommerce button.button[disabled]:disabled:hover, html .site-header .woocommerce button.button[disabled]:disabled:focus, html .site-header .woocommerce input.button:disabled:hover, html .site-header .woocommerce input.button:disabled:focus, html .site-header .woocommerce input.button[disabled]:disabled:hover, html .site-header .woocommerce input.button[disabled]:disabled:focus, html .woocommerce div.product .single_add_to_cart_button:hover, html .woocommerce div.product .single_add_to_cart_button:focus, html .woocommerce .woocommerce-cart .wc-proceed-to-checkout a.checkout-button:hover, html .woocommerce .woocommerce-cart .wc-proceed-to-checkout a.checkout-button:focus, html .woocommerce.woocommerce-cart .wc-proceed-to-checkout a.checkout-button:hover, html .woocommerce.woocommerce-cart .wc-proceed-to-checkout a.checkout-button:focus, html .woocommerce-page .woocommerce-cart .wc-proceed-to-checkout a.checkout-button:hover, html .woocommerce-page .woocommerce-cart .wc-proceed-to-checkout a.checkout-button:focus, html .woocommerce-page.woocommerce-cart .wc-proceed-to-checkout a.checkout-button:hover, html .woocommerce-page.woocommerce-cart .wc-proceed-to-checkout a.checkout-button:focus{border-color:'.get_theme_mod('pro_btn_bd_hv','#a07936').'}';

		wp_add_inline_style('wdjewelry-main.css',$custom_css);
	}

}		