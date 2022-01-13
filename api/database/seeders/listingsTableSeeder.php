<?php

namespace Database\Seeders;

use App\Models\Listing;
use Illuminate\Database\Seeder;

class listingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($x = 0; $x <= 100; $x++) {

            Listing::create([
                'name' => 'Test Record ' . $x,
                'slug' => 'test-record-' . $x,
                'address_line_1' => $x . ' Fake Street',
                'address_town' => 'Nottingham',
                'address_county' => 'Nottinghamshire',
                'address_postal_code' => 'NG11 8GT',
                'address_country' => 'United Kingdom',
                'cost' => $x * 100,
            ]);
        }


    }
}
