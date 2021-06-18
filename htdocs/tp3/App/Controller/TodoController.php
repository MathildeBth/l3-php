<?php

namespace App\Controller;

use App\Entity\Product;

class TodoController extends AbstractController
{

    public function home() {
        $client = new Client();
        $res = $client->get("https://jsonplaceholder.typicode.com/todos");
        $json = json_decode($res->getBody()->getContents(), true);
        $this->render('catalogues/values.phtml', ['guzzle' => $json]);
    }

}