<?php 
	/**
	 *	Ideas:
	 *		-http://demo.icesoft.md/volta
	 *		-Masonary JS
	 *
	 *
	 *
	 *
	 *
	 *
	 **/

	class photo{
		
	}

	class photoWall{

	}
	

	//Create the photoWall here from the json file "photography.json"
	$skill_words = toolbox::load_json('"photography');

	$images = array_diff(scandir("../public/images/photowall/masonary"), array('..', '.'));
	// $_DEBUG = $images;
	shuffle($images);


?>

<section class="container-fluid" id="content">
	
	<section id="photowall" class="center-block "> 
		<?php 
			

			foreach($images as $image){

				echo "<div class='item'><a href='/images/photowall/$image' target='_blank'><img class=' img-responsive' src='/images/photowall/masonary/$image'></a></div>";
			}

		?>
	</section>
</section>