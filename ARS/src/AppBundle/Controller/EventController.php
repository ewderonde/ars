<?php
/**
 * Created by PhpStorm.
 * User: Sven de Ronde
 * Date: 16-2-2017
 * Time: 20:50
 */

namespace AppBundle\Controller;


use AppBundle\Entity\Event;
use AppBundle\Form\EventType;
use Doctrine\Common\Util\Debug;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;

class EventController extends BaseController
{
    public function indexAction() {
        $eventRepo = $this->em->getRepository('AppBundle:event');
        $events = $eventRepo->findAll();

        return new Response($this->templating->render('event/index.html.twig', [
            'events' => $events
        ]));
    }

    public function createAction() {
        $event = new event();

        // Create new form.
        $form = $this->formFactory->create(EventType::class, $event);

        // Handle Request.
        $form->handleRequest($this->request);

        // Check if the information is valid, when form is submitted.
        if ($form->isSubmitted() && $form->isValid()) {
            $date = $form->get('date')->getData();
            $timeStart = $form->get('timeStart')->getData();
            $timeEnd = $form->get('timeEnd')->getData();
            Debug::dump($date);
            exit;
            $dateTimeStart = new \DateTime($date->format('d-m-y') . ' ' . $timeStart);
            $dateTimeEnd = null;

            // Create datetime object for time end if it has been specified.
            if(!empty($timeEnd)) {
                $dateTimeEnd = new \DateTime($date->format('d-m-y') . ' ' . $timeEnd);
            }

            $event->setTimeStart($dateTimeStart->format('d-m-y H:i'));
            $event->setTimeEnd($dateTimeEnd->format('d-m-y H:i'));

            $this->em->persist($event);
            $this->em->flush();

            // Set flash message.
            $this->addFlash('message', 'Het evenement is aangemaakt!');

            return new RedirectResponse($this->router->generate('event_index'));
        } else {
            // Show error messages.
        }

        return new Response($this->templating->render('event/form.html.twig', [
            'form' => $form->createView()
        ]));
    }

    public function readAction(Event $event) {

        return new Response($this->templating->render('event/read.html.twig', [
            'event' => $event,
            'id' => $event->getId()
        ]));
    }

    public function editAction(Event $event) {
        // Create new form.
        $form = $this->formFactory->create(eventType::class, $event);

        // Handle Request.
        $form->handleRequest($this->request);

        // Check if the information is valid, when form is submitted.
        if ($form->isSubmitted() && $form->isValid()) {
            $this->em->persist($event);
            $this->em->flush();

            // Set flash message.
            $this->addFlash('message', 'De wijzigingen zijn opgeslagen!');

            return new RedirectResponse($this->router->generate('event_index'));
        } else {
            // Show error messages.
        }

        return new Response($this->templating->render('event/form.html.twig', [
            'form' => $form->createView()
        ]));
    }

    public function deleteAction(Event $event) {
        // Delete entity
        $this->em->remove($event);
        $this->em->flush();

        $this->addFlash('message', 'Het evenement is verwijderd!');
        return new RedirectResponse($this->router->generate('event_index'));
    }
}