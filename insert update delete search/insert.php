

<html>
<head> 
    <title>insert</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

    <div class="col-lg-6 m-auto">
        <form method="post" >
            <div class="card mt-5">
                <div class="card-header bg-dark">
                    <h1 class="text-white text-center"> insert operation</h1>
                </div>
                <lable class="mr-3 ml-5 mb-1 mt-5">Product Name: </lable>
                <input type="text" class="col-11 ml-3 m-auto form-control" pattern="[a-zA-Z]*" title="do not allow numbers" name="pname"required><br>
                <lable class="mr-3 ml-5 mb-1">Price: </lable>
                <input type="text" class="col-11 ml-3 m-auto form-control promote_points_number" title="Price in Kg" pattern="[0-9]*" title="do not allow text" name="price"required><br>
                <lable class="mr-3 ml-5 mb-1">categories: </lable>
                <input type="text" class="col-11 ml-3 m-auto form-control" pattern="[a-zA-Z]*" title="do not allow numbers" name="categories"required><br>
                <lable class="mr-3 ml-5 mb-1">quantity: </lable>
                <input type="text" class="col-11 ml-3 m-auto form-control" pattern="[0-9]*" title="do not allow text" name="quantity"required><br>
                <button class="btn btn-success col-6 m-auto" type="submit" name="insert">Insert</button><br>
                <?php
                include 'conn.php';

                if(isset($_POST['insert']))
                {
                    $pname = $_POST['pname'];
                    $price = $_POST['price'];
                    $categories = $_POST['categories'];
                    $quantity = $_POST['quantity'];
                

                    mysqli_query ($conn,"insert into product(pname,price,categories,quantity) values('$pname','$price','$categories','$quantity')");
                    ?> <lable class="mr-3 ml-5 mb-1 text-center">Product add ScessFully... </lable>
                <?php                    
                }
                ?>
            </div> 

        </form>  
        <div class="row my-4">
                <a href="display.php" class="text-white m-auto"><button class="btn btn-success " type="submit" name="display">  display </button></a><br>
                </div>
    </div>
    






    


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>
