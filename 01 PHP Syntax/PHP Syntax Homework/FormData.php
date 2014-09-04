<!DOCTYPE html>
<html>
<head>
    <meta charset='UTF-8'/>
    <title>Form Data</title>
</head>
<body>
<form method="post" action="">
    <input type="text" name="name" placeholder="Name..."><br>
    <input type="text" name="age" placeholder="Age..."><br>
    <input type="radio" name="sex" id="male" value="male" checked="checked"><label for="male">Male</label><br>
    <input type="radio" name="sex" id="female" value="female"><label for="female">Female</label><br>
    <input type="submit">
</form><br>
</body>
</html>

<?php

$name;
$age;
$sex;

if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST["name"]) && !empty($_POST["age"])) {
    $name = $_POST["name"];
    $age = $_POST["age"];
    $sex = $_POST["sex"];

    echo "My name is {$name}. I am {$age} years old. I am {$sex}.";
} else {
    echo "Required field is missing!";
}
?>