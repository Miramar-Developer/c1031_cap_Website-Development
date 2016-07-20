<?php 

$current_page = "contact";
require("header.php"); 

?>
<script src="javascripts/jquery.captec.validate.js" type="text/javascript"></script>
		<div class="row hero-contact">
		<div class="six columns hero-contact-textarea">
			<div class="hero-text hero-contact-text">Contact Captec for all support, product or service enquiries</div>
			<div class="hero-sub-text products-hero-sub-text">Expert support no extra cost<br>Professional training</div>
		</div>
		<div class="six columns hero-contact-phone hide-for-small">
		<img src="images/contact_hero_phone.png">
		</div>
	</div>
</header>

<services>
	<div class="services">
		<div class="row">
			<div class="ten columns centered contact-container">
				<div class="row">
					<div class="six columns">
						<div class="area-title contact-title">Contact</div>
						<div class="area-blue-line contact-line">______</div>
						<div class="contact-text">
						CAPTEC Systems Ltd<br>
						John Eccles House<br>
						Oxford Science Park,<br>
						Oxford OX4 4GP<br>
						<br>
						+44 (0)1865 911 044<br>
						<br>
						<a href="mailto:contact@captecsystems.com" class="contact-email">contact@captecsystems.com</a>
						</div>
					</div>
					<div class="six columns">
						<div class="area-title contact-title">Mail</div>
						<div class="area-blue-line contact-line">______</div>
							<form id="contact_form" method="post" action="send_mail">
								<div class="row">
									<div class="six columns">
										<input type="text" name="name" id="name" class="contact-input" placeholder="Name">
									</div>
									<div class="six columns">
										<input type="text" name="email" id="email" class="contact-input" placeholder="Email">
									</div>
								</div>

								<div class="row">
									<div class="twelve columns">
									<textarea placeholder="Message" name="message" id="message" class="contact-textarea"></textarea>
									<input type="hidden" name="valid" id="valid">
									</div>
								</div>	
								<div class="row" id="contact_thanks" style="display:none;">
									<div class="twelve columns">
									Thank you for your message. Captec will get back to you soon with a response.
									</div>
								</div>
								<div class="row">
									<div class="twelve columns">
									 <div class="captec-button contact-button">
										 <button>SEND</button>
									 </div>
									</div>
								</div>	
							</form>	
					</div>
				</div>
			</div>
		</div>
	</div>
</services>  
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
<script>
function initialize() {
  var myLatlng = new google.maps.LatLng(51.716613,-1.21474);
  var mapOptions = {
    zoom: 13,
    scrollwheel: false,
    center: new google.maps.LatLng(51.735,-1.238966)
  }
  var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

  var marker = new google.maps.Marker({
      position: myLatlng,
      map: map,
      title: 'Captec Systems'
  });
}

google.maps.event.addDomListener(window, 'load', initialize);
    </script>
    <style>
     #map-canvas {
        height: 400px;
        margin: 0px;
        padding: 0px
      }
    </style>
<div id="map-canvas"></div>
<!--<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9887.64966905572!2d-1.2142284500000349!3d51.71634484999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4876c0e1709f4625%3A0x6ba6732b774e3a34!2sOxford+OX4+4GP%2C+UK!5e0!3m2!1sen!2suk!4v1386948974919" width="100%" height="400" frameborder="0" style="border:0"></iframe>-->


<?php 
require("footer.php"); 
?>