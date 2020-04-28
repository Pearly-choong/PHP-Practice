<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
   
    <title>PHP String and Number Functions</title>
  </head>
  <body class="container bg-dark text-dark">
   
    <h1 class="text-light py-5"> PHP String and Number Functions</h1>

 <!-- section for string function -->
    <div class="jumbotron">
        <!-- start of php -->
        <?php 

        // output string statement
        print '<h3 class="text-primary">STRING FUNCTIONS</h3>'; 
        echo 'Hello!';

        echo '<br>';

        $myName = 'Pearly';
        var_dump($myName);
        echo '<br>';
        echo 'My Name is ' , $myName;
       
        define("greeting", "Hello Pearly");
        echo '<br>';
        echo greeting;


        // strlen() function
        echo '<br><br><h5 class="text-danger">PHP strlen()- Return the Lenght of a String</h5>';
         
        echo 'Example: <br>';
        echo strlen("My name is Pearly.");
        echo '<br>';


        // str_word_count() function
        echo '<br><br><h5 class="text-danger">PHP str_word_count() - Count Words in a String</h5>';
         
        echo 'Example: <br>';
        echo str_word_count("My name is Pearly.");
        echo '<br>';

        // str_replace() function
        echo '<br><br><h5 class="text-danger">PHP str_replace()Function</h5>';
        echo 
        ' <ul> <li>This function replaces some character with some other characters in a string.</li>
         </ul>';

       echo 'Example: <br>';
       echo str_replace("Pearly", "Dolly", "My name is Pearly.");
       echo '<br>';


        // strpos() Search function
        echo '<br><br><h5 class="text-danger">PHP strpos() Search Function</h5>';
        echo 
         ' <ul> <li>This function searches for specific text within a string. If a match is found, the function returns the character position of the first match.
                     If no match is found, it will return FALSE</li>
          </ul>';

        echo 'Example: <br>';
        echo strpos("My name is Pearly.", "Pearly");
        echo '<br>';


        // addcslashes() function
        echo '<br><br><h5 class="text-danger">PHP addcslashes()Function</h5>';
        echo 
        ' <ul> <li>This function returns a string with backslashes in front of the specified characters.</li>
               <li> The addcslashes() function is case-sensitive. </li> 
               <li class="font-italic"> Syntax ==> addcslashes(string, characters) </li>
         </ul>';
       
        echo 'Example:';
        $str = addcslashes("<br>Hello Pearly!", "P");
        echo($str);  
        echo '<br>';


        // addslashes() function
        echo '<br><br><h5 class="text-danger">PHP addslashes()Function</h5>';
        echo 
        ' <ul> <li>This function returns a string with backslashes in front of predefined characters.</li>
               <li> The predefined characters are : single quote, double quote, backslash, NULL </li> 
               <li> can be used to prepare a string for storage in a database and database queries. </li>
               <li class="font-italic"> Syntax ==> addslashes(string) </li>
          </ul>';

         echo 'Example: <br>';
         $str = "Who's your teacher?";
         echo $str . "This is not safe in a database query.<br>";
         echo addslashes ($str) . "This is safe in a database query.";
         echo '<br>';


        // chop() function
         echo '<br><br><h5 class="text-danger">PHP chop()Function</h5>';
         echo 
         ' <ul> <li>This function removes whitespaces or other predefined characters from the right end of a string.</li>
                <li class="font-italic"> Syntax ==> chop(string, charlist) </li> 
                <li> string is requried - specifies the string to check. charlist is optional - specific which characters to remove from the string. </li>
          </ul>';

        echo 'Example: <br>';
        $str = "Hello World!";
        echo $str . "<br>";
        echo chop($str, "World!");
        echo '<br>';
    
        // explode() function
        echo '<br><br><h5 class="text-danger">PHP explode()Function</h5>';
        echo 
        ' <ul> <li>This function breaks a string into an array.</li>
               <li class="font-italic"> Syntax ==> explode(separator, string, limit) </li> 
               <li> separator and string is requried. limit is optional - specific the number of array elements to return. </li>
         </ul>';

         echo 'Example: <br>';
         $str = "Hello World. It's a beautiful day.";
         print_r (explode(" ",$str));
         echo '<br>';


        // join() function
         echo '<br><br><h5 class="text-danger">PHP join()Function</h5>';
         echo 
         ' <ul> <li>This function returns a string from the elements of an array.</li>
                <li class="font-italic"> Syntax ==> join(separator, array) </li> 
                <li> array is requried. separator is optional - specific what to put between the array elements. Default is "" (an empty string). </li>
          </ul>';

        echo 'Example: <br>';
        $arr = array('Hello!', 'My', 'name', 'is', 'Pearly.');
        echo join(" ", $arr);
        echo '<br>';


        // strtolower() function
        echo '<br><br><h5 class="text-danger">PHP strtolower()Function</h5>';
         echo 
         ' <ul> <li>This function converts a string to lowercase.</li>
                <li class="font-italic"> Syntax ==> strtolower(string) </li> 
                <li> This function is bnary-safe. </li>
          </ul>';

        echo 'Example: <br>';
        echo strtolower("My name is PEARLY.");
        echo '<br>';


        // strtoupper() function
        echo '<br><br><h5 class="text-danger">PHP strtoupper()Function</h5>';
         echo 
         ' <ul> <li>This function converts a string to uppercase.</li>
                <li class="font-italic"> Syntax ==> strtoupper(string) </li> 
                <li> This function is bnary-safe. </li>
          </ul>';

        echo 'Example: <br>';
        echo strtoupper("My name is PEARLY.");
        echo '<br>';



        ?> 
        <!-- end of php -->
    </div>
    <!-- end section for string function -->

