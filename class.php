<?php

class Movie{
  //Scrivo gli attributi della classe
  public $title;
  public $genre;
  public $language;
  public $vote;


  //costruttore
  function __construct( $_x, $_y, $_z, $_k){
    $this->title = $_x;
    $this->genre = $_y;
    $this->language = $_z;
    $this->vote = $_k;

  }


  //Funzione custom da abbinare a ogni istanza
  public function isItWorth(){
    if( $this->vote >= 7 ){
      return "Vale la pena guardare $this->title";
    } else {
      return "Non perdere tempo a guardare $this->title";
    }
  }


  public function showMe(){
    echo "<strong>Title:</strong> " . $this ->title;
    echo "<br>";
    echo "<strong>Genre:</strong> " . $this ->genre;
    echo "<br>";
    echo "<strong>Language:</strong> " . $this ->language;
    echo "<br>";
    echo "<strong>Vote:</strong> " . $this ->vote;
    echo "<br>";
    echo $this->isItWorth();
    echo "<br>";
    echo "<br>";
    echo "<br>";
  }

}






?>