<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Perpus</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="/img/amirhamzahlogo.png" />
    
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
       
        
       
    </head>
    <body id="page-top">
        <!-- Navigation-->
        @include('layouts.navbar')
        
        <!-- Masthead-->
        <header class="masthead bg-primary text-white text-center" style="background-image: url('/img/perpus.jpg'); background-repeat: no-repeat; background-attachment: fixed; background-size: cover;">
            <div class="container d-flex align-items-center flex-column">
            <div class="row gx-5 align-items-center">
                    <div class="col-lg-6">
                        <!-- Mashead text and app badges-->
                        <div class="mb-5 mb-lg-0 text-center text-lg-start">
                            <!-- Masthead Heading-->
                            <h1 class="masthead-heading text-uppercase mb-0">Perpustakaan YPI Amir Hamzah</h1><br>
                            <h3>Melayani peminjaman dan pengembalian buku</h3><br>
                            <a href="/login" class="btn btn-primary">Log In</a>
                            
                        </div>
                    </div>
                    
                </div>
                
               
              
        </header>
        @include('show.showbook')
        
        <section class="page-section portfolio" style="background-color:#F7F7F7" id="help">
            <div class="container">
                 <!-- Portfolio Section Heading-->
                 <h5 class="page-section-heading text-center text-uppercase text-secondary mb-0">Bantuan</h5>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>

                <div class="row mt-5">
                        <div class="dropdown" style="display: flex;justify-content: center; align-items: center;">
                        <button  class="btn btn-outline-secondary dropdown-toggle" type="button" id="dropdownMenu2" style="width:500px; height:50px;" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Bagaimana cara membuat akun?
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenu2"  >
                            <p style="width:700px; margin-left: 10px;">Klik tombol 'Sign Up' pada navbar bagian pojok kanan atas, setelah itu anda akan ditujukan pada halaman register.</p>
                            <p style="width:700px; margin-left: 10px;">Dalam halaman tersebut, isilah informasi pribadi anda sesuai dengan format yang telah ditentukan.</p>
                        </div>
                        </div>

                        <div class="dropdown mt-1" style="display: flex;justify-content: center; align-items: center;">
                        <button  class="btn btn-outline-secondary dropdown-toggle" type="button" id="dropdownMenu2" style="width:500px;height:50px;" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Cara meminjam buku?
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenu2"  >
                            <p style="width:700px; margin-left: 10px;">Pada dasboard siswa terdapat sidebar pada ujung kiri. Klik tombol 'Pinjam Buku' dan anda akan ditautkan pada halaman peminjaman buku. Anda akan disajikan dengan list buku lalu pilihlah buku yang ingin dipinjam. Selanjutnya klik tombol 'Submit' untuk meminjam buku. </p>
                        </div>
                        </div>

                        <div class="dropdown mt-1" style="display: flex;justify-content: center; align-items: center;">
                        <button  class="btn btn-outline-secondary dropdown-toggle" type="button" id="dropdownMenu2" style="width:500px;height:50px;" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Peraturan peminjaman buku
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenu2"  >
                            <p style="width:700px; margin-left: 10px;">Anda hanya dapat meminjam maksimal 3 buku dan setiap buku harus dikembalikan maksimal seminggu setelah tanggal peminjaman. Jika ingin mengembalikan buku, informasikan kepada petugas agar status buku akan dikembalikan.</p>
                            <p style="width:700px; margin-left: 10px;">Peringatan : Jika ada keterlambatan pengembalian buku, kerusakan atau kehilangan maka akan didenda.</p>
                        </div>
                        </div>

                        <div class="dropdown mt-1" style="display: flex;justify-content: center; align-items: center;">
                        <button  class="btn btn-outline-secondary dropdown-toggle" type="button" id="dropdownMenu2" style="width:500px;height:50px;" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Cara mengubah profil
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenu2"  >
                            <p style="width:700px; margin-left: 10px;">Pada halaman dasboard terdapat foto serta nama anda di navbar pojok kanan paling atas. Lalu klik tombol tersebut untuk melihat menu dropdown. </p>
                            <p style="width:700px; margin-left: 10px;">Klik bagian profil untuk ditautkan pada halaman profil. Lalu klik 'Edit Profil' untuk mengubah profil anda. Setelah itu klik 'Simpan' untuk menyimpan profil baru anda.</p>
                        </div>
                        </div>

                        <div class="dropdown mt-1" style="display: flex;justify-content: center; align-items: center;">
                        <button  class="btn btn-outline-secondary dropdown-toggle" type="button" id="dropdownMenu2" style="width:500px;height:50px;" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Keluar dari aplikasi
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenu2"  >
                        <p style="width:700px; margin-left: 10px;">Pada halaman dasboard terdapat foto serta nama anda di navbar pojok kanan paling atas. Lalu klik tombol tersebut untuk melihat menu dropdown. </p>
                        <p style="width:700px; margin-left: 10px;">Klik tombol 'Keluar' untuk keluar dari halaman. Website akan memberi peringatan sebelum keluar. Klik 'Batal' untuk batal dan klik 'Keluar' untuk keluar.</p>
                        </div>
                        </div>

                        
                </div>

        </section>
        
        <!-- Footer-->
        <footer class="footer text-center">
            <div class="container">
                <div class="row">
                    <!-- Footer Location-->
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h4 class="text-uppercase mb-4">YPI Amir Hamzah</h4>
                        <p class="lead mb-0">
                            

                    Jl. Meranti No.1 Medan Petisah, Sumatera Utara, INA. 20111


                            <br />
                            
                        </p>
                    </div>
                    <!-- Footer Social Icons-->
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h4 class="text-uppercase mb-4">Contact us</h4>
                        <p class="lead mb-0">
                        Phone : (061) 4528167
                        </p>
                        <p class="lead mb-0">
                        Email : ypi@amirhamzah.sch.id
                        </p>
                        
                    </div>
                    <!-- Footer About Text-->
                    <div class="col-lg-4">
                        <h4 class="text-uppercase mb-4">Follow us</h4>
                        <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-linkedin-in"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-dribbble"></i></a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Copyright Section-->
        <div class="copyright py-4 text-center text-white">
            <div class="container"><small>Copyright &copy; YPI Amir Hamzah 2023</small></div>
        </div>
    
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>

