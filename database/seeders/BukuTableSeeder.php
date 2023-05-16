<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Ramsey\Uuid\Type\Integer;

class BukuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('buku')->insert([
            'id' => '10001',
            'judul' => 'Bahasa Indonesia kelas X',
            'penulis' => 'Suherli, Maman Suryaman, Aji Septiaji, Istiqomah',
            'penerbit' => 'Pusat Kurikulum dan Perbukuan, Balitbang, Kemendikbud',
            'tahun_terbit' => '2017',
            'genre_buku' => 'Buku Pelajaran',
            'sinopsis' => 'Buku ini dipersiapkan untuk mendukung kebijakan Kurikulum 2013 yang secara konstitusional mempertahankan bahasa Indonesia dalam daftar mata pelajaran di sekolah. Kurikulum terbaru ini menegaskan pentingnya keberadaan bahasa Indonesia sebagai penghela dan pembawa ilmu pengetahuan (carrier of knowledge). Berdasarkan Kurikulum 2013, buku siswa kelas X ini memuat enam pelajaran yang berisi materi pembelajaran teks laporan hasil observasi, prosedur kompleks, eksposisi, anekdot, negosiasi, dan materi gabungan berbagai jenis teks.
            Pada awal setiap pelajaran, siswa diajak untuk membangun konteks sesuai dengan tema pelajaran. Setiap tema dibahas lebih lanjut dalam tiga kegiatan, yakni (1) pemodelan teks, (2) kerja sama membangun teks, dan (3) kerja mandiri membangun teks. Kegiatan pembelajaran teks itu masing-masing dikembangkan dalam bentuk tugas-tugas yang sangat beragam untuk menciptakan kegemaran belajar. Tugas tambahan membaca buku rujukan juga diberikan pada setiap pelajaran dan siswa diminta untuk melaporkan hasil pelaksanaan tugas membaca itu sebagai bagian dari evaluasi pembelajaran.
            Melalui buku ini, diharapkan siswa mampu dan berpengalaman memproduksi serta menggunakan teks sesuai dengan tujuan dan fungsi sosialnya. Dalam pembelajaran bahasa yang berbasis teks, bahasa Indonesia diajarkan bukan sekadar sebagai pengetahuan bahasa, melainkan sebagai teks yang mengemban fungsi untuk menjadi sumber aktualisasi diri dan mengembangkan budaya akademik.',
            'jumlah_halaman' => '297',
            'stok_buku' => '100',
            'lokasi_rak' => 'B1',
        ]);
        
        DB::table('buku')->insert([
            'id' => '20001',
            'judul' => 'Bahasa Indonesia kelas XI',
            'penulis' => 'Suherli, Maman Suryaman, Aji Septiaji, Istiqomah',
            'penerbit' => 'Pusat Kurikulum dan Perbukuan, Balitbang, Kemendikbud',
            'tahun_terbit' => '2017',
            'genre_buku' => 'Buku Pelajaran',
            'sinopsis' => 'Buku ini dipersiapkan untuk mendukung kebijakan Kurikulum 2013 yang secara konstitusional mempertahankan bahasa Indonesia dalam daftar mata pelajaran di sekolah. Kurikulum terbaru ini menegaskan pentingnya keberadaan bahasa Indonesia sebagai penghela dan pembawa ilmu pengetahuan (carrier of knowledge). Berdasarkan Kurikulum 2013, buku siswa kelas XI ini memuat delapan pelajaran yang berisi materi menyusun prosedur, mempelajari teks eksplanasi, mengelola informasi dalam ceramah, meneladani kehidupan dari cerita pendek, mempersiapkan proposal, merancang karya ilmiah, menilai karya melalui resensi, dan bermain drama.
            Pada awal setiap pelajaran, siswa diajak untuk membangun konteks sesuai dengan tema pelajaran. Setiap tema dibahas lebih lanjut dalam tiga kegiatan, yakni (1) pemodelan teks, (2) kerja sama membangun teks, dan (3) kerja mandiri membangun teks. Kegiatan pembelajaran teks itu masing-masing dikembangkan dalam bentuk tugas-tugas yang sangat beragam untuk menciptakan kegemaran belajar. Tugas tambahan membaca buku rujukan juga diberikan pada setiap pelajaran dan siswa diminta untuk melaporkan hasil pelaksanaan tugas membaca itu sebagai bagian dari evaluasi pembelajaran.
            Melalui buku ini, diharapkan siswa mampu dan berpengalaman memproduksi serta menggunakan teks sesuai dengan tujuan dan fungsi sosialnya.
            Dalam pembelajaran bahasa yang berbasis teks, bahasa Indonesia diajarkan bukan sekadar sebagai pengetahuan bahasa, melainkan sebagai teks yang mengemban fungsi untuk menjadi sumber aktualisasi diri dan mengembangkan budaya akademik.',
            'jumlah_halaman' => '313',
            'stok_buku' => '100',
            'lokasi_rak' => 'B1',
        ]);
        DB::table('buku')->insert([
            'id' => '30001',
            'judul' => 'Bahasa Indonesia kelas XII',
            'penulis' => 'Suherli, Maman Suryaman, Aji Septiaji, Istiqomah',
            'penerbit' => 'Pusat Kurikulum dan Perbukuan, Balitbang, Kemendikbud',
            'tahun_terbit' => '2017',
            'genre_buku' => 'Buku Pelajaran',
            'sinopsis' => 'Buku ini dipersiapkan untuk mendukung kebijakan Kurikulum 2013 yang secara konstitusional mempertahankan bahasa Indonesia dalam daftar mata pelajaran di sekolah. Kurikulum terbaru ini menegaskan pentingnya keberadaan bahasa Indonesia sebagai penghela dan pembawa ilmu pengetahuan (carrier of knowledge). Berdasarkan Kurikulum 2013, buku siswa kelas XII ini memuat delapan pelajaran yang berisi materi menyusun prosedur, mempelajari teks eksplanasi, mengelola informasi dalam ceramah, meneladani kehidupan dari cerita pendek, mempersiapkan proposal, merancang karya ilmiah, menilai karya melalui resensi, dan bermain drama.
            Pada awal setiap pelajaran, siswa diajak untuk membangun konteks sesuai dengan tema pelajaran. Setiap tema dibahas lebih lanjut dalam tiga kegiatan, yakni (1) pemodelan teks, (2) kerja sama membangun teks, dan (3) kerja mandiri membangun teks. Kegiatan pembelajaran teks itu masing-masing dikembangkan dalam bentuk tugas-tugas yang sangat beragam untuk menciptakan kegemaran belajar. Tugas tambahan membaca buku rujukan juga diberikan pada setiap pelajaran dan siswa diminta untuk melaporkan hasil pelaksanaan tugas membaca itu sebagai bagian dari evaluasi pembelajaran.
            Melalui buku ini, diharapkan siswa mampu dan berpengalaman memproduksi serta menggunakan teks sesuai dengan tujuan dan fungsi sosialnya.
            Dalam pembelajaran bahasa yang berbasis teks, bahasa Indonesia diajarkan bukan sekadar sebagai pengetahuan bahasa, melainkan sebagai teks yang mengemban fungsi untuk menjadi sumber aktualisasi diri dan mengembangkan budaya akademik.',
            'jumlah_halaman' => '264',
            'stok_buku' => '100',
            'lokasi_rak' => 'B1',
        ]);
        DB::table('buku')->insert([
            'id' => '10002',
            'judul' => 'Pendidikan Pancasila dan Kewarganegaraan kelas X', 
            'penulis' => 'Yusnawan Lubis Mohamad Sodeli',
            'penerbit' => 'Pusat Kurikulum dan Perbukuan, Balitbang, Kemendikbud',
            'tahun_terbit' => '2017',
            'genre_buku' => 'Buku Pelajaran',
            'sinopsis' => 'Buku Pendidikan Pancasila dan Kewarganegaraan (PPKn) ini merupakan buku pegangan dalam proses pembelajaran. Buku ini banyak sekali manfaatnya bagi peserta didik dan guru. Bagi peserta didik, buku ini akan mengantarkan mereka memperoleh wawasan yang diperlukan untuk menjadi warga negara yang baik. Sedangkan bagi guru, buku ini dapat dijadikan sebagai panduan dalam melaksanaan proses pembelajaran baik di dalam maupun di lingkungan sekolah.
            Buku ini dikemas secara sistematis dan menarik serta ditujukan untuk meningkatkan kreatitas peserta didik. Bahasa yang dipergunakan merupakan bahasa yang mudah dipahami oleh peserta didik. Dengan kata lain, bahasa yang dipergunakan bukanlah bahasa yang kaku, tetapi bahasa yang eksibel serta bersahabat dengan kalian.
            Strategi pembelajaran di buku ini diarahkan untuk memfasilitasi pencapaian kompetensi yang telah dirancang dalam dokumen kurikulum agar setiap individu mampu menjadi pembelajar mandiri sepanjang hayat. Pada gilirannya mereka diharapkan menjadi komponen penting untuk mewujudkan masyarakat belajar. Kualitas lain yang dikembangkan kurikulum dan harus terealisasikan dalam proses pembelajaran antara lain kreativitas, kemandirian, kerja sama, solidaritas, kepemimpinan, empati, toleransi, dan kecakapan hidup peserta didik guna membentuk watak serta meningkatkan peradaban dan martabat bangsa.
            Untuk mencapai kualitas yang telah dirancang dalam dokumen kurikulum maka kegiatan pembelajaran perlu menggunakan prinsip yang (1) berpusat pada peserta didik, (2) mengembangkan kreativitas peserta didik, (3) menciptakan kondisi menyenangkan dan menantang, (4) bermuatan nilai, etika, estetika, logika, dan kinestetika, dan (5) menyediakan pengalaman belajar yang beragam melalui penerapan berbagai strategi dan metode pembelajaran yang menyenangkan, kontekstual, efektif, esien, dan bermakna. Oleh karena itu, guru memberikan kemudahan untuk proses ini, dengan mengembangkan suasana belajar yang memberi kesempatan peserta didik untuk menemukan, menerapkan ide-ide mereka sendiri, menjadi sadar dan secara sadar menggunakan strategi mereka sendiri untuk belajar.
            Dengan demikian, buku siswa ini memfokuskan pada pembentukan warga negara yang memahami dan mampu melaksanakan hak-hak dan kewajibannya untuk menjadi warga negara Indonesia yang cerdas, terampil, dan berkarakter yang diamanatkan oleh Pancasila dan Undang-Undang Dasar Negara Republik Indonesia Tahun 1945.',
            'jumlah_halaman' => '266',
            'stok_buku' => '100',
            'lokasi_rak' => 'B2',

        ]);
        DB::table('buku')->insert([
            'id' => '20002',
            'judul' => 'Pendidikan Pancasila dan Kewarganegaraan kelas XI',
            'penulis' => 'Yusnawan Lubis dan Mohamad Sodeli',
            'penerbit' => 'Pusat Kurikulum dan Perbukuan Kementerian Pendidikan dan Kebudayaan',
            'tahun_terbit' => '2017',
            'genre_buku' => 'Buku Pelajaran',
            'sinopsis' => 'Buku Pendidikan Pancasila dan Kewarganegaraan (PPKn) untuk kelas XI (sebelas) ini merupakan jawaban atas tuntutan buku pelajaran yang berkualitas. Buku ini mengembangkan kompetensi kewarganegaraan kalian melalui pendekatan scientific dimana melalui buku ini dalam proses pembelajaran kalian didorong untuk selalu mengamati, menanya, mengumpulkan data, mengasosiasikan dan mengkomunikasikan pengetahuan yang kalian peroleh. Dengan kata lain, melalui buku ini, kalian didorong untuk menemukan sendiri pengetahuan, menciptakan kerja sama dalam kelompok, menilai diri sendiri, serta meningkatkan keterampilan sebagai warga negara.
            Selain itu, buku ini juga dapat dijadikan sebagai salah satu wahana untuk meningkatkan kesadaran berbangsa dan bernegara. Sehingga pada akhirnya, setelah mempelajari seluruh materi pada buku ini, kalian menjadi warga negara yang baik dan cerdas, yaitu warga negara yang memiliki rasa cinta tanah air dan kesadaran politik yang tinggi serta dijiwai oleh nilai-nilai Pancasila, Undang-Undang Dasar Negara Republik Indonesia Tahun 1945, semangat Bhinneka Tunggal lka, dan komitmen terhadap Negara Kesatuan Republik Indonesia. Sekaitan dengan hal tersebut, buku PPKn untuk kelas XI ini mengajak kalian untuk mengkaji materi-materi pembelajaran yang dapat mendorong kalian menjadi warga negara yang baik dan cerdas. Adapun materi pembelajaran PPKn di kelas XI ini terdiri atas: 1) Harmonisasi Hak dan Kewajiban Asasi Manusia dalam Perspektif Pancasila; 2) Sistem dan Dinamika Demokrasi Pancasila; 3) Sistem Hukum dan Peradilan Di Indonesia; 4) Dinamika Peran Indonesia dalam Perdamaian Dunia; 5) Mewaspadai Ancaman Terhadap Kedudukan Negara Kesatuan Republik Indonesia; dan 6) Memperkokoh Persatuan dan Kesatuan Bangsa dalam Konteks Negara Kesatuan Republik Indonesia (NKRI). Materi-materi tersebut disajikan dengan bahasa yang mudah dipahami dilengkapi dengan gambar, bagan/tabel, tugas kelompok, tugas mandiri,refleksi, rangkuman materi, penilaian diri, uji kompetensi, info kewarganegaraan penanaman kesadaran berkonstitusi, serta proyek kewarganegaraan sebagai wahana mengembangkan kemampuan berpikir kritis, kreatif, inovatif dan mandiri.',
            'jumlah_halaman' => '228',
            'stok_buku' => '100',
            'lokasi_rak' => 'B2',

        ]);
        DB::table('buku')->insert([
            'id' => '30002',
            'judul' => 'Pendidikan Pancasila dan Kewarganegaraan kelas XII',
            'penulis' => 'Yusnawan Lubis dan Mohamad Sodeli',
            'penerbit' => 'Pusat Kurikulum dan Perbukuan Kementerian Pendidikan dan Kebudayaan',
            'tahun_terbit' => '2018',
            'genre_buku' => 'Buku Pelajaran',
            'sinopsis' => 'Pendidikan Pancasila dan Kewarganegaraan (PPKn) adalah mata pelajaran yang dirancang untuk membekali siswa dengan keimanan dan akhlak mulia sebagaimana diarahkan oleh falsafah hidup bangsa Indonesia yaitu Pancasila. Melalui pembelajaran PPKn, siswa dipersiapkan untuk dapat berperan sebagai warga negara yang efek f dan bertanggung jawab. Oleh karena itu, dalam mapel ini membahas secara utuh materi Pancasila, Undang-Undang Dasar Negara Republik Indonesia Tahun 1945, Negara Kesatuan Republik Indonesia, dan Bhinneka Tunggal Ika. Materi-materi tersebut, diharapkan dapat diterjemahkan oleh siswa di dalam tata cara kehidupan berbangsa, bernegara, dan bermasyarakat dengan dak mengesampingkan nilai-nilai universal kemanusiaan dalam implementasinya.',
            'jumlah_halaman' => '145',
            'stok_buku' => '100',
            'lokasi_rak' => 'B2',

        ]);
        DB::table('buku')->insert([
            'id' => '10003',
            'judul' => 'Sejarah Indonesia Kelas X',
            'penulis' => 'Amurwani Dwi L, Restu Gunawan, Sardiman AM, Mestik',
            'penerbit' => 'Pusat Kurikulum dan Perbukuan Kementerian Pendidikan dan Kebudayaan',
            'tahun_terbit' => '2014',
            'genre_buku' => 'Buku Pelajaran',
            'sinopsis' => 'Buku ini sudah beberapa kali dilakukan revisi dan perbaikan. Namun demikian masih ada kekurangan. Oleh karena itu masukan dari berbagai pihak sangat diharapkan untuk perbaikan di masa mendatang. Untuk mendiskusikan berbagai hal yang dikira belum jelas atau memerlukan klarifikasi, kami siap untuk mendiskusikan lebih lanjut. Selamat belajar sejarah, untuk merancang masa depan yang lebih baik.',
            'jumlah_halaman' => '360',
            'stok_buku' => '100',
            'lokasi_rak' => 'C1',

        ]);
        DB::table('buku')->insert([
            'id' => '20003',
            'judul' => 'Sejarah Indonesia Kelas XI',
            'penulis' => 'Sardiman AM, dan Amurwani Dwi Lestariningsih',
            'penerbit' => 'Pusat Kurikulum dan Perbukuan Kementerian Pendidikan dan Kebudayaan',
            'tahun_terbit' => '2017',
            'genre_buku' => 'Buku Pelajaran',
            'sinopsis' => 'Sejarah Indonesia merupakan mata pelajaran wajib yang harus ditempuh oleh semua peserta didik jenjang SMA/SMK. Materi pelajaran Sejarah Indonesia ini sangat penting bagi peserta didik terutama untuk menumbuhkan kesadaran sejarah, membangun semangat kebangsaan, dan memupuk rasa nasionalisme bBgi para pelajar. Buku Sejarah Indonesia kelas XI terdiri atas VII bab. Diawali bab I dengan uraian tentang Imperialisme dan Kolonialisme dengan beberapa yang menunjukkan keserakahan dan ketidakadilan penjajah. Timbulah perlawanan terhadap kekejaman kekuasaan kongsi dagang dan keserakahan kekuasaan kolonial (Bab II). Pada awal abad ke-20 dimulailah babak baru perjuangan bangsa Indonesia dalam upaya mendapatkan kemerdekaan yang ditandai dengan munculnya ruh kebangsaan Indonesia. Berkembanglah berbagai organisasi pergerakan nasional yang membedakan dengan strategi perjuangan sebelumnya. Kemudian terjadi suatu momentum penting yang merintis penguatan jati diri keindonesiaan yang ditandai dengan lahirnya Sumpah Pemuda dan Manifesto Politik dari PI. Perjuangan pergerakan kebangsaan terus berlanjut disusul kemudian dimulainya kekuasaan Tirani Matahari Terbit sebagai representasi dari masa pendudukan Jepang di Indonesia. Setelah berjuang dengan segala pahit getir, pengorbaban jiwa raga diiringi tetesan darah dan air mata, sampailah kepada saat yang berbahagia, bangsa ini memasuki pintu gerbang kemerdekaan Indonesia. Berbagai kelengkapan dan instrumen Negara diupayakan untuk mengisi perabot rumah tangga NKRI. Sayang Belanda yang membonceng tentara Sekutu masih berambisi datang dan membuat ulah di negeri tercinta Indonesia. Babak revolusi mempertahankan NKRI harus dimulai sampai akhirnya Belanda harus pulang ke negerinya. Tegaklah panji-panji NKRI.
            Belajar Sejarah Indonesia pada periode dari perkembangan kolonialisme-imperialisme,pergerakan nasional sampai tegaknya kembali NKRI pada tahun 1950, banyak nilai-nilai yang dapat digali dan kemudian baik untuk kita amalkan. Misalnya semangat patriotisme, rela berkorban dan bela Negara, ulet dan kerja keras, semangat nasionalisme dan persatuan, toleransi dan kepedulian, kemerdekaan dan kemandirian.',
            'jumlah_halaman' => '241',
            'stok_buku' => '100',
            'lokasi_rak' => 'C1',

        ]);
        DB::table('buku')->insert([
            'id' => '30003',
            'judul' => 'Sejarah Indonesia Kelas XII',
            'penulis' => 'Abdurakhman, Arif Pradono, Linda Sunarti dan Susanto Zuhdi',
            'penerbit' => 'Pusat Kurikulum dan Perbukuan Kementerian Pendidikan dan Kebudayaan',
            'tahun_terbit' => '2018',
            'genre_buku' => 'Buku Pembelajaran',
            'sinopsis' => 'Pembelajaran Sejarah Indonesia untuk Kelas XII jenjang Pendidikan Menengah yang disajikan dalam buku ini juga tunduk pada ketentuan tersebut. Sejarah Indonesia bukan berisi materi pembelajaran yang dirancang hanya untuk mengasah kompetensi pengetahuan siswa. Sejarah Indonesia adalah mata pelajaran yang membekali siswa dengan pengetahuan tentang dimensi ruang-waktu perjalanan sejarah Indonesia, keterampilan dalam menyajikan pengetahuan yang dikuasainya secara konkret dan abstrak, serta sikap menghargai jasa para pahlawan yang telah meletakkan pondasi bangunan negara Indonesia beserta segala bentuk warisan sejarah, baik benda maupun tak benda. Sehingga terbentuk pola pikir siswa yang sadar sejarah.',
            'jumlah_halaman' => '272',
            'stok_buku' => '100',
            'lokasi_rak' => 'C1',

        ]);
        DB::table('buku')->insert([
            'id' => '40001',
            'judul' => 'Koala kumal',
            'penulis' => 'Raditya Dika',
            'penerbit' => 'Gagas Media',
            'tahun_terbit' => '2015',
            'genre_buku' => 'Fiksi',
            'sinopsis' => 'Raditya Dika adalah salah satu insan kreatif Indonesia yang karyanya selalu sukses diterima masyarakat. Kesuksesannya berawal dari aktivitas isengnya, yaitu nge-blogging.Tulisan di blognya lalu diadaptasi menjadi sebuah buku fiksi berjudul Kambing Jantan, yang merupakan hasil karya perdana Raditya Dika',
            'jumlah_halaman' => '250',
            'stok_buku' => '5',
            'lokasi_rak' => 'A1',

        ]);
        DB::table('buku')->insert([
            'id' => '40002',
            'judul' => 'TUILET',
            'penulis' => 'Oben Cedric',
            'penerbit' => 'Gradien Mediatama',
            'tahun_terbit' => '2009',
            'genre_buku' => 'Fiksi',
            'sinopsis' => 'Novel Tuilet adalah novel yang bertema humor yang diciptakan untuk membawa para pembacanya agar tidak hanya membaca kisahnya namun juga akan menemukan kisah-kisah lucu seputar tokoh yang ada di dalam novel ini. Novel ini mengisahkan tentang seorang anak SMA yang tidak terlalu terkenal di kelasnya. Ia bernama Edi Wardiman. Karena Edi memiliki gaya yang terbilang culun, oleh teman-temannya ia sering dipanggil sebagai Edward Culun. Edward memiliki sahabat dekat bernama Joko yang juga termasuk siswa culun.
            Dalam novel ini juga menceritakan seorang gadis bernama Bella, yang ternyata adalah vampir yang jatuh cinta kepada Edward karena melihat wajah Edward yang mirip dengan wajah pacarnya dulu. Novel ini menyajikan konflik-konflik antar pemain yang diceritakan dengan lucu namun tidak mengurangi kualitas kisan dari novel tersebut, seperti Edward yang dikhianati oleh Joko demi agar Joko bisa masuk ke kelompok siswa keren di sekolahnya, maka ia harus mengerjai Edward (sahabatnya sendiri). Joko menjebak Edward dengan mengajaknya mengikuti lomba karya ilmiah remaja tingkat SMA. Untuk mengikuti perlombaan itu Joko mengajak Edward untuk menyamar sebagai waria di taman lawang. Lalu Bella datang ke sekolah Edward sebagai murid baru. Namun tidak ada yang mengetahui bahwa Bella adalah seorang vampir hingga ia jatuh cinta dengan Edward namun tidak bisa menjalin hubungan yang lebih karena vampir tidak boleh berhubungan dengan manusia.
            Novel ini merupakan kisah yang bersambung, oleh karena itu cerita atau akhir dari cerita ini menunjukkan kalau cerita masih agak sedikit menggantung.',
            'jumlah_halaman' => '187',
            'stok_buku' => '5',
            'lokasi_rak' => 'A1',
        ]);
        
    }
}
