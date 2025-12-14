<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categoriesData = [
            [
                'title' => '1. Information Gathering'
            ],
            [
                'title' => '2. Configuration and Deploy Management Testing'
            ],
            [
                'title' => '3. Identity Management Testing'
            ],
            [
                'title' => '4. Authentication Testing'
            ],
            [
                'title' => '5. Authorization Testing'
            ],
            [
                'title' => '6. Session Management Testing'
            ],
            [
                'title' => '7. Data Validation Testing'
            ],
            [
                'title' => '8. Error Handling'
            ],
            [
                'title' => '9. Cryptography'
            ],
            [
                'title' => '10. Business logic Testing'
            ],
            [
                'title' => '11. Client Side Testing'
            ],
            [
                'title' => '12. API Testing'
            ],
        ];


    }
}
