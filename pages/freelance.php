<?php
/**
 *	Freelance Page
 *
 */

?>

<section class="container" id="content"> 
	<h2> Packages </h2>
	<div data-sr class="row text-center">

	  <div class="col-md-4">
	  	<h3> Static Website </h3>
	  	<i class="fa fa-globe fa-5x"></i>
	  	<p> <strong>Prices starting at $100</strong> </p>
	  	<p> <strong>Who is it for?:</strong> Personal resume, small businesses information website, or content that doesn't change often. </p>
	  	<p> <strong>What does it offer?</strong> This package is great for a personal website or small business website with pages that are meant primarily for information. It provides a fully unique web solution that meets your needs. </p>
	  	<p> <strong> Unlimited bandwidth and storage </strong> </p>
	  </div>

	  <div class="col-md-4">
	  	<h3> Dynamic Website </h3>
	  	<i class="fa fa-sitemap fa-5x"></i>
	  	<p> <strong>Prices starting at $500</strong> </p>
	  	<p> <strong>Who is it for?:</strong> Advanced personal websites, small and medium businesses, content that requires a database system. </p>
	  	<p> <strong>What does it offer?</strong> This package is aimed as a web solution that contains dynamic content. Some examples are ecommerce sites that have users sign in and purchase websites, ... It offers emailing, shopping, discussion forums,   </p>
	  </div>

	  <div class="col-md-4">
	  	<h3> Dynamic Interactive Website </h3>
	  	<i class="fa fa-tachometer fa-5x"></i>
	  	<p> <strong>Prices starting at $1,000</strong> </p>
	  	<p> <strong>Who is it for?:</strong> Primarily small and medium businesses for fast <em>real time</em> applications. </p>
	  	<p> <strong>What does it offer?</strong> This package is for advanced  websites that require constant communication between the user and the server. This allows for push notifications, instant communication, instant feedback and more!  </p>
	  </div>

	</div>

	<h2> What do I offer? </h2>
	<div data-sr class="row text-center">

		<div class="col-sm-3">
			<h3> Hosting </h3>
			<i class="fa fa-gears fa-5x"></i>
			<p> Multiple tiers: Shared, Virtual Private Server, Cloud Based, and more! Also provide configuring of domain names.</p>
		</div>

		<div class="col-sm-3">
			<h3> Maintenance </h3>
			<i class="fa fa-code fa-5x"></i>
			<p> Provide long term support and maintenance for the entire website!</p>
		</div>

	<!-- 	<div class="col-sm-3">
			<h3> Consulting </h3>
			<i class="fa fa-briefcase fa-5x"></i>
			<p> Multiple tiers, shared, vps, elasitc, cloud based </p>
			<p> Suit any needs </p>
		</div> -->

		<div class="col-sm-3">
			<h3> Redesign </h3>
			<i class="fa fa-eraser fa-5x"></i>
			<p> Redesign your website with a theme of your choice or from the ground up. </p>
		</div>

		<div class="col-sm-3">
			<h3> Meetings </h3>
			<i class="fa fa-coffee fa-5x"></i>
			<p> One-on-one meetings online or in person so we get your web solution right the first time! </p>
		</div>

	</div>

	<div data-sr class="row text-center">
		<div class="col-sm-3">
			<h3> Payment</h3>
			<i class="fa fa-credit-card fa-5x"></i>
			<p> Flexible payment options including: credit, debit, check, PayPal and more. Plenty of financing options available too! </p>
		</div>

		<div class="col-sm-3">
			<h3> Photography &amp; Video </h3>
			<i class="fa fa-camera fa-5x"></i>
			<p> High quality dSLR photography and video sessions. Lots of unique stock images to choose from!   </p>

		</div>

		<div class="col-sm-3">
			<h3> Backups </h3>
			<i class="fa fa-cloud fa-5x"></i>
			<p> Cloud based backups to protect your data. </p>
		</div>

		<div class="col-sm-3">
			<h3> CMS </h3>
			<i class="fa fa-folder-open fa-5x"></i>
			<p> Popular content management system options such as <a href="http://wordpress.org/about/" target="_blank"> Word Press</a>, <a href="#">Joomla </a> or your favorite CMS. </p>
		</div>

	<!-- 	<div class="col-sm-3">
			<h3> Word Press </h3>
			<i class="fa fa-folder-open fa-5x"></i>
			<p> Content Mangement System  </p>
		</div> -->

	<!-- 	<div class="col-sm-3">
			<h3> Domains </h3>
			<i class="fa fa-folder-open fa-5x"></i>
			<p> Content Mangement System  </p>
		</div> -->
	</div>

	

	<div data-sr class="row"> 
	<h2> Get a quote</h2>
		<div class="col-md-8"> 
			<h3> Form </h3>
			<form id="form-freelance" role="form">
				  <div class="form-group">
				    <label for="name">Name</label>
				    <input type="text" class="form-control" id="name" placeholder="John Doe" required>
				  </div>

				  <div class="form-group">
				    <label for="email">Email address</label>
				    <input type="email" class="form-control" id="email"  placeholder="Enter your email" required>
				  </div>

				  <div class="form-group">
				    <label for="email_verify">Verify Email address</label>
				    <input type="email" class="form-control" id="email_verify" autocomplete = "off" placeholder="Enter your email again" required>
				  </div>

				  <div class="form-group">
				    <label for="email">Location </label>
				    <input type="text" class="form-control" id="location" placeholder="Enter your state and/or city" required>
				  </div> 

				  <div class="form-group">
				    <label for="numPages">Estimated Number of Unique Pages </label>
				    <select class="form-control" id="numPages">
					  <option>1-10</option>
					  <option>10-20</option>
					  <option>20-50</option>
					  <option>50+</option>
					</select>
				  </div>

				  <div class="form-group">
				    <label for="idea">Idea</label>
				    <input type="text" class="form-control" id="idea" placeholder="Idea" value="<?php if(isset($subject)) echo $subject; ?>" required>
				  </div>

				  <div class="form-group">
				  	<label for="elabIdea">Elaborate on your idea</label>
				    <textarea class="form-control" placeholder="Please enter your message here" id="elabIdea" rows="8" required></textarea>
				  </div>

				  <button type="submit" id="submit" class="btn btn-primary">Submit</button>
			</form>
		</div>

		<div data-sr class="col-md-4 text-right"> 
			<h3> Additional Information </h3>
			<p> By filling out this form I can give you a rough estimated on what it would approximatley cost. However, exact cost determination will require further communication. </p>

			<h4> Example Costs </h4>
			<ul class="list-group text-left">
			  <li class="list-group-item ">10 Page Static Website <span class="badge">$200.00</span> </li>
			  <li class="list-group-item ">Site Redesign <span class="badge">$250.00</span> </li>
			  <li class="list-group-item ">20 Page Static Website <span class="badge">$300.00</span> </li>
			  <li class="list-group-item ">Dynamic Blog <span class="badge">$500.00</span> </li>
			  <li class="list-group-item ">Dynamic Blog w/User Accounts <span class="badge">$750.00</span> </li>
			  <li class="list-group-item ">Basic Ecommerce Website <span class="badge">$1,250.00</span> </li>
			  <li class="list-group-item "><em><strong>Note:</strong> These are very rough ideas. Prices are negotiable and payment plans can be worked out. Also, discounts can be made for web upgrades if applicable. </em></li>

			</ul>


		</div>
	</div>
</section>