(function($) {


var Page = {

	start : function(settings) {
		Page.config = {
            container: $('.user-content'),
            subMenu: $('.section-content.content-post-thumb'),
            content: $('.section-content.content-post'),
            firstChild: $('.user-content > div:first-child')
        };

        $.extend(Page.config, settings);
        Page.setup();
	},
	setup: function() {
		//make the first child active
		var firstChild = Page.config.firstChild;
		firstChild.addClass('active');
		Page.UIAction();
	},
	UIAction: function() {

		var selectMenu = Page.config.subMenu;
		

		$(selectMenu).click(function(){

			$(this).addClass('active').siblings().removeClass('active');
			var getAttr = $(this).attr('data-content');
			var selectContent = $('.section-content.content-post[data-content="'+ getAttr +'"]');
			$(selectContent).addClass('active').siblings().removeClass('active');
		});

	}
}
	$(document).ready(function(){

		Page.start();


	});

})(jQuery);