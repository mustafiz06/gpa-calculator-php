<!DOCTYPE html>
<html>

<head>
    <title>
        GPA Calculator
    </title>
    <style>
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .calc_container {
            height: 400px;
            width: 300px;
            background-color: aquamarine;
            padding: 10px;
        }

        form {
            display: flex;
            flex-direction: column;
            row-gap: 10px;
            align-items: center;
        }

        form input {
            height: 30px;
            padding: 5px;
            width: 80%;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="calc_container">
            <h2 style="text-align:center;">GPA Calculator</h2>
            <form action="" method="POST">
                    <input type="number" id="html" name="html" placeholder="html">             
                    <input type="number" id="css" name="css" placeholder="css">             
                    <input type="number" id="js" name="js" placeholder="js">
                    <input type="number" id="php" name="php" placeholder="php">
                <button type="submit" style="width: 100px; height:30px;">Calculate</button>
            </form>
        </div>
    </div>

</body>

</html>

<?php
$html = $_POST['html'];
$css = $_POST['css'];
$js = $_POST['js'];
$php = $_POST['php'];

$total = $html + $css + $js + $php;
$average = $total / 4;

$grade = NULL;

if ($average > 100 || $average < 0) {
    echo "You enter invalid mark";
} else if ($average >= 80) {
    $grade = "A+";
} else if ($average >= 70 && $average < 80) {
    $grade = "A";
} else if ($average >= 60 && $average < 70) {
    $grade = "A-";
} else if ($average >= 50 && $average < 60) {
    $grade = "B";
} else if ($average >= 40 && $average < 50) {
    $grade = "C";
} else {
    $grade = "F";
}

if ($grade !== NULL) {
    echo "The Grade = " . $grade;
} else {
    echo NULL;
}

// if ($average >= 90)
//     $point = 5.00;
// else if ($average >= 80 && $average < 90)
//     $point = 4.00;
// else if ($average >= 70 && $average < 80)
//     $point = 3.50;
// else if ($average >= 60 && $average < 70)
//     $point = 3.00;
// else
//     $point = 2.50;

// echo "The point is " . $point;

?>