<?php
if ($_REQUEST['gender']=="Male"){
    echo "<h1>hello MR"." ".$_REQUEST['firstname']." ".$_REQUEST['lastname']."</h1>";
}else{
    echo "<h1>hello MRS"." ".$_REQUEST['firstname']." ".$_REQUEST['lastname']."</h1>";
}
echo "<h2>please review your information</h2>";
echo "<p>Name:" .$_REQUEST['firstname']." ".$_REQUEST['lastname']."</p>";
echo "<p>Address:" .$_REQUEST['address']."</p>";
echo "<p>Your Skills:</p>";
foreach($_REQUEST['skills'] as $s){
    echo "($s) <br>";
};
echo "<p>Username:" .$_REQUEST['username']."</p>";
$department = $_POST['department'];
echo "<p>Your Department IS :{$department}</p>";
echo "<br>";
// print_r($_REQUEST);
?>