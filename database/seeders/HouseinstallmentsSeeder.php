<?php

namespace Database\Seeders;
use App\Models\Houseinstallments;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HouseinstallmentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $houseinstallment = [
            [
                'Housename' => 'Elegant Home',
                'Address' => 'Tinangnan,Tubigon,Bohol',
                'price' => '99',
            ],
            [
                'Housename' => 'Dream House',
                'Address' => 'Tinangnan,Tubigon,Bohol',
                'price' => '99',
            ],
            [
                'Housename' => 'GreenView Home',
                'Address' => 'Tinangnan,Tubigon,Bohol',
                'price' => '99',
            ],

            [
                'Housename' => 'Elegant Home',
                'Address' => 'Tinangnan,Tubigon,Bohol',
                'price' => '99',

            ],

            [
                'Housename' => 'Elegant Home',
                'Address' => 'Tinangnan,Tubigon,Bohol',
                'price' => '99',

            ]
        ];
        foreach($houseinstallment as $h) {
            Houseinstallments::create($h);
        }
    }
    
}
