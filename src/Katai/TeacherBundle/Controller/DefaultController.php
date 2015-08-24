<?php

namespace Katai\TeacherBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('KataiTeacherBundle:Default:index.html.twig', array('name' => $name));
    }
}
