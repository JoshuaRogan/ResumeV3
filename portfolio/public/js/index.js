$(document).ready(function () {
	window.sr = new scrollReveal();
	if($('#navigation-toggle').hasClass("fa")){
		
			$('#navigation-toggle').click(function(){
				if($('#navigation-toggle').hasClass("fa-chevron-down")){
					$('#navigation-toggle').removeClass("fa-chevron-down"); 
					$('#navigation-toggle').addClass("fa-chevron-up"); 
				}
				else{
					$('#navigation-toggle').removeClass("fa-chevron-up"); 
					$('#navigation-toggle').addClass("fa-chevron-down"); 
				}
			});
		
		
		

	}
	
	//Animate all of the skills bars on page load
	if($("#main").hasClass("page-skills")){

		//New Chart.js charts 
		Chart.defaults.global.responsive = true;	//Make all the charts respnosive


		// Get context with jQuery - using jQuery's .get() method.
		var webdev_ctx = $("#webdev-chart").get(0).getContext("2d");
		var programming_ctx = $("#programming-chart").get(0).getContext("2d");
		var design_ctx = $("#design-chart").get(0).getContext("2d");



		var colors 				= ["#F0575B", "#2C3E50", "#47BA73", "#16B5D8", "#9b59b6", "#f39c12", "#95a5a6", "#e67e22", "#46BFBD"];
		var colors_highlight 	= [];
		for(i=0; i<colors.length; i++){
			colors_highlight[i] = shadeColor2(colors[i], .1);
		}


		var web_data = [
		    {
		        value: 80,
		        color: colors[0],
		        highlight: colors_highlight[0],
		        label: "HTML5"
		    },
		    {
		        value: 70,
		        color: colors[1],
		        highlight: colors_highlight[1],
		        label: "CSS3"
		    },
		    {
		        value: 60,
		        color: colors[2],
		        highlight: colors_highlight[2],
		        label: "JavaScript"
		    },
		    {
		        value: 80,
		        color: colors[3],
		        highlight: colors_highlight[3],
		        label: "jQuery"
		    },
		    {
		        value: 40,
		        color: colors[4],
		        highlight: colors_highlight[4],
		        label: "Node.js"
		    },
		    {
		        value: 75,
		        color: colors[5],
		        highlight: colors_highlight[5],
		        label: "LESS"
		    },
		];

		// This will get the first returned node in the jQuery collection.
		var prog_data = [
		    {
		        value: 75,
		       	color: colors[0],
		        highlight: colors_highlight[0],
		        label: "PHP"
		    },
		    {
		        value: 70,
		        color: colors[1],
		        highlight: colors_highlight[1],
		        label: "JavaScript"
		    },
		    {
		        value: 60,
		        color: colors[2],
		        highlight: colors_highlight[2],
		        label: "Python"
		    },
		    {
		        value: 50,
		        color: colors[3],
		        highlight: colors_highlight[3],
		        label: "SQL"
		    },
		    {
		        value: 65,
		        color: colors[4],
		        highlight: colors_highlight[4],
		        label: "C/C++"
		    },
		    {
		        value: 50,
		        color: colors[5],
		        highlight: colors_highlight[5],
		        label: "Ruby"
		    },
		    {
		        value: 80,
		        color: colors[6],
		        highlight: colors_highlight[6],
		        label: "Java"
		    }
		];

		var design_data = [
		    {
		        value: 80,
		       	color: colors[0],
		        highlight: colors_highlight[0],
		        label: "Photoshop"
		    },
		    {
		        value: 70,
		        color: colors[1],
		        highlight: colors_highlight[1],
		        label: "Premiere Pro"
		    },
		    {
		        value: 75,
		        color: colors[2],
		        highlight: colors_highlight[2],
		        label: "dSLR Photography"
		    },
		    {
		        value: 80,
		        color: colors[3],
		        highlight: colors_highlight[3],
		        label: "Adobe Lightroom"
		    },
		    {
		        value: 60,
		        color: colors[4],
		        highlight: colors_highlight[4],
		        label: "After Effects"
		    },
		    {
		        value: 50,
		        color: colors[5],
		        highlight: colors_highlight[5],
		        label: "Illustrator"
		    }
		];

		


		var options = Chart.defaults.PolarArea;
		options.legendTemplate = "<ul class=\" list-inline <%=name.toLowerCase()%>-legend\"><% for (var i=0; i<segments.length; i++){%><li><span style=\"color:<%=segments[i].fillColor%>; font-weight:900\"><%if(segments[i].label){%><%=segments[i].label%><%}%></span></li><%}%></ul>";
		options.showScale = false;

		var webdev_chart = new Chart(webdev_ctx).PolarArea(web_data, options);
		var programming_chart = new Chart(programming_ctx).PolarArea(prog_data, options);
		var design_chart = new Chart(design_ctx).PolarArea(design_data, options);


		//Add the legends
		$("#webdev-chart").next().html(webdev_chart.generateLegend());
		$("#programming-chart").next().html(programming_chart.generateLegend());
		$("#design-chart").next().html(design_chart.generateLegend());


		



	}

	//Load the tweets via ajax
	if($("#main").has("twitter-feed")){
		var jqxhr = $.ajax( "/ajax?action=getTweets" )
		  .always(function(data) {
		    $("#tweets").html("Loading...");
		  })
		  .done(function(data) {
		    $("#tweets").html(data);
		  })
		  .fail(function() {
		   	$("#tweets").html("Problem loading tweets...");
		  });
	}

	//Contact me form ajax call
	if($("#main").hasClass("page-contact")){
		//First validate 


		//Submit to PHP (Change Submit Button On doing that)
		$("#form-contact").submit(function(event){
			event.preventDefault();
			$(".form-message").remove();

			//Validate and store the data
			var name = $("#form-contact #name").val();
			var email = $("#form-contact #email").val();
			var verify = $("#form-contact #verify_email").val();
			var subject = $("#form-contact #subject").val();
			var message = $("#form-contact #message").val();
			var valid = true; 

			if(email != verify || email.length == 0) {
				$("#form-contact #verify_email").prev().html(" Verify Email Address <span class='form-message text-danger'> Please verify your emails match! </span>");
				valid = false; 
			}
			if(name.length == 0){
				$("#form-contact #name").prev().html(" Name <span class='form-message text-danger'> Please verify you entered a name! </span>");
				valid = false; 
			}


			if(valid){

				$.ajax({
					type: "GET",
					url: "/ajax?action=sendMessage",
					data: { name: name, email: email, verify_email: verify, subject: subject, message: message }
				})

					.always(function( data ) {
						$("#submit").html("<i style='' class='fa fa-spinner fa-spin fa-2x'></i>");
					})

					.done(function( data ) {
						console.log(data);
						$("#submit").html("Submit");
						$("#form-contact").after("<br /><p style='padding:15px' class='bg-success form-message'>Thank you! Your message has been sent. I will get back to you as soon as possible.</p>");
					})

					.fail(function(){
						$("#submit").html("Submit");
						$("#form-contact").after("<br /><p style='padding:15px' class='bg-danger form-message'>Your message has <strong> not </strong> been sent! Please try again later.</p>");
					});
			}


		});

		

	}

	//Deal with the freelance form 
	if($("#main").hasClass("page-freelance")){
		//Submit to PHP (Change Submit Button On doing that)
		$("#form-freelance").submit(function(event){
			event.preventDefault();
			$(".form-message").remove();

			//Validate and store the data
			var name = $("#form-freelance #name").val();
			var email = $("#form-freelance #email").val();
			var verify = $("#form-freelance #email_verify").val();
			var subject = $("#form-freelance #location").val();
			var numberPages = $("#form-freelance #numPages").find(":selected").text();
			var idea =	$("#form-freelance #idea").val();
			var elabIdea =	$("#form-freelance #elabIdea").val();
			var valid = true; //Initialize the valid flag as true

			//Verify that the emails are correct 
			if(email != verify || email.length == 0) {
				$("#form-freelance #email_verify").prev().html(" Verify Email Address <span class='form-message text-danger'> Please verify your emails match! </span>");
				valid = false; 
			}


			//Verify that a name was entered 
			if(name.length == 0){
				$("#form-contact #name").prev().html(" Name <span class='form-message text-danger'> Please verify you entered a name! </span>");
				valid = false; 
			}

			//if its valid submit the data
			if(valid){
				//Send the data via ajax
				$.ajax({
					type: "GET",
					url: "/ajax?action=sendFreelance",
					data: { name: name, email: email, verify_email: verify, numberPages: numberPages, idea: idea, elabIdea: elabIdea }
				})

					.done(function( data ) {
						console.log(data);
						$("#submit").html("Submit");
						$("#form-freelance").after("<br /><p style='padding:15px' class='bg-success form-message'>Thank you! I recieved the information for your website and will get back to you as soon as possible!</p>");
					})

					.fail(function(){
						$("#submit").html("Submit");
						$("#form-freelance").after("<br /><p style='padding:15px' class='bg-danger form-message'>Your message has <strong> not </strong> been sent! Please try again later.</p>");
					});
			}

		});

	}


	if($("#main").hasClass("page-photography")){
		// or with jQuery
		var $container = $('#photowall');
		// initialize Masonry after all images have loaded  
		$container.imagesLoaded( function() {
			$container.masonry({
				columnWidth: 5,
  				itemSelector: '.item',
  				gutter: 5
			});
		});
		
	}

	
	if($("#main").hasClass("page-logs")){
		//Bind on click to show toggle the display of the task
        $(".task .showtask").click(function(event) {
            event.preventDefault();
            console.log("clicked");
            $(this).parent().next().toggleClass("hidden");
            if($(this).html() == "[View Info]"){
            	$(this).html("[Hide Info]");
            }
            else{
            	$(this).html("[View Info]");
            }
        });

	}

});


