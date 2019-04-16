<?php
class MotoException extends Exception {
    private $allowedMark  = ['Kawasaki', 'KTM', 'Yamaha', 'Honda', 'Suzuki'];

    public function __construct(Moto $moto){
        if(!in_array($moto->getMarque(), $this->allowedMark)){
            throw new Exception('La moto que vous voulez n\'est pas au catalogue', 400);
        }
    }
}