<?php 
// $menu = array("home","about us","contact","company");
// echo "<ul navbar-nav mr-auto>";
// for($i=0; $i<1; $i++)
// {
// echo  "<li class='main-nav'><a href='google.com'> $menu[0]</a> </li>";
// echo  "<li class='main-nav'><a href='about.php'> $menu[1]</a> </li>";
// echo  "<li class='main-nav'><a href='flikart.com'> $menu[2]</a> </li>";
// echo  "<li class='main-nav'><a href='amazon.com'> $menu[3]</a> </li>";
// }
// echo "<ul>";

$a = "week";

if($a == "week")
{
    echo "<a class='list-group-item list-group-item-action'>monday</a><br>";
    echo "<a class='list-group-item list-group-item-action'>tuesday</a><br>";
    echo "<a class='list-group-item list-group-item-action'>wednesday</a><br>";
    echo "<a class='list-group-item list-group-item-action'>thrusday</a><br>";
    echo "<a class='list-group-item list-group-item-action'>friday</a><br>";
    echo "<a class='list-group-item list-group-item-action'>saturday</a><br>";
    echo "<a class='list-group-item list-group-item-action'>sunday</a><br>";
}

else
{
    echo "<a href='about.php'  class='list-group-item list-group-item-action'>yash</a><br>";
    echo "<a href='#' class='list-group-item list-group-item-action'>sachine</a><br>";
    echo "<a href='#' class='list-group-item list-group-item-action'>name</a><br>";
    echo "<a href='#' class='list-group-item list-group-item-action'>name</a><br>";
}
?>
