<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- for count function -->
<?php
 $car1 = array("volvo","alto","fortuner");
 echo count($car1);  
?> <br>
<!-- for is_array function -->
<?php
$a = "sourabh";
    echo "a is " . is_array($a);
    $b = array("sdf","ghj");
    echo "b is " . is_array($b);
    ?><br>
    <!--  substr function -->
    <?php
    echo substr("sourabh",3);
    ?> <br>
    <!--  in_array function -->
    <?php
  $people = array("sourabh","narendra","manish","rahul");
  if(in_array("sourabh",$people,TRUE)){
    echo "MATCH FOUND <br>";
  }
  else{
    "MATCH NOT FOUND";
  }
    ?><br>
    <!-- explode functions  -->
    <?php
    $str = "sourabh verma";
    print_r (explode(" ", $str));
    ?><br>
    <!-- implode function -->
    <?php 
    $arr = array('hello','world','beautiful','D');
     echo implode(" ", $arr);
    ?><br>
    <!--str replace function  -->
    <?php
    echo str_replace("verma", "peter","sourabh verma");
    ?><br>
    <!-- strlen function -->
    <?php
    echo strlen("sourabh");
    ?><br>
    <!-- array-merge -->
    <?php
    $arr1 = array("1","2");
    $arr2 = array("3","4");
    print_r(array_merge($arr1,$arr2));
    ?>
    <!-- -->
</body>
</html>