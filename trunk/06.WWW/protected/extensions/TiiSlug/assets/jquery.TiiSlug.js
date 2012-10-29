(function($){
    $.fn.extend({
        TiiSlug: function(options) {
        	var defaults = {
				target: 'slug'
			}
			var options =  $.extend(defaults, options);
    		return this.each(function() {
    			$(this).change(function(){
                                $(options.target).attr('value',$(this).val().TiiSlug());
    			});
    		});
    	}
	});
})(jQuery);