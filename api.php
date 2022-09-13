<?php 
if(isset($_GET['string'])) {
    $string = $_GET['string'];
    if(!empty($string)) {
        check_palindrome($string);
    } else {
        echo "Missing required data";
    }
}

if(isset($_POST['varA']) && isset($_POST['varB']) && isset($_POST['varC'])) {
    $a = $_POST['varA'];
    $b = $_POST['varB'];
    $c = $_POST['varC'];
    if(!empty($a) && !empty($b) && !empty($c)){
        applyFormula($a, $b, $c);
    } else {
        echo "Missing required data";
    }
}

function check_palindrome($string){
    $string = str_replace(' ', '', $string);

    //remove special characters
    $string = preg_replace('/[^A-Za-z0-9\-]/', '', $string);

    //change case to lower
    $string = strtolower($string);

    //reverse the string
    $reverse = strrev($string);

    if ($string == $reverse) {
        echo "$string is a palindrome";
    } 
    else {
        echo "$string is not a palindrome";
    }
}

function applyFormula($a, $b, $c) {
    // a^3 + b*c - a/b
    $result = $a ** $b + $b * $c - $a / $b;
    echo $result;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP APIs</title>
</head>
<body>
    <form action="api.php" method="get">
        <label for="strPalindrome">Enter a string to check for palindrome: </label>
        <input type="text" name="string" id="strPalindrome">

        <input type="submit" value="Submit">

        <label for="varA">Enter a number a: </label>
        <input type="text" name="varA" id="varA">

        <label for="varB">Enter a number b: </label>
        <input type="text" name="varB" id="varB">

        <label for="varC">Enter a number c: </label>
        <input type="text" name="varC" id="varC">

        <input type="submit" value="Submit using post" formmethod="post">
</body>
</html>
