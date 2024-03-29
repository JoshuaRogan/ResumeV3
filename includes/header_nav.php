<nav class="navbar navbar-default" role="navigation">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
		    	<span class="sr-only">Toggle navigation</span>
		    	<!-- <span class="icon-bar"></span>
		    	<span class="icon-bar"></span>
		    	<span class="icon-bar"></span> -->
		    	<!-- <i id="navigation-toggle" class="fa fa-angle-double-down" ></i> -->
		    	<i id="navigation-toggle" class="fa fa-chevron-down" ></i>
		    	<!-- <i id="navigation-toggle" class="fa fa-list"></i> -->
		    </button>
		    <a class="navbar-brand emboss" href="/home">Joshua Rogan</a>
		</div>

		<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
      		<ul class="nav navbar-nav">
        		<li <?php if(substr($page, 0, strlen($page)-4) == "resume") echo "class='active'"; ?> ><a href="/downloads/resume.pdf" target="_blank">Résumé</a></li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">Hire Me<span class="caret"></span></a>
					<ul class="dropdown-menu" role="menu">
						<li <?php if(substr($page, 0, strlen($page)-4) == "skills") echo "class='active'"; ?> ><a href="/skills">Skill Set</a></li>
						<li <?php if(substr($page, 0, strlen($page)-4) == "experience") echo "class='active'"; ?> ><a href="/experience">Experience</a></li>
        				<li <?php if(substr($page, 0, strlen($page)-4) == "portfolio") echo "class='active'"; ?> ><a href="/portfolio">Portfolio</a></li>
        				<li <?php if(substr($page, 0, strlen($page)-4) == "freelance") echo "class='active'"; ?> ><a href="/freelance"> Pricing Information</a></li>
        				<li <?php if(substr($page, 0, strlen($page)-4) == "contact") echo "class='active'"; ?> ><a href="/contact">Contact Me</a></li>
        				<li class="divider"></li>
        				<li <?php if(substr($page, 0, strlen($page)-4) == "resume") echo "class='active'"; ?> ><a href="/downloads/resume.pdf" target="_blank">Résumé</a></li>
					</ul>
				</li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">Personal<span class="caret"></span></a>
					<ul class="dropdown-menu" role="menu">
						<li <?php if(substr($page, 0, strlen($page)-4) == "personal") echo "class='active'"; ?> ><a href="/personal">About Me</a></li>
						<li <?php if(substr($page, 0, strlen($page)-4) == "achievements") echo "class='active'"; ?> ><a href="/achievements">Achievements</a></li>	
        				<li <?php if(substr($page, 0, strlen($page)-4) == "contact") echo "class='active'"; ?> ><a href="/contact">Contact Me</a></li>
        				<li class="divider"></li>
        				<li <?php if(substr($page, 0, strlen($page)-4) == "resume") echo "class='active'"; ?> ><a href="/downloads/resume.pdf" target="_blank">Résumé</a></li>					

        			</ul>
				</li>
				<li <?php if(substr($page, 0, strlen($page)-4) == "contact") echo "class='active'"; ?> ><a href="/contact">Contact Me</a></li>
        	</ul>
        </div>
	</div>
</nav>