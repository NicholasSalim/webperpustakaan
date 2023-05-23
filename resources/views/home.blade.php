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
       
    </body>
</html>

