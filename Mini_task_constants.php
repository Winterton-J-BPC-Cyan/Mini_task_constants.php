<html>

<body>

<?php
define("firstName","Josh");
define("secondName","Winterton");
define("favSubject","3D modeling");
$age="18 years old";
$browser = get_browser(null,True)

echo "My first name is: ";
echo firstName;
echo "<br/><br/>";
echo "My surname is: ";
echo secondName;
echo "<br/><br/>";
echo "My favourite subject is: ";
echo favSubject;
echo "<br/><br/>";
echo "I am currently: ";
echo $age;
echo "<br/><br/>";
echo "My age add five years is: ";
echo $age + "5";
echo "<br/><br/>";
echo $browser;

?>

</body>

</html>
