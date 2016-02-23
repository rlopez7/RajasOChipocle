/*! viewportSize | Author: Tyson Matanich, 2013 | License: MIT */
(function(n){n.viewportSize={},n.viewportSize.getHeight=function(){return t("Height")},n.viewportSize.getWidth=function(){return t("Width")};var t=function(t){var f,o=t.toLowerCase(),e=n.document,i=e.documentElement,r,u;return n["inner"+t]===undefined?f=i["client"+t]:n["inner"+t]!=i["client"+t]?(r=e.createElement("body"),r.id="vpw-test-b",r.style.cssText="overflow:scroll",u=e.createElement("div"),u.id="vpw-test-d",u.style.cssText="position:absolute;top:-1000px",u.innerHTML="<style>@media("+o+":"+i["client"+t]+"px){body#vpw-test-b div#vpw-test-d{"+o+":7px!important}}<\/style>",r.appendChild(u),i.insertBefore(r,e.head),f=u["offset"+t]==7?i["client"+t]:n["inner"+t],i.removeChild(r)):f=n["inner"+t],f}})(this);

 /**
 * This demo was prepared for you by Petr Tichy - Ihatetomatoes.net
 * Want to see more similar demos and tutorials?
 * Help by spreading the word about Ihatetomatoes blog.
 * Facebook - https://www.facebook.com/ihatetomatoesblog
 * Twitter - https://twitter.com/ihatetomatoes
 * Google+ - https://plus.google.com/u/0/109859280204979591787/about
 * Article URL: http://ihatetomatoes.net/how-to-create-a-parallax-scrolling-website/
 */

( function( $ ) {

	// Setup variables
	$window = $(window);
	$slide = $('.homeSlide');
	$slideTall = $('.homeSlideTall');
	$slideTall2 = $('.homeSlideTall2');
	$body = $('body');

    //FadeIn all sections
	$body.imagesLoaded( function() {
		setTimeout(function() {

		      // Resize sections
		      adjustWindow();

		      // Fade in sections
			  $body.removeClass('loading').addClass('loaded');

		}, 800);
	});

	function adjustWindow(){

		// Init Skrollr
		var s = skrollr.init({
		    forceHeight: false
		});

		// Get window size
	    winH = $window.height();

	    // Keep minimum height 550
	    if(winH <= 550) {
			winH = 550;
		}

	    // Resize our slides
	    $slide.height(winH);
	    $slideTall.height(winH*2);
	    $slideTall2.height(winH*3);

	    // Refresh Skrollr after resizing our sections
	    s.refresh($('.homeSlide'));

	}
	    
		
	var cursorPos = 0,
	        cursorPosPrev = 0,
	        cursorInit = -100,
	        scrollPos = 0;
			var maxScrollLeft = $("div.sc_menu").parent().width();

	    $("div.sc_menu").mousemove(function(e) {
			 
             
	        if (cursorPos == 0) {
	            cursorInit, cursorPos = e.pageX;
	        } else {
	            cursorPos = e.pageX;
	        }
	        if (cursorPos != cursorInit) {

	            $("#cursorPos").empty().append("cursorPos: " + cursorPos);
	            $("#cursorInit").empty().append("cursorInit: " + cursorInit);
	            $("#cursorPosPrev").empty().append("cursorPosPrev: " + cursorPosPrev);

	            if (cursorPos > cursorPosPrev) {
	                scrollPos = scrollPos + 3;
	                $("div.sc_menu").scrollLeft(scrollPos);
	                cursorPosPrev = cursorPos;
	            } else if (cursorPos < cursorPosPrev) {
	                scrollPos = scrollPos - 3;
	                $("div.sc_menu").scrollLeft(scrollPos);
	                cursorPosPrev = cursorPos;
	            }else if( cursorPos > $(window).width() * .7 ){
					 scrollPos = scrollPos + 3;
	                $("div.sc_menu").scrollLeft(scrollPos);
	                cursorPosPrev = cursorPos;					
				} else if (cursorPos < $(window).width() * .3){
					 scrollPos = scrollPos - 3;
	                $("div.sc_menu").scrollLeft(scrollPos);
	                cursorPosPrev = cursorPos;		
				
				}
	        }
	/*if(cursorPos < 558 && cursorPos > 548) {
	                scrollPos = scrollPos+3;
	                $("div.sc_menu").scrollLeft(scrollPos);
	                cursorPosPrev = cursorPos;
	            }*/
	        $("#cursor").empty().append(cursorPos);
    });
	
		$('div.nosBtnLeft').bind('mouseenter', function() {			
			this.iid = setInterval(function() {
				scrollPos = scrollPos + 3;
				/*alert(scrollPos + "=" + maxScrollLeft);*/
				if (scrollPos > maxScrollLeft ){
					$("div.sc_menu").scrollLeft(maxScrollLeft);
					scrollPos=maxScrollLeft;
				}else  if(scrollPos < 0) {					
					$("div.sc_menu").scrollLeft(0);
					scrollPos=0;
				}else {
					$("div.sc_menu").scrollLeft(scrollPos);					
				}
				
			}, 20);
		}).bind('mouseleave', function(){
			this.iid && clearInterval(this.iid);
		});
		
		$('div.nosBtnRight').bind('mouseenter', function() {			
			this.iid = setInterval(function() {
				scrollPos = scrollPos - 3;
				/*alert(scrollPos + "=" + maxScrollLeft);*/
				if (scrollPos < 0){
					$("div.sc_menu").scrollLeft(0);
					scrollPos=0;
				}else	if (scrollPos > maxScrollLeft ){
					$("div.sc_menu").scrollLeft(maxScrollLeft);
					scrollPos=maxScrollLeft;
				}else {				
					$("div.sc_menu").scrollLeft(scrollPos);
				}
				
			}, 20);
		}).bind('mouseleave', function(){
			this.iid && clearInterval(this.iid);
		});

} )( jQuery );