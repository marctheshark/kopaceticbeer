
var beerMenu = document.getElementById('beer-menu'),
menuStyle = window.getComputedStyle(beerMenu),
menuTop = menuStyle.getPropertyValue('top');

var menuButton = document.getElementById('menu-button');

jQuery(document).ready(function() {
		jQuery("#beer-menu").animate({top: '-2000px'}, 1000, function () {
			jQuery("#menu-is-closed").animate({left: '0px'}, 150, function () {
				jQuery("#packaged-menu-closed").animate({left: '0px'}, 150, function() {
					jQuery("#spirits-menu-closed").animate({left: '0px'}, 150);
				});
			});
		});

	jQuery("#menu-is-closed").click(function() {
		jQuery("#menu-is-closed").animate({left: '-300px'}, 250, function () {
			jQuery("#packaged-menu-closed").animate({left: '-300px'}, 250, function () {
				jQuery("#spirits-menu-closed").animate({left: '-300px'}, 250, function () {
					jQuery(".featured-carousel").addClass("closed", function () {
						jQuery("#beer-menu").animate({top: '80px'}, 1000);
					});
				});
			});	
		});
	});

	jQuery("#packaged-menu-closed").click(function() {
		jQuery("#packaged-menu-closed").animate({left: '-300px'}, 250, function () {
			jQuery("#menu-is-closed").animate({left: '-300px'}, 250, function () {
				jQuery("#spirits-menu-closed").animate({left: '-300px'}, 250, function () {
					jQuery(".featured-carousel").addClass("closed", function () {
						jQuery("#packaged-menu").animate({top: '80px'}, 1000);
					});
				});
			});	
		});
	});

	jQuery("#spirits-menu-closed").click(function() {
		jQuery("#spirits-menu-closed").animate({left: '-300px'}, 250, function () {
			jQuery("#menu-is-closed").animate({left: '-300px'}, 250, function () {
				jQuery("#packaged-menu-closed").animate({left: '-300px'}, 250, function () {
					jQuery(".featured-carousel").addClass("closed", function () {
						jQuery("#spirits-menu").animate({top: '80px'}, 1000);
					});
				});
			});	
		});
	});

	jQuery(".menu-is-open").click(function() {
		jQuery("#packaged-menu").animate({top: '-2000px'}, 1000);
		jQuery("#spirits-menu").animate({top: '-2000px'}, 1000);
		jQuery("#beer-menu").animate({top: '-2000px'}, 1000, function () {
			jQuery(".featured-carousel").removeClass("closed", function () {
				jQuery("#menu-is-closed").animate({left: '0px'}, 150, function () {
					jQuery("#packaged-menu-closed").animate({left: '0px'}, 150, function() {
						jQuery("#spirits-menu-closed").animate({left: '0px'}, 150);
					});
				});
			});
		});
	});
});

