<?php

namespace App\Form;

use App\Entity\Educateur;
use App\Entity\MailEdu;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class MailFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('objet')
            ->add('message')
            ->add('destinaires', EntityType::class, [
                'class' => Educateur::class,
                'choice_label' => function (Educateur $educateur) {
                    return  $educateur->getLicencie()->getPrenom() . ' ' . $educateur->getLicencie()->getNom() . ' • ' . $educateur->getEmail();
                },
                'multiple' => true,
                'expanded' => true,
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => MailEdu::class,
        ]);
    }
}
