<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Tutorial</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        .container{
            max-width: 80%;
            background-color: rgb(244, 211, 211);
            margin: auto;
            padding: 23px;

        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Let's learn about PHP</h1>
        <p>Your party status is here</p>
    <?php
        $age = 7;
        if($age > 18){
            echo "You can go to the Party";
        }
        else if($age == 7){
            echo "You are 7 years old";
        }
        else{
            echo "You can not go the Party";
        }

        echo "<br>";

        // Array in PHP
        echo "<h1>Array in PHP</h1>";
        $languages = array("Python", "C++", "PHP", "NodeJs");
        echo count($languages)."<br>";
        echo $languages[3]."<br>"."<br>";

        // Loops in PHP
        echo "<h1>Loops in PHP</h1>";
        $a = 0;
        while($a <= 10){
            echo "<br> The value of a is :  ";
            echo $a;
            $a++;
        }

        //Iterating Loops in PHP
        echo "<h1>Iterating Loops in PHP</h1>";
        $a = 0;
        while($a < count($languages)){
            echo "<br> The value of languages[$a] is :  ";
            echo $languages[$a];
            $a++;
        }

        // Do While Loops in PHP
        echo "<h1>Do While Loops in PHP</h1>";
        $a = 0;
        do{
            echo "<br> The value of a is :  ";
            echo $a;
            $a++;
        }while($a < 10);

        // For loop in PHP
        echo "<h1>For Loops in PHP</h1>";
        for ($a = 0; $a < 10; $a++) {
            echo "<br> The value of a is : ";
            echo $a;
        }

        // Foreach loop
        echo "<h1>Foreach Loops in PHP</h1>";
        foreach($languages as $value){
            echo "<br> The Value is ";
            echo $value;
        }


        // Function
        echo "<h1>Function in PHP</h1>";
        function print_number($number){
            echo "<br> Your number is ";
            echo $number;
        }
        print_number(12);
        print_number(212);
        print_number(412);
        print_number(1222);


    ?>


    
    </div>
    
</body>
</html>