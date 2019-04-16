<?php
class VoitureException extends Exception {
    private $allowedMark  = ['Renault', 'Audi', 'Peugeot'];

    public function __construct(Voiture $voiture){
        if(!in_array($voiture->getMark(), $this->allowedMark)){
            throw new Exception('La voiture que vous voulez n\'est pas au catalogue', 400);
        }
    }
}