<?php

class Suzuki extends Moto implements SuzuInterface
{
    private $isSuzu;

    public function __construct($marque, $model, $prix, $topCase, $isSuzu)
    {
        parent::__construct($marque, $model, $prix, $topCase);
        $this->isSuzu= $isSuzu;
    }

    /**
     * @return mixed
     */
    public function getisSuzu()
    {
        return $this->isSuzu;
    }

    /**
     * @param mixed $isSuzu
     */
    public function setIsSuzu($isSuzu)
    {
        $this->isSuzu = $isSuzu;
    }


}
