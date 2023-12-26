<?php
namespace Modules\People\Database\factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class SupplierFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = \Modules\People\Entities\Supplier::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'supplier_name'     => 'Kopi Company',
            'supplier_email'    => 'kopkom@test.com',
            'supplier_phone'    => '085123456789',
            'city'              => 'Bandung',
            'country'           => 'Indonesia',
            'address'           => 'Bandung'
        ];
        return [
            'supplier_name'     => 'Food Company',
            'supplier_email'    => 'foodkom@test.com',
            'supplier_phone'    => '085123456789',
            'city'              => 'Bandung',
            'country'           => 'Indonesia',
            'address'           => 'Bandung'
        ];
    }
}

