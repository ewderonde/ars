<?php

/**
 * Created by PhpStorm.
 * User: Sven de Ronde
 * Date: 18-2-2017
 * Time: 18:07
 */

namespace AppBundle\Form;

use DateTime;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Translation\TranslatorInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;



class CoworkerType extends AbstractType
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
            ->add('firstName', TextType::class, array(
                'label' => 'Voornaam',
                'attr' => array('minlength' => 2),
                'required' => true,
            ))
            ->add('lastName', TextType::class, array(
                'label' => 'Achternaam',
                'attr' => array('minlength' => 2),
                'required' => true,
            ))
            ->add('dateOfBirth', DateType::class, array(
                'label' => 'Geboortedatum',
                'widget' => 'single_text',
                'required' => true,
                'format' => 'dd-MM-yyyy',
                'attr' => array('class' => 'form-control')
            ))
            ->add('address', TextType::class, array(
                'label' => 'Adres',
                'required' => true,
                'attr' => array('class' => 'form-control')
            ))
            ->add('addressNumber', TextType::class, array(
                'label' => 'toevoeging',
                'required' => false,
                'attr' => array('class' => 'form-control')
            ))
            ->add('city', TextType::class, array(
                'label' => 'Woonplaats',
                'required' => true,
                'attr' => array('class' => 'form-control')
            ))
            ->add('bsn', TextType::class, array(
                'label' => 'Burgerservicenummer',
                'required' => false,
                'attr' => array('class' => 'form-control')
            ))
            ->add('email', TextType::class, array(
                'label' => 'E-mailadres',
                'required' => true,
                'attr' => array('class' => 'form-control')
            ))
            ->add('iban', TextType::class, array(
                'label' => 'Bankrekeningnummer',
                'required' => false,
                'attr' => array('class' => 'form-control')
            ))
            ->add('wage', TextType::class, array(
                'label' => 'Uurloon',
                'required' => false,
                'attr' => array('class' => 'form-control')
            ))
            ->add('submit', SubmitType::class, [
                'label' => 'Account aanmaken',
            ]);
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Coworker',
            'translation_domain' => 'form',
        ));
    }
}
