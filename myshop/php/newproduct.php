<?php
include_once("dbconnect.php");
$idname = $_POST["idname"];
$prname = $_POST["prname"];
$prtype = $_POST["prtype"];
$prprice = $_POST["prprice"];
$prqty = $_POST["prqty"];


if (empty($idname) || empty($prname) || empty($prtype) || empty($prprice) || empty($prqty)) {
    echo "<script>alert('Please fill in all required information')</script>";
    echo "<script>window.location.replace('../html/newproduct.html')</script>";
} else {
    $sqlregister = "INSERT INTO tbl_product(idname,prname,prtype,prprice,prqty) VALUES ('$idname','$prname','$prtype','$prprice','$prqty')";

    try {

        $conn->exec($sqlregister);

        echo "<script> alert ('Registration success')</script>";
        echo "<script> window.location.replace('../html/login.html')</script>";
    } catch (PDOException $e) {
        echo "<script> alert ('Registration error')</script>";
        echo "<script> window.location.replace('../html/newproduct.html')</script>";
    }
}
 
?>

<!DOCTYPE html>
<html>

<head>
    <title>New Product</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>

    <div class="header">
        <h1> ~ Perfume shop ~ </h1>
        <p><b>Welcome User</b></p>
    </div>

    <div class="topnavbar">
        <center>
        <p><b>Please enter the details..TQ</b></p>
        </center>
    </div>

    <div class="main">
        <div class="container">
            <form name="registerForm" action="../php/newproduct.php" onsubmit=" " method="POST">
                <div class="row">
                    <div class="col-25">
                        <label for="productid">Product ID</label>
                    </div>
                    <div class="col-75">
                        <input type="text" id="prid" name="idname" placeholder="Enter product id">
                    </div>
                </div>
                <br></br>
                <div class="row">
                    <div class="col-25">
                        <label for="productname">Product Name</label>
                    </div>
                    <div class="col-75">
                        <input type="text" id="idprname" name="prname" placeholder="Enter product name">
                    </div>
                </div>
                <br></br>
                <div class="row">
                    <div class="col-25">
                        <label for="producttype">Product Type</label>
                    </div>
                    <div class="col-75">
                        <input type="text" id="idprtype" name="prtype" placeholder="Enter product type">
                    </div>
                </div>
                <br></br>
                <div class="row">
                    <div class="col-25">
                        <label for="productprice">Price </label>
                    </div>
                    <div class="col-75">
                        <input type="text" id="idprprice" name="prprice" placeholder="Enter product price">
                    </div>
                </div>
                <br></br>
                <div class="row">
                    <div class="col-25">
                        <label for="productquantity">Quantity</label>
                    </div>
                    <div class="col-75">
                        <input type="text" id="idprqty" name="prqty" placeholder="Enter the quantity of product">
                    </div>
                </div>
                <br></br>
                <div class="row">
                    <input type="submit" value="Submit">
                </div>

            </form>
        </div>
    </div>

    <a href="newproduct.php?yearform=<?php echo $yearform ?>&subject=<?php echo $subject ?>&pageno=<?php echo $pageno ?>" class="float">
        <i class="fa fa-plus my-float"></i>
    </a>

    <div class="bottomnavbar">
        <a href="#home">Home</a>
        <a href="#About">About</a>
        <a href=" https://wa.link/2vm15p ">Contact</a>
    </div>
</body>


</html>