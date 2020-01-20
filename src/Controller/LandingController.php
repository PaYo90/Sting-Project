<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LandingController extends AbstractController
{
    /**
     * @Route("/", name="landingpage")
     */
    public function landingpage()
    {
        return $this->render('smartadmin/test.html.twig', [
            'treść' => "strona główna"
        ]);
    }

    /**
     * @Route("/news/")
     */
    public function newsmain()
    {
        return new Response(sprintf('slog main page'));
    }

    /**
     * @Route("/news/{slug}")
     */
    public function news($slug)
    {
        return new Response(sprintf('slog : %s', $slug));
    }

    /**
     * @Route("/news/{slug}/{dog}")
     */
    public function news2($slug, $dog)
    {
        return new Response(sprintf('slog : %s - %s', $slug, $dog));
    }
}