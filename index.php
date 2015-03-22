<?php
    ini_set('display_errors','On');
    error_reporting('E_ALL');
	require_once "lib/PublicData.class.php";
	$ok = false;
?>
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
	<!-- Google Maps API -->
	
	<style>
      #map-canvas {
        min-width: 200px;
        height: 150px;
		max-height: 300px;
      }
    </style>
    <script src="https://maps.googleapis.com/maps/api/js"></script>
    <script>
      function initialize() {
        var mapCanvas = document.getElementById('map-canvas');
        var mapOptions = {
          center: new google.maps.LatLng(45.320568, -75.896194),
          zoom: 15,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        }
        var map = new google.maps.Map(mapCanvas, mapOptions)
		
		var marker = new google.maps.Marker({
		  position: new google.maps.LatLng(45.320568, -75.896194),
		  map: map,
		  title: 'March Tennis Club'
	  });
      }
      google.maps.event.addDomListener(window, 'load', initialize);
    </script>
	<!--<link href="css/bootstrap-theme.css" rel=stylesheet -->
  </head>
  <body>
	  
	  
	<?
	
		include 'nav.php';
	
	?>
    
    <div style="overflow: hidden;" class="slider-size flip">
        
        <img src="img/slider5.jpg" class="img-responsive flip" style="width:100%;">
    
    </div>
	 
	  <div class="jumbotron-index">
		<div class="container panel-index panel-default topUp">
            
            <div class="col-md-8">
                <h3 class=" center">Welcome</h3>
                <hr>
                <p class="lead ">Welcome to Adamson's Tennis Academy where our mission is to provide everyone in the community an opportunity to learn and enjoy the pleasures of Tennis.</p>

                <br/>

                <p class="lead ">From beginner levels to advanced levels, tiny tots to adults, the recreation player to tournament player Adamson's Tennis Academy is steadfast in its focus of offering programs and events that encompass all ages and abilities. </p>

                <br/>

                <p class="center">
                    <a class="btn btn-success hidden-xs hidden-sm drop-shadow" href="#" role="button">Register Today</a>
                    <a class="btn btn-sm btn-success visible-xs visible-sm drop-shadow" href="#" role="button">Register Today</a>
                </p>
            </div>
            
            <div class="col-md-4">
                <h3 class="center">Upcoming Events</h3>
                <hr>
                
                <div class="row">	
				<? 

				if(true)
				{
					$ata_event = new AtaEvent();
					$array = $ata_event->getList();
					//print_r($array["fields"][0]);
					if($array[RETVAL::STATUS] == RETVAL::DB_SUCCESS)
					{

						$content = $array["fields"][0]->content;
						$ok = true;
						//print_r($array["fields"][1]);
						//echo (count($array["fields"]));
					}
					else
					{
						$err = $array[RETVAL::ERR_MSG];
						$xtErrMsg = $array[RETVAL::EXTND_ERR_MSG];
					}
				}


            for ($x=0; $x<(count($array["fields"])); $x++){
                $field = $array["fields"][$x];
            	echo '
              
                    <div class="col-lg-12 contentContainer well">';
            //print_r($array["fields"][$x]);
				
				
                echo "<h3>".$field["event_name"]."  </h3>";
				echo date("Y-M-d  H:i:s", strtotime( $field["event_date_time"] ));
            	//echo $field["content"];
				//echo '  '.$field["event_date_time"].'';
            	echo '<a class="pull-right btn btn-success btn-sm" href="#" role="button">Register</a>
                    </div> ';
            
            }
            ?>		
                </div>
                
            
            </div>
			
			<br/>
			
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
  </body>
</html>