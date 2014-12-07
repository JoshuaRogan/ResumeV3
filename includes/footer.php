<?php 
/**
 *	General Footer page
 *
 */

	$quotes = toolbox::load_json('quotes');
	$quote = $quotes[rand(0, count($quotes)-1)]
?>

<footer> 
	<div class="container">
		<div class="row">
			<section class="col-md-3 twitter-feed"> 
				<h3> Twitter Feed </h3>
				<section id="tweets"> 
					<i class="fa fa-spinner fa-spin fa-3x fa-align-center "></i>
				</section>

			</section>

			<section id="contact" class="col-md-6  text-center">
				<h3 class="footer-title"> Joshua Rogan </h3>

				<address>
					340 Melwood Ave<br>
					Pittsburgh, Pennsylvania 15213<br>
					<a href="mailto:jjjr1122@gmail.com">jjjr1122@gmail.com</a><br>
					(570) 309-1185
				</address>

				<ul class="list-unstyled list-inline social-icons"> 
					<li> <a href="http://www.linkedin.com/pub/josh-rogan/71/a54/7b6" target="_blank"><i class="fa fa-linkedin fa-lg"></i></a> </li>
					<li> <a href="https://www.facebook.com/JoshJRogan" target="_blank"><i class="fa fa-facebook fa-lg" ></i></a> </li>
					<li> <a href="https://twitter.com/joshuarogan" target="_blank"><i class="fa fa-twitter fa-lg" ></i></a> </li>
					<li> <a href="https://plus.google.com/u/0/110939666120885358976" target="_blank"><i class="fa fa-google-plus fa-lg"></i></a> </li>
					<li> <a href="http://www.youtube.com/user/JCubedWorld/featured" target="_blank"><i class="fa fa-youtube fa-lg"></i></a> </li>
					<li> <a href="https://www.flickr.com/photos/119332394@N07/sets/72157644819943084/" target="_blank"><i class="fa fa-flickr fa-lg"></i></a> </li>
				</ul>

			</section> 

			<section class="col-md-3">
				<section> 
					<blockquote class="blockquote-reverse">
						<p>&ldquo;<?php echo $quote->quote ?>&rdquo;</p>
						<cite><?php echo $quote->source ?></cite>
					</blockquote>
				</section>

				<section> 
					<!-- Consider adding W3C or HTML5 Logos with hidden on small devices -->

				</section>
			</section> 

		</div> 
	</div> 
</footer> 