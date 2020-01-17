<?php


namespace App\Controller;


use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LandingController
{
    /**
     * @Route("/")
     */
    public function landingpage()
    {
        return new Response('OMG! My first page already! woho.');
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