<?php  
 $connect = mysqli_connect("", "", "", ""); 
 if(isset($_POST["submit"]))  
 {  
      if(!empty($_POST["search"]))  
      {  
           $query = str_replace(" ", "+", $_POST["search"]);  
           header("location:advance_search.php?search=" . $query);  
      }  
 }  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Webslesson Tutorial | Search multiple words at a time in Mysql php</title>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
      </head>  
      <body>  
           <br /><br />  
           <div class="container" style="width:500px;">  
                <h3 align="center">Search multiple words at a time in Mysql php</h3><br />  
                <form method="post">  
                     <label>Enter Search Text</label>  
                     <input type="text" name="search" class="form-control" value="<?php if(isset($_GET['search'])) echo $_GET['search']; ?>" />  
                     <br />  
                     <input type="submit" name="submit" class="btn btn-info" value="Search" />  
                </form>  
                <br /><br />  
                <div class="table-responsive">  
                     <table class="table table-bordered">  
                     <?php  
                     if(isset($_GET["search"]))  
                     {  
                          $condition = '';  
                          $query = explode(" ", $_GET["search"]);  
                          foreach($query as $text)  
                          {  
                               $condition .= "site_title LIKE '%".mysqli_real_escape_string($connect, $text)."%' OR ";  
                          }  
                          $condition = substr($condition, 0, -4);  
                          $sql_query = "SELECT * FROM website WHERE " . $condition;  
                          $result = mysqli_query($connect, $sql_query);  
                          if(mysqli_num_rows($result) > 0)  
                          {  
                               while($row = mysqli_fetch_array($result))  
                               {  
                                   // echo '<tr><td>'.$row["site_title"].'</td></tr>';  
                                    echo "<a href='$row[2]'><font size='3' color='#0000cc'> <b>$row[1]</b> </font></a><br>";					
echo "<font size='2' color='#006400'> $row[2] </font><br>";					
echo "<font size='2' color='#666666'> $row[4] </font><br><br>";
                               }  
                          }  
                          else  
                          {  
                               echo '<label>Data not Found</label>';  
                          }  
                     }  
                     ?>  
                     </table>  
                </div>  
           </div>  
      </body>  
 </html>  