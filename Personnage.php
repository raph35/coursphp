<?php

require_once("./Arme.php");
// Declaration de la classe


class Personnage {
    private $name;
    private $vie;
    private $arme;
    private $max_vie;

    public function __construct($name, $arme = null){
        $this->name = $name;
        $this->arme = $arme;
        $this->vie = 100;
        $this->max_vie = 100;
    }

    public function getName(){
        return $this->name;
    }

    public function getArme(){
        return $this->arme;
    }

    public function getVie(){
        return $this->vie;
    }

    public function setVie($vie){
        if($this->vie + $vie >= $this->max_vie)
            $this->vie = $this->max_vie;
        else
            $this->vie = $this->vie + $vie;
    }

    public function setArme($arme){
        $this->arme = $arme;
    }

    public function setName($name){
        $this->name = $name;
    }

    public function regenerer(){
        $this->vie = $this->max_vie;
    }

    public function upgrade_vie(){
        $this->max_vie += 20;
    }

    public function upgrade_arme(){
        $this->arme->upgrade();
    }

    public function status(){
        
    }
}
?>