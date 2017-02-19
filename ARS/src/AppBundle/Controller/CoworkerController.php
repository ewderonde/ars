<?php
/**
 * Created by PhpStorm.
 * User: Sven de Ronde
 * Date: 16-2-2017
 * Time: 20:50
 */

namespace AppBundle\Controller;


use AppBundle\Entity\Coworker;
use AppBundle\Form\CoworkerType;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;

class CoworkerController extends BaseController
{
    public function indexAction() {
        $coworkerRepo = $this->em->getRepository('AppBundle:Coworker');
        $coworkers = $coworkerRepo->findAll();

        return new Response($this->templating->render('coworker/index.html.twig', [
            'coworkers' => $coworkers
        ]));
    }

    public function createAction() {
        $coworker = new coworker();

        // Create new form.
        $form = $this->formFactory->create(CoworkerType::class, $coworker);

        // Handle Request.
        $form->handleRequest($this->request);

        // Check if the information is valid, when form is submitted.
        if ($form->isSubmitted() && $form->isValid()) {
            $this->em->persist($coworker);
            $this->em->flush();

            // Set flash message.
            $this->addFlash('message', 'De medewerker is aangemaakt!');

            return new RedirectResponse($this->router->generate('coworker_index'));
        } else {
            // Show error messages.
        }

        return new Response($this->templating->render('coworker/form.html.twig', [
            'form' => $form->createView()
        ]));
    }

    public function readAction(Coworker $coworker) {

        return new Response($this->templating->render('coworker/read.html.twig', [
            'coworker' => $coworker,
            'id' => $coworker->getId()
        ]));
    }

    public function editAction(Coworker $coworker) {
        // Create new form.
        $form = $this->formFactory->create(CoworkerType::class, $coworker);

        // Handle Request.
        $form->handleRequest($this->request);

        // Check if the information is valid, when form is submitted.
        if ($form->isSubmitted() && $form->isValid()) {
            $this->em->persist($coworker);
            $this->em->flush();

            // Set flash message.
            $this->addFlash('message', 'De wijzigingen zijn opgeslagen!');

            return new RedirectResponse($this->router->generate('coworker_index'));
        } else {
            // Show error messages.
        }

        return new Response($this->templating->render('coworker/form.html.twig', [
            'form' => $form->createView()
        ]));
    }

    public function deleteAction(Coworker $coworker) {
        // Delete entity
        $this->em->remove($coworker);
        $this->em->flush();

        $this->addFlash('message', 'De medewerker is verwijderd!');
        return new RedirectResponse($this->router->generate('coworker_index'));
    }
}