/* 
 _____   _           _         _                        _                  
|_   _| | |         | |       | |                      | |                 
  | |   | |__   __ _| |_ ___  | |_ ___  _ __ ___   __ _| |_ ___   ___  ___ 
  | |   | '_ \ / _` | __/ _ \ | __/ _ \| '_ ` _ \ / _` | __/ _ \ / _ \/ __|
 _| |_  | | | | (_| | ||  __/ | || (_) | | | | | | (_| | || (_) |  __/\__ \
 \___/  |_| |_|\__,_|\__\___|  \__\___/|_| |_| |_|\__,_|\__\___/ \___||___/

Oh nice, welcome to the js file of dreams.
Enjoy responsibly!
@ihatetomatoes

*/

jQuery(document).ready(function() {
	"use strict";
	jQuery('body').addClass('loaded');
	jQuery('[data-toggle="tooltip"]').tooltip();


	/* Ajax Update Cart After Remove Cart Item */
	jQuery('.woocommerce').on('click', '.cart .cart_item .product-remove a', function(event) {
		var ajaxurl = main.ajax_url;
		jQuery.ajax({
			type : 'POST',
			 url: ajaxurl,
			data : {action : 'update_tini_cart'},
			success : function(respones){
					jQuery('.cart-mini-content').html(respones);
					
			}
		});			
	} );

});