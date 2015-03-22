<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <title>ATA</title>

    <!-- Bootstrap -->
    <link href="bootstrap-newest.css" rel="stylesheet">
	<link href="css/stylesheet.css" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<!--<link href="css/bootstrap-theme.css" rel=stylesheet -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
	  
<?php
    include 'nav.php';
    ini_set('display_errors','On');
    error_reporting('E_ALL');
	require_once "lib/PublicData.class.php";
	$ok = false;
	if(true)
	{
		//$id = 2;
		$ata_lesson = new AtaLesson();
		$array = $ata_lesson->getList();
        //print_r($array["fields"][0]);
		if($array[RETVAL::STATUS] == RETVAL::DB_SUCCESS)
		{
            
			$content = $array["fields"][0]->content;
			$ok = true;
            //print_r($array["fields"][0]);
            //echo (count($array["fields"]));
		}
		else
		{
			$err = $array[RETVAL::ERR_MSG];
			$xtErrMsg = $array[RETVAL::EXTND_ERR_MSG];
		}
	}
?>
	 
	
	  	  <div class="jumbotron" id="wrap">
		
			
			<div class="jumbotron-index">
				<div class="container panel-index panel-default" style="min-height: 600px;">
					
					<div class="col-md-6">
					
					<h2 class="center">Policies</h2>
					
					
					<div class="container">
					<p>Payment for all camps programs (Smash Summer Camps, All Day Fun Camp, 10 and Under High Performance Camp) must be made one week prior to the start of the camp.</p>

					<p>For all other programs, payment can be made the day of the 1st day of the class.</p>

					<p>Cash and Cheques are accepted at Adamson’s Tennis Academy. Please make all Cheques Payable to Adamson’s Tennis Academy.
To avoid a $25.00 cancellation fee, participants for all programs and lessons must cancel a minimum of 24 hours in advance.</p>

					<p>In the event of rain, we will attempt to notify participants prior to the beginning of class or lesson whenever possible. If should be noted that all programs are scheduled with “rain days” in mind and all cancelled classes will be rescheduled.</p>
					</div>
						
					</div>	
					
					<div class="col-md-6">
						<h2 class="center">Promotions</h2>
						
						
						
						<div class="container">
							<div class="panel panel-default">
							  <div class="panel-heading">Smash Summer Camps</div>
							  <div class="panel-body">
								   <div class="lessonsTable">
									   <p>Sign up for 2 or more Smash Summer Camps in July receive $5.00 off before tax per camp.</p>

									<p>Sign up for 3 or more Smash Summer Camps in August receive $10.00 off before tax per camp.</p>

									</div>

							  </div>
							</div>
						</div>
						
						<div class="container">
							<div class="panel panel-default">
							  <div class="panel-heading">All Day Fun Camps</div>
							  <div class="panel-body">
								   <div class="lessonsTable">
									   <p>Sign up for 3 or more ALL DAY FUN CAMP receive $10.00 off before tax per camp.</p>

									</div>

							  </div>
							</div>
						</div>
					
					</div>
					
				</div>
				
			</div>
		
		  
      </div>
	  
	 
	
	  	  <div class="panel-footer center" style="height: 40px; padding:0px;">
		  
		  <div class="container" style="height: 100%; padding-top:0px;">
		  
		  </div>
		  
	  </div>
	  
	  <div style="width:100%; height: 110px; background-color: #222222;">
		  
		  <div class="container" style="height:100%; padding:0px;">
		  
			<div class="col-sm-2 brighten pic hidden-sm hidden-md hidden-lg hidden-xl" style="text-align:center; margin: 0px; padding:0px; background-color: #222222;">
				
				<a href="https://www.facebook.com/pages/Adamsons-Tennis-Academy/287683708034824?ref=stream"><img style="max-height:50px; margin-top: 38px;" src="Images/fb.png"></a>
				<a href="http://www.marchtennisclub.com"><img style="max-height:50px; margin-top: 38px;" src="Images/mtc.png"></a>
				
			  
			</div>  
			  
			  
		  	<div class="col-sm-9" style="height:100%; margin: 0px; padding:0px; background-color: #222222;">
				
				
					<div class="brighten pic">
					<a href="index.php"><img src="Images/ata%20(1).png" style="height:50px; margin-top:20px; margin-left:15px;"/></a>
					</div>
				
					<ul style="  margin: 0px;
  /* max-width: 60%; */
  margin-bottom: 25px;
  left: 80px;
  top: 36px;
  position: absolute;" class="nav">
						<li style="display:inline; width:65px;">
							<a style="display:inline; width:65px;" class="grey" href="programs.php">Programs</a>
						</li>
						<li style="display:inline; width:65px;">
							<a style="display:inline; width:65px;" class="grey" href="lessons.php">Lessons</a>
						</li>
						<li style="display:inline; width:65px;">
							<a style="display:inline; width:65px;" class="grey" href="events.php">Events</a>
						</li>
						<li style="display:inline; width:65px;">
							<a style="display:inline; width:65px;" class="grey" href="info.php?id=contact">Contact</a>
						</li>
					</ul>
				
				<p class="" style="margin-top:15px; margin-left:10px; margin-bottom:0px; color: #424242; ">© 2015 2B||!2B, Inc. All rights reserved.</p>
				
			</div>
			  
			<div class="col-sm-2 brighten pic hidden-xs " style="text-align:right; height:100%; margin: 0px; padding:0px; background-color: #222222;">
				
				<a href="https://www.facebook.com/pages/Adamsons-Tennis-Academy/287683708034824?ref=stream"><img style="max-height:50px; margin-top: 27px;" src="Images/fb.png"></a>
				<a href="http://www.marchtennisclub.com"><img style="max-height:50px; margin-top: 27px;" src="Images/mtc.png"></a>
				
			  
			</div>
			  
			  
		  </div>
		  
	  </div>
	  
		  
		  
	  
  
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
	<script src="js/form.js"></script>
	<script src="js/email.js"></script>
  </body>
</html>