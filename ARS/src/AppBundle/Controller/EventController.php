<?php
/**
 * Created by PhpStorm.
 * User: Sven de Ronde
 * Date: 16-2-2017
 * Time: 20:50
 */

namespace AppBundle\Controller;


use Symfony\Component\HttpFoundation\Response;

class EventController extends BaseController
{
    public function indexAction() {
        return new Response($this->templating->render('event/index.html.twig'));
    }
}