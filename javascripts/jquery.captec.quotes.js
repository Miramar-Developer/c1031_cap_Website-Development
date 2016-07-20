/**
 * jquery.captec.quotes - jQuery Quotes changer for Captec Systems
 *
 *
 * @version 1 (18. Dec 2013)
 * @author Miramar Group - http://wwww.miramar-group.co.uk
 * @requires jQuery
 *
 */
 
 
$(document).ready(function() {


	function bindQuotes(quote) {
		var numQuotes = quote.length;
		var index = 0;
		var interval = 5000;
		
		//Load first set on page load
		$('.testimonials-quote').fadeOut(600);
			$('.testimonials-quote').promise().done(function(){
				$('.testimonials-quote').html(quote[0][0]);
				$('.testimonials-quote').fadeIn();
			});
			$('.testimonials-quotee').fadeOut();
			$('.testimonials-quotee').promise().done(function(){
				$('.testimonials-quotee').html(quote[0][1]);
				$('.testimonials-quotee').fadeIn();
			});
			
		setInterval(function() {
			$('.testimonials-quote').fadeOut(600);
			$('.testimonials-quote').promise().done(function(){
				$('.testimonials-quote').html(quote[index][0]);
				$('.testimonials-quote').fadeIn();
			});
			$('.testimonials-quotee').fadeOut(600);
			$('.testimonials-quotee').promise().done(function(){
				$('.testimonials-quotee').html(quote[index][1]);
				$('.testimonials-quotee').fadeIn();
			});
			$('.testimonials-quote-image').fadeOut(600).promise().done(function() {
				$('.testimonials-quote-image').fadeIn();
			});
			
			index = (index + 1) % numQuotes;
		}, interval);
	}
	
	/* Quotes go here in the format ['quote message','name of person']
	   Remember to add a comma after the previous entry if adding a new quote. 
	   The final quote does not need a comma at the end  
	*/
	bindQuotes([
	['The range of features is clearly built with investment managers in mind.','Glen Mifsud, COO, Bybrook Capital'],
	['Captec provided us with an institutional-level investor communications platform,<br>that reflected our firm’s professionalism.','Henry Kenner, CEO, Arrowgrass Capital Partners'],
	['We reviewed the CRM marketplace and Captec was the obvious choice for us as a new launch.','Ali Lumsden, CIO, East Lodge Capital'],
	['Data security was a key factor for us. Captec stood out because we had the option to run the system from our own servers. ','Lucy Blair, Head of IR, Avantium Investment Management'],
	['Captec CRM is very straightforward to use and it makes keeping notes on the move really easy.','Megan Kenney, CEO, B1 Capital'],
	['The onboarding and integration process was simple and efficient.','Richard Forss, CTO, Argentière Capital']
	
	]);

	
});
		
	
	