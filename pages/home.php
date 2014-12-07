<?php
	/*		Home Page
	 *	
	 *
	 */
	$quotes = toolbox::load_json('quotes');
	$quote = $quotes[rand(0, count($quotes)-1)]
?>

<!-- ADD PITTSBURGH LANDSCAPE BACKGORUND TRANSPARENT with scrolling effects--> 
<section  id="home-banner" class="container-fluid banner"> 
	<h1 data-sr='reset'> Joshua Rogan </h1>
	<!-- <h2> Hello World</h2> -->
	<div data-sr='reset' class="col-sm-6 col-sm-offset-3">
		<!-- 
		<p> Semiotics Odd Future cold-pressed, hashtag blog DIY bitters crucifix health goth gastropub fashion axe distillery four loko master cleanse pop-up. Wayfarers gluten-free disrupt 8-bit. </p> -->
		<p>&ldquo;<?php echo $quote->quote ?>&rdquo; <!-- - <cite><?php echo $quote->source ?></cite> --></p>
		
		<a href="/contact" class="btn btn-success btn-lg"> Hire Me! </a>
	</div>
</section>

<section class="container" id="content"> 


	<section class="row"> 
		<section class="col-sm-12">
			<h2> Hello World </h2>

			<section  data-sr class="row" id="who-am-i"> 
				<div class="col-md-4 text-center"> 
					<!-- <i class="fa fa-user" style="font-size: 250px;"></i> -->
					<img class='img-responsive center-block' src="/images/who-am-i.png" alt="who am i"> 
				</div>
				<div class="col-md-8">
					<h3> Who am I? </h3>
					<p> Hello, potential employer or stalker! My name is Joshua Rogan. I am currently finishing up my degree of <strong>Computer Science</strong> at the <strong>University of Pittsburgh </strong>. In the past I studied at the University of Scranton, also as a computer science major. I made the dean’s list three times and have a GPA above 3.5 in computer science courses. </p>



					<p> I am a <strong>programmer</strong> &amp; <strong>designer</strong> who specializes in <strong>web development.</strong>
					<p><small> Find out more about me by going to my <a href="/personal">personal</a> page! </small></p>
				</div>
			</section>

			<section data-sr class="row" id="why-hire"> 
				
				<div class="col-md-4 col-md-push-8 text-center"> 
					<!-- <i class="fa fa-suitcase" style="font-size: 250px;"></i> -->
					<img class='img-responsive center-block' src="/images/why-hire-me.png" alt="why hire me">

				</div>

				<div class="col-md-8 col-md-pull-4">
					<h3> Why hire me?  </h3>
					<p> <strong>As a business: </strong>As a freelance web developer, I have experience working with clients in a variety of disciplines, including writers, nurses, professors, and students to name a few. I also have experience as a technical consultant at the University of Scranton. There I assisted students and faculty with a variety of technical support issues. Through my combined work experience and academic training I gained interpersonal and practical skills, making me an <strong>adaptable</strong> and <strong>dependable</strong> employee qualified for any technical field.</p>


					<p> <strong>As an individual:</strong> My experience working as a web developer and technical consultant has shaped my philosophy on professional conduct. I always make myself <strong>approachable</strong>, <strong>easy to contact</strong>, and <strong>flexible</strong> in any way I can. I can meet you in person, by phone or video messaging, or whichever way is most convenient for you. I am also open to working out a payment method that best fits your needs.</p>
					<p> <small>Still not convinced? Check out the <a href="/skills">skills</a>, <a href="/experience"> experience</a>, <a href="/portfolio"> portfolio</a>, and <a href="/achievements">achievements</a> pages or check out my <a href="/downloads/resume.pdf">resumé</a> directly. </small></p>
				</div>

			</section>

			<section data-sr class="row" id="what-offer"> 
				<div class="col-md-4 text-center"> 
					<!-- <i class="fa fa-code" style="font-size: 250px;"></i> -->
					<img class='img-responsive center-block' src="/images/responsive-design.png" alt="responsive design"> 

				</div>
				<div class="col-md-8">
					<h3> What can I offer you? </h3>
					<p> I develop high quality <strong>responsive</strong>, <strong>mobile-first</strong> websites. My design style focuses on <strong>minimalism</strong> to engage the user with your unique content. I follow standard practices of programming and design using widely accepted programming languages, libraries, and tools. For web developing I make sure I am using valid HTML and CSS. I always make it a priority to use the most forward thinking methodologies for my projects. </p>

					<p> <small>Please take a look at the <a href="/freelance">freelance</a> information page if you are looking for a <strong>web developer</strong>. </small></p>
				</div>
			</section>


		
		</section>
	</section>
</section>