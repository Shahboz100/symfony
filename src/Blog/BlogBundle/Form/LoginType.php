<?php
/**
 * Created by PhpStorm.
 * User: shahb
 * Date: 26.10.2017
 * Time: 19:24
 */

namespace Blog\BlogBundle\Form;


use Blog\BlogBundle\Entity\Login;
use Blog\BlogBundle\Entity\User;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class LoginType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('login',TextType::class,array('attr'=>array('class'=>'input-group form-control','placeholder'=>"examle@ex.ru")))
            ->add('password',PasswordType::class,array('attr'=>array('class'=>'input-group form-control','placeholder'=>"******")));
    }
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class'=>Login::class,
        ));
    }
    public function getBlockPrefix()
    {
        return 'form_login';
    }

}