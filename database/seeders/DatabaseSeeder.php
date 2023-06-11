<?php

namespace Database\Seeders;

use App\models\Buku;

use Illuminate\Database\Seeder;


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
     $this->call([
      UserSeeder::class,
      ProfileSeeder::class,
      CategorySeeder::class,
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

        Buku::create([
            'kode_buku' => 'MTK-10',
            'Judul'=>'Matematika Kelas X',
            'Pengarang' => 'R. Purwanto, Wahyono, Dwi Lestari',
            'Penerbit' => 'Erlangga',
            'tahun_terbit'=> '2018',
            'gambar' => 'X_Matematika.png',
            'deskripsi'=>' Buku Matematika Kelas X ini dirancang khusus untuk membantu siswa memahami konsep-konsep matematika secara mendalam. Buku ini mencakup berbagai topik, termasuk bilangan real, persamaan dan pertidaksamaan linear, fungsi, trigonometri, geometri, dan statistika. Setiap topik dibahas dengan jelas dan dilengkapi dengan contoh soal dan latihan yang variatif. Buku ini juga menekankan penerapan matematika dalam kehidupan sehari-hari dan memotivasi siswa untuk mengembangkan kemampuan pemecahan masalah matematika.'
            ]);
            
        Buku::create([
            'kode_buku' => 'B.IND-10',
            'Judul'=>'Bahasa Indonesia Kelas X',
            'Pengarang' => 'Nurhadi, Drajat Widyanto, Retno Wulandari',
            'Penerbit' => 'Erlangga',
            'tahun_terbit'=> '2019',
            'gambar' => 'X_B_Indonesia.png',
            'deskripsi'=>'Buku Bahasa Indonesia Kelas X ini menyajikan materi yang komprehensif tentang bahasa Indonesia. Mulai dari aspek tata bahasa, keterampilan membaca, menulis, mendengar, berbicara, hingga pemahaman sastra. Buku ini menekankan pada pengembangan keterampilan berbahasa yang meliputi pemahaman teks, penulisan yang baik dan benar, serta berpikir kritis. Dengan pendekatan yang interaktif, buku ini menghadirkan berbagai contoh kasus dan latihan yang beragam untuk melatih kemampuan bahasa siswa.'
            ]);
    
        Buku::create([
            'kode_buku' => 'B.ING-10',
            'Judul'=>'English in Focus Kelas X',
            'Pengarang' => 'F. Xavier Rianto, Anita Purnawirawan, dkk.',
            'Penerbit' => 'Erlangga',
            'tahun_terbit'=> '2018',
            'gambar' => 'X_B_Inggris.png',
            'deskripsi'=>'Deskripsi: Buku English in Focus untuk kelas X merupakan panduan yang komprehensif untuk mengembangkan kemampuan berbahasa Inggris siswa. Buku ini mengacu pada kurikulum yang berlaku dan dirancang untuk memperluas kosakata, meningkatkan tata bahasa, memperbaiki keterampilan mendengar, membaca, menulis, dan berbicara dalam bahasa Inggris. Dengan kombinasi teks, dialog, gambar, dan latihan interaktif, buku ini mengajak siswa untuk aktif berpartisipasi dalam pembelajaran bahasa Inggris dan meningkatkan kepercayaan diri mereka dalam berkomunikasi.'
            ]);

        Buku::create([
            'kode_buku' => 'FIS-10',
            'Judul'=>'Fisika SMA Kelas X',
            'Pengarang' => 'Suharyadi, Yohanes Surya',
            'Penerbit' => 'Pusat Perbukuan Departemen Pendidikan Nasional',
            'tahun_terbit'=> '2015',
            'gambar' => 'X_Fisika.jpg',
            'deskripsi'=>'Buku Fisika SMA Kelas X ini memberikan pemahaman menyeluruh tentang konsep-konsep dasar fisika. Mulai dari mekanika, termal, optik, hingga listrik dan magnet. Buku ini menyajikan materi dengan bahasa yang jelas dan dilengkapi dengan ilustrasi, contoh soal, serta aktivitas yang menarik. Melalui buku ini, siswa diharapkan dapat memahami prinsip-prinsip fisika, mengembangkan pemikiran kritis, dan menerapkan konsep fisika dalam kehidupan sehari-hari.'
            ]);

        Buku::create([
            'kode_buku' => 'BIO-10',
            'Judul'=>'Biologi Kelas X',
            'Pengarang' => 'Tatang Suryana, Yuli Fitriani, dkk.',
            'Penerbit' => 'Erlangga',
            'tahun_terbit'=> '2019',
            'gambar' => 'X_Biologi.jpg',
            'deskripsi'=>'Buku Biologi Kelas X ini mengajak siswa untuk menjelajahi dunia kehidupan melalui pemahaman konsep-konsep biologi yang fundamental. Buku ini membahas berbagai topik, termasuk struktur dan fungsi sel, jaringan, organisme, ekosistem, dan genetika. Materi disajikan secara sistematis dan didukung oleh ilustrasi, gambar, diagram, serta contoh-contoh aplikatif. Buku ini juga menyediakan latihan soal dan eksperimen praktis yang memperkuat pemahaman dan keterampilan siswa dalam mempelajari ilmu biologi.
            '
            ]);

        Buku::create([
            'kode_buku' => 'KIM-10',
            'Judul'=>'Kimia Kelas X',
            'Pengarang' => 'Sri Sumaryati, Ahmad Fauzan, dkk.',
            'Penerbit' => 'Erlangga',
            'tahun_terbit'=> '2019',
            'gambar' => 'X_Kimia.jpg',
            'deskripsi'=>'Buku Kimia Kelas X ini memberikan pemahaman mendalam tentang konsep-konsep dasar kimia. Buku ini mencakup berbagai topik seperti struktur atom, ikatan kimia, reaksi kimia, larutan, dan kesetimbangan kimia. Materi disajikan dengan jelas dan disertai contoh-contoh yang relevan serta ilustrasi yang menarik. Buku ini juga menyajikan eksperimen praktis, latihan soal, dan aplikasi kimia dalam kehidupan sehari-hari untuk memperkuat pemahaman siswa tentang kimia. Melalui buku ini, siswa diharapkan dapat mengembangkan pemikiran kritis, keterampilan analisis, dan pemahaman yang kokoh tentang prinsip-prinsip kimia.'
            ]);


        Buku::create([
            'kode_buku' => 'SENBUD-10',
            'Judul'=>'Seni Budaya Kelas X',
            'Pengarang' => 'Ida Kaelan, S.S., M.Pd. et al.',
            'Penerbit' => 'Pusat Perbukuan Departemen Pendidikan Nasional',
            'tahun_terbit'=> '2016',
            'gambar' => 'X_Seni_Budaya.png',
            'deskripsi'=>'Buku Seni Budaya Kelas X ini memperkenalkan siswa pada berbagai bentuk seni dan kebudayaan di Indonesia. Buku ini mencakup topik-topik seperti seni musik, seni tari, seni rupa, dan drama. Dalam buku ini, siswa akan mempelajari sejarah, perkembangan, dan nilai-nilai yang terkandung dalam seni budaya Indonesia. Terdapat pula contoh-contoh karya seni dan latihan praktis untuk meningkatkan pemahaman siswa tentang seni dan budaya Indonesia.'
            ]);

        Buku::create([
            'kode_buku' => 'PRAKA-10',
            'Judul'=>'Prakarya dan Kewirausahaan Kelas X',
            'Pengarang' => 'Sri Widiyastuti, S.Pd. et al.',
            'Penerbit' => 'Pusat Perbukuan Departemen Pendidikan Nasional',
            'tahun_terbit'=> '2017',
            'gambar' => 'X_Prakarya.png',
            'deskripsi'=>'Buku Prakarya dan Kewirausahaan Kelas X ini mengajarkan siswa tentang keterampilan berkreasi, desain, dan pengolahan bahan dalam konteks kewirausahaan. Buku ini memperkenalkan konsep dasar prakarya serta teknik-teknik produksi kreatif. Melalui buku ini, siswa akan belajar merancang dan membuat karya-karya praktis yang mencakup berbagai bidang seperti kerajinan, desain produk, dan inovasi teknologi.            '
            ]);

        Buku::create([
            'kode_buku' => 'AGA-ISL-10',
            'Judul'=>'Agama Islam Kelas X',
            'Pengarang' => 'Siti Chamamah Soeratno',
            'Penerbit' => 'Erlangga',
            'tahun_terbit'=> '2020',
            'gambar' => 'X_Islam.png',
            'deskripsi'=>'Buku Agama Islam untuk kelas X ini memberikan pemahaman mendalam tentang ajaran agama Islam. Buku ini mencakup topik-topik seperti akidah, ibadah, akhlak, Al-Quran, dan hadis. Buku ini juga membahas etika dan nilai-nilai dalam Islam serta penerapannya dalam kehidupan sehari-hari. Buku ini dilengkapi dengan aktivitas dan latihan untuk mengembangkan pemahaman dan praktik keagamaan siswa.'
            ]);

        Buku::create([
            'kode_buku' => 'PENJAS-10',
            'Judul'=>'Pendidikan Jasmani, Olahraga, dan Kesehatan Kelas X',
            'Pengarang' => 'Bambang Purwanto',
            'Penerbit' => 'Erlangga',
            'tahun_terbit'=> '2020',
            'gambar' => 'X_PJOK.png',
            'deskripsi'=>'Buku Pendidikan Jasmani, Olahraga, dan Kesehatan (Penjas) untuk kelas X ini membahas tentang pentingnya aktivitas fisik, olahraga, dan kesehatan dalam kehidupan sehat. Buku ini meliputi berbagai topik seperti kebugaran, olahraga, permainan tradisional, keselamatan, serta perawatan tubuh. Melalui buku ini, siswa akan diajak untuk aktif berpartisipasi dalam kegiatan fisik dan memahami pentingnya menjaga kesehatan melalui olahraga dan gaya hidup sehat.'
            ]);

        Buku::create([
            'kode_buku' => 'SOS-10',
            'Judul'=>'Sosiologi Kelas X',
            'Pengarang' => 'Mulyadi Wartono',
            'Penerbit' => 'PT Yudhistira',
            'tahun_terbit'=> '2019',
            'gambar' => 'X_Sosiologi.jpg',
            'deskripsi'=>' Buku "Pengantar Sosiologi" ditulis oleh Mulyadi Wartono, seorang pakar sosiologi terkemuka. Buku ini menggambarkan konsep dasar dalam sosiologi dan memberikan pemahaman mendalam tentang struktur sosial, interaksi sosial, lembaga sosial, serta fenomena sosial lainnya. Materi yang disajikan dalam buku ini meliputi pengantar teori sosiologi, metodologi penelitian sosial, dan berbagai contoh kasus yang relevan dengan kehidupan sehari-hari. Dengan pendekatan yang sistematis dan ilmiah, buku ini akan membantu siswa memahami dan menganalisis masyarakat dengan lebih baik.'
            ]);

        Buku::create([
            'kode_buku' => 'KIM-11',
            'Judul'=>'Kimia Kelas XI',
            'Pengarang' => 'Diana Sari, Budi Santoso, dkk.',
            'Penerbit' => 'Erlangga',
            'tahun_terbit'=> '2021',
            'gambar' => 'XI_Kimia.jpg',
            'deskripsi'=>'Buku Kimia Kelas XI ini adalah sumber belajar yang komprehensif untuk memperdalam pemahaman siswa tentang ilmu kimia. Dengan pendekatan yang terstruktur dan mendalam, buku ini mengajak siswa mempelajari konsep-konsep yang lebih kompleks dan menantang dalam dunia kimia. Selain materi teoritis yang disajikan dengan jelas, buku ini juga menghadirkan contoh-contoh nyata, ilustrasi, dan diagram yang membantu siswa memvisualisasikan konsep-konsep kimia yang kompleks. Terdapat pula eksperimen praktis dan latihan soal yang bertingkat kesulitan untuk melatih keterampilan pemecahan masalah dan penerapan konsep-konsep kimia dalam situasi nyata. Buku ini tidak hanya memberikan pemahaman teoritis, tetapi juga menekankan pada penerapan kimia dalam kehidupan sehari-hari dan dunia nyata. Dalam setiap bab, terdapat contoh-contoh yang relevan tentang bagaimana kimia berperan dalam industri, lingkungan, kesehatan, dan teknologi modern. Hal ini bertujuan untuk membangun pemahaman siswa tentang pentingnya kimia dalam memecahkan tantangan global dan memajukan peradaban manusia.'
            ]);

        Buku::create([
            'kode_buku' => 'MTK-11',
            'Judul'=>'Matematika Kelas XI',
            'Pengarang' => 'R. Basuki, R. Darmawan, dkk.',
            'Penerbit' => 'Erlangga',
            'tahun_terbit'=> '2021',
            'gambar' => 'XI_Matematika.png',
            'deskripsi'=>'Buku Matematika Kelas XI ini dirancang untuk membantu siswa memperdalam pemahaman mereka tentang konsep-konsep matematika yang lebih kompleks. Buku ini mencakup topik-topik seperti fungsi, persamaan dan pertidaksamaan, trigonometri, turunan, integral, dan statistika. Materi disajikan secara sistematis dengan penjelasan yang jelas dan diberikan contoh-contoh yang relevan untuk memperkuat pemahaman siswa. Selain itu, buku ini juga dilengkapi dengan beragam latihan soal dan tantangan yang dirancang untuk mengembangkan keterampilan pemecahan masalah matematika siswa.'
            ]);

        Buku::create([
            'kode_buku' => 'FIS-11',
            'Judul'=>'Fisika Kelas XI',
            'Pengarang' => 'Ade Gaffar Abdullah, Umar Irawan, dkk.',
            'Penerbit' => 'Erlangga',
            'tahun_terbit'=> '2021',
            'gambar' => 'XI_Fisika.jpg',
            'deskripsi'=>' Buku Fisika Kelas XI ini memberikan pemahaman yang mendalam tentang konsep-konsep fisika yang lebih kompleks. Buku ini meliputi topik-topik seperti kinematika, dinamika, energi, optik geometri, optik fisika, listrik dan magnet, serta fisika modern. Materi disajikan dengan bahasa yang jelas dan dilengkapi dengan contoh-contoh, ilustrasi, serta eksperimen praktis untuk membantu siswa memahami konsep secara visual. Buku ini juga menyediakan latihan soal dengan berbagai tingkat kesulitan untuk menguji pemahaman siswa dan melatih keterampilan pemecahan masalah fisika.'
            ]);

        Buku::create([
            'kode_buku' => 'BIO-11',
            'Judul'=>' Biologi Kelas XI',
            'Pengarang' => 'Tatang Suryana, Yuli Fitriani, dkk.',
            'Penerbit' => 'Erlangga',
            'tahun_terbit'=> '2021',
            'gambar' => 'XI_Biologi.jpg',
            'deskripsi'=>'Buku Biologi Kelas XI ini ditujukan untuk membantu siswa memperdalam pemahaman mereka tentang konsep-konsep biologi yang lebih kompleks. Buku ini mencakup topik-topik seperti genetika, ekologi, evolusi, bioteknologi, sistem reproduksi, sistem saraf, sistem peredaran darah, dan lainnya. Materi disajikan dengan jelas dan dilengkapi dengan contoh-contoh, gambar, dan ilustrasi yang menggambarkan proses biologis secara detail. Selain itu, buku ini juga menyajikan eksperimen praktis, latihan soal, dan studi kasus untuk mengembangkan pemahaman dan keterampilan siswa dalam mempelajari biologi serta meningkatkan kesadaran mereka terhadap isu-isu lingkungan dan keberlanjutan.'
            ]);

        Buku::create([
            'kode_buku' => 'SEN-11',
            'Judul'=>'Seni Budaya Kelas XI',
            'Pengarang' => 'Bambang Eka Nusantara, dkk.',
            'Penerbit' => 'Erlangga',
            'tahun_terbit'=> '2021',
            'gambar' => 'XI_Seni_Budaya.png',
            'deskripsi'=>'Buku ini mengajak siswa untuk memahami dan mengapresiasi keindahan seni budaya Indonesia. Buku ini mencakup berbagai aspek seni budaya seperti seni rupa, tari, musik, drama, dan sastra. Materi disajikan dengan ilustrasi, contoh karya seni, serta penjelasan yang mendalam tentang sejarah, perkembangan, dan nilai-nilai budaya yang terkandung dalam setiap bentuk seni.'
            ]);

        Buku::create([
            'kode_buku' => 'PRA-11',
            'Judul'=>'Prakarya dan Kewirausahaan Kelas XI',
            'Pengarang' => 'Nur Rakhman',
            'Penerbit' => 'Erlangga',
            'tahun_terbit'=> '2021',
            'gambar' => 'XI_Prakarya.png',
            'deskripsi'=>'Buku ini memperkenalkan siswa pada konsep-konsep dasar prakarya dan kewirausahaan. Buku ini meliputi topik-topik seperti desain produk, teknologi informasi dan komunikasi, proses produksi, serta keterampilan kewirausahaan. Siswa akan diajak untuk mengembangkan kreativitas, kemampuan merancang, dan keterampilan praktis dalam membuat produk yang inovatif.'
            ]);

        Buku::create([
            'kode_buku' => 'AGI-11',
            'Judul'=>'Pendidikan Agama Islam Kelas XI',
            'Pengarang' => 'Tim Pengarang Agama Islam',
            'Penerbit' => 'Pusat Kurikulum dan Perbukuan, Kemendikbud',
            'tahun_terbit'=> '2020',
            'gambar' => 'XI_Islam.png',
            'deskripsi'=>'Buku ini membahas ajaran dan nilai-nilai dalam agama Islam serta penerapannya dalam kehidupan sehari-hari. Buku ini mencakup topik-topik seperti akidah, ibadah, akhlak, fiqih, serta isu-isu sosial dan moral dalam konteks agama Islam. Materi disajikan dengan penjelasan yang mendalam, kutipan dari Al-Quran dan Hadis, serta studi kasus untuk memperkuat pemahaman siswa tentang agama Islam. Pendidikan Jasmani, Olahraga, dan Kesehatan'
            ]);

        Buku::create([
            'kode_buku' => 'PENJAS-11',
            'Judul'=>'Pendidikan Jasmani, Olahraga, dan Kesehatan Kelas XI',
            'Pengarang' => 'Tim Pengarang Penjas',
            'Penerbit' => 'Pusat Kurikulum dan Perbukuan, Kemendikbud',
            'tahun_terbit'=> '2020',
            'gambar' => 'XI_PJOK.png',
            'deskripsi'=>'Buku ini memperkenalkan siswa pada konsep-konsep penting dalam pendidikan jasmani, olahraga, dan kesehatan. Buku ini mencakup berbagai aktivitas fisik, teknik-teknik olahraga, serta pengetahuan tentang kesehatan dan kebugaran. Siswa akan diajak untuk mengembangkan kemampuan fisik, koordinasi, kerjasama, serta pemahaman tentang pentingnya gaya hidup sehat.'
            ]);

        Buku::create([
            'kode_buku' => 'SEJ-11',
            'Judul'=>'Sejarah Indonesia Kelas XI',
            'Pengarang' => ' Slamet Muljana, dkk.',
            'Penerbit' => 'Erlangga',
            'tahun_terbit'=> '2021',
            'gambar' => 'XI_Sejarah.png',
            'deskripsi'=>'Buku ini memperkenalkan siswa pada sejarah Indonesia dari masa praaksara hingga masa kemerdekaan. Materi disajikan dengan penjelasan yang mendalam tentang peristiwa-peristiwa penting, tokoh-tokoh bersejarah, serta dinamika sosial, politik, dan budaya yang mempengaruhi perkembangan Indonesia. Buku ini dilengkapi dengan sumber-sumber sejarah, gambar, dan peta untuk membantu siswa memahami konteks sejarah dengan baik.'
            ]);

        Buku::create([
            'kode_buku' => 'EKO-11',
            'Judul'=>'Ekonomi Kelas XI',
            'Pengarang' => ' Gatot Soepriyanto, dkk.',
            'Penerbit' => 'Erlangga',
            'tahun_terbit'=> '2021',
            'gambar' => 'XI_Ekonomi.jpg',
            'deskripsi'=>'Buku ini memperkenalkan siswa pada konsep dasar ekonomi dan penerapannya dalam kehidupan sehari-hari. Buku ini mencakup topik-topik seperti sistem ekonomi, permintaan dan penawaran, pasar, produksi, keuangan, dan isu-isu ekonomi global. Materi disajikan dengan penjelasan yang jelas, contoh-contoh nyata, serta studi kasus untuk membantu siswa memahami konsep ekonomi secara praktis.'
            ]);

        Buku::create([
            'kode_buku' => 'BING-11',
            'Judul'=>'English in Focus Kelas XI',
            'Pengarang' => 'Soepomo Poedjosoedarmo, dkk.',
            'Penerbit' => 'Erlangga',
            'tahun_terbit'=> '2021',
            'gambar' => 'XI_B_Inggris.png',
            'deskripsi'=>'Buku ini dirancang untuk membantu siswa meningkatkan kemampuan berbahasa Inggris mereka. Buku ini mencakup topik-topik seperti tenses, reading comprehension, writing skills, listening practice, speaking exercises, dan vocabulary expansion. Materi disajikan dengan beragam aktivitas interaktif, dialog-dialog kontekstual, serta latihan-latihan yang mendukung pengembangan kemampuan berbahasa Inggris siswa.'
            ]);

        Buku::create([
            'kode_buku' => ' GEO-11',
            'Judul'=>'Geografi Kelas XI',
            'Pengarang' => 'Slamet Widodo',
            'Penerbit' => 'Erlangga',
            'tahun_terbit'=> '2021',
            'gambar' => 'XI_Geografi.jpg',
            'deskripsi'=>'Buku ini membahas berbagai aspek geografi yang meliputi fisik, sosial, ekonomi, dan lingkungan. Buku ini mencakup topik-topik seperti pemetaan, geomorfologi, iklim, populasi, perkotaan, dan isu-isu lingkungan. Materi disajikan dengan penjelasan yang jelas, peta-peta, grafik, dan studi kasus untuk membantu siswa memahami interaksi antara manusia dan lingkungan serta dampaknya terhadap bumi.'
            ]);
    
        Buku::create([
            'kode_buku' => 'SOS-11',
            'Judul'=>'Sosiologi Kelas XI',
            'Pengarang' => 'Dr. Hendarman Supandji, M.Si.',
            'Penerbit' => 'Erlangga',
            'tahun_terbit'=> '2021',
            'gambar' => 'XI_Sosiologi.jpg',
            'deskripsi'=>'Buku "Sosiologi Kelas XI" ditulis oleh Dr. Hendarman Supandji, seorang akademisi dan pakar sosiologi yang berpengalaman. Buku ini merupakan panduan yang komprehensif untuk mempelajari sosiologi di kelas XI. Melalui penjelasan yang sistematis dan ilustrasi yang menarik, siswa akan mempelajari berbagai topik penting dalam sosiologi seperti struktur sosial, stratifikasi sosial, interaksi sosial, lembaga sosial, dan perubahan sosial. Buku ini juga dilengkapi dengan contoh kasus yang relevan, diskusi, dan aktivitas untuk memperdalam pemahaman siswa terhadap materi yang diajarkan.'
            ]);
    
        Buku::create([
            'kode_buku' => 'MAT-12',
            'Judul'=>'Matematika Kelas XII',
            'Pengarang' => 'Slamet Widodo',
            'Penerbit' => 'Erlangga',
            'tahun_terbit'=> '2022',
            'gambar' => 'XII_Matematika.png',
            'deskripsi'=>'Buku Matematika Kelas XII ini dirancang untuk melengkapi pemahaman siswa tentang konsep matematika yang lebih kompleks. Buku ini mencakup topik-topik seperti trigonometri, integral, turunan, persamaan diferensial, statistika, dan probabilitas. Materi disajikan dengan penjelasan yang mendalam, contoh soal yang beragam, serta latihan-latihan yang dirancang untuk mengembangkan pemahaman konsep dan keterampilan pemecahan masalah siswa. Buku ini juga menghadirkan penerapan matematika dalam konteks kehidupan nyata dan berbagai disiplin ilmu lainnya.'
            ]);

        Buku::create([
            'kode_buku' => 'BIN-12',
            'Judul'=>'Bahasa Indonesia Kelas XII',
            'Pengarang' => 'Ratna Kusumawardani',
            'Penerbit' => 'Pusat Kurikulum dan Perbukuan, Kemendikbud',
            'tahun_terbit'=> '2016',
            'gambar' => 'XII_B_Indonesia.png',
            'deskripsi'=>'Buku Bahasa Indonesia Kelas XII ini bertujuan untuk mengembangkan kemampuan berbahasa Indonesia siswa secara lebih komprehensif. Buku ini mencakup topik-topik seperti kaidah kebahasaan, pemahaman teks, retorika, kritik sastra, dan penulisan karya ilmiah. Materi disajikan dengan penjelasan yang mendalam, contoh-contoh teks yang beragam, serta latihan-latihan yang mengembangkan keterampilan berbicara, menulis, membaca, dan mendengar. Buku ini juga mengajak siswa untuk menghargai karya sastra, mengkritisi informasi yang diterima, dan menghasilkan karya tulis yang bermutu.'
            ]);

        Buku::create([
            'kode_buku' => 'FIS-12',
            'Judul'=>'Fisika Kelas XII',
            'Pengarang' => 'Adi Susilo',
            'Penerbit' => 'Erlangga',
            'tahun_terbit'=> '2018',
            'gambar' => 'XII_Fisika.jpg',
            'deskripsi'=>'Buku Fisika Kelas XII ini membantu siswa untuk memahami konsep-konsep fisika yang lebih lanjut serta menerapkannya dalam situasi dunia nyata. Buku ini mencakup topik-topik seperti medan listrik, medan magnet, osilasi, gelombang, optik, dan fisika modern. Materi disajikan dengan penjelasan yang sistematis, ilustrasi yang jelas, serta contoh-contoh aplikasi dalam kehidupan sehari-hari dan teknologi modern. Buku ini juga menawarkan eksperimen-eksperimen praktis, latihan soal yang beragam, dan pembahasan yang mendalam untuk mengasah pemahaman dan keterampilan pemecahan masalah siswa.'
            ]);

        Buku::create([
            'kode_buku' => 'BIO-12',
            'Judul'=>'Biologi Kelas XII',
            'Pengarang' => 'I Nyoman Sudiana, dkk.',
            'Penerbit' => 'Erlangga',
            'tahun_terbit'=> '2022',
            'gambar' => 'XII_Biologi.jpg',
            'deskripsi'=>'Buku Biologi Kelas XII ini mengajak siswa untuk mempelajari konsep-konsep biologi yang lebih kompleks serta menjelajahi aspek-aspek yang lebih mendalam tentang kehidupan. Buku ini mencakup topik-topik seperti ekologi, genetika, evolusi, bioteknologi, fisiologi manusia, dan lingkungan hidup. Materi disajikan dengan penjelasan yang mendalam, ilustrasi yang jelas, serta contoh-contoh fenomena biologi yang menarik. Buku ini juga menekankan pentingnya penerapan konsep biologi dalam menjaga keberlanjutan lingkungan hidup dan memahami dampak interaksi manusia dengan ekosistem.'
            ]);

        Buku::create([
            'kode_buku' => 'KIM-12',
            'Judul'=>'Kimia Kelas XII',
            'Pengarang' => 'Dwi Siswanta, dkk.',
            'Penerbit' => 'Erlangga',
            'tahun_terbit'=> '2020',
            'gambar' => 'XII_Kimia.jpg',
            'deskripsi'=>'Buku Kimia Kelas XII ini dirancang untuk membantu siswa memahami konsep-konsep kimia yang lebih kompleks dan aplikasinya dalam kehidupan sehari-hari. Buku ini mencakup topik-topik seperti stoikiometri, termokimia, kesetimbangan kimia, kinetika reaksi, dan kimia organik. Materi disajikan dengan penjelasan yang mendalam, contoh-contoh yang relevan, serta latihan soal yang mengembangkan pemahaman konsep dan keterampilan pemecahan masalah siswa. Buku ini juga menghadirkan eksperimen-eksperimen praktis yang memperkuat pemahaman konsep kimia dan mengajak siswa untuk mengenali peran kimia dalam kehidupan sehari-hari dan industri.'
            ]);

        Buku::create([
            'kode_buku' => 'SEJ-12',
            'Judul'=>'Sejarah Indonesia Kelas XII',
            'Pengarang' => 'Anton Wahyudi, dkk.',
            'Penerbit' => 'Pusat Kurikulum dan Perbukuan, Kemendikbud',
            'tahun_terbit'=> '2020',
            'gambar' => 'XII_Sejarah.png',
            'deskripsi'=>'Buku Sejarah Indonesia Kelas XII ini bertujuan untuk mengembangkan pemahaman siswa tentang sejarah Indonesia pada periode modern dan kontemporer. Buku ini mencakup topik-topik seperti pergerakan nasional, penjajahan dan kemerdekaan, masa Orde Lama dan Orde Baru, reformasi, serta perkembangan Indonesia saat ini. Materi disajikan dengan penjelasan yang komprehensif, sumber-sumber sejarah, serta analisis yang mendalam terhadap peristiwa dan tokoh-tokoh penting dalam sejarah Indonesia. Buku ini juga mendorong siswa untuk mengembangkan keterampilan analisis, sintesis, dan evaluasi dalam memahami kompleksitas perjalanan sejarah Indonesia.'
            ]);

        Buku::create([
            'kode_buku' => 'EKO-12',
            'Judul'=>'Ekonomi Kelas XII',
            'Pengarang' => 'Sujatmiko, dkk.',
            'Penerbit' => 'Erlangga',
            'tahun_terbit'=> '2021',
            'gambar' => 'XII_Ekonomi.jpg',
            'deskripsi'=>'Buku Ekonomi Kelas XII ini membantu siswa memahami konsep-konsep ekonomi yang lebih lanjut serta menerapkan pemahaman tersebut dalam konteks kehidupan sehari-hari dan kegiatan ekonomi. Buku ini mencakup topik-topik seperti sistem ekonomi, pasar, inflasi, pertumbuhan ekonomi, investasi, serta kebijakan ekonomi. Materi disajikan dengan penjelasan yang mendalam, studi kasus yang aktual, serta latihan-latihan yang mengembangkan pemahaman konsep dan keterampilan ekonomi siswa. Buku ini juga menawarkan pemahaman yang lebih luas tentang tantangan dan peluang dalam konteks ekonomi global yang terus berkembang.'
            ]);

        Buku::create([
            'kode_buku' => 'ENG-12',
            'Judul'=>'English for Senior High School Students Grade XII',
            'Pengarang' => 'I Wayan Dirgeyasa',
            'Penerbit' => ' Erlangga',
            'tahun_terbit'=> '2020',
            'gambar' => 'XII_B_Inggris.png',
            'deskripsi'=>' Buku Bahasa Inggris untuk Kelas XII ini ditujukan untuk mengembangkan kemampuan siswa dalam berkomunikasi dalam bahasa Inggris secara lebih efektif dan akurat. Buku ini mencakup topik-topik seperti reading comprehension, listening, speaking, writing, serta grammar dan vocabulary. Materi disajikan dengan penjelasan yang sistematis, contoh-contoh autentik, serta latihan-latihan yang mengembangkan keterampilan komunikasi dan pemahaman bahasa Inggris. Buku ini juga menawarkan materi yang relevan dengan konteks global, termasuk isu-isu sosial, budaya, dan lingkungan.'
            ]);

        Buku::create([
            'kode_buku' => 'AIS-12',
            'Judul'=>'Agama Islam Kelas XII',
            'Pengarang' => 'Achmad Fanani, dkk.',
            'Penerbit' => 'Erlangga',
            'tahun_terbit'=> '2022',
            'gambar' => 'XII_Islam.png',
            'deskripsi'=>'Buku Agama Islam Kelas XII ini menyajikan pemahaman yang lebih mendalam tentang ajaran dan praktik keagamaan Islam. Buku ini mencakup topik-topik seperti tauhid, syariat Islam, akhlak, fiqh, dan peran Islam dalam masyarakat. Materi disajikan dengan penjelasan yang komprehensif, teks-teks Al-Quran, serta contoh-contoh penerapan nilai-nilai Islam dalam kehidupan sehari-hari. Buku ini juga mengajak siswa untuk memahami dan menghormati pluralitas agama serta mengembangkan sikap toleransi, kerjasama, dan pencerahan dalam beragama.'
            ]);

        Buku::create([
            'kode_buku' => 'PEN-12',
            'Judul'=>'Pendidikan Jasmani, Olahraga, dan Kesehatan Kelas XII',
            'Pengarang' => 'Sumarno, dkk.',
            'Penerbit' => 'Erlangga',
            'tahun_terbit'=> '2021',
            'gambar' => 'XII_PJOK.png',
            'deskripsi'=>'Buku Pendidikan Jasmani, Olahraga, dan Kesehatan Kelas XII ini dirancang untuk mengembangkan pemahaman siswa tentang pentingnya aktivitas jasmani, olahraga, dan kesehatan dalam menjaga kebugaran dan kesejahteraan individu. Buku ini mencakup topik-topik seperti kebugaran jasmani, permainan tradisional, olahraga prestasi, kesehatan reproduksi, serta keselamatan dan keamanan olahraga. Materi disajikan dengan penjelasan yang komprehensif, contoh-contoh latihan fisik yang bervariasi, serta informasi tentang pola hidup sehat dan gaya hidup aktif. Buku ini juga mendorong siswa untuk mengembangkan sikap sportivitas, kerjasama, dan kesadaran akan pentingnya menjaga kesehatan.'
            ]);

        Buku::create([
            'kode_buku' => 'SBU-12',
            'Judul'=>'Seni Budaya Kelas XII',
            'Pengarang' => ' Tri Wibowo',
            'Penerbit' => 'Erlangga',
            'tahun_terbit'=> '2021',
            'gambar' => 'XII_Seni_Budaya.png',
            'deskripsi'=>'Buku Seni Budaya Kelas XII ini mengajak siswa untuk mendalami berbagai aspek seni budaya Indonesia dan dunia secara lebih dalam. Buku ini mencakup topik-topik seperti seni rupa, seni musik, seni tari, seni drama, serta seni arsitektur dan desain. Materi disajikan dengan penjelasan yang mendalam, contoh-contoh karya seni yang signifikan, serta aktivitas-aktivitas kreatif yang mengembangkan keterampilan seni siswa. Buku ini juga mengenalkan siswa pada keragaman budaya, apresiasi seni, dan peran seni dalam kehidupan masyarakat.'
            ]);

        Buku::create([
            'kode_buku' => 'PRA-12',
            'Judul'=>'Prakarya dan Kewirausahaan Kelas XII',
            'Pengarang' => 'Sudarminto, dkk.',
            'Penerbit' => 'Pusat Kurikulum dan Perbukuan, Kemendikbud',
            'tahun_terbit'=> '2020',
            'gambar' => 'XII_Prakarya.png',
            'deskripsi'=>'Buku Prakarya dan Kewirausahaan Kelas XII ini bertujuan untuk mengembangkan kreativitas dan keterampilan berwirausaha siswa. Buku ini mencakup topik-topik seperti desain produk, teknologi informasi dan komunikasi, manajemen produksi, serta pemasaran dan promosi. Materi disajikan dengan penjelasan yang sistematis, contoh-contoh produk inovatif, serta kegiatan praktis yang melibatkan proses desain dan produksi. Buku ini juga mendorong siswa untuk mengembangkan keterampilan berpikir kritis, kreativitas, dan kemampuan berwirausaha.'
            ]);

        Buku::create([
            'kode_buku' => 'GEO-12',
            'Judul'=>'Geografi Kelas XII',
            'Pengarang' => 'Agung Harijoko, dkk.',
            'Penerbit' => 'Erlangga',
            'tahun_terbit'=> '',
            'gambar' => 'XII_Geografi.jpg',
            'deskripsi'=>'Buku geografi Kelas XII ini memberikan pemahaman yang lebih mendalam tentang ilmu geografi dan fenomena geografis yang terjadi di bumi. Buku ini mencakup topik-topik seperti pembentukan dan struktur bumi, dinamika litosfer, sumber daya mineral dan energi, serta geografi lingkungan. Materi disajikan dengan penjelasan yang komprehensif, gambar-gambar ilustratif, serta studi kasus yang relevan. Buku ini juga mendorong siswa untuk mengembangkan pemahaman tentang hubungan antara manusia dan lingkungan geografis serta pentingnya pelestarian sumber daya alam.'
            ]);

        Buku::create([
            'kode_buku' => 'SOS-12',
            'Judul'=>' Sosiologi Kelas XII',
            'Pengarang' => 'Dr. Selo Soemardjan, M.Si.',
            'Penerbit' => 'Pusat Perbukuan, Departemen Pendidikan Nasional',
            'tahun_terbit'=> '2020',
            'gambar' => 'XII_Sosiologi.jpg',
            'deskripsi'=>' Buku "Sosiologi Kelas XII" ditulis oleh Dr. Selo Soemardjan, seorang ahli sosiologi yang diakui secara internasional. Buku ini memberikan wawasan mendalam tentang teori-teori sosiologi yang lebih kompleks dan berfokus pada isu-isu sosial kontemporer. Materi dalam buku ini mencakup konflik sosial, kekuasaan, identitas sosial, globalisasi, dan isu-isu sosial lainnya. Dengan pendekatan yang kritis dan analitis, buku ini mendorong siswa untuk berpikir secara kritis tentang fenomena sosial dalam masyarakat modern. Buku ini juga dilengkapi dengan studi kasus, diskusi, dan pertanyaan refleksi yang akan membantu siswa mengembangkan pemahaman yang lebih mendalam tentang sosiologi.'
            ]);

        Buku::create([
            'kode_buku' => 'DN-02',
            'Judul'=>'Dongeng Nusantara',
            'Pengarang' => 'Kumpulan pengarang',
            'Penerbit' => 'Grasindo',
            'tahun_terbit'=> '2010',
            'gambar' => 'Dongeng_Nusantara.jpg',
            'deskripsi'=>'"Dongeng Nusantara" adalah kumpulan cerita rakyat dari berbagai daerah di Indonesia. Buku ini memperkenalkan beragam tokoh legendaris, petualangan menarik, dan nilai-nilai moral yang terkandung dalam dongeng-dongeng tersebut. Setiap cerita memperkaya pengetahuan tentang budaya dan warisan leluhur di Nusantara.'
            ]);

        Buku::create([
            'kode_buku' => 'NVL-01',
            'Judul'=>'Negeri Van Oranje',
            'Pengarang' => 'Wahyu Hidayat',
            'Penerbit' => 'Bentang Pustaka',
            'tahun_terbit'=> '2013',
            'gambar' => 'Negeri_Van_Oranje.jpg',
            'deskripsi'=>'"Negeri Van Oranje" mengisahkan kehidupan empat mahasiswa Indonesia yang merantau ke Belanda untuk mengejar impian dan mencari jati diri. Dalam perjalanan mereka, mereka dihadapkan pada berbagai tantangan, konflik, dan kehidupan di luar negeri. Novel ini menggambarkan perbedaan budaya, perjuangan, dan perjalanan para tokohnya dalam menemukan tempat mereka di "negeri Van Oranje".'
            ]);
        
        Buku::create([
            'kode_buku' => 'BR-01',
            'Judul'=>'Bumi Manusia',
            'Pengarang' => 'Pramoedya Ananta Toer',
            'Penerbit' => 'Lentera Dipantara',
            'tahun_terbit'=> '1980',
            'gambar' => 'Bumi_Manusia.jpg',
            'deskripsi'=>'"Bumi Manusia" adalah bagian pertama dari tetralogi "Tetralogi Buru" karya Pramoedya Ananta Toer. Novel ini mengisahkan kehidupan Minke, seorang pemuda pribumi terpelajar pada masa penjajahan Belanda di awal abad ke-20. Cerita ini mengangkat tema tentang perlawanan, perjuangan identitas, cinta, serta kritik sosial terhadap kolonialisme.'
            ]);

        Buku::create([
            'kode_buku' => 'MD-01',
            'Judul'=>'Matahari',
            'Pengarang' => 'Tere Liye',
            'Penerbit' => 'Gramedia Pustaka',
            'tahun_terbit'=> '2017',
            'gambar' => 'Matahari.jpg',
            'deskripsi'=>'"Matahari" adalah sebuah novel yang mengisahkan perjalanan hidup seorang anak yatim piatu bernama Adil. Kisah ini menyoroti kehidupan Adil yang penuh dengan tantangan, perjuangan, dan tekad yang kuat untuk mengubah nasibnya. Novel ini mengajarkan nilai-nilai keberanian, harapan, dan kekuatan dalam menghadapi cobaan kehidupan.'
            ]);

        Buku::create([
            'kode_buku' => 'SP-02',
            'Judul'=>'Sepotong Senja untuk Pacarku',
            'Pengarang' => 'Seno Gumira Ajidarma',
            'Penerbit' => 'Serambi Ilmu Semesta',
            'tahun_terbit'=> '2004',
            'gambar' => 'Sepotong_Senja_Untuk_Pacarku.jpg',
            'deskripsi'=>'"Sepotong Senja untuk Pacarku" adalah kumpulan cerita pendek yang menggambarkan kehidupan sehari-hari, cinta, dan kehilangan. Setiap cerita memiliki atmosfer yang mendalam dan menyentuh, mengajak pembaca merenung tentang makna dan kompleksitas hubungan manusia.'
            ]);

        Buku::create([
            'kode_buku' => 'RS-01',
            'Judul'=>'Radit & Jani',
            'Pengarang' => 'Raditya Dika',
            'Penerbit' => 'Gagas Media',
            'tahun_terbit'=> '2005',
            'gambar' => 'Radit_&_Jani.jpg',
            'deskripsi'=>'"Radit & Jani" adalah novel komedi romantis yang mengisahkan kisah cinta dua remaja yang penuh dengan liku-liku dan situasi lucu. Cerita ini menghadirkan kombinasi antara humor, persahabatan, dan kehidupan remaja yang menarik untuk diikuti.'
            ]);

        Buku::create([
            'kode_buku' => ' MB-1',
            'Judul'=>'Marmut Merah Jambu',
            'Pengarang' => 'Raditya Dika',
            'Penerbit' => 'Gagas Media',
            'tahun_terbit'=> '2008',
            'gambar' => 'Marmut_Merah_Jambu.jpg',
            'deskripsi'=>'"Marmut Merah Jambu" adalah novel komedi yang mengisahkan kisah-kisah lucu seputar kehidupan seorang mahasiswa. Dalam novel ini, Raditya Dika menghadirkan pengalaman-pengalaman konyol, humor absurd, dan situasi yang menggelitik tawa.'
            ]);

        Buku::create([
            'kode_buku' => 'PR-2',
            'Judul'=>'Pulang',
            'Pengarang' => 'Leila S. Chudori',
            'Penerbit' => 'KPG (Kepustakaan Populer Gramedia)',
            'tahun_terbit'=> '2012',
            'gambar' => 'Pulang.jpg',
            'deskripsi'=>'"Pulang" adalah novel yang mengisahkan kisah perjalanan hidup keluarga dalam menghadapi gejolak politik di Indonesia dari tahun 1965 hingga masa kini. Cerita ini mengangkat tema tentang kehidupan, cinta, dan perjuangan melawan ketidakadilan.'
            ]);

        Buku::create([
            'kode_buku' => 'GT-3',
            'Judul'=>'Gadis Pantai',
            'Pengarang' => 'Pramoedya Ananta Toer',
            'Penerbit' => 'Hasta Mitra',
            'tahun_terbit'=> '1985',
            'gambar' => 'Gadis_Pantai.jpg',
            'deskripsi'=>'"Gadis Pantai" adalah novel yang mengisahkan kehidupan seorang gadis bernama Ratna di kawasan Pantai Utara Jawa pada masa kolonial Belanda. Cerita ini memperlihatkan perjuangan Ratna dalam mengejar cita-citanya dan melawan berbagai hambatan sosial-politik di sekitarnya.'
            ]);

        Buku::create([
            'kode_buku' => 'AM-1',
            'Judul'=>'Ayat-Ayat Cinta',
            'Pengarang' => 'Habiburrahman El Shirazy',
            'Penerbit' => 'Republika Penerbit',
            'tahun_terbit'=> '2004',
            'gambar' => 'Ayat_Ayat_Cinta.png',
            'deskripsi'=>'"Ayat-Ayat Cinta" mengisahkan kisah cinta seorang mahasiswa Indonesia bernama Fahri bin Abdillah yang belajar di Universitas Al-Azhar, Kairo. Novel ini menggambarkan konflik internal, cinta, kehidupan perantauan, serta nilai-nilai agama dan kebaikan hati.'
            ]);

        Buku::create([
            'kode_buku' => 'NP-01',
            'Judul'=>'National Geographic - 100 Hewan Paling Mengagumkan di Dunia',
            'Pengarang' => 'Melina Gerosa Bellows',
            'Penerbit' => 'National Geographic',
            'tahun_terbit'=> '2019',
            'gambar' => 'Hewan_Menakjubkan.jpg',
            'deskripsi'=>'Buku ini menyajikan fakta menarik tentang 100 hewan yang paling menakjubkan di dunia. Dengan ilustrasi yang indah dan cerita informatif, buku ini memperkenalkan keanekaragaman alam dan kehidupan hewan di berbagai habitat.'
            ]);

        Buku::create([
            'kode_buku' => 'TS-01',
            'Judul'=>'The Story of Science: From the Writings of Aristotle to the Big Bang Theory',
            'Pengarang' => 'Susan Wise Bauer',
            'Penerbit' => 'W. W. Norton & Company',
            'tahun_terbit'=> '2010',
            'gambar' => 'Story_of_Western_Science.jpg',
            'deskripsi'=>'Buku ini menggambarkan perkembangan ilmu pengetahuan dari zaman kuno hingga saat ini. Dengan bahasa yang mudah dipahami, buku ini mengajak pembaca untuk menjelajahi evolusi ide dan pemikiran manusia dalam memahami alam semesta.'
            ]);

}
}
