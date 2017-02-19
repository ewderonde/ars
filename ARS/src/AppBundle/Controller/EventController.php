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

    public function createAction() {
        return new Response($this->templating->render('event/form.html.twig'));
    }

    public function editAction() {
        return new Response($this->templating->render('event/form.html.twig'));
    }

    public function deleteAction() {
        return new Response($this->templating->render('event/index.html.twig'));
    }
}