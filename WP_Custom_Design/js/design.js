/*
	Framework Name: MK
	Version: 4.1
	Purpose: Creating Browser-Independent Responsive Web Design
	Advantages: Short Maintainable Code
	Alternatives: Bootstrap 3

	Author: Mario Genchev Koshnicharov
	Email: mr.koshnicharov@gmail.com
	Country: Bulgaria
*/

/*
	Raw JavaScript (Faster Script)
*/



/*
	jQuery (Slower Browser-Independent Script)
*/

jQuery.noConflict();

jQuery(document).ready(function($){

/*
	Variables
*/
	
	var headerIsFixed = false;
	var headerOverflow = false;

	var buttonIsGenerated = false;
	var navIsHidden = false;

	var smallScreen = false;
	var firstToggle = false;

	var links = false;
	var previousHeaderHeight = 0;


/*
	Execute
*/
	
	navLoop();

	// Loading Faster

	if($('.nojq').length){

		$('.nojq').css('position', 'fixed');

	}
	
	agustingNav();
	
/*
	onClick
*/

	if($('.header li').length && buttonIsGenerated){

		var firstLink = $('.toggle');

		firstLink.on('click', function(){

			navToggle();

		});

	}

/*
	Functions
*/
	
	function navLoop(){

		mkNav();

		setInterval(function(){

			agustingNav();

		}, 2000);

	}
	
	function mkNav(){

		if($('.header').length && $('.header li').length){

			var header = $('.header');
			links = $('.header li');
			var firstLink = $('.header ul:first-child');

			firstLink.before('<li class="toggle" id="toggle">Меню</li>');

			buttonIsGenerated = true;

			if(isTheScreenSmall()){

				links.hide();

				navIsHidden = true;

			}else{

				navIsHidden = false;

			}

			navIsHidden = true;

			header.css('position', 'fixed');
			header.css('top', '0px');
			header.css('left', '0px');
			header.css('z-index', '10');

			headerIsFixed = true;

		}

	}

	function navToggle(){

		if(headerIsFixed && buttonIsGenerated){

			if(!navIsHidden){

				links.hide();

				navIsHidden = true;

			}else{

				links.show();

				navIsHidden = false;

			}

		}

		agustingNav();

	}

	function agustingNav(){

		if($('.header').length){

			var header = $('.header');
			var headerHeightValue = header.height();
			var headerHeight = (headerHeightValue + 0.5) + 'px';

			if($('.nojq').length){

				header.css('top', $('.nojq').height() + 0.5 - 0.5 + 'px');

			}
			

			if(headerIsFixed && !headerOverflow){

				$('body').css('padding-top', headerHeight);

				headerOverflow = true;

				previousHeaderHeight = headerHeightValue;

			}

			if(headerHeightValue != previousHeaderHeight){

				$('body').css('padding-top', '-' + (previousHeaderHeight + 1) + 'px');

				$('body').css('padding-top', (headerHeightValue + 1) + 'px');

				previousHeaderHeight = headerHeightValue;

			}

		if($('#aside').length){

			var width = $('#aside').width();

			if(isTheScreenSmall()){

				$('#aside').css('width', '99%');
				$('#aside').css('border-left', '0px');

				

			}else{

				$('#aside').css('width', '39%');

				width = $('#aside').width();
				
				$('#aside').css('width', (width - 1) + 'px');
				$('#aside').css('border-left', '1px dashed #bfbfbf');

			}

		}else{

			

		}

		}

		if(!isTheScreenSmall()){

			links.show();

		}

		if(!isTheScreenSmall()){

			navIsHidden = false;

		}

	}

	function isTheScreenSmall(){

		if($(window).width() <= 1000){

			return true;

		}else{

			return false;

		}

	}

	/*
		Single Paragraph
	*/

	if($('.singlePost').length && $('.singlePost p').length){

		var postArray = $('.singlePost');
		var postCount = postArray.length
		var paragraphArray = $('.singlePost p');
		var paragraphCount = paragraphArray.length;

		if(postCount == 1){
			
			//$('p').addClass('p');

		}

	}

	/*
		Responsive HTML Object & iFrame
	*/

	if($('iframe').length){

		var tag = $('iframe');

		tag.wrap('<div class="iframe"></div>')

	}

	if($('object').length){

		var tag = $('object');

		tag.wrap('<div class="iframe"></div>')

	}

});