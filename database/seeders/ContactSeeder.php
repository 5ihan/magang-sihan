<?php

namespace Database\Seeders;

use App\Models\Contact;
use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Contact::create([
            'nama'=> "Sihan",
            'phone' => 6282113229533,
            'email' => 'sihan@gmail.com',
        ]);
    }
}
