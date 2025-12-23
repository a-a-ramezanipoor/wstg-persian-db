<?php

namespace Database\Seeders;

use App\Models\Category;
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

        Category::query()->insert($categoriesData);

        $categories = Category::all();

        $itemsData = [];

        $infoCat = $categories->where('title',  '1. Information Gathering')->firstOrFail();
        $confCat = $categories->where('title',  '2. Configuration and Deploy Management Testing')->firstOrFail();
        $idenCat = $categories->where('title',  '3. Identity Management Testing')->firstOrFail();
        $authenticCat = $categories->where('title',  '4. Authentication Testing')->firstOrFail();
        $authorCat = $categories->where('title',  '5. Authorization Testing')->firstOrFail();
        $sessCat = $categories->where('title',  '6. Session Management Testing')->firstOrFail();
        $dataCat = $categories->where('title',  '7. Data Validation Testing')->firstOrFail();
        $errCat = $categories->where('title',  '8. Error Handling')->firstOrFail();
        $cryptCat = $categories->where('title',  '9. Cryptography')->firstOrFail();
        $bussCat = $categories->where('title',  '10. Business logic Testing')->firstOrFail();
        $clientCat = $categories->where('title',  '11. Client Side Testing')->firstOrFail();
        $apiCat = $categories->where('title',  '12. API Testing')->firstOrFail();

    }
}
