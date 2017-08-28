<?php

namespace Trendl\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class UserController extends Controller
{
    public function indexAction()
    {
        return $this->render('TrendlUserBundle:User:index.html.twig');
    }
}