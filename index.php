<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TSF Task 1</title>
    <!--Bootstrap css-->
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <!--Font Awesome (For Icons)-->
    <script src="./js/all.js"></script>
    <!--Google Fonts-->
    <link href="https://fonts.googleapis.com/css2?family=Arvo:ital,wght@0,400;1,700&display=swap" rel="stylesheet">
    <!--Main css-->
    <link rel="stylesheet" href="./css/main.css">
</head>
<body>
    <!--navbar-->
    <nav class="navbar py-3 navbar-dark navbar-expand-sm bg-dark">
        <div class="container">
        <a href="#" class="navbar-brand text-uppercase fst-italic">tsf bank</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarLinks">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse nav justify-content-end" id="navbarLinks">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a href="#" class="nav-link active text-capitalize navhover">home</a>
                </li>
                <li class="nav-item">
                    <a href="viewallcustomer.php" class="nav-link text-capitalize navhover">view all customer</a>
                </li>
                <li class="nav-item">
                    <a href="transfermoney.php" class="nav-link text-capitalize navhover">transfer money</a>
                </li>
                <li class="nav-item">
                    <a href="transferhistory.php" class="nav-link text-capitalize navhover">transfer history</a>
                </li>
            </ul>
        </div>
        </div>
    </nav>
    <!--end of navbar-->

    

     <!--main section-->
     <section id="team" class="bg-light py-5">
        <!--bank name-->
        <div class="container py-2">
           <!--Carousel-->
           <div class="row">
               <div class="col-md-8 mx-auto text-center">
                   <h3 class="text-uppercase hhover">welcome to tsf bank</h3>
               </div>
           </div>
           <div class="row">
               <div class="col-md-8 mx-auto text-center">
                   <div id="example" class="carousel slide" data-bs-ride="carousel">
                       <!-- indicators-->
                       <ol class="carousel-indicators">
                           <li data-bs-target="#example" data-bs-slide-to="0" class="active"></li>
                           <!--<li data-bs-target="#example" data-bs-slide-to="1"></li>-->
                           <li data-bs-target="#example" data-bs-slide-to="1"></li>
                       </ol>
                       <!--images-->
                       <div class="carousel-inner">
                           <div class="carousel-item active">
                               <img src="img/bank3.jpg" alt="first project" class="d-block w-100">
                           </div>
                           <!--<div class="carousel-item">
                               <img src="img/bank1.jpg" alt="second project" class="d-block w-100">
                           </div>-->
                           <div class="carousel-item">
                               <img src="img/bank2.jpg" alt="third project" class="d-block w-100">
                           </div>
                       </div>
                       <!--end of images-->

                       <!--control-->
                       <a href="#example" class="carousel-control-prev" role="button" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                       </a>
                        <a href="#example" class="carousel-control-next" role="button" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        </a>
                       <!--end of control-->
                   </div>
               </div>
           </div>
           <!--end of carousel -->
        </div>
        <!--grid-->
        <div class="container py-2">
           <div class="row">
               <!-- view customer-->
               <div class="col-md-6 col-lg-4 my-3">
                   <div class="card">
                       <img src="img/view customer.jpg" alt="view customer" class="card-img-top img-fluid">
                       
                       <div class="card-body text-center">
                           <h5 class="card-title text-capitalize fw-bold fst-italic">view all customer</h5>
                           <a href="viewallcustomer.php" class="btn btn-outline-warning text-uppercase buttoncircle">></a>
                       </div>
                   </div>
               </div>
               <!--end of view customer-->

               <!-- transfer money-->
               <div class="col-md-6 col-lg-4 my-3">
                <div class="card">
                    <img src="img/transfer.png" alt="transfer money" class="card-img-top">
                    <div class="card-body text-center">
                        <h5 class="card-title text-capitalize fw-bold fst-italic">transfer money</h5>
                        <a href="transfermoney.php" class="btn btn-outline-warning text-uppercase buttoncircle">></a>
                    </div>
                </div>
            </div>
            <!--end of transfer money-->

            <!-- transfer histroy-->
            <div class="col-md-6 col-lg-4 my-3 mx-auto">
                <div class="card">
                    <img src="img/payment history.jpg" alt="transfer history" class="card-img-top img-fluid">
                    
                    <div class="card-body text-center">
                        <h5 class="card-title text-capitalize fw-bold fst-italic">transfer history</h5>
                        <a href="transferhistory.php" class="btn btn-outline-warning text-uppercase buttoncircle">></a>
                    </div>
                </div>
            </div>
            <!--end of transfer histroy-->
            </div>
        </div>
    </section>
    <!--end of main section-->

    <!--footer section-->
    <?php 
    include 'footer.php';
    ?>
    <!--end of footer section-->
    <!--JQuery-->
    <script src="./js/jquery-3.5.1.min.js"></script>
    <!--Bootstrap js-->
    <script src="./js/bootstrap.bundle.min.js"></script>
</body>
</html>