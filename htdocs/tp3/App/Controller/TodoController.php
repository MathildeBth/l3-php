<?php

namespace App\Controller;

use App\Entity\Product;

class TodoController extends AbstractController
{

    public function home() {
        $client = new Client();

        $reponse = $client->get("https://jsonplaceholder.typicode.com/todos");
        if ($reponse->getStatusCode() !== 200) {
            throw new \Exception("Impossible de joindre l'api");
        }
        $json = json_decode($reponse->getBody()->getContents(), true);
        $this->render('catalogues/values.phtml', ['guzzle' => $json]);
    }

}