<!-- another section for number function -->
    <div class="jumbotron">

    <?php 
         // output statement
         echo '<h3 class="text-primary">NUMBER FUNCTION</h3>'; 

         // integer
         $x = 3;
         var_dump($x);
         echo '<br>';
         echo $x;
         echo '<br>';
 
        
        // number_format() function
        echo '<br><br><h5 class="text-danger">PHP number_format()Function</h5>';
         echo 
         ' <ul> <li>This function formats a number with grouped thousands.</li>
                <li class="font-italic"> Syntax ==> number_format(number - required, decimals, decimalpoint, separator) </li> 
                <li> This function supports one, two, or four parameters (not three). </li>
          </ul>';

        echo 'Examples: <br>';
        $num = 1999.9;

        // without decimal point parameter - return round value
        echo number_format($num) . "<br>";
        
        // with two decimal point parameter
        echo number_format($num, 2) . "<br>"; 


        $num2 = 1999.49;
        // without decimal point parameter 
        echo number_format($num2) . "<br>";      
        echo "<br>";


         // PHP integers
         echo '<br><br><h5 class="text-danger">PHP Integers</h5>';
         echo 'PHP as the following functions to check if the type of a variable is integer: ';
         echo 
         ' <ul> <li>is_int()</li>
                <li>is_integer() - alias of is_int() </li> 
                <li>is_long() - alias of is_int() </li>
          </ul>';

        echo 'Examples: <br>';
        // check if the type of a variable is integer
        $x = 5985;
        $y = 59.85;
        var_dump(is_int($x));
        echo '<br>';
        var_dump(is_int($y));
        echo "<br>";


        // PHP floats
        echo '<br><br><h5 class="text-danger">PHP Floats</h5>';
        echo 'PHP as the following functions to check if the type of a variable is float: ';
        echo 
        ' <ul> <li>is_float()</li>
               <li>is_double() - alias of is_float() </li> 
         </ul>';

       echo 'Examples: <br>';
        // check if the type of a varialbe is float
        $x = 10.365;
        var_dump(is_float($x));
        echo "<br>";

    ?>

    </div>
    <!-- end of number function section -->


  </body>
</html>

