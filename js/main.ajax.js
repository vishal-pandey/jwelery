jQuery(document).ready(function(){
	var ajaxurl = main.ajax_url;
	
	jQuery('body').on( 'added_to_cart', function(event) {
		jQuery.ajax({
			type : 'POST',
			 url: ajaxurl,
			data : {action : 'update_tini_cart'},
			success : function(respones){
					jQuery('.cart-mini-content').html(respones);
					
			}
		});			
	});
	
	/*Tini wishlist update*/
	jQuery('body').bind('added_to_wishlist',function(){
		wd_update_header_tini_wishlist();
		var ajaxurl_wishlist = main.ajax_url;
		if( typeof ajaxurl_wishlist == 'undefined')
			return;
		jQuery('.header-top-right-wishlist').addClass("loading");
		
		jQuery.ajax({
			type : 'POST'
			,url : ajaxurl_wishlist	
			,data : {action : 'update_tini_wishlist'}
			,success : function(respones){
				if( jQuery('.header-top-right-wishlist').length > 0 ){
					jQuery('.header-top-right-wishlist').html(respones);
				}
				jQuery('.header-top-right-wishlist').removeClass("loading");
			}
		});
	});
	
	jQuery('#yith-wcwl-form table tbody tr td a.remove, #yith-wcwl-form table tbody tr td a.add_to_cart_button').live('click',function(){
		var _old_num_product = jQuery('#yith-wcwl-form table tbody tr[id^="yith-wcwl-row"]').length;
		var _count = 1;
		var _time_interval = setInterval(function(){
			_count++;
			var _new_num_product = jQuery('#yith-wcwl-form table tbody tr[id^="yith-wcwl-row"]').length;
			if( _old_num_product != _new_num_product || _count == 20 ){
				clearInterval(_time_interval);
				var ajaxurl_wishlist2 = main.ajax_url;
				if( typeof ajaxurl_wishlist2 == 'undefined')
					return;
				jQuery('.header-top-right-wishlist').addClass("loading");
				
				jQuery.ajax({
					type : 'POST'
					,url : ajaxurl_wishlist2	
					,data : {action : 'update_tini_wishlist'}
					,success : function(respones){
						if( jQuery('.header-top-right-wishlist').length > 0 ){
							jQuery('.header-top-right-wishlist').html(respones);
						}
						jQuery('.header-top-right-wishlist').removeClass("loading");
					}
				});
			}
		},500);
	});
	
	
});
	