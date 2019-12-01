<!-- Emma Coyle, 11/30/2019 PHPAssignment1 -->
<!DOCTYPE HTML>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="mystyle.css">
    <title>PHP Assignment 1</title>
</head>

<body>

    <div class="container">
        <h4>
            Emma Coyle <br>
            11/30/2019 <br>
            First PHP Assignment <br>
            CSE 383 <br>
        </h4>
        <div class="jumbotron" >
            <h1>All of the Super Server's Information is Displayed Below:</h1>
        </div>
    </div>

    <div>
    <?php
        echo "<div style=\"text-align:center\">";
        echo "<p> <font color=orange>";
        while (list($var,$value) = each ($_SERVER)) {
           echo "$var <br> $value <br><br>";
        }
        echo "</font></p>";
     ?>
     </div>

</body>

</html>















