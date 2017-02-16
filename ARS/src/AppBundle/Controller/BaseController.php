<?php
/**
 * Created by PhpStorm.
 * User: Sven de Ronde
 * Date: 16-2-2017
 * Time: 20:09
 */

namespace AppBundle\Controller;


use Doctrine\ORM\EntityManager;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Bundle\FrameworkBundle\Routing\Router;
use Symfony\Component\Form\FormError;
use Symfony\Component\Form\FormFactoryInterface;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\Templating\EngineInterface;
use Symfony\Component\Translation\TranslatorInterface;

class BaseController extends Controller
{
    /**
     * @var Session
     */
    protected $session;

    /**
     * @var Router
     */
    protected $router;

    /**
     * @var EntityManager
     */
    protected $em;

    /**
     * @var TranslatorInterface
     */
    protected $translator;

    /**
     * @var RequestStack
     */
    protected $requestStack;

    /**
     * @var FormFactoryInterface
     */
    protected $formFactory;


    /**
     * @var EngineInterface
     */
    protected $templating;

    public function __construct(
        EngineInterface $templating,
        Session $session,
        Router $router,
        TranslatorInterface $translator,
        EntityManager $em,
        RequestStack $requestStack,
        FormFactoryInterface $formFactory
    ) {
        $this->templating = $templating;
        $this->formFactory = $formFactory;
        $this->requestStack = $requestStack;
        $this->em = $em;
        $this->session = $session;
        $this->router = $router;
        $this->translator = $translator;

    }


}