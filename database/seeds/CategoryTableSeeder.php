<?php

use Illuminate\Database\Seeder;
use CreatyDev\Domain\Ticket\Models\Category;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            [
                'name' => 'Billing',
            ],
            [
                'name' => 'Support',
            ],
            [
                'name' => 'Sales',
            ],
        ];


        Category::insert($categories);
    }
}
