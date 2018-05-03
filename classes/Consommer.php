<?php
/**
 * Created by PhpStorm.
 * User: Dell
 * Date: 03/05/2018
 * Time: 11:51
 */

trait Consommer
{
    protected $charge;

    public function calculerResteBatterie()
    {
        return $this->charge;
    }

    public function nombreChargesBatterie()
    {

    }
}