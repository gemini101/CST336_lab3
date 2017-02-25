<?php

$players = array(array());
$sums = array();
$deck = array();
 for ($i=1; $i <= 52; $i++) {
  $deck[] = $i; 
 }
 shuffle($deck);

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
 
//  $deck = array();
//  for ($i=1; $i <= 52; $i++) {
//   $deck[] = $i; 
//  }
//  shuffle($deck);
//  //print_r($deck);
//  $card = array_pop($deck);
 
//  //echo $card;
 
 
//  function displayRandomImage(){
 
<<<<<<< HEAD
  $suitArray = array("clubs", "diamonds", "hearts", "spades");
  $randomIndex = rand(0,3);
  $randomSuit = $suitArray[$randomIndex];
  echo "<img src='img/cards/$randomSuit/".rand(1,13).".png' />";
=======
//   $suitArray = array("clubs", "diamonds", "hearts", "spades");
//   $randomIndex = rand(0,3);
//   $randomSuit = $suitArray[$randomIndex];
//   echo "<img src='img/cards/$randomSuit/".rand(1,13).".png' />";
 
//  }
>>>>>>> c6a12f6e41592c14e7f5197a6438e081a6e6e790
 
 function getHand()
 {
    $suitArray = array("clubs", "diamonds", "hearts", "spades");
    
     global $players, $sums, $deck;
     $sum=0;
     $card;
     for ($i=0; $i<4; $i++)
     {
        while ($sum<35)
         {
           if($deck[sizeof($deck)-1]<=13)
           {
               $Index =0;
           }
           elseif($deck[sizeof($deck)-1]<=26 && $deck[sizeof($deck)-1]>13)
           {
               $Index = 1;
           }
           elseif($deck[sizeof($deck)-1]<=39 && $deck[sizeof($deck)-1]>26)
           {
               $Index = 2;
           }
           else{
               $Index = 3;
           }
           $card = 1+($deck[sizeof($deck)-1]-1)%13;
           array_pop($deck);
           
           $randomSuit = $suitArray[$Index];
           echo "<img src='img/cards/$randomSuit/".$card.".png' />";
           $players[$i][] = $card;
           $sum+=$card;
         }
<<<<<<< HEAD
         if($sum < 42){
         echo $sum;
=======
         echo "<aside>" . $sum . "</aside>";
>>>>>>> c6a12f6e41592c14e7f5197a6438e081a6e6e790
         echo "<br />";
         $sums [] = $sum;
         $sum=0;
         }
     }
 }
 
 function displayWinner()
 {
     global $sums;
     $max = 0;
     $index=0;
     $total = 0;
     
     for ($i=0; $i<4; $i++)
     {
         if ( ($sums[$i] > $max) && ($sums[$i] < 43) )
         {
             $max = $sums[$i];
             $index = $i;
         }
     }
<<<<<<< HEAD
     $index++;
     echo "The winner is ". $index;
=======
     for ($j=0; $j<4; $j++)
     {   
         if(($sums[$j] < 43) && (($sums[$j] != $max))){
             $total+= $sums[$j];
         }
     }
     for ($m=0; $m<4; $m++)
     {
       if ( $sums[$m] == $max){
          $num=$m+1;
          echo "<br/>";
          echo "<strong>" . $num . " wins ". $total . " points!!</strong>";
       }
     }
>>>>>>> c6a12f6e41592c14e7f5197a6438e081a6e6e790
 }


?>


<!DOCTYPE html>
<html>
    <head>
        <title> Arrays Review </title>
    </head>
    
     <style>
        @import url("css/styles.css");
     </style>
    
    <body>
<<<<<<< HEAD

      <img src="img/cards/clubs/<?=rand(1,13)?>.png" />
      
      
      <?=getHand()?>
      <br />
      <?=displayWinner()?>
=======
     <div id="wrapper">
      <div id ="container">
       <h1><strong>Silverjack</strong></h1>
       
       <?=getHand()?>
       <div id ="winner">
        <?=displayWinner()?>
       </div>
>>>>>>> c6a12f6e41592c14e7f5197a6438e081a6e6e790
      
      </div>
     </div>
    </body>
</html>-
+-------------------------------------------------------+
