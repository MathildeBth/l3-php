<?php


class Voiture
{
    private $couleur;
    private $puissance;
    private $vitesse;
    const nbRoues = 4;

    public function getCouleur()
    {
        return $this->couleur;
    }

    public function setCouleur($couleur)
    {
        $this->couleur = $couleur;
    }

    public function getPuissance()
    {
        return $this->puissance;
    }

    public function setPuissance($puissance)
    {
        $this->puissance = $puissance;
    }

    public function getVitesse()
    {
        return $this->vitesse;
    }

    public function setVitesse($vitesse)
    {
        $this->vitesse = $vitesse;
    }

    public function accelerer($vitesse){
        $this->vitesse = $vitesse++;
    }
    public function ralentir($vitesse){
        $this->vitesse = $vitesse--;
    }

}