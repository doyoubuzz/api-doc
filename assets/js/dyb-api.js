/**
 * 
 */

$(document).ready(function() {
	
	var expandList = {
			
			options : {
				'showElement' : null  
			},
			
			init : function(options)
			{				
				$.extend(this.options, options);
				$('body').find('.'+this.options.showElement).toggle();
			}
			
			
	};
	
	$('body').delegate('.js-expand', 'click', (function () {				
		expandList.init({
			'showElement' : $(this).data('showElement')
		});
	}));
});