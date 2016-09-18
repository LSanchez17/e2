<?php
include_once('classes/user.class.php');
include_once('classes/normal.class.php');
include_once('classes/admin.class.php');

$registered = new normal("Regular User","useridregular");
$administrator = new admin("Administrator","adminsmark");

//all of these blocks could be encapsulated into a class, or method
//these could be a method that populates an array based on information from database
//or user input
//little rusty on my oop, so I went with this
$firstname = $registered->setFName("john");
$lasttname = $registered->setLName("doe");
$email = $registered->setmail("john@doe.com");
$type = $registered->settype(1);

$level = $registered->getlevel();
$firstname = $registered->getFName();
$lasttname = $registered->getLName();
$email = $registered->getmail();
$type = $registered->gettype();
$ID = $registered->getID();



$firstname2 = $administrator->setFName("mark");
$lasttname2 = $administrator->setLName("mcmarkface");
$email2 = $administrator->setmail("mark@toe.com");
$type2 = $administrator->settype(2);

$level2 = $administrator->getlevel();
$firstname2 = $administrator->getFName();
$lasttname2 = $administrator->getLName();
$email2 = $administrator->getmail();
$type2 = $administrator->gettype();
$ID2 = $administrator->getID();

?>





<!DOCTYPE HTML>
<html>
<head>
  <title>Exercise 2 OOP</title>
</head>

<body>
<ul>
<li>User Level: <?php echo $level; ?></li>
<li>Type: <?php echo $type; ?></li>
<li>User ID: <?php echo $ID; ?></li>
<li>First Name: <?php echo $firstname; ?></li>
<li>Last Name: <?php  echo $lasttname; ?></li>
<li>Email Address:<?php echo $email; ?></li>
</ul>
<br>
<p>============================================</p>
<ul>
<li>User Level: <?php echo $level2; ?></li>
<li>Type: <?php echo $type2; ?></li>
<li>User ID: <?php echo $ID2; ?></li>
<li>First Name: <?php echo $firstname2; ?></li>
<li>Last Name: <?php  echo $lasttname2; ?></li>
<li>Email Address:<?php echo $email2; ?></li>
</ul>

</body>
</html>