<?php


//get data
$button = $_GET['submit'];
$search = $_GET['search'];


$s = $_GET['s'];
if (!$s)
$s = 0;


$e = 5; // Just change to how many results you want per page


$next = $s + $e;
$prev = $s - $e;


echo "
<body text='#D6D6D6' link='#D6D6D6'>
<div id='menu'> 
<center>
</center> 
</div>

<div>
<form action='/search.php'>
      <a href='/index.html'><img src='/images/rocketbreakermenu.png' border='0px'></a>
      <input name='search' type='text' class='searchtext' value='' size='50'>
      <input name='submit' type='submit' class='searchbutton' id='search' value='Search Rocketbreaker'>
    </div>



</form>

"
;


  
  //connect to database
  mysql_connect("localhost","root","");
  mysql_select_db("webnet");
   
   //explode out search term
   $search_exploded = explode(" ",$search);
   
   foreach($search_exploded as $search_each)
   {
   
        //construct query
    $x++;
    if ($x==1)
     $construct .= "keywords LIKE '%$search_each%'";
    else
     $construct .= " OR keywords LIKE '%$search_each%'";
   
   }
   
  //echo outconstruct
  $constructx = "SELECT * FROM searchengine WHERE $construct";
  
  $construct = "SELECT * FROM searchengine WHERE $construct LIMIT $s,$e";
  $run = mysql_query($constructx);
  
  $foundnum = mysql_num_rows($run);


  $run_two = mysql_query("$construct");
  
  if ($foundnum==0)
   echo "<p><font color='#000000'>
   <br>
   <br>
   <font face='Calibri' size=4'>No results found for <b>$search</b>. Read Suggestions For more information.<br> <br>
   
   1. Try to <b>search for more specific words</b>.
   <br>
   2. Make sure all words are <b>spelled correctly</b>.
   <br>
   3. If any of these suggestions then it <b>may not be present in our database</b>.</font> 
   <br>
   <br>
   <br>
   </font>
 </p>";
  else
  {
   echo "<div align='right'><table bgcolor='#0000FF' width='100%' height='1px'
<br /></table><table bgcolor='white' width='100%' height='10px'><tr><td><div align='center'><font face='Calibri' color='gray' size='3'>Showing <b>$foundnum</b> result for <b>$search.</b></font></div></td></tr></table><p></div>
<div align='center'>

<!-- Place this tag where you want the +1 button to render -->
<g:plusone size='tall' annotation='inline'></g:plusone>

<!-- Place this render call where appropriate -->
<script type='text/javascript'>
  (function() {
    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
    po.src = 'https://apis.google.com/js/plusone.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
  })();
</script>
</div>

<div align='center'><script type='text/javascript'><!--
google_ad_client = 'ca-pub-3065697484983289';
/* banner */
google_ad_slot = '3788847361';
google_ad_width = 728;
google_ad_height = 90;
//-->
</script>
<script type='text/javascript'
src='http://pagead2.googlesyndication.com/pagead/show_ads.js'>
</script></div>";
   
echo 
"  
	<div id='right'><script type='text/javascript'><!--
google_ad_client = 'ca-pub-3065697484983289';
/* rocketbreakersearch */
google_ad_slot = '1027451647';
google_ad_width = 160;
google_ad_height = 600;
//-->
</script>
<script type='text/javascript'
src='http://pagead2.googlesyndication.com/pagead/show_ads.js'>
</script></div>
	
   <div id='left'><font face='Calibri'>
    <script type='text/javascript'><!--
google_ad_client = 'ca-pub-3065697484983289';
/* blank */
google_ad_slot = '9384647153';
google_ad_width = 120;
google_ad_height = 600;
//-->
</script>
<script type='text/javascript'
src='http://pagead2.googlesyndication.com/pagead/show_ads.js'>
</script>
   </div>
   
   " 
   
;
   
   while ($runrows = mysql_fetch_assoc($run_two))
    while ($runrows = mysql_fetch_assoc($run_two))
   {
    //get data
   $title = $runrows['title'];
   $desc = $runrows['description'];
   $url = $runrows['url'];
   echo "
   <div id='center'>
   		<h4>
		<div id='results'>
   		<a href='http://$url'>
   		<font face='Calibri' color='blue'>$title</font></a>
   		<font face='Calibri' color='#000000'><br>
   		$desc<br>
   		<font face='Calibri' color='darkblue'>$url</font></table></div></h4><br><br>
		</div>

   ";
   
   
   }
?>
<style type="text/css">
*{margin:0px;
padding:0px;
}
.searchtext {	font-size: 18px;
}

.menuheader {
	color: #000;
	font-family: "Calibri";
}
a:link {
	color: #03F;
}
a:visited {
	color:#C0C;
}
a:hover {
	color: #09F;
}
a:active {
	color: #03F;
}

	#menu {
	height:25px;
	padding-top:4px;
	background-image:url(/images/header.png)
	}

	div#left{
		width:170px;
		float:left;
		padding-left:10px;
		padding-top:30px;
		border-right:2px;
	}
		div#center{
		margin-left:170px;
		margin-right:170px;
		padding-left:10px;
		padding-right:50px;
		padding-left:20px;
		padding-top:30px;
		
	}
	

	div#header{
		background-color:#FFF;
		height:80px;
	}
	
	div#right{
		width:170px;
		float:right;
		padding-right:10px;
		padding-left:60px;
		padding-top:30px;
	}
	
	div#footer{
		background-color:#192;
		height:50px;
	
	}
	
	div#results{
		border:dashed;
	
</style>


<div align="center">
<?php
if (!$s<=0)

 echo "
 <font face='Segoe UI Light'><a href='search.php?search=$search&s=$prev'></a></font>";

$i =1; 
for ($x=0;$x<$foundnum;$x=$x+$e)
{


 echo " <a href='search.php?search=$search&s=$x'>$i</a> ";


$i++;


}

if ($s<$foundnum-$e)
  echo "<a href='search.php?search=$search&s=$next'></a>";

	}



?>
</div>
<title></title>

<div>

<center><font face="Calibri" size="+1"><p><img src="/images/footer.png" width="137" height="27"><br>
</p></font></center></div>
