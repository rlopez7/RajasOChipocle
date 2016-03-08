<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.12.0.min.js"><\/script>')</script>
<script src="<?php bloginfo('template_url'); ?>/js/imagesloaded.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/skrollr.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/_main.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/snap.svg-min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

<!-- Google Analytics: change UA-839919-3 to be your site's ID. 
<script>
    var _gaq=[['_setAccount','UA-839919-3'],['_trackPageview']];
    (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
    g.src='//www.google-analytics.com/ga.js';
    s.parentNode.insertBefore(g,s)}(document,'script'));
</script>-->
<script type="text/javascript">
  $("#porqueBtn").click(function() {
  	if ($(".selected2")[0]) {
	  	$("#porqueBtn").removeClass("moveB");
	  	$("#comoBtn").removeClass("moveB");
	  	$("#queBtn").removeClass("selected2");
	  	$("#queBtn").removeClass("expand");
  		$("#ftr1").removeClass("hideMe");
  		$("#ftr2").removeClass("hideMe");
  	}
  	if ($(".selected3")[0]) {
	  	$("#porqueBtn").removeClass("moveB");
	  	$("#comoBtn").removeClass("expand");
	  	$("#comoBtn").removeClass("selected3");
	  	$("#queBtn").removeClass("moveA");
  		$("#ftr1").removeClass("hideMe");
  		$("#ftr3").removeClass("hideMe");
  	}
    if ($(".selected1")[0]) {
    	$("#queBtn").removeClass("moveA");
    	$("#comoBtn").removeClass("moveA");
    	$("#porqueBtn").removeClass("expand");
    	$("#porqueBtn").removeClass("selected1");
  		$("#ftr2").removeClass("hideMe");
  		$("#ftr3").removeClass("hideMe");
  	}
	else {
  		$("#ftr2").addClass("hideMe");
  		$("#ftr3").addClass("hideMe");
		$("#queBtn").addClass("moveA");
		$("#comoBtn").addClass("moveA");
		$("#porqueBtn").addClass("expand selected1");
	}
  });

  $("#queBtn").click(function() {
    if ($(".selected1")[0]) {
    	$("#queBtn").removeClass("moveA");
    	$("#comoBtn").removeClass("moveA");
    	$("#porqueBtn").removeClass("expand");
    	$("#porqueBtn").removeClass("selected1");
  		$("#ftr2").removeClass("hideMe");
  		$("#ftr3").removeClass("hideMe");
  	}
  	if ($(".selected3")[0]) {
	  	$("#porqueBtn").removeClass("moveB");
	  	$("#comoBtn").removeClass("expand");
	  	$("#comoBtn").removeClass("selected3");
	  	$("#queBtn").removeClass("moveA");
  		$("#ftr1").removeClass("hideMe");
  		$("#ftr3").removeClass("hideMe");
  	}
  	if ($(".selected2")[0]) {
	  	$("#porqueBtn").removeClass("moveB");
	  	$("#comoBtn").removeClass("moveB");
	  	$("#queBtn").removeClass("selected2");
	  	$("#queBtn").removeClass("expand");
  		$("#ftr1").removeClass("hideMe");
  		$("#ftr2").removeClass("hideMe");
  	}
  	else {
  		$("#ftr2").addClass("hideMe");
  		$("#ftr1").addClass("hideMe");
  		$("#porqueBtn").addClass("moveB");
  		$("#comoBtn").addClass("moveB");
  		$("#queBtn").addClass("expand selected2");
  	}
  });

  $("#comoBtn").click(function() {
    if ($(".selected1")[0]) {
    	$("#queBtn").removeClass("moveA");
    	$("#comoBtn").removeClass("moveA");
    	$("#porqueBtn").removeClass("expand");
    	$("#porqueBtn").removeClass("selected1");
  		$("#ftr2").removeClass("hideMe");
  		$("#ftr3").removeClass("hideMe");
  	}
  	if ($(".selected2")[0]) {
	  	$("#porqueBtn").removeClass("moveB");
	  	$("#comoBtn").removeClass("moveB");
	  	$("#queBtn").removeClass("selected2");
	  	$("#queBtn").removeClass("expand");
  		$("#ftr1").removeClass("hideMe");
  		$("#ftr2").removeClass("hideMe");
  	}
  	if ($(".selected3")[0]) {
	  	$("#porqueBtn").removeClass("moveB");
	  	$("#comoBtn").removeClass("expand");
	  	$("#comoBtn").removeClass("selected3");
	  	$("#queBtn").removeClass("moveA");
  		$("#ftr1").removeClass("hideMe");
  		$("#ftr3").removeClass("hideMe");
  	}
  	else {
  		$("#ftr1").addClass("hideMe");
  		$("#ftr3").addClass("hideMe");
  		$("#porqueBtn").addClass("moveB");
  		$("#queBtn").addClass("moveA");
  		$("#comoBtn").addClass("expand selected3");
  	}
  });
  $("#utopiaSld").click(function() {
  	  disableAllSld();
	  $("#mexicanoSld").addClass("collapseSld");
	  $("#nomadaSld").addClass("collapseSld");
	  $("#alquimiaSld").addClass("collapseSld");
	  $("#virtualSld").addClass("collapseSld");
	  $("#utopiaSld").addClass("expandSld selectedA");
  });
  $("#nomadaSld").click(function() {
  	  disableAllSld();
	  $("#utopiaSld").addClass("collapseSld");
	  $("#virtualSld").addClass("collapseSld");
	  $("#alquimiaSld").addClass("collapseSld");
	  $("#mexicanoSld").addClass("collapseSld");
	  $("#nomadaSld").addClass("expandSld selectedA");
  });
  $("#alquimiaSld").click(function() {
  	  disableAllSld();
	  $("#utopiaSld").addClass("collapseSld");
	  $("#nomadaSld").addClass("collapseSld");
	  $("#virtualSld").addClass("collapseSld");
	  $("#mexicanoSld").addClass("collapseSld");
	  $("#alquimiaSld").addClass("expandSld selectedA");
  });
  $("#virtualSld").click(function() {
  	  disableAllSld();
	  $("#utopiaSld").addClass("collapseSld");
	  $("#nomadaSld").addClass("collapseSld");
	  $("#alquimiaSld").addClass("collapseSld");
	  $("#mexicanoSld").addClass("collapseSld");
	  $("#virtualSld").addClass("expandSld selectedA");
  });
  $("#mexicanoSld").click(function() {
  	  disableAllSld();
	  $("#utopiaSld").addClass("collapseSld");
	  $("#nomadaSld").addClass("collapseSld");
	  $("#alquimiaSld").addClass("collapseSld");
	  $("#virtualSld").addClass("collapseSld");
	  $("#mexicanoSld").addClass("expandSld selectedA");
  });
  function disableAllSld(){
	  $("#utopiaSld").removeClass("collapseSld");
	  $("#nomadaSld").removeClass("collapseSld");
	  $("#alquimiaSld").removeClass("collapseSld");
	  $("#virtualSld").removeClass("collapseSld");
	  $("#mexicanoSld").removeClass("collapseSld");

	  $("#utopiaSld").removeClass("expandSld");
	  $("#nomadaSld").removeClass("expandSld");
	  $("#alquimiaSld").removeClass("expandSld");
	  $("#virtualSld").removeClass("expandSld");
	  $("#mexicanoSld").removeClass("expandSld");

	  $("#utopiaSld").removeClass("selectedA");
	  $("#nomadaSld").removeClass("selectedA");
	  $("#alquimiaSld").removeClass("selectedA");
	  $("#virtualSld").removeClass("selectedA");
	  $("#mexicanoSld").removeClass("selectedA");
  }

