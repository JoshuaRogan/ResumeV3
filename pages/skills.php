<?php
	/*		Skills Page
	 *	
	 *
	 */

	$skill_words = toolbox::load_json('skill-graph');
	shuffle($skill_words);


?>
<div id="waterdrops-banner" class="container-fluid banner img-banner"> 
	<cite>Photo Credit: Josh Rogan - April 2014</cite>
</div>

<section class="container" id="content"> 
	<h2> Knowledge </h2>

	<section id="skill-explanations">

		<section data-sr class="row"> 
				<div class="col-md-4 text-center center-block"> 
					<i class="fa fa-html5 half"></i>
					<i class="fa fa-css3 half"></i>
				</div>
				<div class="col-md-8">
					<h3> Web Developing </h3>
					<p> I develop high quality <strong>responsive</strong> mobile first websites. Designed with a focus on <strong>minimalism</strong> to engage the user with your unique content. I follow strict programming standards of CSS &amp; HTML using standard libraries for my projects such as Twitter Bootstrap for the front-end and CakePHP for the back-end. I have also developed my own library for rendering mostly static websites such as this one. </p>
					<!-- <p><small> Find out more about me by going to my <a href="#">SOMEPAGE</a> SOMEPAGE! </small></p> -->
				</div>
		</section>

		<section data-sr class="row"> 
				<div class="col-md-4 col-md-push-8 text-center center-block"> 
					<i class="fa fa-terminal"></i>
				</div>

				<div class="col-md-8 col-md-pull-4">
					<h3> Programming </h3>
					<p> I am familiar with many different programming languages including <strong>Java, C, C++, PHP, Python, JavaScript, and Ruby</strong>. I am comfortable working in both <strong>Unix</strong> and <strong>Windows</strong> environments. I have a strong mobile background from developing mobile web applications. I am an advocate of <strong>Object Oriented Programming</strong>. The principle of inheritance provides for making programs reusable, ensuring a more programmer-friendly and efficient structure.</p>
					<!-- <p><small> Find out more about me by going to my <a href="#">SOMEPAGE</a> SOMEPAGE! </small></p> -->
				</div>				
		</section>

	

		<section data-sr class="row"> 
				<div class="col-md-4 text-center center-block"> 
					<i class="fa fa-picture-o"></i>
				</div>

				<div class="col-md-8">
					<h3> Design </h3>
					<p> I am a strong advocate of <strong>flat minimal design</strong> that focuses on content rather than design. I use design as a tool to focus on content in the way that is most intuitive and aesthetically pleasing. My work in photography and videography gives me a unique eye for interface design. I use a CSS preprocessor for design consistency, and am comfortable using <strong>Photoshop, Illustrator, Lightroom, Premiere Pro, After Effects</strong> and various other design tools.</p>
					<!-- <p><small> Find out more about me by going to my <a href="#">flickr</a>, <a href="#">somewhere</a> </small></p> -->
				</div>
		</section>

		<section data-sr class="row"> 
				<div class="col-md-4 col-md-push-8 text-center center-block"> 
					<i class="fa fa-laptop"></i>
				</div>

				<div class="col-md-8 col-md-pull-4">
					<h3> Everything Else </h3>
					<p> I have years of experience working as a <strong>technology consultant</strong> and in <strong>technical support</strong> which has given me an expertise in a wide variety of fields. This makes me an extremely adaptable worker who can figure out an effective solution for any technical problem.    </p>
					<p><small> Find out more about my work and education history by going to my <a href="/experience">experience</a> page</small></p>
				</div>				
		</section>

	</section>

	<!-- Still want to do this (Design my own consistant logos) -->
	<section data-sr id="company-logos" class="text-center">

		<section  data-sr class="row"> 
	
			<section class="col-xs-2"><i class="fa fa-google"></i></section>
			<section class="col-xs-2"><i class="fa fa-stack-overflow"></i></section>
			<section class="col-xs-2"><i class="fa fa-reddit"></i></section>
			<section class="col-xs-2"><i class="fa fa-linux"></i></section>
			<section class="col-xs-2"><i class="fa fa-pied-piper-alt"></i></section>
			<section class="col-xs-2"><i class="fa fa-github"></i></section>


		</section>

	</section>

	<!-- CSS PROBLEM -->
	<section data-sr id="detailed"> 
		<h2> Detailed Skill Set </h2>

		<div class="row">
			<section class="col-md-4"> 
				<h3> Web Developing </h3>
				<canvas id="webdev-chart"></canvas>
				<div class="text-center"></div>
			</section>

			<section class="col-md-4"> 
				<h3> Programming </h3>
				<canvas id="programming-chart"></canvas>
				<div class="text-center"></div>
			</section>

			<section class="col-md-4"> 
				<h3> Design &amp; Video Production </h3>
				<canvas id="design-chart"></canvas>
				<div class="text-center"></div>
			</section>
		</div>
	</section>
	<!-- CSS PROBLEM -->

	<section data-sr id="word-cloud" class="row"> 
		<p class="text-center"> 
		<?php 
			$weights = array(300,400,700,900);
			$i = 0; 
			foreach($skill_words as $word){
				
				$font_size = $word->size * 0.7 . "px";;

				// $font_size = rand(10,$word->size);
				// $font_size = $font_size * 1.0 . "px";

				$weight = $weights[$i++];
				echo "<span style='font-size: $font_size; font-weight: $weight'>$word->name </span>"; 
			}
		?>
		</p>
	</section>









</section>
