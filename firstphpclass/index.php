<?php
  // PHP GOES HERE
  # single line comments

  /*
  MULTI-LINE COMMENTS
  */

  // php case-sensitivity

  echo "Hello World <br>";
  ECHO "hELLO world <br>";
  EcHo "Hello World <br>";

  $color="red";

  echo $color;
  echo $COLOR;

  //php variables
  $x=5;
  $Peace = 500 ;
  echo $x ." <br>";
  // PHP Rules for variables
  /*
  1. a variable  must start wit a dollar sign
  2. must begin with a letter or an underscore
  3. Variable names are alpha numeric 
  4. Case sensitive $age is not $AGE
  */


  $u= "I love " ;
  $t= " to write code";

  echo $u . " " . $t;

  //PHP VARIABLE SCOPE
  /*
  local
  global
  static
  */

  //$o= 3; //global scope

  //function myTwist(){
    //$o= 3; //local  scope
   // echo "<p>  Variable o inside a function is : $o  </p>";
 // }
  //echo "<p>  Variable o inside a function is : $o  </p>";

  //myTwist();


  // GLOBAL KEYWORD
    $f =5;
    $g = 4;

    function myTest(){

     // global $f,$g;
    //  $m = $f + $g;

    $GLOBALS['m'] = $GLOBALS['f'] + $GLOBALS['g'];
      
    }

    myTest();
    echo $m . "<br>";


    function myStat(){

      static $k =0;
      echo $k;
      $k ++;
    }

    myStat();
    echo "<br>";
    myStat();
    echo "<br>";
    myStat();
    echo "<br>";

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Php first class</title>
</head>
<body>
  
</body>
</html>