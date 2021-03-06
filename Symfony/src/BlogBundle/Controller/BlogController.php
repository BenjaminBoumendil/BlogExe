<?php
declare(strict_types=1);

namespace BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class BlogController extends Controller
{
    public function indexAction()
    {
        $repository = $this->getDoctrine()->getManager()->getRepository('BlogBundle:Article');
        $articles = $repository->findBy(array('isActive' => true));

        return $this->render('BlogBundle:Default:index.html.twig', array('articles' => $articles));
    }
}
