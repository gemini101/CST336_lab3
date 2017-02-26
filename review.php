<?php

$players = array(array());
$sums = array();
$deck = array();
 for ($i=1; $i <= 52; $i++) {
  $deck[] = $i; 
 }
 
 shuffle($deck);
 $characterArray = array("Mario", "Yoshi", "Falco", "Kirby");
 shuffle($characterArray);
 
 function getHand()
 {
    global $characterArray;
    global $players, $sums, $deck;
    
    $suitArray = array("clubs", "diamonds", "hearts", "spades");
    $sum=0;
     
     for ($i=0; $i<4; $i++)
     {
       echo "<img src='img/characters/$characterArray[$i].png' />";
       
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
         
        echo "<aside>" . $sum . "</aside>";
         echo "<br />";
         $sums [] = $sum;
         $sum=0;
         
     }
 }
 
 function displayWinner()
 {
     global $sums;
     global $characterArray;
     $max = 0;
     
     $total = 0;
     
     for ($i=0; $i<4; $i++)
     {
         if ( ($sums[$i] > $max) && ($sums[$i] < 43) )
         {
             $max = $sums[$i];
             $index = $i;
         }
     }
     
     for ($j=0; $j<4; $j++)
     {   
         if(($sums[$j] < 43) && (($sums[$j] != $max))){
             $total+= $sums[$j];
         }
     }
     
     for ($m=0; $m<4; $m++)
     {
       if ( $sums[$m] == $max){
          echo "<br/>";
          echo "<strong>" . $characterArray[$m] . " wins ". $total . " points!!</strong>";
       }
     }
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
     <div id="wrapper">
      <div id ="container">
       <h1><strong>Silverjack</strong></h1>
       
       <?=getHand()?>
       
       <div id ="winner">
        <?=displayWinner()?>
       </div>
       
       <br/>
       
       <FORM>
         <button class="playB" onClick="history.go(0)"> Play Again </button>
       </FORM>
      
      </div>
     </div>
    </body>
</html>