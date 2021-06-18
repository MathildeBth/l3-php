<?php


namespace App\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class CatalogController
{
    public function view() : Response{
        $repertoire_produit = new \Repository\ProductRepository();
        $liste_produit = [];
        $liste_produit = $repertoire_produit->findAll();
        var_dump($liste_produit);
        return $this->render('Catalog.html.twig');
    }
}