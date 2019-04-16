<?php
/**
 * Created by PhpStorm.
 * User: HB
 * Date: 16/04/2019
 * Time: 11:26
 */

interface SuzuInterface extends MotoInterface
{
    public function getisSuzu();
    public function setisSuzu($isSuzu);
    public function __construct($marque, $model, $prix, $topCase, $isSuzu);

}