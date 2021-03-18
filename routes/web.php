<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect('login');
});

Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('/home', function () {
        $users = [
            (object) [
                'name' => 'Roland Andira Wala',
                'profession' => 'Commissioner',
                'company' => 'PT SAS Andalan Sinergi',
                'entry_year' => '2005',
                'major' => 'Teknik Mesin',
                'profile_photo_url' => url('/images/Roland Andira Wala Teknik Mesin 2005 Commissioner at PT SAS Andalan Sinergi.jpg'),
            ],
            (object) [
                'name' => 'Alfin Dwisatrio Ilham Fatullah',
                'profession' => 'Engineer',
                'company' => 'PT SAS Aero Sishan',
                'entry_year' => '2016',
                'major' => 'Teknik Mesin',
                'profile_photo_url' => url('/images/Alfin Dwisatrio Ilham Fatullah. Teknik mesin 2016 Engineer at PT SAS Aero Sishan.jpeg'),
            ],
            (object) [
                'name' => 'Arya Dipajaya Nugraha',
                'profession' => 'Engineer',
                'company' => 'PT SAS Aero Sishan',
                'entry_year' => '2016',
                'major' => 'Teknik Mesin',
                'profile_photo_url' => url('/images/Arya Dipajaya Nugraha. Teknik mesin 2016 Engineer at PT SAS Aero Sishan.jpeg'),
            ],
            (object) [
                'name' => 'Hafid Sidqi Nur Muzwar',
                'profession' => 'Engineer',
                'company' => 'PT SAS Aero Sishan',
                'entry_year' => '2010',
                'major' => 'Fisika Teknik',
                'profile_photo_url' => url('/images/Hafid Sidqi Nur Muzwar. Fisika Teknik 2010 Engineer at PT SAS Aero Sishan.jpeg'),
            ],
            (object) [
                'name' => 'Muchammad Nadzar Rizqi Ramadhan',
                'profession' => 'Engineer',
                'company' => 'PT SAS Aero Sishan',
                'entry_year' => '2010',
                'major' => 'Fisika Teknik',
                'profile_photo_url' => url('/images/Muchammad Nadzar Rizqi Ramadhan. Fisika Teknik 2010 Engineer at PT SAS Aero Sishan.jpeg'),
            ],
            (object) [
                'name' => 'Rakshidatu Lestaluhu',
                'profession' => 'Engineer',
                'company' => 'PT SAS Aero Sishan',
                'entry_year' => '2005',
                'major' => 'Teknik Mesin',
                'profile_photo_url' => url('/images/Rakshidatu Lestaluhu. Teknik Mesin 2005 Engineer at PT SAS Aero Sishan.jpeg'),
            ],
            (object) [
                'name' => 'Wisnu Nurwafi Oktavian',
                'profession' => 'Engineer',
                'company' => 'PT SAS Aero Sishan',
                'entry_year' => '2016',
                'major' => 'Teknik Mesin',
                'profile_photo_url' => url('/images/Wisnu Nurwafi Oktavian. Teknik mesin 2016 Engineer at PT SAS Aero Sishan.jpeg'),
            ],
        ];

        return view('home', compact('users'));
    })->name('dashboard');

    Route::get('/search', function () {
        return view('search');
    })->name('search');

    Route::get('/u/{username}', function ($username) {
        $experiences = [
            (object) [
                'profession' => 'Commissioner',
                'company' => 'CV. Energi Alternatif Indonesia',
                'start_year' => '2006',
                'end_year' => '2008',
            ],
            (object) [
                'profession' => 'President Commissioner',
                'company' => 'PT. T-Files Indonesia',
                'start_year' => '2008',
                'end_year' => '2010',
            ],
            (object) [
                'profession' => 'Director',
                'company' => 'CV. BMI',
                'start_year' => '2009',
                'end_year' => '2011',
            ],
            (object) [
                'profession' => 'President Commissioner',
                'company' => 'PT. Safta Ferti',
                'start_year' => '2010',
                'end_year' => '',
            ],
            (object) [
                'profession' => 'President Commissioner',
                'company' => 'PT. Kwarsa Maha Kreasi',
                'start_year' => '2012',
                'end_year' => '',
            ],
            (object) [
                'profession' => 'President Commissioner',
                'company' => 'PT. Tarvi Brikindo',
                'start_year' => '2013',
                'end_year' => '2017',
            ],
            (object) [
                'profession' => 'Director',
                'company' => 'PT. Semesta Talenta Reportindo',
                'start_year' => '2013',
                'end_year' => '',
            ],
            (object) [
                'profession' => 'Technical and Operation Director',
                'company' => 'PT. SAS Aero Sishan',
                'start_year' => '2017',
                'end_year' => '',
            ],
            (object) [
                'profession' => 'Operation Director',
                'company' => 'PT. Selaras Kayu Abadi',
                'start_year' => '2018',
                'end_year' => '',
            ],
            (object) [
                'profession' => 'Commissioner',
                'company' => 'PT. Safta Aerosishan Industri',
                'start_year' => '2019',
                'end_year' => '',
            ],
            (object) [
                'profession' => 'Commissioner',
                'company' => 'PT. SAS Andalan Sinergi',
                'start_year' => '2021',
                'end_year' => '',
            ],
        ];

        $educations = [
            (object) [
                'entry_year' => '1998',
                'grad_year' => '2001',
                'grade' => '',
                'major' => '',
                'school' => 'SMP Islam Plus PB Sudirman',
                'location' => 'Jakarta',
            ],
            (object) [
                'entry_year' => '2001',
                'grad_year' => '2004',
                'grade' => '',
                'major' => '',
                'school' => 'SMA Terpadu Krida Nusantara',
                'location' => 'Bandung',
            ],
            (object) [
                'entry_year' => '2005',
                'grad_year' => '2010',
                'grade' => '',
                'major' => 'Teknik Mesin',
                'school' => ' ITB',
                'location' => 'Bandung',
            ],
        ];

        $products = [
            (object) [
                'name' => '16L Sprayer Drone Hexacopter',
                'img_src' => '2. Produk 1 _ 1.png',
            ],
            (object) [
                'name' => 'Intelligent Surveillance System (ISS) UAV',
                'img_src' => '3. Produk 2 _ 1.png',
            ],
        ];

        $portofolios = [
            '2. Produk 1 _ 2.png',
            '2. Produk 1 _ 3.png',
            '2. Produk 1 _ 5.PNG',
            '3. Produk 2 _ 10.jpg',
            '3. Produk 2 _ 5.PNG',
            '3. Produk 2 _ 7.jpg',
            '3. Produk 2 _ 9.jpg',
        ];

        return view('user', compact('experiences', 'educations', 'products', 'portofolios'));
    })->name('user');

    Route::get('/news/{slug}', function ($slug) {
        return view('single.news', compact('slug'));
    })->name('single.news');

    Route::get('/ayo-beresin/{slug}', function ($slug) {
        return view('single.feature-1', compact('slug'));
    })->name('single.feature-1');

    Route::get('/loker-project-beasiswa/{slug}', function ($slug) {
        return view('single.feature-2', compact('slug'));
    })->name('single.feature-2');

    Route::get('/user/business', function () {
        return view('business');
    })->name('business.show');

    Route::get('/user/message', function () {
        return view('message');
    })->name('message.show');

    Route::get('/user/ayo-beresin', function () {
        return view('feature-1');
    })->name('feature1.show');

    Route::get('/user/loker-project-beasiswa', function () {
        return view('feature-2');
    })->name('feature2.show');
});
