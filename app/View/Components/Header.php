<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Header extends Component
{
    public $majors = [];
    public $profs = [];
    public $business_field = [];
    public $interests = [];
    public $pengdas = [];
    public $IAs = [];

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->majors = [
            (object) [
                'text' => 'Fakultas Ilmu dan Teknologi Kebumian (FITB) ',
                'disabled' => 'disabled'
            ],
            (object) [
                'text' => 'Meteorologi (ME)',
                'disabled' => ''
            ],
            (object) [
                'text' => 'Oseanografi (OS)',
                'disabled' => ''
            ],
            (object) [
                'text' => 'Teknik Geodesi dan Geomatika (GD)',
                'disabled' => ''
            ],
            (object) [
                'text' => 'Teknik Geologi (GL)',
                'disabled' => ''
            ],
            (object) [
                'text' => 'Fakultas Matematika dan Ilmu Pengetahuan Alam (FMIPA) ',
                'disabled' => 'disabled'
            ],
            (object) [
                'text' => 'Aktuaria (AK)',
                'disabled' => ''
            ],
            (object) [
                'text' => 'Astronomi (AS)',
                'disabled' => ''
            ],
            (object) [
                'text' => 'Fisika (FI)',
                'disabled' => ''
            ],
            (object) [
                'text' => 'Kimia (KI)',
                'disabled' => ''
            ],
            (object) [
                'text' => 'Matematika (MA)',
                'disabled' => ''
            ],
            (object) [
                'text' => 'Fakultas Seni Rupa dan Desain (FSRD) ',
                'disabled' => 'disabled'
            ],
            (object) [
                'text' => 'Desain Interior (DI)',
                'disabled' => ''
            ],
            (object) [
                'text' => 'Desain Komunikasi Visual (DKV)',
                'disabled' => ''
            ],
            (object) [
                'text' => 'Desain Produk (DP)',
                'disabled' => ''
            ],
            (object) [
                'text' => 'Kriya (KR)',
                'disabled' => ''
            ],
            (object) [
                'text' => 'Seni Rupa (SR)',
                'disabled' => ''
            ],
            (object) [
                'text' => 'Fakultas Teknik Mesin dan Dirgantara (FTMD) ',
                'disabled' => 'disabled'
            ],
            (object) [
                'text' => 'Teknik Dirgantara (AE)',
                'disabled' => ''
            ],
            (object) [
                'text' => 'Teknik Material (MT)',
                'disabled' => ''
            ],
            (object) [
                'text' => 'Teknik Mesin (MS)',
                'disabled' => ''
            ],
            (object) [
                'text' => 'Fakultas Teknik Pertambangan dan Perminyakan (FTTM) ',
                'disabled' => 'disabled'
            ],
            (object) [
                'text' => 'Teknik Geofisika (TG)',
                'disabled' => ''
            ],
            (object) [
                'text' => 'Teknik Metalurgi (MG)',
                'disabled' => ''
            ],
            (object) [
                'text' => 'Teknik Perminyakan ( TM)',
                'disabled' => ''
            ],
            (object) [
                'text' => 'Teknik Pertambangan (TA)',
                'disabled' => ''
            ],
            (object) [
                'text' => 'Fakultas Teknik Sipil dan Lingkungan (FTSL) ',
                'disabled' => 'disabled'
            ],
            (object) [
                'text' => 'Rekayasa Infrastruktur Lingkungan (IL)',
                'disabled' => ''
            ],
            (object) [
                'text' => 'Teknik dan Pengelolaan Sumber Daya Air (SA)',
                'disabled' => ''
            ],
            (object) [
                'text' => 'Teknik Kelautan (KL)',
                'disabled' => ''
            ],
            (object) [
                'text' => 'Teknik Lingkungan (TL)',
                'disabled' => ''
            ],
            (object) [
                'text' => 'Teknik Sipil (SI)',
                'disabled' => ''
            ],
            (object) [
                'text' => 'Fakultas Teknologi Industri (FTI) ',
                'disabled' => 'disabled'
            ],
            (object) [
                'text' => 'Manajemen Rekayasa Industri (MR)',
                'disabled' => ''
            ],
            (object) [
                'text' => 'Teknik Bioenergi dan Kemurgi (TB)',
                'disabled' => ''
            ],
            (object) [
                'text' => 'Teknik Fisika (TF)',
                'disabled' => ''
            ],
            (object) [
                'text' => 'Teknik Industri (TI)',
                'disabled' => ''
            ],
            (object) [
                'text' => 'Teknik Kimia (TK)',
                'disabled' => ''
            ],
            (object) [
                'text' => 'Teknik Pangan (PG)',
                'disabled' => ''
            ],
            (object) [
                'text' => 'Sekolah Arsitektur, Perencanaan dan Pengembangan Kebijakan (SAPPK) ',
                'disabled' => 'disabled'
            ],
            (object) [
                'text' => 'Arsitektur (AR)',
                'disabled' => ''
            ],
            (object) [
                'text' => 'Perencanaan Wilayah dan Kota (PWK)',
                'disabled' => ''
            ],
            (object) [
                'text' => 'Sekolah Bisnis dan Manajemen (SBM) ',
                'disabled' => 'disabled'
            ],
            (object) [
                'text' => 'Kewirausahaan (MK)',
                'disabled' => ''
            ],
            (object) [
                'text' => 'Manajemen (MB)',
                'disabled' => ''
            ],
            (object) [
                'text' => 'Sekolah Farmasi (SF) ',
                'disabled' => 'disabled'
            ],
            (object) [
                'text' => 'Farmasi Klinik dan Komunitas (FKK)',
                'disabled' => ''
            ],
            (object) [
                'text' => 'Sains dan Teknologi Farmasi (FA)',
                'disabled' => ''
            ],
            (object) [
                'text' => 'Sekolah Ilmu dan Teknologi Hayati (SITH) ',
                'disabled' => 'disabled'
            ],
            (object) [
                'text' => 'Biologi (BI)',
                'disabled' => ''
            ],
            (object) [
                'text' => 'Mikrobiologi (BM)',
                'disabled' => ''
            ],
            (object) [
                'text' => 'Rekayasa Hayati (BE)',
                'disabled' => ''
            ],
            (object) [
                'text' => 'Rekayasa Pertanian (BA)',
                'disabled' => ''
            ],
            (object) [
                'text' => 'Rekayasa Kehutanan (BW)',
                'disabled' => ''
            ],
            (object) [
                'text' => 'Teknologi Pascapanen (BP)',
                'disabled' => ''
            ],
            (object) [
                'text' => 'Sekolah Teknik Elektro dan Informatika (STEI) ',
                'disabled' => 'disabled'
            ],
            (object) [
                'text' => 'Sistem dan Teknologi Informasi (II)',
                'disabled' => ''
            ],
            (object) [
                'text' => 'Teknik Biomedis (EB)',
                'disabled' => ''
            ],
            (object) [
                'text' => 'Teknik Elektro (EL)',
                'disabled' => ''
            ],
            (object) [
                'text' => 'Informatika (IF)',
                'disabled' => ''
            ],
            (object) [
                'text' => 'Teknik Telekomunikasi (ET)',
                'disabled' => ''
            ],
            (object) [
                'text' => 'Teknik Tenaga Listrik (EP)',
                'disabled' => ''
            ]
        ];
        $this->profs = [
            'Administrator',
            'Advokad',
            'Agen rahasia (Mata-mata)',
            'Aktor',
            'Akuntan',
            'Antariksawan (Astronaut, Astronot)',
            'Apoteker',
            'Arsitek',
            'Atlet',
            'Bartender ',
            'Bidan',
            'Blogger',
            'Buruh',
            'Calo',
            'Camat',
            'Desainer',
            'Direktur',
            'Dokter',
            'Dokter hewan',
            'Dosen',
            'Editor',
            'Fotografer',
            'Gamer',
            'Guide',
            'Guru',
            'Ilmuwan',
            'Ilustrator',
            'Insinyur',
            'Inspektur',
            'Jaksa',
            'Jurnalis',
            'Karyawan / Buruh',
            'Kasir',
            'Kiai (Ulama)',
            'Koki (Juru masak)',
            'Komikus',
            'Kondektur',
            'Konsultan',
            'Lurah',
            'Manajer',
            'Marketing',
            'Masinis (Juru mesin)',
            'Model',
            'Montir',
            'Nakhoda',
            'Nelayan',
            'Novelis',
            'Notaris',
            'Operator',
            'Pastor (agama Kristen)',
            'Pedagang',
            'Pegawai negeri (Pegawai Negeri Sipil, PNS)',
            'Pekerja sosial',
            'Pelaut',
            'Pelayan',
            'Pelukis',
            'Pemadam kebakaran (Damkar, PMK)',
            'Pemahat',
            'Pemain sepak bola ',
            'Pemeran ',
            'Pemrogram (Pengembang perangkat lunak, Programmer)',
            'Penari ',
            'Pendeta',
            'Peneliti',
            'Penerjemah ',
            'Pengacara (Advokat)',
            'Pengantar surat ',
            'Pengusaha -',
            'Penulis',
            'Penyanyi',
            'Perancang (Desainer)',
            'Perancang grafis (Desainer grafis)',
            'Perawat',
            'Peretas',
            'Perminyakan ',
            'Petani',
            'Peternak ',
            'Polisi',
            'Politikus',
            'Pramugari',
            'Programmer ',
            'Psikiater (Dokter jiwa)',
            'Psikolog (Ahli psikologi)',
            'Pilot (Pengemudi pesawat terbang)',
            'Pramusaji ',
            'Pramugara',
            'Presiden',
            'Raja',
            'Ratu',
            'Refractionis Optisen',
            'Resepsionis',
            'Satpam',
            'Sekretaris',
            'Selebriti',
            'Seniman',
            'Sopir',
            'Tani ',
            'Tengkulak',
            'TNI',
            'Tukang (istilah umum) ',
            'Tukang jahit ',
            'Tukang kayu',
            'Tukang las ',
            'Tukang listrik ',
            'Tukang pos (pengantar surat)',
            'Ulama (agama Islam)',
            'Ustad',
            'Video-editor ',
            'Wartawan (Jurnalis, Pewarta)',
            'Wiraswasta',
            'Youtubers',
        ];
        $this->business_field = [
            'Bisnis Pertanian',
            'Bisnis Peternakan',
            'Bisnis Produksi Bahan Mentah',
            'Bisnis Manufaktur',
            'Bisnis Konstruksi',
            'Bisnis Transportasi',
            'Bisnis Pendidikan',
            'Bisnis Teknologi Informasi',
            'Bisnis Komunikasi',
            'Bisnis Perdagangan Besar/Kecil',
            'Bisnis Finansial',
            'Bisnis Jasa',
            'Bisnis Kuliner',
            'Bisnis Media',
        ];
        $this->interests = [
            'Keluarga Mahasiswa ITB - KM ITB',
            'Keluarga Mahasiswa Islam – GAMAIS ITB',
            'Keluarga Mahasiswa Katolik – KMK ITB',
            'Persekutuan Mahasiswa Kristen – PMK ITB',
            'Keluarga Mahasiswa Budha – KMB ITB',
            'Keluarga Mahasiswa Hindu – KMH ITB',
            'Mahasiswa (PSM)',
            'Unit Kebudayaan Kalimantan (UKK)',
            'Marching Band Waditra Ganesha (MBWG)',
            'Keluarga Paduan Angklung (KPA)',
            'Korean Culture Club ITB (KCC ITB)',
            'Unit Kebudayaan Betawi (UKB)',
            'Perkumpulan Seni dan Tari Karawitan Jawa (PSTK)',
            'Lingkar Sastra (LS)',
            'Unit Kebudayaan Melayu Riau (UKMR)',
            'Lingkung Seni Sunda (LSS)',
            'ITB Dance and Performance Art Community (INFINITY ITB)',
            'ITBJazz',
            'ITB Student Orchestra (ISO)',
            'Unit Rebana ITB (URI)',
            'Studi Teater Mahasiswa (STEMA)',
            'Maha Gotra Ganesha (MGG)',
            'Unit Kebudayaan Aceh (UKA)',
            'Unit Kesenian Sumatera Utara (UKSU)',
            'Mahasiswa Bumi Sriwijaya (MUSI)',
            'Unit Budaya Lampung (UBALA)',
            'Unit Kesenian Sulawesi Selatan (UKSS)',
            'Unit Kebudayaan Jepang (UKJ)',
            'Unit Kebudayaan Tionghoa (UKT)',
            'APRES!',
            'Unit Aktivitas Bridge ITB',
            'Unit Basket Ganesha',
            'Aikido ITB',
            'Unit Taekwondo ITB',
            'Unit Panahan Pasopati ITB',
            'Unit Aktivitas Tenis Meja',
            'Unit Perisai Diri ITB',
            'Unit Bulu Tangkis',
            'Unit Karate ITB',
            'Unit Flag Football ITB "Ganesha Touchdown"',
            'Persatuan Sepakbola ITB',
            'Unit Bola Voli ITB',
            'Capoeira Brasil ITB',
            'Unit Softball ITB',
            'Shorinji Kempo ITB',
            'Unit Tenis ITB',
            'Unit Tarung Derajat ITB',
            'ATLAS ITB',
            'Kendo ITB',
            'Nautika ITB',
            'Unit Merpati Putih ITB',
            'Glaciem Skating ITB',
            'Unit Renang dan Polo Air ITB',
            'Percama ITB',
            'Persaudaraan Setia Hati Terate ITB',
            'Korps Sukarela Palang Merah Indonesia Institut Teknologi Bandung',
            'Gajah Ngomik ITB',
            'Pop Culture Enthusiast Club Genshiken',
            'Kelompok Studi Ekonomi dan Pasar Modal ITB',
            'Aksantara ITB',
            'Ganesha Model United Nations Club',
            'Pramuka ITB',
            'AIESEC in ITB',
            'KOKESMA ITB (Koperasi Kesejahteraan Mahasiswa ITB)',
            'Pelita Muda ITB',
            'Techno Entrepreneur Club ITB',
            'Keluarga Mahasiswa Pecinta Alam Ganesha Institut Teknologi Bandung (KMPA Ganesha ITB)',
            'Unit Robotika ITB',
            'Resimen Mahasiswa Mahawarman Batalyon I/ITB',
            'U-Green ITB',
            'Unit Otomotif Rakata ITB',
            'Solve It ITB',
            'Amateur Radio Club – ARC ITB',
            'Perkumpulan Studi Ilmu Kemasyarakatan – PSIK ITB',
            'Majalah Ganesha – Kelompok Studi Sejarah Ekonomi Politik ITB',
            'Institut Sosial Humaniora Tiang Bendera – ISH TiBen ITB',
            'Liga Film Mahasiswa (LFM)',
            'Radio Kampus ITB',
            '8EH Radio ITB',
            'Pers Mahasiswa ITB',
            'Majalah Ganesha',
            'Boulevard ITB',
        ];
        $this->pengdas = [
            'Pengda Aceh',
            'Pengda Sumatera Utara',
            'Pengda Sumatera Barat',
            'Pengda Jambi ',
            'Pengda Kepulauan Riau',
            'Pengda Bengkulu ',
            'Pengda Bangka Belitung',
            'Pengda Sumatera Selatan',
            'Pengda Lampung',
            'Pengda Jawa Timur',
            'Pengda Jawa Tengah',
            'Pengda D.I Yogyakarta',
            'Pengda Jakarta',
            'Pengda Jawa Barat',
            'Pengda Banten',
            'Pengda Nusa Tenggara Barat',
            'Pengda Bali',
            'Pengda Maluku',
            'Pengda Kalimantan Timur',
            'Pengda Kalimantan Tengah',
            'Pengda Kalimantan Selatan',
            'Pengda Sulawesi Utara',
            'Pengda Sulawesi Tenggara',
            'Pengda Sulawesi Selatan',
            'Pengda Papua dan Papua Barat',
            'Pengda Qatar',
            'Pengda Malaysia',
            'Pengda Western Australia',
            'Pengda Singapura',
            'Pengda Kalimantan Barat',
            'Pengda Riau',
            'Komisariat Angkatan 96',
            'Komisariat Angkatan 96',
            'Komisariat Angkatan 85',
            'Komisariat Angkatan 95',
            'Komisariat Angkatan 81',
            'Forum ITB 84',
            'Komisariat UKSS',
            'Komisariat PS IA',
            'Komisariat Angkatan 72',
            'Komisariat Angkatan 91',
            'Komisariat Angkatan 82',
            'Komisariat Kementrian Pekerjaan Umum',
            'Komisariat Kaltim Prima Coal',
            'Komisariat Program Pendidikan (HMPK)',
            'Komisariat CHEVRON Indonesia',
            'Komisariat PERTAMINA',
            'Komisariat Angkatan 88',
            'Komisariat PTG',
            'Komisariat Eropa',
            'Komisariat Angkatan 92',
            'Komisariat Angkatan 86',
            'Komisariat Kewirausahaan',
            'Komisariat Angkatan 1989',
            'Komisariat Uni Emirat Arab',
            'Komisariat 8EH RADIO ITB',
            'Komisariat Belanda',
            'Komisariat Angkatan 93',
            'Komisariat Angkatan 90',
        ];
        $this->IAs  = [
            'IA Oseanografi',
            'IA  Meteorologi',
            'IA Teknik Geologi',
            'IA  Astronomi',
            'IA  Fisika',
            'IA  Matematika',
            'IA Kimia',
            'IA Seni Rupa dan Desain',
            'IA Teknik Fisika',
            'IA Teknik Kimia',
            'IA Teknik Industri',
            'IA Aeronotika & Astronotika',
            'IA Teknik Material',
            'IA Teknik Mesin',
            'IA Teknik Geofisika',
            'IA Teknik Metalurgi',
            'IA Teknik Perminyakan',
            'IA Teknik Pertambangan',
            'IA Teknik Lingkungan',
            'IA Teknik Sipil',
            'IA Teknik dan Pengelolaan Sumber Daya Air',
            'IA Arsitektur',
            'IA Planologi',
            'IA Rancang Kota',
            'IA Kewirausahaan dan Manajemen',
            'IA Farmasi',
            'IA Biologi',
            'IA Teknik Elektro',
            'IA Teknik Informatika',
            'IA Geofisika dan Meteorologi',
            'IA Teknik Geotermal',
            'IA Bioengineering',
            'IA Penerbangan',
            'IA Sains Manajemen Sekolah Bisnis dan Manajemen',
            'IA Teknik Geodesi',
        ];
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.header');
    }
}
