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
            [
                'category_id'=>$idenCat->id,
                'title'=>"Test Role Definitions",
                'code'=>"WSTG-IDNT-01",
                'description'=>"test"
            ],
            [
                'category_id'=>$idenCat->id,
                'title'=>"Test User Registration Process",
                'code'=>"WSTG-IDNT-02",
                'description'=>"test"
            ],
            [
                'category_id'=>$idenCat->id,
                'title'=>"Test Account Provisioning Process",
                'code'=>"WSTG-IDNT-03",
                'description'=>"test"
            ],
            [
                'category_id'=>$idenCat->id,
                'title'=>"Testing for Account Enumeration and Guessable User Account",
                'code'=>"WSTG-IDNT-04",
                'description'=>"test"
            ],
            [
                'category_id'=>$idenCat->id,
                'title'=>"Testing for Weak or Unenforced Username Policy",
                'code'=>"WSTG-IDNT-05",
                'description'=>"test"
            ],
            [
                'category_id'=>$authenticCat->id,
                'title'=>"Testing for Credentials Transported over an Encrypted Channel",
                'code'=>"WSTG-ATHN-01",
                'description'=>"test"
            ],
            [
                'category_id'=>$authenticCat->id,
                'title'=>"Testing for Default Credentials",
                'code'=>"WSTG-ATHN-02",
                'description'=>"test"
            ],
            [
                'category_id'=>$authenticCat->id,
                'title'=>"Testing for Weak Lock Out Mechanism",
                'code'=>"WSTG-ATHN-03",
                'description'=>"test"
            ],
            [
                'category_id'=>$authenticCat->id,
                'title'=>"Testing for Bypassing Authentication Schema",
                'code'=>"WSTG-ATHN-04",
                'description'=>"test"
            ],
            [
                'category_id'=>$authenticCat->id,
                'title'=>"Testing for Vulnerable Remember Password",
                'code'=>"WSTG-ATHN-05",
                'description'=>"test"
            ],
            [
                'category_id'=>$authenticCat->id,
                'title'=>"Testing for Browser Cache Weaknesses",
                'code'=>"WSTG-ATHN-06",
                'description'=>"test"
            ],
            [
                'category_id'=>$authenticCat->id,
                'title'=>"Testing for Weak Password Policy",
                'code'=>"WSTG-ATHN-07",
                'description'=>"test"
            ],
            [
                'category_id'=>$authenticCat->id,
                'title'=>"Testing for Weak Security Question Answer",
                'code'=>"WSTG-ATHN-08",
                'description'=>"test"
            ],
            [
                'category_id'=>$authenticCat->id,
                'title'=>"Testing for Weak Password Change or Reset Functionalities",
                'code'=>"WSTG-ATHN-09",
                'description'=>"test"
            ],
            [
                'category_id'=>$authenticCat->id,
                'title'=>"Testing for Weaker Authentication in Alternative Channel",
                'code'=>"WSTG-ATHN-10",
                'description'=>"test"
            ],
            [
                'category_id'=>$authenticCat->id,
                'title'=>"Testing Multi-Factor Authentication (MFA)",
                'code'=>"WSTG-ATHN-11",
                'description'=>"test"
            ],
            [
                'category_id'=>$authorCat->id,
                'title'=>"Testing Directory Traversal File Include",
                'code'=>"WSTG-ATHZ-01",
                'description'=>"test"
            ],
            [
                'category_id'=>$authorCat->id,
                'title'=>"Testing for Bypassing Authorization Schema",
                'code'=>"WSTG-ATHZ-02",
                'description'=>"test"
            ],
            [
                'category_id'=>$authorCat->id,
                'title'=>"Testing for Privilege Escalation",
                'code'=>"WSTG-ATHZ-03",
                'description'=>"test"
            ],
            [
                'category_id'=>$authorCat->id,
                'title'=>"Testing for Insecure Direct Object References",
                'code'=>"WSTG-ATHZ-04",
                'description'=>"test"
            ],
            [
                'category_id'=>$authorCat->id,
                'title'=>"Testing for OAuth Weaknesses",
                'code'=>"WSTG-ATHZ-05",
                'description'=>"test"
            ],
            [
                'category_id'=>$sessCat->id,
                'title'=>"Testing for Session Management Schema",
                'code'=>"WSTG-SESS-01",
                'description'=>"test"
            ],
            [
                'category_id'=>$sessCat->id,
                'title'=>"Testing for Cookies Attributes",
                'code'=>"WSTG-SESS-02",
                'description'=>"test"
            ],
            [
                'category_id'=>$sessCat->id,
                'title'=>"Testing for Session Fixation",
                'code'=>"WSTG-SESS-03",
                'description'=>"test"
            ],
            [
                'category_id'=>$sessCat->id,
                'title'=>"Testing for Exposed Session Variables",
                'code'=>"WSTG-SESS-04",
                'description'=>"test"
            ],
            [
                'category_id'=>$sessCat->id,
                'title'=>"Testing for Cross Site Request Forgery",
                'code'=>"WSTG-SESS-05",
                'description'=>"test"
            ],
            [
                'category_id'=>$sessCat->id,
                'title'=>"Testing for Logout Functionality",
                'code'=>"WSTG-SESS-06",
                'description'=>"test"
            ],
            [
                'category_id'=>$sessCat->id,
                'title'=>"Testing Session Timeout",
                'code'=>"WSTG-SESS-07",
                'description'=>"test"
            ],
            [
                'category_id'=>$sessCat->id,
                'title'=>"Testing for Session Puzzling",
                'code'=>"WSTG-SESS-08",
                'description'=>"test"
            ],
            [
                'category_id'=>$sessCat->id,
                'title'=>"Testing for Session Hijacking",
                'code'=>"WSTG-SESS-09",
                'description'=>"test"
            ],
            [
                'category_id'=>$sessCat->id,
                'title'=>"Testing JSON Web Tokens",
                'code'=>"WSTG-SESS-10",
                'description'=>"test"
            ],
        ];

    }
}