</script>
<script type="text/javascript">
  $(document).ready(function() {
    /*
			convert a cubic bezier value to a custom mina easing
			http://stackoverflow.com/questions/25265197/how-to-convert-a-cubic-bezier-value-to-a-custom-mina-easing-snap-svg
		*/
		var duration = 250,
			epsilon = (1000 / 60 / duration) / 4,
			firstCustomMinaAnimation = bezier(.42,.03,.77,.63, epsilon),
			secondCustomMinaAnimation = bezier(.27,.5,.6,.99, epsilon),
			animating = false;

		//initialize the slider
		$('.cd-slider-wrapper').each(function(){
			initSlider($(this));
		});

		function initSlider(sliderWrapper) {
			//cache jQuery objects
			var slider = sliderWrapper.find('.cd-slider'),
				sliderNav = sliderWrapper.find('.cd-slider-navigation'),
				sliderControls = sliderWrapper.find('.cd-slider-controls').find('li');

			//store path 'd' attribute values
			var pathArray = [];
			pathArray[0] = slider.data('step1');
			pathArray[1] = slider.data('step4');
			pathArray[2] = slider.data('step2');
			pathArray[3] = slider.data('step5');
			pathArray[4] = slider.data('step3');
			pathArray[5] = slider.data('step6');

			//update visible slide when user clicks next/prev arrows
			sliderNav.on('click', '.next-slide', function(event){
				event.preventDefault();
				nextSlide(slider, sliderControls, pathArray);
			});
			sliderNav.on('click', '.prev-slide', function(event){
				event.preventDefault();
				prevSlide(slider, sliderControls, pathArray);
			});

			//detect swipe event on mobile - update visible slide
			slider.on('swipeleft', function(event){
				nextSlide(slider, sliderControls, pathArray);
			});
			slider.on('swiperight', function(event){
				prevSlide(slider, sliderControls, pathArray);
			});

			//update visible slide when user clicks .cd-slider-controls buttons
			sliderControls.on('click', function(event){
				event.preventDefault();
				var selectedItem = $(this);
				if(!selectedItem.hasClass('selected')) {
					// if it's not already selected
					var selectedSlidePosition = selectedItem.index(),
						selectedSlide = slider.children('li').eq(selectedSlidePosition),
						visibleSlide = retrieveVisibleSlide(slider),
						visibleSlidePosition = visibleSlide.index(),
						direction = '';
					direction = ( visibleSlidePosition < selectedSlidePosition) ? 'next': 'prev';
					updateSlide(visibleSlide, selectedSlide, direction, sliderControls, pathArray);
				}
			});

			//keyboard slider navigation
			$(document).keyup(function(event){
				if(event.which=='37' && elementInViewport(slider.get(0)) ) {
					prevSlide(slider, sliderControls, pathArray);
				} else if( event.which=='39' && elementInViewport(slider.get(0)) ) {
					nextSlide(slider, sliderControls, pathArray);
				}
			});
		}

		function retrieveVisibleSlide(slider, sliderControls, pathArray) {
			return slider.find('.visible');
		}
		function nextSlide(slider, sliderControls, pathArray ) {
			var visibleSlide = retrieveVisibleSlide(slider),
				nextSlide = ( visibleSlide.next('li').length > 0 ) ? visibleSlide.next('li') : slider.find('li').eq(0);
			updateSlide(visibleSlide, nextSlide, 'next', sliderControls, pathArray);
		}
		function prevSlide(slider, sliderControls, pathArray ) {
			var visibleSlide = retrieveVisibleSlide(slider),
					prevSlide = ( visibleSlide.prev('li').length > 0 ) ? visibleSlide.prev('li') : slider.find('li').last();
				updateSlide(visibleSlide, prevSlide, 'prev', sliderControls, pathArray);
		}
		function updateSlide(oldSlide, newSlide, direction, controls, paths) {
			if(!animating) {
				//don't animate if already animating
				animating = true;
				var clipPathId = newSlide.find('path').attr('id'),
					clipPath = Snap('#'+clipPathId);

				if( direction == 'next' ) {
					var path1 = paths[0],
						path2 = paths[2],
						path3 = paths[4];
				} else {
					var path1 = paths[1],
						path2 = paths[3],
						path3 = paths[5];
				}

				updateNavSlide(newSlide, controls);
				newSlide.addClass('is-animating');
				clipPath.attr('d', path1).animate({'d': path2}, duration, firstCustomMinaAnimation, function(){
					clipPath.animate({'d': path3}, duration, secondCustomMinaAnimation, function(){
						oldSlide.removeClass('visible');
						newSlide.addClass('visible').removeClass('is-animating');
						animating = false;
					});
				});
			}
		}

		function updateNavSlide(actualSlide, controls) {
			var position = actualSlide.index();
			controls.removeClass('selected').eq(position).addClass('selected');
		}

		function bezier(x1, y1, x2, y2, epsilon){
			//https://github.com/arian/cubic-bezier
			var curveX = function(t){
				var v = 1 - t;
				return 3 * v * v * t * x1 + 3 * v * t * t * x2 + t * t * t;
			};

			var curveY = function(t){
				var v = 1 - t;
				return 3 * v * v * t * y1 + 3 * v * t * t * y2 + t * t * t;
			};

			var derivativeCurveX = function(t){
				var v = 1 - t;
				return 3 * (2 * (t - 1) * t + v * v) * x1 + 3 * (- t * t * t + 2 * v * t) * x2;
			};

			return function(t){

				var x = t, t0, t1, t2, x2, d2, i;

				// First try a few iterations of Newton's method -- normally very fast.
				for (t2 = x, i = 0; i < 8; i++){
					x2 = curveX(t2) - x;
					if (Math.abs(x2) < epsilon) return curveY(t2);
					d2 = derivativeCurveX(t2);
					if (Math.abs(d2) < 1e-6) break;
					t2 = t2 - x2 / d2;
				}

				t0 = 0, t1 = 1, t2 = x;

				if (t2 < t0) return curveY(t0);
				if (t2 > t1) return curveY(t1);

				// Fallback to the bisection method for reliability.
				while (t0 < t1){
					x2 = curveX(t2);
					if (Math.abs(x2 - x) < epsilon) return curveY(t2);
					if (x > x2) t0 = t2;
					else t1 = t2;
					t2 = (t1 - t0) * .5 + t0;
				}

				// Failure
				return curveY(t2);

			};
		};

		/*
			How to tell if a DOM element is visible in the current viewport?
			http://stackoverflow.com/questions/123999/how-to-tell-if-a-dom-element-is-visible-in-the-current-viewport
		*/
		function elementInViewport(el) {
			var top = el.offsetTop;
			var left = el.offsetLeft;
			var width = el.offsetWidth;
			var height = el.offsetHeight;

			while(el.offsetParent) {
			    el = el.offsetParent;
			    top += el.offsetTop;
			    left += el.offsetLeft;
			}

			return (
			    top < (window.pageYOffset + window.innerHeight) &&
			    left < (window.pageXOffset + window.innerWidth) &&
			    (top + height) > window.pageYOffset &&
			    (left + width) > window.pageXOffset
			);
	}
  });
</script>
<script type="text/javascript">
  $(document).ready(function() {
    $('.carousel').carousel({interval: 5000});
  });
</script>
<?php wp_footer(); ?>
</body>
</html>
