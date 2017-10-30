<?php

namespace Blog\BlogBundle\Form;

use Blog\BlogBundle\Entity\Task;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class RegisterType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('surname', TextType::class,array('attr'=>array('class'=>'input-group form-control','placeholder'=>"Фамилия")))
            ->add('name', TextType::class,array('attr'=>array('class'=>'input-group form-control','placeholder'=>"Имя")))
            ->add('password', PasswordType::class,array('attr'=>array('class'=>'input-group form-control','placeholder'=>"******")))
            ->add('password_confirm',PasswordType::class,array('attr'=>array('class'=>'input-group form-control','placeholder'=>"******")))
            ->add('email', EmailType::class,array('attr'=>array('class'=>'input-group form-control','placeholder'=>"Email")));
    }
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => Task::class,
        ));
    }
    public function getBlockPrefix()
    {
        return 'register';
    }
}