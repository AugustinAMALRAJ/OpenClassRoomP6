<?php
// src/Controller/TestController.php
namespace App\Controller;
use Symfony\Component\HttpFoundation\Response;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class TestController extends AbstractController
{
    /**
     *  @Route("/Lucky/number")
     */
    public function number()
    {
        $number = random_int(0, 100);
        //return new Response('<html><body>Lucky number :'.$number.'</body></html>');
        return $this->render('test.html.twig', ['number' => $number,]);
    }
}