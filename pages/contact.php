<?php 
  

  
  if(isset($_GET['problem'])){
    $subject = "Problem on Page: " . ucwords(substr($_GET['problem'], 0, strlen($_GET['problem'])-4)); 

  }

?>

<section data-sr class="container" id="content"> 
  <div class="text-center">
    <h2> Contact Info </h2>

    <address>
      <strong>Josh Rogan</strong><br>
      340 Melwood Ave<br>
      Pittsburgh, Pennsylvania 15213<br>
      <a href="mailto:jjjr1122@gmail.com">jjjr1122@gmail.com</a><br>
      (570) 309-1185
    </address>

    <ul class="list-unstyled list-inline social-icons"> 
      <li> <a href="http://www.linkedin.com/pub/josh-rogan/71/a54/7b6" target="_blank"><i class="fa fa-linkedin fa-2x"></i></a> </li>
      <li> <a href="https://www.facebook.com/JoshJRogan" target="_blank"><i class="fa fa-facebook fa-2x"></i></a> </li>
      <li> <a href="https://twitter.com/joshuarogan" target="_blank"><i class="fa fa-twitter fa-2x"></i></a> </li>
      <li> <a href="https://plus.google.com/u/0/110939666120885358976" target="_blank"><i class="fa fa-google-plus fa-lg"></i></a> </li>
      <li> <a href="http://www.youtube.com/user/JCubedWorld/featured" target="_blank"><i class="fa fa-youtube fa-2x"></i></a> </li>
      <li> <a href="https://www.flickr.com/photos/119332394@N07/sets/72157644819943084/" target="_blank"><i class="fa fa-flickr fa-2x"></i></a> </li>
    </ul>

  </div> 

  <h2> Email Me </h2>
  <p> Please fill out this short form if you would like to contact me directly. This will send an email to my default account and alert me with a text message </p>
  <form id="form-contact" role="form">

    <div class="form-group">
      <label for="name">Name</label>
      <input type="text" class="form-control" id="name" placeholder="John Doe" required>
    </div>

    <div class="form-group">
      <label for="email">Email address</label>
      <input type="email" class="form-control" id="email" placeholder="Enter your email" required>
    </div>  

    <div class="form-group">
      <label for="verify_email">Verify Email address</label>
      <input type="email" class="form-control" id="verify_email" placeholder="Enter your email" required>
    </div>

    <div class="form-group">
      <label for="subject">Subject</label>
      <input type="text" class="form-control" id="subject" placeholder="Subject" value="<?php if(isset($subject)) echo $subject; ?>" required>
    </div>

    <div class="form-group">
      <textarea class="form-control" id="message" placeholder="Please enter your message here" rows="8" required></textarea>
    </div>

    <button  class="btn btn-primary" id="submit">Submit</button>
  </form>
</section>