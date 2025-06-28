<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        This is my first PHP website 
        <?php
           echo "Hello world and this is printed using php";
           echo "<br>";
           echo "<br>";
           
           // variables in PHP
           $var1 = 34;
           $var2 = 45;
           echo "var1 = $var1<br>";
           echo "var2 = $var2<br>";
           
           // Operators in PHP
           // Arithmetic Operators
           echo "<h1>Arithmetic Operators</h1>";
           echo "The value of var1 + var2 is ";
           echo $var1+$var2 . "<br>";

           echo "The value of var1 - var2 is";
           echo $var1 - $var2 . "<br>";

           echo "The value of var1 * var2 is";
           echo $var1 * $var2 . "<br>";

           echo "The value of var1 / var2 is";
           echo $var1 / $var2 . "<br>";
           echo "<br>";

           // Assignment Operators
           $newVar = $var1;
           $newVar += 1;
           echo "The value of new variable is ";
           echo $newVar;
           echo "<br>";

           // Comparison Operators
           echo "<h1>Comparison Operators</h1>";

           echo "The value of 1 == 4 is ";
           echo var_dump(1==4);
           echo "<br>";

           echo "The value of 1 != 4 is ";
           echo var_dump(1!=4);
           echo "<br>";

           echo "The value of 1 >= 4 is ";
           echo var_dump(1>=4);
           echo "<br>";

           echo "The value of 1 <= 4 is ";
           echo var_dump(1<=4);
           echo "<br>";

           // Increment/Decrement Operators
           echo "<h1>Increment/Decrement Operators</h1>";

           echo "var1 = $var1<br>";
           echo "The value of var1++ is ";
           echo $var1++;
           echo "<br>";
           echo "var1 = $var1<br>";
           echo "The value of ++var1 is ";
           echo ++$var1;
           echo "<br>";
           echo "var1 = $var1<br>";
           echo "The value of var1-- is ";
           echo $var1--;
           echo "<br>";
           echo "var1 = $var1<br>";
           echo "The value of --var1 is ";
           echo --$var1;
           echo "<br>";

           // Logical Operators (and(&&) , or(||), xor, !)
           
           echo "<h1>Logical Operators Operators</h1>";
           $myVar = (true and true);
           echo var_dump($myVar);
           echo "<br>";
        ?>

        <?php
            //Constant 
               define ('PI', 3.14);
            // Data Types 
            //    1. String
            //    2. Integer
            //    3. Float
            //    4. Boolean
            //    5. Array 
            //    6. Object
              echo "<h1>Data Types</h1>";

              $var = "This is a string";
              echo var_dump($var);
              echo "<br>";

              $var = 67;
              echo var_dump($var);
              echo "<br>";

              $var = 67.1;
              echo var_dump($var);
              echo "<br>";

              $var = true;
              echo var_dump($var);
              echo "<br>";

              // Constant
              echo "PI = ". PI. "<br>";
        ?>

    </div>
</body>
</html>