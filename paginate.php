<?php

$search = "apple";
// connect to database
require_once('../engine/search/connect-db3.php');
// define how many results you want per page
$results_per_page = 1;
// find out the number of results stored in database
$sql="SELECT * FROM website where site_key like '%$search%'";
$result = mysqli_query($conn, $sql);
$number_of_results = mysqli_num_rows($result);
// determine number of total pages available
$number_of_pages = ceil($number_of_results/$results_per_page);
// determine which page number visitor is currently on
if (!isset($_GET['page'])) {
  $page = 1;
} else {
  $page = $_GET['page'];
}
// determine the sql LIMIT starting number for the results on the displaying page
$this_page_first_result = ($page-1)*$results_per_page;
// retrieve selected results from database and display them on page
$sql="SELECT * FROM website where site_key like '%$search%' LIMIT " . $this_page_first_result . ',' .  $results_per_page;
$result = mysqli_query($conn, $sql);
while($row = mysqli_fetch_array($result)) {
 // echo $row['id'] . ' ' . $row['site_title']. '<br>';
  echo "<a href='$row[2]'><font size='4' color='#0000cc'> <b>$row[1]</b> </font></a><br>";					
echo "<font size='3' color='#006400'> $row[2] </font><br>";					
echo "<font size='3' color='#666666'> $row[4] </font><br><br>";
}	
// display the links to the pages
for ($page=1;$page<=$number_of_pages;$page++) {
  echo '<a href="index.php?page=' . $page . '">' . $page . '</a> ';
}
?>