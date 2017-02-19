<?php
/**
 * Created by PhpStorm.
 * User: Sven de Ronde
 * Date: 16-2-2017
 * Time: 20:50
 */

namespace AppBundle\Controller;


use AppBundle\Entity\Task;
use AppBundle\Form\TaskType;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;

class TaskController extends BaseController
{
    public function indexAction() {
        $taskRepo = $this->em->getRepository('AppBundle:Task');
        $tasks = $taskRepo->findAll();

        return new Response($this->templating->render('task/index.html.twig', [
            'tasks' => $tasks
        ]));
    }

    public function createAction() {
        $task = new Task();

        // Create new form.
        $form = $this->formFactory->create(TaskType::class, $task);

        // Handle Request.
        $form->handleRequest($this->request);

        // Check if the information is valid, when form is submitted.
        if ($form->isSubmitted() && $form->isValid()) {
            $this->em->persist($task);
            $this->em->flush();

            // Set flash message.
            $this->addFlash('message', 'De functie is aangemaakt!');

            return new RedirectResponse($this->router->generate('task_index'));
        } else {
            // Show error messages.
        }

        return new Response($this->templating->render('task/form.html.twig', [
            'form' => $form->createView()
        ]));
    }

    public function readAction(Task $task) {

        return new Response($this->templating->render('task/read.html.twig', [
            'task' => $task,
            'id' => $task->getId()
        ]));
    }

    public function editAction(Task $task) {
        // Create new form.
        $form = $this->formFactory->create(TaskType::class, $task);

        // Handle Request.
        $form->handleRequest($this->request);

        // Check if the information is valid, when form is submitted.
        if ($form->isSubmitted() && $form->isValid()) {
            $this->em->persist($task);
            $this->em->flush();

            // Set flash message.
            $this->addFlash('message', 'De wijzigingen zijn opgeslagen!');

            return new RedirectResponse($this->router->generate('task_index'));
        } else {
            // Show error messages.
        }

        return new Response($this->templating->render('task/form.html.twig', [
            'form' => $form->createView()
        ]));
    }

    public function deleteAction(Task $task) {
        // Delete entity
        $this->em->remove($task);
        $this->em->flush();

        $this->addFlash('message', 'De functie is verwijderd!');
        return new RedirectResponse($this->router->generate('task_index'));
    }
}