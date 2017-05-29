jQuery(document).ready(function($) {
	$(document).foundation();

	$.fn.isInViewport = function() {
	    var elementTop = $(this).offset().top;
	    var elementBottom = elementTop + $(this).outerHeight();

	    var viewportTop = $(window).scrollTop();
	    var viewportBottom = viewportTop + $(window).height();

	    return elementBottom > viewportTop && elementTop < viewportBottom;
	};

	$("a").on('click touch', function(event) {
		// Make sure this.hash has a value before overriding default behavior
		if (this.hash !== "") {
			// Store hash
			var hash = this.hash;
			var $hash = $(hash);

			if ($hash.length == 0)
				return;
			// Using jQuery's animate() method to add smooth page scroll
			// The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area

			// Prevent default anchor click behavior
			event.preventDefault();

			$('html, body').animate({
				scrollTop: $hash.offset().top
			}, 800, function(){
				// Add hash (#) to URL when done scrolling (default click behavior)
				window.location.hash = hash;
			});
		} // End if
	});

	var ms = new Date('2017-08-26T00:00:00').getTime() - new Date().getTime();
	var days = ms/1000/60/60/24;
	$("#countdown .days")[0].innerHTML = Math.ceil(360);
	$("#countdown .info")[0].innerHTML = "days left"

	 /* Replace all SVG images with inline SVG
	 */
	jQuery('img.svg').each(function(){
	    var $img = jQuery(this);
	    var imgID = $img.attr('id');
	    var imgClass = $img.attr('class');
	    var imgURL = $img.attr('src');

	    jQuery.get(imgURL, function(data) {
	        // Get the SVG tag, ignore the rest
	        var $svg = jQuery(data).find('svg');

	        // Add replaced image's ID to the new SVG
	        if(typeof imgID !== 'undefined') {
	            $svg = $svg.attr('id', imgID);
	        }
	        // Add replaced image's classes to the new SVG
	        if(typeof imgClass !== 'undefined') {
	            $svg = $svg.attr('class', imgClass+' replaced-svg');
	        }

	        // Remove any invalid XML tags as per http://validator.w3.org
	        $svg = $svg.removeAttr('xmlns:a');

	        // Check if the viewport is set, if the viewport is not set the SVG wont't scale.
	        if(!$svg.attr('viewBox') && $svg.attr('height') && $svg.attr('width')) {
	            $svg.attr('viewBox', '0 0 ' + $svg.attr('height') + ' ' + $svg.attr('width'))
	        }

	        // Replace image with new SVG
	        $img.replaceWith($svg);

	    }, 'xml');
	});


	resize();


	$( window ).resize(resize);
	$( window ).on("scroll", scroll);

	
	var countdownStarted;
	function resize()
	{
		var height = window.innerHeight;
		$("#header").css("height",height+"px");
		$("#date").css("margin-top", ((height/2)-190)+"px");
	}

	function scroll()
	{
		if (!countdownStarted && $('#countdown').isInViewport()) 
		{
			countdownStarted = true;
			countdown(360);
	    }
	}

	function countdown(tmpDays)
	{
		$("#countdown .days")[0].innerHTML = Math.ceil(tmpDays);
		$("#countdown .info")[0].innerHTML = tmpDays == 1 ? "day left" : "days left"

		tmpDays--;

		var timeoutMs = 500 * Math.pow((days/tmpDays), 10);

		if (tmpDays > days)
		{
			setTimeout(function() { 
				countdown(tmpDays); 
			}, timeoutMs);
		}
	}

});

/*

var x,n=0,rotINT;
function rotateArrow()
{
	x=document.getElementById("down-arrow");
	clearInterval(rotINT);
	rotINT=setInterval(startRotate, 10);
}

function startRotate()
{
	n=n+2;
	x.style.transform="rotate(" + n + "deg)";
	x.style.webkitTransform="rotate(" + n + "deg)";
	x.style.OTransform="rotate(" + n + "deg)";
	x.style.MozTransform="rotate(" + n + "deg)";
	if (n==90)
	{
		clearInterval(rotINT);
	}
}
*/


