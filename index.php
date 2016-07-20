<?php 

$current_page = "home";
require("header.php"); 

?>
		<div class="row hero-home">
		<div class="five columns hero-home-textarea">
			<div class="hero-text">Communications<br>software solutions for investment managers</div>
			<div class="hero-sub-text">Focussed marketing with Captec products</div>
		</div>
		<div class="six columns hide-for-small"><img src="images/home_hero_screens.png"></div>
	</div>
	</div>
</header>
<what_we_do>
	<div class="what_we_do">
		<div class="row">
			<div class="twelve columns centered">
				<div class="area-title what_we_do-title">What we do &amp; how we think</div>
				<div class="area-blue-line what_we_do-blue-line">______</div>
				<div class="row">
					<div class="twelve columns">
						<div class="four columns home-selector-products">
							<div class=""><a href="products"><img id="home-products-image" src="images/home_products_off.png"/></a></div>
							<div class="area-title what_we_do-subtitle">Products</div>
							<div class="area-blue-line what_we_do-blue-line">______</div>
							<div class="what_we_do_text">Cloud-based software products that improve and focus marketing efforts and investor communications. Gain deeper insight into investor activity and increase asset flows.</div>
							<div class="captec-button"><button data-href="products">READ MORE</button></div>
						</div>
						<div class="four columns home-selector-services">
							<div><a href="services"><img id="home-services-image" src="images/home_services_off.png"/></a></div>
							<div class="area-title what_we_do-subtitle">Services</div>
							<div class="area-blue-line what_we_do-blue-line">______</div>
							<div class="what_we_do_text">IT systems development and data management solutions. Automate manual, time-consuming procedures. Create efficiencies and cost-savings in your business.</div>
							<div class="captec-button"><button data-href="services">READ MORE</button></div>
						</div>
						<div class="four columns home-selector-believe">
							<div><a href="about"><img id="home-believe-image" src="images/home_believe_off.png"/></a></div>
							<div class="area-title what_we_do-subtitle">We believe in</div>
							<div class="area-blue-line what_we_do-blue-line">______</div>
							<div class="what_we_do_text">Intuitive products. User-friendliness. Industry-specific functionality. Value for money. Transparent pricing. Firm-wide fee structure. Expert support. Bespoke features.</div>
							<div class="captec-button"><button data-href="about">READ MORE</button></div>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</what_we_do> 

<hr>

<?php 
require("includes/solutions.php");
require("includes/testimonials.php");
require("footer.php"); 
?>