<?php
include 'config.php';

if(isset($_POST['submit'])){
    $from = $_GET['id'];
    $to = $_POST['to']; //choose to pay/payment
    $amount = $_POST['amount'];
    
    $query = "SELECT * from viewcustomer where id=$from";
    $data = mysqli_query($conn,$query);
    $sql1 = mysqli_fetch_array($data); //// returns array or output of user from which the amount is to be transferred.

    $query = "SELECT * from viewcustomer where id=$to";
    $data = mysqli_query($conn,$query);
    $sql2 = mysqli_fetch_array($data);


    //constraint to check input of negative value by user
    if(($amount)<0){
        echo '<script type="text/javascript">';
        echo 'alert("Oops! Negative values cannot be transferred")';
        echo '</script>';
    }

    // constraint to check insufficient balance.
    else if(($amount)>$sql1['balance']){
        echo '<script type="text/javascript">';
        echo 'alert("Bad Luck! Insufficient Balance")';
        echo '</script>';
    }

    //constraint to check zero value
    else if($amount==0){
        echo '<script type="text/javascript">';
        echo 'alert("Oops! Zero value cannot be transferred")';
        echo '</script>';
    }

    else{
        // deducting amount from sender's account
        $newbalance = $sql1['balance'] - $amount;
        $query = "UPDATE viewcustomer set balance=$newbalance where id=$from";
        mysqli_query($conn,$query);
        
        // adding amount to reciever account
        $newbalance = $sql2['balance'] + $amount;
        $query = "UPDATE viewcustomer set balance=$newbalance where id=$to";
        mysqli_query($conn,$query);

        $sender = $sql1['name'];
        $reciver = $sql2['name'];
        $query = "INSERT INTO transfermoney(`sender`,`receiver`,`balance`) VALUES ('$sender','$reciver','$amount')";
        $data = mysqli_query($conn,$query);

        if($data){
            echo "<script> alert('Transaction Successful');
            window.location='transferhistory.php';
            </script>";
        }

        $newbalance =0;
        $amount =0;
    }
}
?>

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
     <div class="container py-3">
        <h3 class="text-center text-uppercase pt-4">transaction</h3>
        <?php
        include 'config.php';

        $sid = $_GET['id'];
        $query = "SELECT * FROM viewcustomer where id=$sid";
        $data = mysqli_query($conn,$query);
        if(!$data){
            echo "Error : ".$query ."<br>".mysqli_error($conn);
        }
        $row = mysqli_fetch_assoc($data);
        ?>
        <form method="post" name="tcredit" class="tabletext">
            <div>
                <table class="table table-striped table-hover table-sm table-bordered table-condensed">
                    <thead>
                        <tr>
                            <th class="text-center text-capitalize">Id</th>
                            <th class="text-center text-capitalize">name</th>
                            <th class="text-center text-capitalize">e-mail</th>
                            <th class="text-center text-capitalize">balance</th>
                        </tr>
                    </thead>
                    <tbody>
                            <tr class="text-center">
                            <th class="py-2"><?php echo $row['id']?></th>
                            <td class="py-2 text-uppercase"><?php echo $row['name']?></td>
                            <td class="py-2"><?php echo $row['email']?></td>
                            <td class="py-2"><?php echo $row['balance']?></td>
                            </tr>                        
                    </tbody>                    
                </table>
            </div>

            <label class="text-capitalize py-3">transfer to:</label>
            <select name="to" class="form-control" required>
                <option value="" disabled selected>Choose</option>
                <?php
                include 'config.php';

                $sid = $_GET['id'];
                $query = "SELECT * FROM viewcustomer WHERE id!=$sid";
                $data = mysqli_query($conn,$query);
                if(!$data){
                    echo "Error : ".$query."<br>".mysqli_error($conn);
                }
                while($row = mysqli_fetch_assoc($data)){
                ?>
                    <option class="table" value="<?php echo $row['id'];?>" >
                        <?php echo $row['name'] ;?> (Balance: 
                        <?php echo $row['balance'] ;?> )
                    </option>
                <?php
                }
                ?>
            </select>
            <label class="py-3">Amount:</label>
            <input type="number" class="form-control" name="amount" required>
            <div class="text-center">
                <button class="btn mt-3 text-capitalize" name="submit" type="submit" id="myBtn"style="background-color : #c2c2a3;">transfer</button>
            </div>
        </form>
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