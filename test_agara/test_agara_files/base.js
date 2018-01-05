(function( window, undefined ) {

	var utility = {
	
//		rollover: function() {
//		
//			var $selector = $('a img[src*="_off"]');
//			
//			$selector
//			.on('mouseover', function(){
//				this.src = this.src.replace('_off', '_on');
//			})
//			.on('mouseout', function(){
//				this.src = this.src.replace('_on', '_off');
//			});
//			
//			$selector.each(function(){
//				$('<img>').attr('src', this.src.replace('_off', '_on'));
//			});
//		
//		},
			
		smoothScroll: function() {
		
			var options = {
				selector: 'a[href*=#]',
				duration: 400,
				easing: 'linear'
			};
			
			var $selector = $(options.selector).not('a[href=#]').not('a[data-smooth=false]'),
			$target = $('html, body');
			
			$selector.on('click', function() {
							
				var data = $(this).data('smooth') || 0;
							
				$target.animate({
					scrollTop: $(this.hash).offset().top + data
				}, {
					duration: options.duration,
					easing: options.easing
				});
			
			return false;
		
		});
		
		},
			
		stripe: function() {
		
			var $stripe = $('.stripe');
      		$stripe.find('tr:nth-child(even),li:nth-child(even)').addClass('even');
		
		},
		
		toggle: function() {
		
			var $toggle = $('.toggle'),
				$toggleButton = $toggle.find('.toggleBtn'),
				$toggleContent = $toggle.find('.toggleContent');
			
			$toggleContent.css('display', 'none');
			
			$toggleButton.on('click', function() {
				var _$toggle = $(this).parents('.toggle'),
				_$toggleContent = _$toggle.find('.toggleContent');
				
				if (_$toggleContent.filter(':animated').length > 0) return false;
				
				_$toggleContent.slideToggle();
				_$toggle.find('.toggleBtn').toggleClass('active');
				return false;
			});
		
		},
		
		dropdown: function() {
		
			$selector = $('.dropdown').find('.hasChild');
		
			$selector
			.on('mouseenter', function() {
				$(this).children('ul:not(:animated)').slideDown('fast');
			})
			.on('mouseleave', function() {
				$(this).children('ul').hide();
			});
		
		}
	
	};

for (var i in utility) utility[i]();

}( window ));