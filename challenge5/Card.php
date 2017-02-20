<?php

class Card{

	/**
	* This is the rank of the card
	* @var string
	*/
	private $rank;

	/**
	* The suite of the card
	* @var string 
	*/
	private $suite;

	/**
	* Just the color of the card
	* @var string
	*/
	private $color;

	/**
	* The html color of the entire card
	* @var string
	*/
	private $cardHtmlColor;

	/**
	* This is a string html icon code
	* @var string 
	*/
	private $htmlIcon;

	public function __construct($rank, $suite)
	{
		$this->rank = $rank;
		$this->suite = $suite;

		if($suite == 'H' || $suite == 'D'){
			$this->color = 'red';
			$this->cardHtmlColor = '#FF0000';
		}else{
			$this->color = 'black';
			$this->cardHtmlColor = '#000000';
		}


		if($suite == 'D'){
			$this->htmlIcon = '&diams;';
		}elseif($suite == 'H'){
			$this->htmlIcon = '&hearts;';
		}elseif($suite == 'S'){
			$this->htmlIcon = '&spades;';
		}elseif($suite == 'C'){
			$this->htmlIcon = '&clubs;';
		}

	}

	/**
	* Output the HTML representation of this card to screen
	* @return string
	*/
	public function render()
	{
		return '
		<div style="border: 5px solid '.$this->cardHtmlColor.'; padding:20px; margin: 10px; width: 20px;">
			'.$this->suite.' '.$this->rank.'
		</div>
		';
	}

}

class Deck{

	public function getCards()
	{

		$deck = [];
		$suites = ['H', 'S', 'D', 'C'];
		$ranks = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 'J', 'Q', 'K'];

		foreach($suites as $suite){

			foreach($ranks as $rank){

				$deck[] = new Card($rank, $suite);
			}
		}

		shuffle($deck);

		return $deck;
	}

}

// Track stuff for one player, need to know their name and their cards
class Player{}


// Is going to keep track of all players and what they have
class Dealer{}


$deck = new Deck();
$cards = $deck->getCards();
foreach($cards as $card){
	echo $card->render();
}


