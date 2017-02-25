<?php

$players = array(array());
$sums = array();

//  function displayArray() {
//     global $prices;
    
//     echo "<hr>";
//     for ($i = 0; $i < count($prices); $i++) {
     
//       echo $prices[$i] . "<br />";
     
//     }
//  }

// function indexedArray(){
//  $prices = array(500, 300, 600, "hello", 1.2);  //indexed array
 
//  echo $prices[0];
//  //$prices = array(0=>500, 1=>300, 2=>600, "hello", 1.2);  //indexed array

//  print_r($prices);
 
//  array_push($prices,"new item"); //adds new element into the array
//  $prices[] = "one more item!";  //also adds new element

//  echo "<br />";

//  print_r($prices);
 
//  displayArray();

//  unset($prices[1]); // removes array element
 
//  displayArray();
 
//  $prices = array_values($prices); //compresses the array
 
//  displayArray();
 
//  sort($prices);  //orders the elements of the array, in ascending order
//  displayArray();
 
//  rsort($prices); //orders elements in descending order
//  displayArray();
// }
 
//  function associativeArrays() {
     
//      $products = array("iPad Mini"=>300, "iPad Pro"=>800);
     
      
//      //$products["ipad Mini"] = 200;
     
//      $products["iPad Air"] = 500;
     
//      print_r($products);
     
     
//      echo "<hr>";
     
//      foreach($products as $key  => $value ) {
         
//          echo $key . " $" . $value . "<br />";
         
//      }
     
     
     
//  }
 
 $deck = array();
 for ($i=1; $i <= 52; $i++) {
   $deck[] = $i; 
 }
 shuffle($deck);
 //print_r($deck);
 $card = array_pop($deck);
 
 //echo $card;
 
 
 function displayRandomImage(){
 
  $suitArray = array("clubs", "diamonds", "hearts", "spades");
  $randomIndex = rand(0,3);
  $randomSuit = $suitArray[$randomIndex];
  echo "<img src='img/cards/$randomSuit/".rand(1,13).".png' />";
 
 }
 function getHand()
 {
    $suitArray = array("clubs", "diamonds", "hearts", "spades");
    
     global $players, $sums;
     $sum=0;
     $card;
     for ($i=0; $i<4; $i++)
     {
        while ($sum<35)
         {
           $randomIndex = rand(0,3);
           $randomSuit = $suitArray[$randomIndex];
           $card = rand(1,13);
           echo "<img src='img/cards/$randomSuit/".$card.".png' />";
           $players[$i][] = $card;
           $sum+=$card;
         }
         if($sum < 42){
         echo $sum;
         echo "<br />";
         $sums [] = $sum;
         $sum=0;
         }
     }
 }
 
 function displayWinner()
 {
     global $sums;
     $max = $sums[0];
     $index=0;
     for ($i=0; $i<4; $i++)
     {
         if ($sums[$i] > $max)
         {
             $max = $sums[$i];
             $index = $i;
         }
     }
     $index++;
     echo "The winner is ". $index;
 }


?>


<!DOCTYPE html>
<html>
    <head>
        <title> Arrays Review </title>
    </head>
    <body>

      <img src="img/cards/clubs/<?=rand(1,13)?>.png" />
      
      
      <?=getHand()?>
      <br />
      <?=displayWinner()?>
      
    </body>
</html>-
+-------------------------------------------------------+
