<?php 
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


<?php 

$stuff = array("I am good", "We progressing", "It is a wonderful day", "birds singing");
foreach ($stuff as $message ) {
echo "$message <br>";
}

function aaaa($kek){
      return "this is so wild: $kek <br>";
      }
function zzzz($name = "georgi") {
      return "pls work, my dad is insensitive <br> $name";
      }
echo zzzz(aaaa("nick"));

$_SESSION["l"] = "winnering";
$_SESSION["w"] = "why";
print_r($_SESSION);

?>

<a href="thing.php">click this <a>

</body>
</html>