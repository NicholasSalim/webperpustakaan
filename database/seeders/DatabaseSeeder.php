<?php

namespace Database\Seeders;

use App\models\Buku;
use App\models\User;
use App\Models\Profile;
use App\models\Kategori;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the Application's database.
     *
     * @return void
     */
    public function run()
    {
     //App\models\User::factory(10)->create();

     User::create([
        'name'=> 'Admin',
        'email'=>'admin@admin.com',
        'password' => Hash::make('admin123'),
        'isAdmin' => '1',
     ]);
     

     Profile::create([
    'npm'=>'-',
    'prodi'=>'-',
    'alamat'=>'-',
    'noTelp'=>'-',
    'users_id'=>'1',
    'photoProfile' => 'amirhamzahlogo.png',
    ]);

    User::create([
        'name'=> 'Bunga Namira',
        'email'=>'bunga@gmail.com',
        'password' => Hash::make('bunga'),
        'isAdmin' => '0',
     ]);
     User::create([
        'name'=> 'Ayu Syafira',
        'email'=>'ayu@gmail.com',
        'password' => Hash::make('ayu'),
        'isAdmin' => '0',
     ]);
     User::create([
        'name'=> 'Rahma Ayu',
        'email'=>'rahma@gmail.com',
        'password' => Hash::make('rahma'),
        'isAdmin' => '0',
     ]);
     User::create([
        'name'=> 'Emi Nurmasari',
        'email'=>'emi@gmail.com',
        'password' => Hash::make('emi'),
        'isAdmin' => '0',
     ]);
     User::create([
        'name'=> 'Aura Syafira',
        'email'=>'aura@gmail.com',
        'password' => Hash::make('aura'),
        'isAdmin' => '0',
     ]);
     User::create([
        'name'=> 'Erizon',
        'email'=>'erizon@gmail.com',
        'password' => Hash::make('erizon'),
        'isAdmin' => '0',
     ]);
     User::create([
        'name'=> 'Wulan Idianti',
        'email'=>'wulan@gmail.com',
        'password' => Hash::make('wulan'),
        'isAdmin' => '0',
     ]);
     User::create([
        'name'=> 'Yuliantika',
        'email'=>'yuli@gmail.com',
        'password' => Hash::make('yuli'),
        'isAdmin' => '0',
     ]);
     User::create([
        'name'=> 'Juliana',
        'email'=>'juli@gmail.com',
        'password' => Hash::make('juli'),
        'isAdmin' => '0',
     ]);
     User::create([
        'name'=> 'Maulana',
        'email'=>'maulana@gmail.com',
        'password' => Hash::make('maulana'),
        'isAdmin' => '0',
     ]);
     User::create([
        'name'=> 'Ferran',
        'email'=>'ferran@gmail.com',
        'password' => Hash::make('ferran'),
        'isAdmin' => '0',
     ]);
     User::create([
        'name'=> 'Nabila',
        'email'=>'nabila@gmail.com',
        'password' => Hash::make('nabila'),
        'isAdmin' => '0',
     ]);
     User::create([
        'name'=> 'Ilham',
        'email'=>'ilham@gmail.com',
        'password' => Hash::make('ilham'),
        'isAdmin' => '0',
     ]);
     User::create([
        'name'=> 'Taufan Alim',
        'email'=>'taufan@gmail.com',
        'password' => Hash::make('taufan'),
        'isAdmin' => '0',
     ]);
     User::create([
        'name'=> 'Muhammad Rizky Nasution',
        'email'=>'rizkynst@gmail.com',
        'password' => Hash::make('rizkynst'),
        'isAdmin' => '0',
     ]);
     
     User::create([
        'name'=> 'Muhammad Syarif',
        'email'=>'syarif@gmail.com',
        'password' => Hash::make('syarif'),
        'isAdmin' => '0',
     ]);
     User::create([
        'name'=> 'Muhammad Fadil Yahya',
        'email'=>'fadil@gmail.com',
        'password' => Hash::make('fadil'),
        'isAdmin' => '0',
     ]);
     User::create([
        'name'=> 'Muhammad Rizky',
        'email'=>'rizky@gmail.com',
        'password' => Hash::make('rizky'),
        'isAdmin' => '0',
     ]);
     User::create([
        'name'=> 'Muhammad Andre Ritonga',
        'email'=>'andre@gmail.com',
        'password' => Hash::make('andre'),
        'isAdmin' => '0',
     ]);
     User::create([
        'name'=> 'Yusuf Ari Wibowo',
        'email'=>'yusuf@gmail.com',
        'password' => Hash::make('yusuf'),
        'isAdmin' => '0',
     ]);
     User::create([
        'name'=> 'Bambang',
        'email'=>'bambang@gmail.com',
        'password' => Hash::make('bambang'),
        'isAdmin' => '0',
     ]);
     User::create([
        'name'=> 'Yuma',
        'email'=>'yuma@gmail.com',
        'password' => Hash::make('yuma'),
        'isAdmin' => '0',
     ]);
     User::create([
        'name'=> 'Diki',
        'email'=>'diki@gmail.com',
        'password' => Hash::make('diki'),
        'isAdmin' => '0',
     ]);
     User::create([
        'name'=> 'Adam',
        'email'=>'adam@gmail.com',
        'password' => Hash::make('adam'),
        'isAdmin' => '0',
     ]);
     User::create([
        'name'=> 'Wahyu',
        'email'=>'wahyu@gmail.com',
        'password' => Hash::make('wahyu'),
        'isAdmin' => '0',
     ]);
     User::create([
        'name'=> 'Fina',
        'email'=>'fina@gmail.com',
        'password' => Hash::make('fina'),
        'isAdmin' => '0',
     ]);
     User::create([
        'name'=> 'Farel',
        'email'=>'farel@gmail.com',
        'password' => Hash::make('farel'),
        'isAdmin' => '0',
     ]);
     User::create([
        'name'=> 'Agus',
        'email'=>'agus@gmail.com',
        'password' => Hash::make('agus'),
        'isAdmin' => '0',
     ]);
     User::create([
        'name'=> 'Reza',
        'email'=>'reza@gmail.com',
        'password' => Hash::make('reza'),
        'isAdmin' => '0',
     ]);

     Profile::create([
     'npm'=>'0002',
     'prodi'=>'VII-A',
     'alamat'=>'Jalan Meranti',
     'noTelp'=>'08123975855',
     'users_id'=>'2',
     ]);

     Profile::create([
     'npm'=>'0003',
     'prodi'=>'VII-A',
     'alamat'=>'Jalan Meranti',
     'noTelp'=>'08123975855',
     'users_id'=>'3',
     ]);

     Profile::create([
     'npm'=>'0004',
     'prodi'=>'VII-A',
     'alamat'=>'Jalan Meranti',
     'noTelp'=>'08123975855',
     'users_id'=>'4',
     ]);

     Profile::create([
     'npm'=>'0005',
     'prodi'=>'VII-A',
     'alamat'=>'Jalan Meranti',
     'noTelp'=>'08123975855',
     'users_id'=>'5',
     ]);

     Profile::create([
     'npm'=>'0006',
     'prodi'=>'XI-IPS',
     'alamat'=>'Jalan Meranti',
     'noTelp'=>'08123975855',
     'users_id'=>'6',
     ]);

     Profile::create([
     'npm'=>'0007',
     'prodi'=>'VII-A',
     'alamat'=>'Jalan Meranti',
     'noTelp'=>'08123975855',
     'users_id'=>'7',
     ]);

     Profile::create([
     'npm'=>'0008',
     'prodi'=>'XI-IPS',
     'alamat'=>'Jalan Meranti',
     'noTelp'=>'08123975855',
     'users_id'=>'8',
     ]);

     Profile::create([
     'npm'=>'0009',
     'prodi'=>'XI-IPS',
     'alamat'=>'Jalan Meranti',
     'noTelp'=>'08123975855',
     'users_id'=>'9',
     ]);

     Profile::create([
     'npm'=>'0010',
     'prodi'=>'XI-IPS',
     'alamat'=>'Jalan Meranti',
     'noTelp'=>'08123975855',
     'users_id'=>'10',
     ]);

     Profile::create([
     'npm'=>'0011',
     'prodi'=>'XI-IPS',
     'alamat'=>'Jalan Meranti',
     'noTelp'=>'08123975855',
     'users_id'=>'11',
     ]);

     Profile::create([
     'npm'=>'0012',
     'prodi'=>'XI-IPS',
     'alamat'=>'Jalan Meranti',
     'noTelp'=>'08123975855',
     'users_id'=>'12',
     ]);

     Profile::create([
     'npm'=>'0013',
     'prodi'=>'XI-IPS',
     'alamat'=>'Jalan Meranti',
     'noTelp'=>'08123975855',
     'users_id'=>'13',
     ]);

     Profile::create([
     'npm'=>'0014',
     'prodi'=>'XI-IIS',
     'alamat'=>'Jalan Meranti',
     'noTelp'=>'08123975855',
     'users_id'=>'14',
     ]);

     Profile::create([
     'npm'=>'0015',
     'prodi'=>'XI-IIS',
     'alamat'=>'Jalan Meranti',
     'noTelp'=>'08123975855',
     'users_id'=>'15',
     ]);

     Profile::create([
     'npm'=>'0016',
     'prodi'=>'XI-IIS',
     'alamat'=>'Jalan Meranti',
     'noTelp'=>'08123975855',
     'users_id'=>'16',
     ]);

     Profile::create([
     'npm'=>'0017',
     'prodi'=>'XI-IIS',
     'alamat'=>'Jalan Meranti',
     'noTelp'=>'08123975855',
     'users_id'=>'17',
     ]);

     Profile::create([
     'npm'=>'0018',
     'prodi'=>'XI-IIS',
     'alamat'=>'Jalan Meranti',
     'noTelp'=>'08123975855',
     'users_id'=>'18',
     ]);

     Profile::create([
     'npm'=>'0019',
     'prodi'=>'XI-IIS',
     'alamat'=>'Jalan Meranti',
     'noTelp'=>'08123975855',
     'users_id'=>'19',
     ]);

     Profile::create([
     'npm'=>'0020',
     'prodi'=>'XI-IPS',
     'alamat'=>'Jalan Meranti',
     'noTelp'=>'08123975855',
     'users_id'=>'20',
     ]);

     Profile::create([
     'npm'=>'0021',
     'prodi'=>'XI-IIS',
     'alamat'=>'Jalan Meranti',
     'noTelp'=>'08123975855',
     'users_id'=>'21',
     ]);

     Profile::create([
     'npm'=>'0022',
     'prodi'=>'XI-IIS',
     'alamat'=>'Jalan Meranti',
     'noTelp'=>'08123975855',
     'users_id'=>'22',
     ]);

     Profile::create([
     'npm'=>'0023',
     'prodi'=>'XI-IPS',
     'alamat'=>'Jalan Meranti',
     'noTelp'=>'08123975855',
     'users_id'=>'23',
     ]);

     Profile::create([
     'npm'=>'0024',
     'prodi'=>'XI-IPS',
     'alamat'=>'Jalan Meranti',
     'noTelp'=>'08123975855',
     'users_id'=>'24',
     ]);

     Profile::create([
     'npm'=>'0025',
     'prodi'=>'XI-IPS',
     'alamat'=>'Jalan Meranti',
     'noTelp'=>'08123975855',
     'users_id'=>'25',
     ]);

     Profile::create([
     'npm'=>'0026',
     'prodi'=>'XI-IPS',
     'alamat'=>'Jalan Meranti',
     'noTelp'=>'08123975855',
     'users_id'=>'26',
     ]);

     Profile::create([
     'npm'=>'0027',
     'prodi'=>'XI-IPS',
     'alamat'=>'Jalan Meranti',
     'noTelp'=>'08123975855',
     'users_id'=>'27',
     ]);

     Profile::create([
     'npm'=>'0028',
     'prodi'=>'XI-IPS',
     'alamat'=>'Jalan Meranti',
     'noTelp'=>'08123975855',
     'users_id'=>'28',
     ]);

     Profile::create([
     'npm'=>'0029',
     'prodi'=>'XI-IPS',
     'alamat'=>'Jalan Meranti',
     'noTelp'=>'08123975855',
     'users_id'=>'29',
     ]);

     Profile::create([
        'npm'=>'0030',
        'prodi'=>'XI-IPS',
        'alamat'=>'Jalan Meranti',
        'noTelp'=>'08123975855',
        'users_id'=>'30',
        ]);
   



    Kategori::create([
        'nama'=>'Novel',
        'deskripsi' => 'Kumpulan Novel'
    ]);
    Kategori::create([
        'nama'=>'Pelajaran',
        'deskripsi' => 'Kumpulan Buku materi pelajaran'
    ]);
    Kategori::create([
        'nama'=>'Romance',
    ]);
    Kategori::create([
        'nama'=>'Drama',
    ]);
    Kategori::create([
        'nama'=>'Fiksi',
    ]);
    Kategori::create([
        'nama'=>'Pemrograman',
    ]);
    Kategori::create([
        'nama'=>'Science',
    ]);
    Kategori::create([
        'nama'=>'Horror',
    ]);
    Buku::create([
        'kode_buku'=>'LSK-01',
        'Judul'=>'Laskar Pelangi',
        'Pengarang' => 'Andrea Hirata',
        'Penerbit' => 'Bentang Pustaka',
        'tahun_terbit'=> '2005',
        'gambar' => 'laskar.jpg',
        'deskripsi' => 'Laskar Pelangi adalah novel pertama karya Andrea Hirata yang diterbitkan oleh Bentang Pustaka pada tahun 2005. Novel ini bercerita tentang kehidupan 10 anak dari keluarga miskin yang bersekolah (SD dan SMP) di sebuah sekolah Muhammadiyah di Belitung yang penuh dengan keterbatasan.

        Mereka bersekolah dan belajar pada kelas yang sama dari kelas 1 SD sampai kelas 3 SMP, dan menyebut diri mereka sebagai Laskar Pelangi. Pada bagian-bagian akhir cerita, anggota Laskar Pelangi bertambah satu anak perempuan yang bernama Flo, seorang murid pindahan. Keterbatasan yang ada bukan membuat mereka putus asa, tetapi malah membuat mereka terpacu untuk dapat melakukan sesuatu yang lebih baik.

        Laskar Pelangi merupakan buku pertama dari Tetralogi Laskar Pelangi. Buku berikutnya adalah Sang Pemimpi, Edensor dan Maryamah Karpov. Buku ini tercatat sebagai buku sastra Indonesia terlaris sepanjang sejarah.

        Cerita terjadi di desa Gantung, Belitung Timur. Dimulai ketika sekolah Muhammadiyah terancam akan dibubarkan oleh Depdikbud Sumsel jikalau tidak mencapai siswa baru sejumlah 10 anak. Ketika itu baru 9 anak yang menghadiri upacara pembukaan, akan tetapi tepat ketika Pak Harfan, sang kepala sekolah, hendak berpidato menutup sekolah, Harun dan ibunya datang untuk mendaftarkan diri di sekolah kecil itu.

        Dari sanalah dimulai cerita mereka. Mulai dari penempatan tempat duduk, pertemuan mereka dengan Pak Harfan, perkenalan mereka yang luar biasa di mana A Kiong yang malah cengar-cengir ketika ditanyakan namanya oleh guru mereka, Bu Mus. Kejadian bodoh yang dilakukan oleh Borek, pemilihan ketua kelas yang diprotes keras oleh Kucai, kejadian ditemukannya bakat luar biasa Mahar, pengalaman cinta pertama Ikal, sampai pertaruhan nyawa Lintang yang mengayuh sepeda 80 km pulang pergi dari rumahnya ke sekolah.

        Mereka, Laskar Pelangi - nama yang diberikan Bu Muslimah akan kesenangan mereka terhadap pelangi - pun sempat mengharumkan nama sekolah dengan berbagai cara. Misalnya pembalasan dendam Mahar yang selalu dipojokkan kawan-kawannya karena kesenangannya pada okultisme yang membuahkan kemenangan manis pada karnaval 17 Agustus, dan kegeniusan luar biasa Lintang yang menantang dan mengalahkan Drs. Zulfikar, guru sekolah kaya PN yang berijazah dan terkenal, dan memenangkan lomba cerdas cermat. Laskar Pelangi mengarungi hari-hari menyenangkan, tertawa dan menangis bersama. Kisah sepuluh kawanan ini berakhir dengan kematian ayah Lintang yang memaksa Einstein cilik itu putus sekolah dengan sangat mengharukan, dan dilanjutkan dengan kejadian 12 tahun kemudian di mana Ikal yang berjuang di luar pulau Belitong kembali ke kampungnya. Kisah indah ini diringkas dengan kocak dan mengharukan oleh Andrea Hirata, kita bahkan bisa merasakan semangat masa kecil anggota sepuluh Laskar Pelangi ini.'
    ]);
    Buku::create([
        'kode_buku'=>'HJN-01',
        'Judul'=>'Hujan',
        'Pengarang' => 'Tere Liye',
        'Penerbit' => 'Gramedia Pustaka',
        'tahun_terbit'=> '2016',
        'gambar' => 'hujan.jpg',
        'deskripsi' => 'Pada 2042, dunia telah memasuki era di mana peran manusia telah digantikan oleh ilmu pengeahuan dan teknologi canggih. Cerita berfokus pada karakter Lail, gadis berusia 13 tahun, yang pada hari pertamanya di sekolah harus mengalami bencana gunung meletus dan gempa dahsyat. Bencana ini mnegahancurkan kota tempat tinggalnya serta merenggut nyawa kedua orangtuanya. Beruntungnya, seorang pemuda berusia 15 tahun bernama Esok datang menolong dan menyelamtakan Lail. Tidak seperti Lail, Esok masih memilki seroang ibu. Namun, akibat bencana tersebut, kedua kakinya harsu diamputasi.
        Artikel ini telah tayang di Katadata.co.id dengan judul "Menilik Sinopsis Novel Hujan Tere Liye yang Sarat Nilai Kehidupan" , https://katadata.co.id/agung/berita/63203415cd124/menilik-sinopsis-novel-hujan-tere-liye-yang-sarat-nilai-kehidupan
        Penulis: Destiara Anggita Putri
        Editor: agung'
        ]);
    Buku::create([
        'kode_buku'=>'JNJ-01',
        'Judul'=>'Janji',
        'Pengarang' => 'Tere Liye',
        'Penerbit' => 'Tere Liye',
        'tahun_terbit'=>'2021',
        'gambar' => 'janji.png',
        'deskripsi'=>'Kisah ini tentang JANJI.

        Saat seorang menunaikan janjinya dengan sungguh-sungguh. Apapun harganya, meski menyakitkan, meski penuh tantangan dan cobaan, dia tetap berusaha menunaikan janjinya.

        Meski merangkak.... Meski terduduk, menangis tanpa air mata lagi....

        Kisah ini tentang JANJI.

        Saat seseorang akhirnya melewati semua definisi kehidupan yang fana. Berlarian memeluk janji langit. Bahwa kemuliaan tidak pernah diukur dari fisik dan materi. Bacalah....

        '
        ]);
    Buku::create([
        'kode_buku' => 'AP-01',
        'Judul'=>'Algoritma dan Pemrograman',
        'Pengarang' => 'Lamhot Sitorus',
        'Penerbit' => 'Andi',
        'tahun_terbit'=> '2015',
        'gambar' => 'algoritma.jpg',
        'deskripsi'=>'Buku ini dirancang untuk dapat digunakan oleh mahasiswa Program Studi Ilmu Komputer, Teknik Informatika, Sistem Informasi, Manajemen Informatika, Sistem Komputer atau bahkan mahasiswa program studi lain yang mempelajari Algoritma Pemrograman. Algoritma Pemrograman merupakan mata kuliah dasar bagi seorang mahasiswa untuk memulai masuk dalam dunia pemrograman. Algoritma Pemrograman akan memberikan konsep berpikir untuk menyelesaikan suatu masalah menjadi suatu program tanpa mempermasalahkan bahasa pemrograman sebagai tools yang akan digunakan untuk mengimplementasikannya. Suatu algoritma akan dapat diimplementasikan dalam bahasa pemrograman Pascal, C/C++, Visual C, Visual Basic, Java dan lain-lain.'
        ]);
    Buku::create([
        'kode_buku'=> 'PBO-01',
        'Judul'=>'Pemrograman Berorientasi Objek',
        'Pengarang' => 'Syafei Karim',
        'Penerbit' => 'Tanesa',
        'tahun_terbit'=> '2021',
        'gambar' => 'pbojava.jpg',
        'deskripsi'=>'Pemrograman Berorientasi Objek (PBO) adalah salah satu konsep pemrograman yang harus dipahami dan dimengerti oleh seorang programmer. PBO merupakan salah satu mata kuliah yang diajarkan pada mahasiswa khususnya di bidang komputer. Buku ini menjelaskan konsep PBO den`gan menggunakan bahasa pemrograman Java. Ruang lingkup pembahasannya meliputi dasar-dasar pemrograman java dan konsep dari PBO. Pada bagian pertama penulis menjelaskan dasar-dasar pemrograman dari bahasa pemrograman java. Mulai dari menggunakan tipe data, deklarasi variabel, penggunaan statement percabangan, penggunaan iterasi, hingga pendeklarasian array. Pada bagian kedua penulis menjelaskan konsep dasar dari PBO. Konsep-konsep tersebut terdiri dari class & object, enkapsulasi, inheritance, polimorfisme, hingga penggunaan kelas abstrak dan interface (sebatik) ( tanesa )'
        ]);
    Buku::create([
        'kode_buku'=>'WPHP-01',
        'Judul'=>'Buku Sakti Pemrograman Web Seri PHP',
        'Pengarang' => 'Mundzir MF',
        'Penerbit' => 'Anak Hebat Indonesia',
        'tahun_terbit'=> '2018',
        'deskripsi'=>'Saat ini, PHP banyak dipakai untuk membuat program situs web dinamis. Contoh aplikasi program PHP adalah forum (phpBB) dan MediaWiki (software di belakang Wikipedia). Sedangkan, Mambo, Joomla!, Postnuke, Xaraya, dan lain-lain merupakan contoh aplikasi yang lebih kompleks berupa CMS dan dibangun menggunakan PHP.

        PHP sebagai sekumpulan skrip atau bahasa program memiliki fungsi utama, yaitu mampu mengumpulkan dan mengevaluasi hasil survey atau bentuk apapun ke server  database dan pada tahap selanjutnya akan menciptakan efek beruntun.'
        ]);

        Buku::create([
            'kode_buku'=>'LSK-02',
            'Judul'=>'Laskar Pelangi',
            'Pengarang' => 'Andrea Hirata',
            'Penerbit' => 'Bentang Pustaka',
            'tahun_terbit'=> '2005',
            'gambar' => 'laskar.jpg',
            'deskripsi' => 'Laskar Pelangi adalah novel pertama karya Andrea Hirata yang diterbitkan oleh Bentang Pustaka pada tahun 2005. Novel ini bercerita tentang kehidupan 10 anak dari keluarga miskin yang bersekolah (SD dan SMP) di sebuah sekolah Muhammadiyah di Belitung yang penuh dengan keterbatasan.
    
            Mereka bersekolah dan belajar pada kelas yang sama dari kelas 1 SD sampai kelas 3 SMP, dan menyebut diri mereka sebagai Laskar Pelangi. Pada bagian-bagian akhir cerita, anggota Laskar Pelangi bertambah satu anak perempuan yang bernama Flo, seorang murid pindahan. Keterbatasan yang ada bukan membuat mereka putus asa, tetapi malah membuat mereka terpacu untuk dapat melakukan sesuatu yang lebih baik.
    
            Laskar Pelangi merupakan buku pertama dari Tetralogi Laskar Pelangi. Buku berikutnya adalah Sang Pemimpi, Edensor dan Maryamah Karpov. Buku ini tercatat sebagai buku sastra Indonesia terlaris sepanjang sejarah.
    
            Cerita terjadi di desa Gantung, Belitung Timur. Dimulai ketika sekolah Muhammadiyah terancam akan dibubarkan oleh Depdikbud Sumsel jikalau tidak mencapai siswa baru sejumlah 10 anak. Ketika itu baru 9 anak yang menghadiri upacara pembukaan, akan tetapi tepat ketika Pak Harfan, sang kepala sekolah, hendak berpidato menutup sekolah, Harun dan ibunya datang untuk mendaftarkan diri di sekolah kecil itu.
    
            Dari sanalah dimulai cerita mereka. Mulai dari penempatan tempat duduk, pertemuan mereka dengan Pak Harfan, perkenalan mereka yang luar biasa di mana A Kiong yang malah cengar-cengir ketika ditanyakan namanya oleh guru mereka, Bu Mus. Kejadian bodoh yang dilakukan oleh Borek, pemilihan ketua kelas yang diprotes keras oleh Kucai, kejadian ditemukannya bakat luar biasa Mahar, pengalaman cinta pertama Ikal, sampai pertaruhan nyawa Lintang yang mengayuh sepeda 80 km pulang pergi dari rumahnya ke sekolah.
    
            Mereka, Laskar Pelangi - nama yang diberikan Bu Muslimah akan kesenangan mereka terhadap pelangi - pun sempat mengharumkan nama sekolah dengan berbagai cara. Misalnya pembalasan dendam Mahar yang selalu dipojokkan kawan-kawannya karena kesenangannya pada okultisme yang membuahkan kemenangan manis pada karnaval 17 Agustus, dan kegeniusan luar biasa Lintang yang menantang dan mengalahkan Drs. Zulfikar, guru sekolah kaya PN yang berijazah dan terkenal, dan memenangkan lomba cerdas cermat. Laskar Pelangi mengarungi hari-hari menyenangkan, tertawa dan menangis bersama. Kisah sepuluh kawanan ini berakhir dengan kematian ayah Lintang yang memaksa Einstein cilik itu putus sekolah dengan sangat mengharukan, dan dilanjutkan dengan kejadian 12 tahun kemudian di mana Ikal yang berjuang di luar pulau Belitong kembali ke kampungnya. Kisah indah ini diringkas dengan kocak dan mengharukan oleh Andrea Hirata, kita bahkan bisa merasakan semangat masa kecil anggota sepuluh Laskar Pelangi ini.'
        ]);
        
        Buku::create([
            'kode_buku'=>'LSK-03',
            'Judul'=>'Laskar Pelangi',
            'Pengarang' => 'Andrea Hirata',
            'Penerbit' => 'Bentang Pustaka',
            'tahun_terbit'=> '2005',
            'gambar' => 'laskar.jpg',
            'deskripsi' => 'Laskar Pelangi adalah novel pertama karya Andrea Hirata yang diterbitkan oleh Bentang Pustaka pada tahun 2005. Novel ini bercerita tentang kehidupan 10 anak dari keluarga miskin yang bersekolah (SD dan SMP) di sebuah sekolah Muhammadiyah di Belitung yang penuh dengan keterbatasan.
    
            Mereka bersekolah dan belajar pada kelas yang sama dari kelas 1 SD sampai kelas 3 SMP, dan menyebut diri mereka sebagai Laskar Pelangi. Pada bagian-bagian akhir cerita, anggota Laskar Pelangi bertambah satu anak perempuan yang bernama Flo, seorang murid pindahan. Keterbatasan yang ada bukan membuat mereka putus asa, tetapi malah membuat mereka terpacu untuk dapat melakukan sesuatu yang lebih baik.
    
            Laskar Pelangi merupakan buku pertama dari Tetralogi Laskar Pelangi. Buku berikutnya adalah Sang Pemimpi, Edensor dan Maryamah Karpov. Buku ini tercatat sebagai buku sastra Indonesia terlaris sepanjang sejarah.
    
            Cerita terjadi di desa Gantung, Belitung Timur. Dimulai ketika sekolah Muhammadiyah terancam akan dibubarkan oleh Depdikbud Sumsel jikalau tidak mencapai siswa baru sejumlah 10 anak. Ketika itu baru 9 anak yang menghadiri upacara pembukaan, akan tetapi tepat ketika Pak Harfan, sang kepala sekolah, hendak berpidato menutup sekolah, Harun dan ibunya datang untuk mendaftarkan diri di sekolah kecil itu.
    
            Dari sanalah dimulai cerita mereka. Mulai dari penempatan tempat duduk, pertemuan mereka dengan Pak Harfan, perkenalan mereka yang luar biasa di mana A Kiong yang malah cengar-cengir ketika ditanyakan namanya oleh guru mereka, Bu Mus. Kejadian bodoh yang dilakukan oleh Borek, pemilihan ketua kelas yang diprotes keras oleh Kucai, kejadian ditemukannya bakat luar biasa Mahar, pengalaman cinta pertama Ikal, sampai pertaruhan nyawa Lintang yang mengayuh sepeda 80 km pulang pergi dari rumahnya ke sekolah.
    
            Mereka, Laskar Pelangi - nama yang diberikan Bu Muslimah akan kesenangan mereka terhadap pelangi - pun sempat mengharumkan nama sekolah dengan berbagai cara. Misalnya pembalasan dendam Mahar yang selalu dipojokkan kawan-kawannya karena kesenangannya pada okultisme yang membuahkan kemenangan manis pada karnaval 17 Agustus, dan kegeniusan luar biasa Lintang yang menantang dan mengalahkan Drs. Zulfikar, guru sekolah kaya PN yang berijazah dan terkenal, dan memenangkan lomba cerdas cermat. Laskar Pelangi mengarungi hari-hari menyenangkan, tertawa dan menangis bersama. Kisah sepuluh kawanan ini berakhir dengan kematian ayah Lintang yang memaksa Einstein cilik itu putus sekolah dengan sangat mengharukan, dan dilanjutkan dengan kejadian 12 tahun kemudian di mana Ikal yang berjuang di luar pulau Belitong kembali ke kampungnya. Kisah indah ini diringkas dengan kocak dan mengharukan oleh Andrea Hirata, kita bahkan bisa merasakan semangat masa kecil anggota sepuluh Laskar Pelangi ini.'
        ]);

        Buku::create([
            'kode_buku'=>'HJN-02',
            'Judul'=>'Hujan',
            'Pengarang' => 'Tere Liye',
            'Penerbit' => 'Gramedia Pustaka',
            'tahun_terbit'=> '2016',
            'gambar' => 'hujan.jpg',
            'deskripsi' => 'Pada 2042, dunia telah memasuki era di mana peran manusia telah digantikan oleh ilmu pengeahuan dan teknologi canggih. Cerita berfokus pada karakter Lail, gadis berusia 13 tahun, yang pada hari pertamanya di sekolah harus mengalami bencana gunung meletus dan gempa dahsyat. Bencana ini mnegahancurkan kota tempat tinggalnya serta merenggut nyawa kedua orangtuanya. Beruntungnya, seorang pemuda berusia 15 tahun bernama Esok datang menolong dan menyelamtakan Lail. Tidak seperti Lail, Esok masih memilki seroang ibu. Namun, akibat bencana tersebut, kedua kakinya harsu diamputasi.
            Artikel ini telah tayang di Katadata.co.id dengan judul "Menilik Sinopsis Novel Hujan Tere Liye yang Sarat Nilai Kehidupan" , https://katadata.co.id/agung/berita/63203415cd124/menilik-sinopsis-novel-hujan-tere-liye-yang-sarat-nilai-kehidupan
            Penulis: Destiara Anggita Putri
            Editor: agung'
            ]);

             Buku::create([
        'kode_buku'=>'HJN-03',
        'Judul'=>'Hujan',
        'Pengarang' => 'Tere Liye',
        'Penerbit' => 'Gramedia Pustaka',
        'tahun_terbit'=> '2016',
        'gambar' => 'hujan.jpg',
        'deskripsi' => 'Pada 2042, dunia telah memasuki era di mana peran manusia telah digantikan oleh ilmu pengeahuan dan teknologi canggih. Cerita berfokus pada karakter Lail, gadis berusia 13 tahun, yang pada hari pertamanya di sekolah harus mengalami bencana gunung meletus dan gempa dahsyat. Bencana ini mnegahancurkan kota tempat tinggalnya serta merenggut nyawa kedua orangtuanya. Beruntungnya, seorang pemuda berusia 15 tahun bernama Esok datang menolong dan menyelamtakan Lail. Tidak seperti Lail, Esok masih memilki seroang ibu. Namun, akibat bencana tersebut, kedua kakinya harsu diamputasi.
        Artikel ini telah tayang di Katadata.co.id dengan judul "Menilik Sinopsis Novel Hujan Tere Liye yang Sarat Nilai Kehidupan" , https://katadata.co.id/agung/berita/63203415cd124/menilik-sinopsis-novel-hujan-tere-liye-yang-sarat-nilai-kehidupan
        Penulis: Destiara Anggita Putri
        Editor: agung'
        ]);

        Buku::create([
            'kode_buku' => 'AP-02',
            'Judul'=>'Algoritma dan Pemrograman',
            'Pengarang' => 'Lamhot Sitorus',
            'Penerbit' => 'Andi',
            'tahun_terbit'=> '2015',
            'gambar' => 'algoritma.jpg',
            'deskripsi'=>'Buku ini dirancang untuk dapat digunakan oleh mahasiswa Program Studi Ilmu Komputer, Teknik Informatika, Sistem Informasi, Manajemen Informatika, Sistem Komputer atau bahkan mahasiswa program studi lain yang mempelajari Algoritma Pemrograman. Algoritma Pemrograman merupakan mata kuliah dasar bagi seorang mahasiswa untuk memulai masuk dalam dunia pemrograman. Algoritma Pemrograman akan memberikan konsep berpikir untuk menyelesaikan suatu masalah menjadi suatu program tanpa mempermasalahkan bahasa pemrograman sebagai tools yang akan digunakan untuk mengimplementasikannya. Suatu algoritma akan dapat diimplementasikan dalam bahasa pemrograman Pascal, C/C++, Visual C, Visual Basic, Java dan lain-lain.'
            ]);

       
    }
}
