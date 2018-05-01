
<!DOCTYPE html>
<html>
<title>PlayerCard</title>
<head>
  <link rel="stylesheet" href="./css/basics.css">
  <link rel="stylesheet" href="./css/gallery.css">
</head>
<body>

<h1><a href="esportsmain.html">ESports Stats</a></h1>
<ul>
    <li><a href="esportsmain.html"> eSports</a></li>
    <li><a href="home.html"> Home </a> </li>
    <li><a class ="active" href="teams.html"> Teams</a> </li>
    <li><a href="rankings.html"> Rankings</a> </li>
    <li class="search"><input type="text" name="search" placeholder="Search.."></li>
    <li class="title"><h2>StarCraft II</h2></li>
</ul>

<?php
//here is the money code
//all players are going to be accessed through "player_id"
//which will just be their gamer name in all lowercase

$dbconn = pg_connect("host=ec2-54-225-96-191.compute-1.amazonaws.com port=5432 dbname=dc6t0fv0p47let user=zzlazrcayibdym password=ffe9d6e2a22c89e4b2b138dffa35fc438f1b3ca5ac4cac31d150c5ba729c398c");
$query = "SELECT * FROM players WHERE player_id = '" . htmlspecialchars($_GET["name"]) . "'"; //replace ty with variable

$result = pg_query($dbconn, $query);
$row = pg_fetch_row($result);

echo "<h3> $row[12] </h3>";

?>


<div class="bio">
<?php
 echo "<div class=\"element\"> <img id=\"player_img\" class=\"player\" src=\"$row[0]\"></img></div>";
 echo "<div class=\"element_text\"><p><span style=\"color:white;\">helllo</span>$row[1]</p></div>";
 echo "<div class=\"element\"><a href=\"splyce.html\"><img class=\"team_logo\" src=\"$row[2]\"></a></img></div>";
 ?>
</div>




<h3>2018 Statistics</h3>
<div class="stats">
  <div class="basics">
    <table class="basics">
      <h4>Basics</h4>
    	<tr>
    		<th> Race </th>
      </tr>
      <tr>
        <?php
        echo "<td>$row[3]</td>";
        ?>
      <tr>
    		<th> World Ranking </th>
      </tr>
      <tr>
        <?php
        echo "<td>$row[4]</td>";
        ?>
      </tr>
      <tr>
        <th> Longest Win Streak </th>
    	</tr>
      <tr>
        <?php
        echo "<td>$row[5]</td>";
        ?>
      </tr>
    </table>
  </div>
  <div class="matchups">
    <h4>Match Statistics</h4>
    <table class="matchups">
      <tr>
        <th> vs. Protoss </th>
        <th> vs. Terran </th>
        <th> vs. Zerg </th>
      </tr>
      <tr>
        <?php
    		echo "<td> $row[6] </td>";
    		echo "<td> $row[7] </td>";
    		echo "<td> $row[8] </td>";
        ?>
      </tr>
      <tr>
        <th> Current Streak </th>
        <th> Next Match </th>
        <th> Last Match </th>
      </tr>
      <tr>
        <?php
        echo "<td> $row[9] </td>";
        echo $row[10];
        echo $row[11];
        ?>
      </tr>
    </table>
  </div>
</div>


<div class="news">
  <h3>Videos</h3>
  <div class="gallery">
    <a href="https://splyce.gg/content/677/the-battle-for-blizzcon-stats-and-ty" target="_blank"><img src="images/splyce.PNG">
      <div class="desc">The Battle for BlizzCon: Stats and TY</div></a>
  </div>
  <div class="gallery">
    <a href="https://splyce.gg/content/666/the-korean-crown" target="_blank"><img src="./images/Stats1.PNG">
      <div class="desc">The Korean Crown</div></a>
    </div>
  <div class="gallery">
    <a href="https://splyce.gg/content/646/splyce-insights---solar" target="_blank"><img src="./images/Splyce 2.PNG">
      <div class="desc">Splyce Insights - Solar</div></a>
    </div>
</div>


</body>
</html>



<style>
h3{
  font-family: starfont;
  text-decoration: underline;
  margin-bottom: 0px;
  font-weight: bold;
  margin-bottom: 10px;
  color: black;
  font-size: 25pt;
  z-index: 100;
}
h4{
  color: black;
  font-family: starfont;
  text-align: center;
  font-size: 18pt;
  margin: 10px;
  text-decoration: overline underline;
  display: block;
  z-index: 10;
}

div.element{
 margin: 0px;
 padding: 0px;
 margin-top: 15px;
 width: 18%;
 min-width: 210px;
 height: 200px;
 float: left;
 display: block;
}
div.element_text{
  float: left;
  width: 80%;
  display: block;
}
p{
 color: black;
 font-size:14pt;
 text-align: left;
}
div.bio{
  padding: 0px;
  margin: 0px;
  min-height: 200px;
  width: 100%;
  display: flex;
}
div.stats{
  background-color: #e6e6e6;
  border-radius: 25px;
  box-shadow: 5px 10px #333;
  padding: 8px;
  margin: 10px;
  width: 97%;
  display: flex;
}
div.news{
 margin-top: 70px;
 display: block;
 width 100%;
 height: auto;

}
div.basics{
  margin: 0px;
  padding:0px;
  width: 19%;
  float: left;
  padding-right: 10px;
  border-right: 5px inset;
  border-color: #333;
}
div.matchups{
  margin: 0px;
  padding: 0px;
  width: 79%;
  float: right;
}

table.basics{
	margin: 0px;
  width: 100%;
}
table.basics tr{
}
table.basics th{
  font-family: arial;
  text-decoration: underline;
  font-size: 15pt;
  color: #333;
}
table.basics td{
  padding-bottom: 15px;
	text-align: center;
  font-size: 14pt;
	color: black;
}

table.matchups{
	margin-top: 10px;
  width: 100%;
  height: auto;
}
table.matchups tr{
	font-size: 15pt;
	color: #977700;
}
table.matchups th{
  font-family: arial;
  font-size: 15pt;
  text-decoration: underline;
  color: #333;
}
table.matchups td{
  padding-bottom: 15px;
	text-align: center;
  font-size: 14pt;
	color: black;
}
img.team_logo{
 float: right;
 height: 200px;
 width: 200px;
 margin-top: 0px;
 margin-left: -200px;
 margin-right: 1px;
 //opacity: 0.4;
 //z-index: 1000;
}

img.player{
 height: 200px;
 width: 200px;
 margin: 20px;
 margin-top: 0px;
 margin-left: 1px;
 float: left;
 display: flex;
}
img.rSymbol{
  width: 18px;
  height: 18px;
  margin:0px;
  padding:0px;
}

div.gallery {
    width: 280px;
    height: 210px;
}

div.gallery img {
    width: 210px;
}

</style>
