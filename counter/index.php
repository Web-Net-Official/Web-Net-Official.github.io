<?php
     session_start();
     $counter_file = "count.txt";
    /* create counter file if doesn't exists */
     if(!file_exists($counter_file)){
     $f = fopen($counter_file, "w");
     fwrite($f,"0");
     fclose($f);
     }
    /* get current value of counter */
     $f = fopen($counter_file, "r");
     $count = fread($f, filesize($counter_file));
     fclose($f);
    /* set session if not done before and write new counter value */
     if(!isset($_SESSION['visitedBefore'])){
     $_SESSION['visitedBefore'] = TRUE;
     $count++;
     $f = fopen($counter_file, "w");
     fwrite($f, $count);
     fclose($f);
     }
    //optional statement to print counter value
     echo "<h4>Counter : ".$count."</h4>";
    ?>
	<style>
		@import url(http://fonts.googleapis.com/css?family=Ubuntu);
		body{
			background-color: black;
			font-family: 'Ubuntu', sans-serif;
			font-size: 16px;
			line-height: 20px;	
		}
		h4{
			font-size: 18px;
			line-height: 22px;
			color: #00FF00;
		}
		</style>