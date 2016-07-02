(function($) {


var Page = {

	start : function(settings) {
		Page.config = {
            container: $('.content-container > div'),
            subMenu: $('.section-content.content-post-thumb'),
            content: $('.section-content.content-post'),
            firstChild: $('.content-container > div > div:first-child')
        };

        $.extend(Page.config, settings);
        Page.setup();
	},
	setup: function() {
		//make the first child active
		var firstChild = Page.config.firstChild;
		firstChild.addClass('active');
		Page.config.container.matchHeight();
		Page.UIAction();
	},
	UIAction: function() {

		var selectMenu = Page.config.subMenu;
		

		$(selectMenu).click(function(){

			$(this).addClass('active').siblings().removeClass('active');
			var getAttr = $(this).attr('data-content');
			var selectContent = $('.section-content.content-post[data-content="'+ getAttr +'"]');
			$(selectContent).addClass('active').siblings().removeClass('active');
			$.fn.matchHeight._update();
		});

	}
}
	$(document).ready(function(){

		Page.start();


	});

})(jQuery);