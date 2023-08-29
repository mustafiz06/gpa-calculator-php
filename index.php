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
            background-color: whitesmoke;
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
                <input type="number" id="html" name="html" placeholder="html" required>
                <input type="number" id="css" name="css" placeholder="css" required>
                <input type="number" id="js" name="js" placeholder="js" required>
                <input type="number" id="php" name="php" placeholder="php" required>
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
    echo "<h1 style='color: red; text-align:center;'>You enter invalid mark</h1>";
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
    echo "<h1 style='color: red; text-align:center;'>You are failed. You need to study more.</h1>";
}
if ($grade !== NULL) {
    echo "<h1 style='color: green; text-align:center;'>Congratulation!! You got  $grade</h1>";
} else {
    echo NULL;
}

// GPA Calculation.................
//html
 if ($html >= 80) {
    $html_gpa = "5.00";
} else if ($html >= 70 && $html < 80) {
    $html_gpa = "4.50";
} else if ($html >= 60 && $html < 70) {
    $html_gpa = "4.00";
} else if ($html >= 50 && $html < 60) {
    $html_gpa = "3.50";
} else if ($html >= 40 && $html < 50) {
    $html_gpa = "3.00";
} else {
    $html_gpa = "0.00";
}

//css
 if ($css >= 80) {
    $css_gpa = "5.00";
} else if ($css >= 70 && $css < 80) {
    $css_gpa = "4.50";
} else if ($css >= 60 && $css < 70) {
    $css_gpa = "4.00";
} else if ($css >= 50 && $css < 60) {
    $css_gpa = "3.50";
} else if ($css >= 40 && $css < 50) {
    $css_gpa = "3.00";
} else {
    $css_gpa = "0.00";
}

//JS
 if ($js >= 80) {
    $js_gpa = "5.00";
} else if ($js >= 70 && $js < 80) {
    $js_gpa = "4.50";
} else if ($js >= 60 && $js < 70) {
    $js_gpa = "4.00";
} else if ($js >= 50 && $js < 60) {
    $js_gpa = "3.50";
} else if ($js >= 40 && $js < 50) {
    $js_gpa = "3.00";
} else {
    $js_gpa = "0.00";
}

//PHP
 if ($php >= 80) {
    $php_gpa = "5.00";
} else if ($php >= 70 && $php < 80) {
    $php_gpa = "4.50";
} else if ($php >= 60 && $php < 70) {
    $php_gpa = "4.00";
} else if ($php >= 50 && $php < 60) {
    $php_gpa = "3.50";
} else if ($php >= 40 && $php < 50) {
    $php_gpa = "3.00";
} else {
    $php_gpa = "0.00";
}

/// GPA........
$total_gpa = $html_gpa + $css_gpa + $js_gpa + $php_gpa;
$average_gpa = $total_gpa / 4;

if ($average > 100 || $average < 0) {
    echo NULL;
}
// elseif($grade != "A+" || $grade = "A" || $grade = "A-" || $grade = "B" || $grade = "C"){
//     echo NULL;
// }
elseif($average_gpa <= "3.00"){
    echo NULL;
}
else{
    echo "<h1 style='color: green; text-align:center;'>Your GPA is $average_gpa</h1>";
}

?>