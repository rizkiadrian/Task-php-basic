<?php

  class player{
    public $name,$mana,$blood;
    function __construct($new_name){
    $this->name = $new_name;
    $this->mana = 40;
    $this->blood = 100;
  }
  public function set_name($input_name) {
     $this->name = $input_name;
   }
   public function get_name() {
     return $this->name;
   }
  public function get_blood() {
     return $this->blood;
   }
   public function get_mana() {
     return $this->mana;
   }
    
   public function attack() {
     $mana = $mana - 10;
   }
   
   public function defend() {
     $blood = $blood - 10;
   }

    
  }
$x = 1;
$players = [];
$playername = "";
$mana = 0;
$blood = 0;
$attacker = false;
$j = count($players);
$attackern = "";
$deffern = "";

do {

  print_r("Type new to create character"."\n");
    print_r("Type start to start a game"."\n");
  print_r("current player: ".count($players)."\n");
   print_r("current name: ".$playername."\n");
  fscanf(STDIN, "%s\n", $menu);
  if ($menu == "new"){
    echo "enter your name";
    fscanf(STDIN, "%s\n", $inputname);
    $players[$inputname] = new player($inputname);
    $players[$inputname]->set_name($inputname);
    $playername=$players[$inputname]->get_name();
    } 
  
  

  if ($menu == "start"){
    print_r("who will attack"."\n");
    fscanf(STDIN, "%s\n", $select);
    print_r("who will deffending"."\n");
    fscanf(STDIN, "%s\n", $selecd);

    if ($select==$players[$inputname]->get_name()){
      $attackern = $players[$select]->get_name();
      print_r($attackern."attacking"."\n");
      $players[$select]->attack();
      $mana =$players[$select]->get_mana();
      $blood =$players[$select]->get_blood();
       print_r("remaining mana : "."$mana". "remaining blood"."$blood");
        $deffern = $players[$selecd]->get_name();
      print_r($deffern."deffending"."\n");
      $players[$select]->attack();
      $mana =$players[$select]->get_mana();
      $blood =$players[$select]->get_blood();
       print_r("remaining mana : ".$mana. "remaining blood".$blood);
    }
     if ($selecd==$players[$inputname]->get_name()){
      $attackern = $players[$select]->get_name();
      print_r($attackern."attacking"."\n");
      $players[$select]->attack();
      $mana =$players[$select]->get_mana();
      $blood =$players[$select]->get_blood();
       print_r("remaining mana : ".$mana. "remaining blood".$blood);
      $deffern = $players[$selecd]->get_name();
      print_r($deffern."deffending"."\n");
      $players[$selecd]->defend();
      $mana =$players[$selecd]->get_mana();
      $blood =$players[$selecd]->get_blood();
       print_r("remaining mana : ".$mana. "remaining blood".$blood);

    }


  }

  
  else{
    echo "Input again";
  }
  }     
  
while ($x = 1);


 

   


	

 


  
