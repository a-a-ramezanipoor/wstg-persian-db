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



        $itemsData = [
            [
                'category_id'=>$infoCat->id,
                'title'=>"Conduct Search Engine Discovery Reconnaissance for Information Leakage",
                'code'=>"WSTG-INFO-01",
                'description'=>"test"
            ],
            [
                'category_id'=>$infoCat->id,
                'title'=>"Fingerprint Web Server",
                'code'=>"WSTG-INFO-02",
                'description'=>"test"
            ],
            [
                'category_id'=>$infoCat->id,
                'title'=>"Review Webserver Metafiles for Information Leakage",
                'code'=>"WSTG-INFO-03",
                'description'=>"test"
            ],
            [
                'category_id'=>$infoCat->id,
                'title'=>"Enumerate Applications on Webserver",
                'code'=>"WSTG-INFO-04",
                'description'=>"test"
            ],
            [
                'category_id'=>$infoCat->id,
                'title'=>"Review Webpage Content for Information Leakage",
                'code'=>"WSTG-INFO-05",
                'description'=>"test"
            ],
            [
                'category_id'=>$infoCat->id,
                'title'=>"Identify Application Entry Points",
                'code'=>"WSTG-INFO-06",
                'description'=>"test"
            ],
            [
                'category_id'=>$infoCat->id,
                'title'=>"Map Execution Paths Through Application",
                'code'=>"WSTG-INFO-07",
                'description'=>"test"
            ],
            [
                'category_id'=>$infoCat->id,
                'title'=>"Fingerprint Web Application Framework",
                'code'=>"WSTG-INFO-08",
                'description'=>"test"
            ],
            [
                'category_id'=>$infoCat->id,
                'title'=>"Fingerprint Web Application",
                'code'=>"WSTG-INFO-09",
                'description'=>"test"
            ],
            [
                'category_id'=>$infoCat->id,
                'title'=>"Map Application Architecture",
                'code'=>"WSTG-INFO-10",
                'description'=>"test"
            ],
            [
                'category_id'=>$confCat->id,
                'title'=>"Test Network Infrastructure Configuration",
                'code'=>"WSTG-CONF-01",
                'description'=>"test"
            ],
            [
                'category_id'=>$confCat->id,
                'title'=>"Test Application Platform Configuration",
                'code'=>"WSTG-CONF-02",
                'description'=>"test"
            ],
            [
                'category_id'=>$confCat->id,
                'title'=>"Test File Extensions Handling for Sensitive Information",
                'code'=>"WSTG-CONF-03",
                'description'=>"test"
            ],
            [
                'category_id'=>$confCat->id,
                'title'=>"Review Old Backup and Unreferenced Files for Sensitive Information",
                'code'=>"WSTG-CONF-04",
                'description'=>"test"
            ],
            [
                'category_id'=>$confCat->id,
                'title'=>"Enumerate Infrastructure and Application Admin Interfaces",
                'code'=>"WSTG-CONF-05",
                'description'=>"test"
            ],
            [
                'category_id'=>$confCat->id,
                'title'=>"Test HTTP Methods",
                'code'=>"WSTG-CONF-06",
                'description'=>"test"
            ],
            [
                'category_id'=>$confCat->id,
                'title'=>"Test HTTP Strict Transport Security",
                'code'=>"WSTG-CONF-07",
                'description'=>"test"
            ],
            [
                'category_id'=>$confCat->id,
                'title'=>"Test RIA Cross Domain Policy",
                'code'=>"WSTG-CONF-08",
                'description'=>"test"
            ],
            [
                'category_id'=>$confCat->id,
                'title'=>"Test File Permission",
                'code'=>"WSTG-CONF-09",
                'description'=>"test"
            ],
            [
                'category_id'=>$confCat->id,
                'title'=>"Test for Subdomain Takeover",
                'code'=>"WSTG-CONF-10",
                'description'=>"test"
            ],
            [
                'category_id'=>$confCat->id,
                'title'=>"Test Cloud Storage",
                'code'=>"WSTG-CONF-11",
                'description'=>"test"
            ],
            [
                'category_id'=>$confCat->id,
                'title'=>"Testing for Content Security Policy",
                'code'=>"WSTG-CONF-12",
                'description'=>"test"
            ],
            [
                'category_id'=>$confCat->id,
                'title'=>"Test Path Confusion",
                'code'=>"WSTG-CONF-13",
                'description'=>"test"
            ],
        ];

    }
}
