<?php 


function getDeck(){
   $cards = array("<font color = 'red'>0" => 'A&diams;', 1 => '2&diams;', 2 => '3&diams;', 3 => '4&diams;', 4 => '5&diams;', 5 => '6&diams;', 6 => '7&diams;', 7 => '8&diams;', 8 => '9&diams;', 9 => '10&diams;', 10 => 'J&diams;', 11 => 'Q&diams;', 12 => 'K&diams;', 13 => 'A&hearts;', 14 => '2&hearts;', 15 => '3&hearts;', 16 => '4&hearts;', 17 => '5&hearts;', 18 => '6&hearts;', 19 => '7&hearts;', 20 => '8&hearts;', 21 => '9&hearts;', 22 => '10&hearts;', 23 => 'J&hearts;', 24 => 'Q&hearts;', 25 => 'K&hearts;',"<font color = 'black'>26" => 'A&clubs;', 27 => '2&clubs;', 28 => '3&clubs;', 29 => '4&clubs;', 30 => '5&clubs;', 31 => '6&clubs;', 32 => '7&clubs;', 33 => '8&clubs;', 34 => '9&clubs;', 35 => '10&clubs;', 36 => 'J&clubs;', 37 => 'Q&clubs;', 38 => 'K&clubs;', 39 => 'A&spades;', 40 => '2&spades;', 41 => '3&spades;', 42 => '4&spades;', 43 => '5&spades;', 44 => '6&spades;', 45 => '7&spades;', 46 => '8&spades;', 47 => '9&spades;', 48 => '10&spades;', 49 => 'J&spades;', 50 => 'Q&spades;', 51 => 'K&spades;');
   return $cards;

}

$deck = getDeck();

function shuffleDeck(&$deck){

	shuffle($deck);

	return $deck;
}

$shuffledDeck = shuffleDeck($deck);


$numCards = 3;

function deal($players, $numCards, &$shuffledDeck){

	$players = array(
		'Samir','Brian','Jason');
	$numCards = array
		(
		


		);


}
$playerHands = deal($players, $numCards, $deck);






echo 'Hands each players has: <br/>';
print_r($playerHands);

echo 'Deck after dealing: <br/>';
print_r($deck);



//"<font color = 'red'>"

  
 ?>



<!-- <pre>
 	<?php print_r ($deck); ?> 

</pre>

 -->



<!-- $cards = array("<font color = 'red'>0" => 'A&diams;', 1 => '2&diams;', 2 => '3&diams;', 3 => '4&diams;', 4 => '5&diams;', 5 => '6&diams;', 6 => '7&diams;', 7 => '8&diams;', 8 => '9&diams;', 9 => '10&diams;', 10 => 'J&diams;', 11 => 'Q&diams;', 12 => 'K&diams;', 13 => 'A&hearts;', 14 => '2&hearts;', 15 => '3&hearts;', 16 => '4&hearts;', 17 => '5&hearts;', 18 => '6&hearts;', 19 => '7&hearts;', 20 => '8&hearts;', 21 => '9&hearts;', 22 => '10&hearts;', 23 => 'J&hearts;', 24 => 'Q&hearts;', 25 => 'K&hearts;',"<font color = 'black'>26" => 'A&clubs;', 27 => '2&clubs;', 28 => '3&clubs;', 29 => '4&clubs;', 30 => '5&clubs;', 31 => '6&clubs;', 32 => '7&clubs;', 33 => '8&clubs;', 34 => '9&clubs;', 35 => '10&clubs;', 36 => 'J&clubs;', 37 => 'Q&clubs;', 38 => 'K&clubs;', 39 => 'A&spades;', 40 => '2&spades;', 41 => '3&spades;', 42 => '4&spades;', 43 => '5&spades;', 44 => '6&spades;', 45 => '7&spades;', 46 => '8&spades;', 47 => '9&spades;', 48 => '10&spades;', 49 => 'J&spades;', 50 => 'Q&spades;', 51 => 'K&spades;');

 -->

