<?php include "assets/header.php" ?>
<?php include "assets/style.php" ?>
<?php include "assets/nav.php" ?>
<html>
 <body>
 <br><br>
 <!--<img src="icon/cinema.png" width="150" height="100" class="responsive">-->
 <meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

#myInput {
  background-position: 10px 12px;
  background-repeat: no-repeat;
  width: 100%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid red;
  margin-bottom: 12px;
}

#myUL {
  list-style-type: none;
  padding: 0;
  margin: 0;
}

#myUL li a {
  border: 1px solid teal;
   width: 20%;
  margin-top: -1px; /* Prevent double borders */
  background-color: teal;
  padding: 12px;
  text-decoration: none;
  font-size: 18px;
color: black;
  display: block
}

#myUL li a:hover:not(.header) {
  background-color: white;
}
</style>
<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for Movies.." title="Type in a name">
<ul id="myUL">
<li><a href="gtaivlagfix7.0.php">gta iv lag fix 7.0</a><img border="0" src="img/gta-iv-png.png" width="100" height="100"></li>
&nbsp;&nbsp;&nbsp;
<li><a href="mereyaarkishadihe.php">mere yar ki shadi he</a><img border="0" src="img/mereyarkishadihe.jpg" width="100" height="100"></li>
&nbsp;&nbsp;&nbsp;
<li><a href="venom.php">Venom</a><img border="0" src="img/venom.jpg" width="100" height="100"></li>
&nbsp;&nbsp;&nbsp;
<li><a href="dbs.php">Dragon Ball Super Broly(Legendary SSJ)</a><img border="0" src="img/dbs.jpg" width="100" height="100"></li>
&nbsp;&nbsp;&nbsp;
<li><a href="heena.php">Heena</a><img border="0" src="img/heena.jpg" width="100" height="100"></li>
</ul>

<script>
function myFunction() {
    var input, filter, ul, li, a, i;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    ul = document.getElementById("myUL");
    li = ul.getElementsByTagName("li");
    for (i = 0; i < li.length; i++) {
        a = li[i].getElementsByTagName("a")[0];
        if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "";
        } else {
            li[i].style.display = "none";
        }
    }
}
</script>
<?php include "assets/footer.php" ?>
