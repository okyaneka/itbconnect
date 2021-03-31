<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Header extends Component
{
    public $majors = [];
    public $profs = [];
    public $business_field = [];

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
