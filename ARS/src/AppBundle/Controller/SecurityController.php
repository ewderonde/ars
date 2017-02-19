<?php
/**
 * Created by PhpStorm.
 * User: Sven de Ronde
 * Date: 18-2-2017
 * Time: 16:32
 */

namespace AppBundle\Controller;


use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class SecurityController extends BaseController
{
//    public function loginAction(Request $request)
//    {
//        $authenticationUtils = $this->container->get('security.authentication_utils');
//
//        // get the login error if there is one
//        $error = $authenticationUtils->getLastAuthenticationError();
//
//        // last username entered by the user
//        $lastUsername = $authenticationUtils->getLastUsername();
//
//        return $this->render('security/login.html.twig', array(
//            'last_username' => $lastUsername,
//            'error'         => $error,
//        ));
//    }

    /**
     * Login form action
     *
     * @return Response
     */
    public function loginAction()
    {
        if($this->authorizationChecker->isGranted('ROLE_USER')) {
            return new RedirectResponse($this->router->generate('dashboard_index'));
        }

        $error = $this->authenticationUtils->getLastAuthenticationError();

        // last username entered by the user
        $lastUsername = $this->authenticationUtils->getLastUsername();

        $params = array(
            'last_username' => $lastUsername,
            'error'         => $error,
        );

        return new Response($this->templating->render('security/login.html.twig', $params));
    }
}