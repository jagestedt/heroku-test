<?php

namespace Database\Seeders;

use App\Models\Author;
use Illuminate\Database\Seeder;

class AuthorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Author::create(array(
            'id' => 1,
            'firstname' => 'George',
            'surname' => 'Orwell'
        ));

        Author::create(array(
            'id' => 2,
            'firstname' => 'Stephen',
            'surname' => 'King'
        ));
    }
}
