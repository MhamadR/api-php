<?php 
if(isset($_GET['string'])) {
    $string = $_GET['string'];
    if(!empty($string)) {
        check_palindrome($string);
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

    //check if the reversed string is equal the string
    if ($string == $reverse) {
        echo "$string is a palindrome";
    } 
    else {
        echo "$string is not a palindrome";
    }
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
        <label for="strPalindrome">Enter a string to check if it is a palindrome: </label>
        <input type="text" name="string" id="strPalindrome">
    </form>
</body>
</html>
