jQuery(document).ready(function($) {
	$('.bar').each(function() {
		$(this).css('background-color', $(this).attr('data-bgcolor'));
	});

	$('.product-page .views-field-field-stock-level').find('.field-content').each(function() {
		if( $(this)[0].innerText == "0" ) {
			$(this).addClass('outofstock');
			$(this).html('Out of stock');
		} else {
			$(this).hide();
		}
	});

	$('#edit-sort-by').on('change', function() {
		this.form.submit();
	});

	//url parameter value
	var getUrlParameter = function getUrlParameter(sParam) {
	    var sPageURL = window.location.search.substring(1),
	        sURLVariables = sPageURL.split('&'),
	        sParameterName,
	        i;

	    for (i = 0; i < sURLVariables.length; i++) {
	        sParameterName = sURLVariables[i].split('=');

	        if (sParameterName[0] === sParam) {
	            return sParameterName[1] === undefined ? true : decodeURIComponent(sParameterName[1]);
	        }
	    }
	};

	$('#block-tinycuervo-main-menu').find('a[data-drupal-link-system-path="<front>"]').on('click', function() {
	  var hash = $(this).attr('href').substring($(this).attr('href').indexOf('#')+1);
		if( $('#header').hasClass('home') ) {	
		 	$('html, body').animate({
	       scrollTop: $("#"+hash).offset().top
	   	}, 800);
		}
	});


	var bestsellerSelected;
	if( getUrlParameter('bestseller') == "1" ) {
		bestsellerSelected = "selected";
	}

	setTimeout(function(){
		// exposed filter in /produts page
		$('select[name="color"]').find('option:first').after('<option value="yes" '+ bestsellerSelected +'>Bestseller</option>');
		var prodFilterLbl = '<label>Filter by:</label>';
		var prodFilter = '<select id="prod_filter">'+ $('select[name="color"]').html() +'</select>';
		$('#views-exposed-form-products-page-page-1').prepend(prodFilterLbl + prodFilter);

		$('#prod_filter').on('change', function() {
			if( $(this).val() == 'yes' ) {
				$('#edit-bestseller').val('1').trigger('change');
				$('#edit-color').val('All').trigger('change');
				$('#edit-submit-products-page').trigger('click');
			}
			else {
				$('#edit-bestseller').val('All').trigger('change');
				$('#edit-color').val($(this).val()).trigger('change');
				$('#edit-submit-products-page').trigger('click');
			}
		});
	}, 800);

	// custom edit/delete order button
	$('.custom-edit-order').on('click', function(e) {
		e.preventDefault();
		$(this).parent().prev('.mid').addClass('edit-active');
	});
	$('.delete-order-item').on('click', function(e) {
		e.stopPropagation();
	});
	$('.custom-delete-order').on('click', function(e) {
		$(this).find('.delete-order-item').trigger('click');
	});


	// product variation select colors
	$('#block-views-block-similar-product-s-reference-block-1 .color-drop-wrap select').find('option:first').remove();
	var selectDropdown = '<div id="color-drop"><label>Select Color</label></div>';
	$('.commerce-order-item-variation-cart-form-form').before(selectDropdown);
	$('#block-views-block-similar-product-s-reference-block-1 .color-drop-wrap select').appendTo($('#color-drop'));
	$('#color-drop select').prepend('<option selected>'+$('.field-name-field-color').text()+'</option>');


	//out of stock button
	if( $('.oos').length ) {
		$('.c_add-to-cart').text('Out of Stock');
		$('.c_add-to-cart').addClass('disabled');
	}

	//emulate add to cart button when in product page
	$('.c_add-to-cart').on('click', function(e) {
		e.preventDefault();
		$('.field-variations .form-actions input').trigger('click');
	});

	// burger menu
	$('#mobile-burg-menu').on('click', function(e){
		e.preventDefault();
		$(this).toggleClass('open');
		$('body').toggleClass('overlay');
		$('#mobile-sidebar').toggleClass('open');
		$('.layout-content').toggleClass('open');
	});

	// mobile sidebar click
	$('#mobile-sidebar .is-active').on('click', function(e) {
		$('#mobile-burg-menu').removeClass('open');
		$('body').removeClass('overlay');
		$('#mobile-sidebar').removeClass('open');
		$('.layout-content').removeClass('open');
	});

	// mobile sidebar colors category change links
	$('.submenu a').each(function() {
		// var rawurl = "/option=com_content&view=article&id=2&Itemid=2";
		// rawurl = rawurl.substr(rawurl.indexOf('/') + 1);

		var newPath = $(this).attr('href');
		newPath = newPath.substr(newPath.indexOf('/') + 1);
		var newSubmenuPath = '/shop?bestseller=All&color='+newPath;
		$(this).attr('href', newSubmenuPath);
	});


});

jQuery(window).on('scroll', function(){
    var scroll = jQuery(window).scrollTop();
    if(scroll > jQuery('#header').outerHeight(true)){
        jQuery('#header').addClass('scrolled');
    } else{
        jQuery('#header').removeClass('scrolled');
    }
});

jQuery(window).on("load", function($) {
	// Animate loader off screen
	jQuery(".se-pre-con").fadeOut("slow");

	jQuery.instagramFeed({
        'username': 'ladybag_mnl',
        'container': "#instagram-feed",
        'display_profile': false,
        'display_biography': false,
        'display_gallery': true,
        'callback': null,
        'styling': true,
        'items': 2,
        'items_per_row': 2,
        'margin': 2
    });
});