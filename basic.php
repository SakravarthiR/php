<?php
 $name = "Sakravarthi";
    $age = 25;
    $height = 5.9;
    $weight = 70.5;
    echo "Name: " . $name . ", Age: " . $age . ", Height: " . $height . ", Weight: " . $weight;
?>   



<?php
$score =85;
if($score >= 90){
    echo "Grade: A";
} elseif($score >= 80) {
    echo "Grade: B";
} elseif($score >= 70) {
    echo "Grade: C";
} elseif($score >= 60) {
    echo "Grade: D";
} else {
    echo "Grade: F";
}
?>



<?php
$x = 10;
while($x > 10){
    echo "Value of x is:" . $x . "<br>";
    $x++;

}
?>

<?php
for($i = 0; $i < 5; $i++){
    echo "Iteration: " . $i . "<br>";
}
?> 

<?php
function greet($name){
    return "hello, $name!"; 
}
echo greet("Sakravarthi");
?>

<?php
$FRUITS = ["Apple", "Banana", "Cherry"];
echo "First fruit: " . $FRUITS[0] . "<br>";
?>

<?php 
$day = "tuesday";
switch($day){
    case "monday":
        echo "Today is Monday.";
        break;
    case "tuesday":
        echo "Today is Tuesday.";
        break;
    case "wednesday":
        echo "Today is Wednesday.";
        break;
    default:
        echo "Invalid day.";
}
?>   

// intermediate // 


<?php
$str = "hello world";
echo strtoupper($str); // HELLO WORLD
?>


<?php
file_put_contents("example.txt", "This is a sample text.");
$content = file_get_contents("example.txt");
echo $content; // This is a sample text.
?>      


<?php
session_start();
$_SESSION['user'] = "admin";
echo $_SESSION['user'];
?>


<?php
setcookie("user", "Sakra", time() + 3600);
echo $_COOKIE["user"];
?>
 

 <?php
$user = "admin";
$pass = "1234";

if ($_POST['username'] == $user && $_POST['password'] == $pass) {
    echo "Login successful!";
} else {
    echo "Invalid credentials.";
}
?>

<?php
try {
    throw new Exception("Something went wrong");
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}
?>
