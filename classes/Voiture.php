<?php
/**
 * Created by PhpStorm.
 * User: Dell
 * Date: 03/05/2018
 * Time: 10:01
 */

abstract class Voiture
{
    protected $couleurDominante;
    protected $masse;
    protected $marque;
    protected $modele;
    protected $vitesse;

    public function __construct($mark, $model)
    {
        $this->marque = $mark;
        $this->modele = $model;
    }

    abstract public function distanceFreinage();

}