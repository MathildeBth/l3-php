<?php


namespace App\Controller;


use http\Env\Response;
//use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TestController
{
    /**
     * @Route('test', name='page_test')
     */
    public function test(): Response{
        return new Response('<html><body>Test page</body></html>');
    }
}