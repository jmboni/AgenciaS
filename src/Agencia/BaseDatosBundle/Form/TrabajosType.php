<?php

namespace Agencia\BaseDatosBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class TrabajosType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('tipo')
            ->add('compania')
            ->add('logo')
            ->add('url')
            ->add('posicion')
            ->add('localidad')
            ->add('descripcion')
            ->add('how_to_apply')
            ->add('token')
            ->add('publico')
            ->add('activado')
            ->add('email')
            ->add('finaliza')
            ->add('creado')
            ->add('actualizado')
            ->add('categoria')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Agencia\BaseDatosBundle\Entity\Trabajos'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'agencia_basedatosbundle_trabajos';
    }
}
