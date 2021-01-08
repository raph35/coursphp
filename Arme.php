<?php
class Arme{
    private $name;
    private $degat;

    public function __construct($name = "Sans nom", $degat = 10){
        $this->name = $name;
        $this->degat = $degat;
    }

    public function getName(){
        return $this->name;
    }

    public function getDegat(){
        return $this->degat;
    }

    public function setName($name){
        $this->name = $name;
    }

    public function setDegat($degat){
        if($degat <= 0)
            echo "Valeur incorrect, le degat doit etre positif non null";
        else
            $this->degat = $degat;
    }

    public function upgrade(){
        $this->degat = $this->degat + 10;
    }
}