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
                'name' => 'Abdul Luky Shofiul Azmi',
                'profession' => 'Dosen',
                'company' => 'ITB',
                'entry_year' => '2003 ',
                'major' => 'Teknik Mesin',
                'profile_photo_url' => url('/images/users/Abdul Luky Shofiul Azmi-Teknik Mesin 2003 - Dosen-ITB.jpg'),
            ],
            (object) [
                'name' => 'Harits M Albar',
                'profession' => 'Risk Consulting',
                'company' => 'Pricewaterhouse Cooper Indonesia',
                'entry_year' => '2014',
                'major' => 'Matematika',
                'profile_photo_url' => url('/images/users/Harits M Albar-Matematika 2014-Risk Consulting-Pricewaterhouse Cooper Indonesia.jpg'),
            ],
            (object) [
                'name' => 'Lovanda Sebayang',
                'profession' => 'Business Development',
                'company' => 'PT Jahermosa',
                'entry_year' => '2015',
                'major' => 'Teknik Sipil',
                'profile_photo_url' => url('/images/users/Lovanda Sebayang-Teknik Sipil 2015-Business Development-PT Jahermosa.jpg'),
            ],
            (object) [
                'name' => 'Nabila Gardena',
                'profession' => 'Influencer',
                'company' => '',
                'entry_year' => '2014',
                'major' => 'SBM',
                'profile_photo_url' => url('/images/users/Nabila Gardena-SBM 2014-Influencer.jpeg'),
            ],
            (object) [
                'name' => 'Roland Andira Wala ',
                'profession' => 'Commissioner',
                'company' => 'PT SAS Andalan Sinergi',
                'entry_year' => '2005',
                'major' => 'Teknik Mesin',
                'profile_photo_url' => url('/images/users/Roland Andira Wala -Teknik Mesin 2005-Commissioner-PT SAS Andalan Sinergi.jpg'),
            ],
            (object) [
                'name' => 'Rudy Andiyana',
                'profession' => 'Founder',
                'company' => 'PT Daun Biru Engineering',
                'entry_year' => '1994',
                'major' => 'Teknik Mesin',
                'profile_photo_url' => url('/images/users/Rudy Andiyana-Teknik Mesin 1994-Founder-PT Daun Biru Engineering.jpg'),
            ],
            (object) [
                'name' => 'Setiawan Eko Nugroho',
                'profession' => 'Wakil Ketua',
                'company' => 'BAZNAS',
                'entry_year' => '1994',
                'major' => 'Teknik Material',
                'profile_photo_url' => url('/images/users/Setiawan Eko Nugroho-Teknik Material 1994-Wakil Ketua-BAZNAS.jpg'),
            ],
            (object) [
                'name' => 'Yan Yan Muhammad Achdiansyah',
                'profession' => 'Program Manager',
                'company' => 'New Energy Nexus',
                'entry_year' => '2010',
                'major' => 'Teknik Geologi',
                'profile_photo_url' => url('/images/users/Yan Yan Muhammad Achdiansyah-Teknik Geologi 2010-Program Manager-New Energy Nexus.jpg'),
            ],
            (object) [
                'name' => 'Zaumi Sirad',
                'profession' => 'Politikus',
                'company' => '',
                'entry_year' => '1995',
                'major' => 'Farmasi',
                'profile_photo_url' => url('/images/users/Zaumi Sirad-Farmasi 1995-Politikus.png'),
            ],
        ];

        $articles = [
            (object) [
                'caption' => 'Anak Gajah Pulang Kandang',
                'image' => url('/images/news/Anak Gajah Pulang Kandang.jpg')
            ],
            (object) [
                'caption' => 'Kamisan - Beasiswa LPDP',
                'image' => url('/images/news/Kamisan - Beasiswa LPDP.jpg')
            ],
            (object) [
                'caption' => 'Buka Bersama 1000 Anak Yatim - HIMPUNI',
                'image' => url('/images/news/Buka Bersama 1000 Anak Yatim - HIMPUNI.jpg')
            ],
            (object) [
                'caption' => 'Kamisan - Pengelolaan Sampah',
                'image' => url('/images/news/Kamisan - Pengelolaan Sampah.jpg')
            ],
            (object) [
                'caption' => 'Buka Bersama IA-ITB',
                'image' => url('/images/news/Buka Bersama IA-ITB.jpg')
            ],
            (object) [
                'caption' => 'Kamisan - Undang Undang Keinsinyuran',
                'image' => url('/images/news/Kamisan - Undang Undang Keinsinyuran.jpg')
            ],
            (object) [
                'caption' => 'Dialog Peradaban Indonesia',
                'image' => url('/images/news/Dialog Peradaban Indonesia.jpg')
            ],
            (object) [
                'caption' => 'Munas HIMPUNI',
                'image' => url('/images/news/Munas HIMPUNI.jpg')
            ],
            (object) [
                'caption' => 'Diskusi Pakar - Freeport',
                'image' => url('/images/news/Diskusi Pakar - Freeport.jpg')
            ],
            (object) [
                'caption' => 'Olahraga Bareng IA-ITB _ TNI',
                'image' => url('/images/news/Olahraga Bareng IA-ITB _ TNI.jpg')
            ],
            (object) [
                'caption' => 'Diskusi Pakar - Teluk Jakarta',
                'image' => url('/images/news/Diskusi Pakar - Teluk Jakarta.jpg')
            ],
            (object) [
                'caption' => 'Peduli Bencana',
                'image' => url('/images/news/Peduli Bencana.jpg')
            ],
            (object) [
                'caption' => 'Entrepreneurship Meetup',
                'image' => url('/images/news/Entrepreneurship Meetup.jpg')
            ],
            (object) [
                'caption' => 'Pengukuhan Ikatan Alumni Prodi',
                'image' => url('/images/news/Pengukuhan Ikatan Alumni Prodi.jpg')
            ],
            (object) [
                'caption' => 'Extravaganza ITB Night',
                'image' => url('/images/news/Extravaganza ITB Night.jpg')
            ],
            (object) [
                'caption' => 'Pengukuhan Pengda IA-ITB',
                'image' => url('/images/news/Pengukuhan Pengda IA-ITB.jpg')
            ],
            (object) [
                'caption' => 'Family Fun Bike',
                'image' => url('/images/news/Family Fun Bike.jpg')
            ],
            (object) [
                'caption' => 'Rakernas IA-ITB',
                'image' => url('/images/news/Rakernas IA-ITB.jpg')
            ],
            (object) [
                'caption' => 'Festival Band Alumni',
                'image' => url('/images/news/Festival Band Alumni.jpg')
            ],
            (object) [
                'caption' => 'Seminar Kemaritiman',
                'image' => url('/images/news/Seminar Kemaritiman.jpg')
            ],
            (object) [
                'caption' => 'Gala Dinner Stakeholder ITB',
                'image' => url('/images/news/Gala Dinner Stakeholder ITB.jpg')
            ],
            (object) [
                'caption' => 'Studium General with BTN',
                'image' => url('/images/news/Studium General with BTN.jpg')
            ],
            (object) [
                'caption' => 'Halal Bihalal IA-ITB',
                'image' => url('/images/news/Halal Bihalal IA-ITB.jpg')
            ],
            (object) [
                'caption' => 'Synergy Run',
                'image' => url('/images/news/Synergy Run.jpg')
            ],
            (object) [
                'caption' => 'IA-ITB _ MIT Alumni Presidential Lecture',
                'image' => url('/images/news/IA-ITB _ MIT Alumni Presidential Lecture.jpg')
            ],
            (object) [
                'caption' => 'Turnamen Futsal IA-ITB',
                'image' => url('/images/news/Turnamen Futsal IA-ITB.jpg')
            ],
            (object) [
                'caption' => 'Indonesianisme Summit',
                'image' => url('/images/news/Indonesianisme Summit.jpg')
            ],
            (object) [
                'caption' => 'Turnamen Tenis Piala Ketum IA-ITB',
                'image' => url('/images/news/Turnamen Tenis Piala Ketum IA-ITB.jpg')
            ],
            (object) [
                'caption' => 'Instalasi Pengolahan Air Mobile Untuk Lokasi Bencana',
                'image' => url('/images/news/Instalasi Pengolahan Air Mobile Untuk Lokasi Bencana.jpg')
            ],
        ];

        $features =
            [
                (object) [
                    'image' => url('/images/features/Poster Ayo Beresin Bareng_Donor Darah Untuk Bangsa.jpeg'),
                    'caption' => 'Donor Darah Untuk Bangsa'
                ],
                (object) [
                    'image' => url('/images/features/Poster Ayo Beresin Bareng_Pompa Hidram.jpeg'),
                    'caption' => 'Pompa Hidram'
                ],
                (object) [
                    'image' => url('/images/features/Poster Ayo Beresin Bareng_Rumah Sakit Alumni ITB.jpg'),
                    'caption' => 'Rumah Sakit Alumni ITB'
                ],
            ];

        return view('home', compact('users', 'articles', 'features'));
    })->name('dashboard');

    Route::get('/search', function () {
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

        return view('search', compact('users'));
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
        $user = (object) [
            'name' => 'Roland Andira Wala',
            'profession' => 'Commissioner',
            'company' => 'PT SAS Andalan Sinergi',
            'entry_year' => '2005',
            'major' => 'Teknik Mesin',
            'profile_photo_url' => url('/images/Roland Andira Wala Teknik Mesin 2005 Commissioner at PT SAS Andalan Sinergi.jpg'),
        ];

        return view('single.feature-1', compact('user'));
    })->name('single.feature-1');

    Route::get('/loker-project-beasiswa/{slug}', function ($slug) {
        $user = (object) [
            'name' => 'Roland Andira Wala',
            'profession' => 'Commissioner',
            'company' => 'PT SAS Andalan Sinergi',
            'entry_year' => '2005',
            'major' => 'Teknik Mesin',
            'profile_photo_url' => url('/images/Roland Andira Wala Teknik Mesin 2005 Commissioner at PT SAS Andalan Sinergi.jpg'),
        ];

        return view('single.feature-2', compact('user'));
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
