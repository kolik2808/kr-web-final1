<?php
/**
 * Created by PhpStorm.
 * User: Kolennka
 * Date: 15.05.2017
 * Time: 10:00
 */
namespace Blogger\BlogBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PrepodController extends Controller
{
    public function indexAction()
    {
        return $this->render('BloggerBlogBundle:Page:index.html.twig');
    }
}
