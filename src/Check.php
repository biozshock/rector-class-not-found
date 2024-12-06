<?php declare(strict_types=1);

namespace App;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

class Check extends AbstractController
{

    public function check(): Response
    {
        return $this->redirect($this->generateUrl('login', [], UrlGeneratorInterface::ABSOLUTE_URL));
    }

}
