<?php
/**
 * Created by PhpStorm.
 * User: benjamin
 * Date: 20/09/18
 * Time: 19:38
 */

class  Person
{
 // Constructor
    public $nom;
    public  $anys;
    public $viu_mort;
    /**
     * Person constructor.
     * @param $nom
     * @param $anys
     * @param $viu_mort
     */

    public function __construct($nom = '', $anys = '', $viu_mort=false)
    {
        $this->nom = $nom; // this->esto,un mateix
        $this->anys=$anys;
        $this->viu_mort=$viu_mort;

    }
    public function viu_mort()
    {
        $this->viu_mort = true;
    }


}