//Shade colors "#555555"
function shadeColor1(color, percent) {  
    var num = parseInt(color.slice(1),16), amt = Math.round(2.55 * percent), R = (num >> 16) + amt, G = (num >> 8 & 0x00FF) + amt, B = (num & 0x0000FF) + amt;
    return "#" + (0x1000000 + (R<255?R<1?0:R:255)*0x10000 + (G<255?G<1?0:G:255)*0x100 + (B<255?B<1?0:B:255)).toString(16).slice(1);
}

function shadeColor2(color, percent) {   
    var f=parseInt(color.slice(1),16),t=percent<0?0:255,p=percent<0?percent*-1:percent,R=f>>16,G=f>>8&0x00FF,B=f&0x0000FF;
    return "#"+(0x1000000+(Math.round((t-R)*p)+R)*0x10000+(Math.round((t-G)*p)+G)*0x100+(Math.round((t-B)*p)+B)).toString(16).slice(1);
}

function shadeColor(color, percent) {

    var R = parseInt(color.substring(1,3),16);
    var G = parseInt(color.substring(3,5),16);
    var B = parseInt(color.substring(5,7),16);

    R = parseInt(R * (100 + percent) / 100);
    G = parseInt(G * (100 + percent) / 100);
    B = parseInt(B * (100 + percent) / 100);

    R = (R<255)?R:255;  
    G = (G<255)?G:255;  
    B = (B<255)?B:255;  

    var RR = ((R.toString(16).length==1)?"0"+R.toString(16):R.toString(16));
    var GG = ((G.toString(16).length==1)?"0"+G.toString(16):G.toString(16));
    var BB = ((B.toString(16).length==1)?"0"+B.toString(16):B.toString(16));

    return "#"+RR+GG+BB;
}