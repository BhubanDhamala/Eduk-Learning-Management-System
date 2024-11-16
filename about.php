<?php include('header_dashboard.php'); ?>
    <body id="class_div">
		<?php include('navbar_about.php'); ?>
        <!-- About Page -->
<section class="container py-5">
  <h1 class="display-4">About Us</h1>
  <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet nulla auctor, vestibulum magna sed, convallis ex.</p>
  <div class="row">
    <div class="col-md-6">
      <h2>Our Mission</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet nulla auctor, vestibulum magna sed, convallis ex.</p>
    </div>
    <div class="col-md-6">
      <h2>Our Team</h2>
      <ul class="list-group">
        <li class="list-group-item">John Doe</li>
        <li class="list-group-item">Jane Doe</li>
        <li class="list-group-item">Bob Smith</li>
      </ul>
    </div>
  </div>
</section>
        <div class="container-fluid">
            <div class="row-fluid">
                <div class="span12" id="content">
                     <div class="row-fluid">
                        <!-- block -->
                        <div class="block">
								<div class="navbar navbar-inner block-header">
									<div id="" class="muted pull-right"><a href="index.php"><i class="icon-arrow-left"></i> Back</a></div>
								</div>
                            <div class="block-content collapse in">
                                <div class="span12">
										<?php
											$mission_query = mysqli_query($conn,"select * from content where title  = 'mission' ")or die(mysqli_error());
											$mission_row = mysqli_fetch_array($mission_query);
											echo $mission_row['content'];
										?>
								<hr>
										<?php
											$mission_query = mysqli_query($conn,"select * from content where title  = 'vision' ")or die(mysqli_error());
											$mission_row = mysqli_fetch_array($mission_query);
											echo $mission_row['content'];
										?>
                                </div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>
                </div>
            </div>
		<?php include('footer.php'); ?>
        </div>
		<?php include('script.php'); ?>
    </body>
</html>