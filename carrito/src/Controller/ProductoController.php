<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProductoController extends AbstractController
{
    #[Route('/', name: 'listar_productos')]
    public function listarProductos(): Response
    {
        return $this->render('producto/lista.html.twig');
    }

    #[Route('/producto', name: 'detalle_producto')]
    public function detalleProducto(): Response
    {
        $html = '<html><body><b>Este es el detalle del producto</b></body></html>';

        return new Response($html);
    }
}