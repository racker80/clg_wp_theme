(function() {
	jQuery(document).ready(function($){


		if($('#clone_private_ip').size() > 0) {
			var clg_clone_private_ip = $.cookies.get('clg_clone_private_ip');
			if(clg_clone_private_ip) {
				$('span.replace_clone_private_ip').html(clg_clone_private_ip);
				$('#clone_private_ip').val(clg_clone_private_ip);
			}
			$('#clone_private_ip').keyup(function() {
			  $('span.replace_clone_private_ip').html($(this).val());
				$.cookies.set('clg_clone_private_ip', $(this).val());
			});
		}


		if($('#master_private_ip').size() > 0) {
			var clg_master_private_ip = $.cookies.get('clg_master_private_ip');
			if(clg_master_private_ip) {
				$('span.replace_master_private_ip').html(clg_master_private_ip);
				$('#master_private_ip').val(clg_master_private_ip);
			}
			$('#master_private_ip').keyup(function() {
			  $('span.replace_master_private_ip').html($(this).val());
				$.cookies.set('clg_master_private_ip', $(this).val());
			});
		}


		$(".bannertabs").tabs("#banner .copy > .pane", {

		    // enable "cross-fading" effect
		    effect: 'fade',
		    fadeOutSpeed: "slow",

		    // start from the beginning after the last tab
		    rotate: true

		    // use the slideshow plugin. It accepts its own configuration
		    }).slideshow();

		
		//BUILD
		$('.tabs').tabs('.panes > .pane', {
			current: 'active',
			tabs:'li'
		}).slideshow({
			clickable:false,
			autoplay:true
		});

/*
		$('.sub-tabs').each(function(){
			var ths = $(this);
			var subPanes = $('#'+ths.data('id')+' .sub-pane');
			//var subPanes = ths.parents('.pane').find('.sub-panes > .sub-pane');
			ths.tabs(subPanes, {
				current: 'active',
				tabs:'li',
				//effect: 'slide'
			}).slideshow({
				clickable:false
			});
		});
*/		

		
		
		$('.survey').each(function(){
			var ths = $(this);
			ths.scrollable({
				keyboard: false,
				mousewheel: false,
				touch: false
			});
			
			
			var api = ths.data('scrollable');
			var items = api.getItems();
			
			ths.height($(items[0]).height());
			api.onBeforeSeek(function(){
				var h = ths.height();
				
				var index = api.getIndex();
				var nextHeight = $(items[index+1]).height();
				if(nextHeight > h) {
					ths.animate({
						height: nextHeight
					}, 200);
					$('.survey-copy').animate({
						height: nextHeight
					}, 200);
				}
				
				
			});
		});
		
		
		

		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
/*******************************************************************************
AJAX STUFF
********************************************************************************/	
		$('.add_build_child').submit(function(){
			var data = $(this).serialize();
			$.ajax({
				url: rackspace.ajaxurl,
				data: data,
				success: function(data){
					var url = rackspace.edit+data;
					location.reload();
					window.open(url, '_blank');
				}
			});
			
			return false;
		});
		
		$('.icon-trash').click(function(){
			var data = {
				action:'delete_page',
				nonce:$(this).data('nonce'),
				ID:$(this).data('id'),
			}
			var parent = $('.section[data-id="'+data.ID+'"]');
			console.log(data);
			var nonce = $(this).data('nonce');
			$.ajax({
				url: rackspace.ajaxurl,
				data: data,
				success: function(data){
					parent.fadeOut('fast', function(){
						$(this).remove();
					});
				}
			});
			
			return false;
		});
		
		
	});
})(jQuery);