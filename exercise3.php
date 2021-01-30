<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h2>//1</h2>
<?php
    $date = date('F');
    if ($date == "August") {
        echo "<i>It's August, so it's still holiday.</i>";
    }
    else
        echo "<i>Not August, This is $date so i don't have any holidays</i>";
?>

<h2>//2</h2>
<?php
    $color = "red";
    if ($color == "red") {
        echo "The color is red.";
    }
    else if ($color != "red")
        echo "The color is not red.";
?>

<h2>//3</h2>
<p>Type your grade in the form below: </p>
<form action = "exercise3.php" method = "get">
<input type = "number" name = "grade" min = "0" max = "100" step = "0.5">
<input type = "submit">
</form>
<br>
<?php
    $grade = $_GET["grade"];
    if ($grade >= 80) {
        echo "Your grade is $grade: Excellent";
    }
    else if ($grade >= 70 && $grade < 80) {
        echo "Your grade is $grade: Great";
    }
    else if ($grade >= 60 && $grade < 70) {
        echo "Your grade is $grade: Good";
    }
    else if ($grade >= 50 && $grade < 60) {
        echo "Your grade is $grade: Pass";
    }
    else if (isset($grade) && $grade < 50) {
        echo "Your grade is $grade: Fail";
    }
?>

<h2>//4</h2>
<form action = "exercise3.php" method = "get">
<p>Type your first and last name in the form below: </p>
<input type = "text" name = "name" required>
<p>Type your age in the form below: </p>
<input type = "number" name = "age" min="0" max = "140" required>
<input type = "submit">
</form>
<br>
<?php
    $name = $_GET["name"];
    $age = $_GET["age"];
    if ($age >= 18) {
        echo "$name: You are eligible for voting!";
    }
    else if (isset($age) && $age < 18) {
        echo "$name: You are not eligible for voting!";
    }
?>
</body>
</html>

<h2>//5</h2>
<?php
    $i = 8;
    while ($i > 0) {
        foreach (range(1, $i) as $number) {
            echo $number;
        }
        echo nl2br("\n");
        $i--;
    }
?>

<h2>//6</h2>
<?php
    $b = 1;
    while ($b <= 8) {
        for ($a = 1; $a <= $b; $a++) {
            echo '*';
        }
        echo nl2br("\n");
        $b++;
    }
?>

<h2>//7</h2>
<a href="https://github.com/romatsypin/webprogramming_exercises">Repo</a>
<a href="https://romatsypin.github.io/webprogramming_exercises/">Website</a>