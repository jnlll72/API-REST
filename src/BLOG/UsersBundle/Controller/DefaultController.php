<?php

namespace BLOG\UsersBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('BLOGUsersBundle:Default:index.html.twig');
    }
}
