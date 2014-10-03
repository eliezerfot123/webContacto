<?php

namespace Agenda\ContactoBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ContactoType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nombres')
            ->add('apellidos')
            ->add('direccion')
            ->add('casa')
            ->add('celular')
            ->add('email')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Agenda\ContactoBundle\Entity\Contacto'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'agenda_contactobundle_contacto';
    }
}
