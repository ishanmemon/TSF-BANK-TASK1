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
        <a href="" class="navbar-brand text-uppercase fst-italic">tsf bank</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarLinks">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse nav justify-content-end" id="navbarLinks">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="index.php" class="nav-link text-capitalize navhover">home</a>
                </li>
                <li class="nav-item">
                    <a href="viewallcustomer.php" class="nav-link text-capitalize navhover">view all customer</a>
                </li>
                <li class="nav-item active">
                    <a href="#" class="nav-link active text-capitalize navhover">transfer money</a>
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
     <div class="container py-2">
        <h3 class="text-center text-uppercase pt-4">transfer money</h3>
        <div class="row py-2 text-center">
            <div class="col">
                <table class="table table-striped table-hover table-sm table-bordered table-condensed">
                    <thead>
                        <tr>
                            <th class="text-center text-capitalize">Id</th>
                            <th class="text-center text-capitalize">name</th>
                            <th class="text-center text-capitalize">e-mail</th>
                            <th class="text-center text-capitalize">balance</th>
                            <th class="text-center text-capitalize">operation</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        include 'config.php';

                        $query = "SELECT * from viewcustomer";
                        
                        $data = mysqli_query($conn,$query);

                        while ($row = mysqli_fetch_assoc($data)){
                        ?>
                            <tr>
                            <th class="py-2"><?php echo $row['id']?></th>
                            <td class="py-2 text-uppercase"><?php echo $row['name']?></td>
                            <td class="py-2"><?php echo $row['email']?></td>
                            <td class="py-2"><?php echo $row['balance']?></td>
                            <td><a href="selectuserdetailtotransfer.php?id= <?php echo $row['id']; ?>"> <button type="button" class="btn" style="background-color : #c2c2a3;">Transfer</button></a></td>
                            </tr>
                        <?php
                        }
                        ?>                        
                    </tbody>                    
                </table>
            </div>
        </div>
    </div>
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