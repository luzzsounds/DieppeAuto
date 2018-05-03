<?php
/**
 * Created by PhpStorm.
 * User: Dell
 * Date: 03/05/2018
 * Time: 11:56
 */

class SUVElectrique extends Voiture
{
    use Consommer;

    public function afficherCharge()
    {
        return $this->charge;
    }
}