<?php

/**
 * Created by PhpStorm.
 * User: Sven de Ronde
 * Date: 18-2-2017
 * Time: 18:07
 */

namespace AppBundle\Form;

use AppBundle\Repository\UserRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TimeType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Translation\TranslatorInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class EventType extends AbstractType
{
    /**
     *
     * @var TranslatorInterface
     */
    private $translator;

    public function __construct(TranslatorInterface $translator) {
        $this->translator = $translator;
    }

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('date', DateType::class, array(
                'label' => 'Datum',
                'attr' => array('minlength' => 2),
                'required' => true,
            ))
            ->add('timeStart', TimeType::class, array(
                'label' => 'Start tijd',
                'widget' => 'single_text',
                'input' => 'array',
                'required' => true,
                'html5' => false,
                'mapped' => false,
                'with_seconds' => false,
                'attr' => array('class' => 'form-control', 'required' => true),
            ))
            ->add('timeEnd', TimeType::class, array(
                'label' => 'Eind tijd',
                'widget' => 'single_text',
                'input' => 'array',
                'required' => false,
                'html5' => false,
                'mapped' => false,
                'with_seconds' => false,
                'attr' => array('class' => 'form-control'),
            ))
            ->add('employeeStartingTime', TimeType::class, array(
                'label' => 'Aanvang Medewerkers',
                'widget' => 'single_text',
                'input' => 'array',
                'required' => false,
                'html5' => false,
                'mapped' => false,
                'with_seconds' => false,
                'attr' => array('class' => 'form-control'),
            ))
            ->add('guests', TextType::class, array(
                'label' => 'Aantal gasten',
                'required' => true,
            ))
            ->add('description', TextareaType::class, array(
                'label' => 'Aantal gasten',
                'required' => true,
            ))
            ->add('manager', EntityType::class, array(
                'label' => 'Beheerder',
                'class' => 'AppBundle:User',
                'attr' => array('title' => 'Kies een manager.', 'class' => 'form-control'),
                'required' => true,
                'query_builder' => function (UserRepository $u) {
                    // get all relations.
                    $qb = $u->getAllUsers();
                    return $qb;
                }
            ))
            ->add('submit', SubmitType::class, [
                'label' => 'Opslaan',
                'attr' => array('class' => 'btn btn-success'),
            ]);
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Event',
            'translation_domain' => 'form',
        ));
    }
}
