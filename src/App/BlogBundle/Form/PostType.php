<?php

namespace App\BlogBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class PostType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('title', null, array('label' => 'Название'))
            ->add('content', null, array('label' => 'Содержание'))
        ;
    }

    public function getName()
    {
        return 'app_blogbundle_posttype';
    }
}
