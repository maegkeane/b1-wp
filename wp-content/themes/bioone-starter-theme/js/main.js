jQuery(document).ready(function($) {


/*
=============================================================================
FUNCTION DECLARATIONS
=============================================================================
*/

//mobile nav toggle	
	var toggleNav = function() {
		$('nav').toggleClass('open');
	};

	$('.handle').click(function() {  
		toggleNav();
    $('body').toggleClass('stop-scrolling');
  });

//charter button 
	var toggleCharterButton = function() {
		$('#charter-supporters-container').toggleClass('open');
		};

	$('.btn-secondary-charter').click(function() {
		toggleCharterButton();	 
 
		$(this).text($(this).text() === 'Show list' ? 'Close list' : 'Show list'); 
			return false;
   	});

//modal window
   	$('a.bio-list-item_short-bio-container').click(function() {
   		var $modal = $(this).siblings('.bio-list-item_modal');
   		if (!$modal.hasClass('visible')) {
   			$modal.addClass('visible');
   			$(this).append('<div class="overlay"></div>');
   		  $('body').addClass('stop-scrolling');
      }
   	});

   	$('body').on('click', '.close, .overlay', function() { 
   		var $listItem = $(this).closest('.bio-list-item'); 
   		$listItem.find('.bio-list-item_modal').removeClass('visible');
   		$listItem.find('.overlay').remove();
      $('body').removeClass('stop-scrolling'); 
   	});

//calendar card
	var toggleCardCalendar = function(calendar) {
	  calendar.find('.card_calendar_expand').toggleClass('visible');
	};

	$('.card_calendar').click(function() {
	  toggleCardCalendar($(this));     
	});

});
