<?php

namespace App\Form;

use App\Entity\Categorie;
use App\Entity\Contact;
use App\Entity\MailContact;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class MailContactFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('objet')
            ->add('message')
            ->add('destinataires', EntityType::class, [
                'class' => Categorie::class,
                'choice_label' => function (Categorie $categorie) {
                    return  $categorie->getCodeRaccourci() . ' • ' . $categorie->getNomCategorie();
                },
                'multiple' => true,
                'expanded' => true,
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => MailContact::class,
        ]);
    }
}
