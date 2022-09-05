<?php
declare(strict_types=1);
namespace App\Form\Extension;
use Sylius\Bundle\ProductBundle\Form\Type\ProductType;
use Symfony\Component\Form\AbstractTypeExtension;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;

class ProductCustomColorTypeExtension extends AbstractTypeExtension
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            // Adding new fields works just like in the parent form type.
            ->add('color', ChoiceType::class, [
                'required' => false,
                'label' => 'app.form.product.color',
                'choices'  => [
                    'czerwony' => 'red',
                    'niebieski' => 'blue',
                    'zielony' => 'green',
                ],
            ])
            ;
    }

    public static function getExtendedTypes(): iterable
    {
        return [ProductType::class];
    }
}
