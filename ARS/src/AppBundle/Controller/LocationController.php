<?php
/**
 * Created by PhpStorm.
 * User: Sven de Ronde
 * Date: 16-2-2017
 * Time: 20:50
 */

namespace AppBundle\Controller;


use AppBundle\Entity\Location;
use AppBundle\Form\LocationType;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;

class LocationController extends BaseController
{
    public function indexAction() {
        $locationRepo = $this->em->getRepository('AppBundle:Location');
        $locations = $locationRepo->findAll();

        return new Response($this->templating->render('location/index.html.twig', [
            'locations' => $locations
        ]));
    }

    public function createAction() {
        $location = new location();

        // Create new form.
        $form = $this->formFactory->create(LocationType::class, $location);

        // Handle Request.
        $form->handleRequest($this->request);

        // Check if the information is valid, when form is submitted.
        if ($form->isSubmitted() && $form->isValid()) {
            $this->em->persist($location);
            $this->em->flush();

            // Set flash message.
            $this->addFlash('message', 'De locatie is toegevoegd!');

            return new RedirectResponse($this->router->generate('location_index'));
        } else {
            // Show error messages.
        }

        return new Response($this->templating->render('location/form.html.twig', [
            'form' => $form->createView()
        ]));
    }

    public function readAction(Location $location) {

        return new Response($this->templating->render('location/read.html.twig', [
            'location' => $location,
            'id' => $location->getId()
        ]));
    }

    public function editAction(Location $location) {
        // Create new form.
        $form = $this->formFactory->create(LocationType::class, $location);

        // Handle Request.
        $form->handleRequest($this->request);

        // Check if the information is valid, when form is submitted.
        if ($form->isSubmitted() && $form->isValid()) {
            $this->em->persist($location);
            $this->em->flush();

            // Set flash message.
            $this->addFlash('message', 'De wijzigingen zijn opgeslagen!');

            return new RedirectResponse($this->router->generate('location_index'));
        } else {
            // Show error messages.
        }

        return new Response($this->templating->render('location/form.html.twig', [
            'form' => $form->createView()
        ]));
    }

    public function deleteAction(Location $location) {
        // Delete entity
        $this->em->remove($location);
        $this->em->flush();

        $this->addFlash('message', 'De locatie is verwijderd!');
        return new RedirectResponse($this->router->generate('location_index'));
    }
}