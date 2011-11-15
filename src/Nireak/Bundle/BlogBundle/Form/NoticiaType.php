<?php

namespace Nireak\Bundle\BlogBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class NoticiaType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('Izenburua')
            ->add('Gorputza')
            ->add('Argitaratze_data')
        ;
    }

    public function getName()
    {
        return 'nireak_bundle_blogbundle_noticiatype';
    }
}
