<?php
/**
 * Created by PhpStorm.
 * User: Kolennka
 * Date: 15.05.2017
 * Time: 10:00
 */

namespace Blogger\BlogBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Security;

class SecurityController extends Controller{
    public function loginAction(Request $request){
        if ($request->attributes->has(Security::AUTHENTICATION_ERROR)) {
            $error = $$request->attributes->get(Security::AUTHENTICATION_ERROR);
        } else {
            $error = $request->getSession()->get(Security::AUTHENTICATION_ERROR);
        }

        return $this->render('BloggerBlogBundle:Security:login.html.twig', array(
            'last_username' => $request->getSession()->get(Security::LAST_USERNAME),
            'error' => $error
        ));
    }
}
