<html>
<head> 
    <title>display</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

   
    <div class="container">
            <div class="row text-center">
                <div class="col-12 mt-5 ">
                <h1 class="text-warning " > display table data </h1>
                </div>
            
                <div class="col-12">
                    <a href="display.php" class="text-white "><button class="btn btn-success mt-3" type="submit" name="display"><i class="fa fa-refresh" aria-hidden="true"></i></button></a>
                </div>
            </div>

            <table class="table table-striped  table-hover table-bordered">
            <tr class="bg-dark text-white text-center">
                <th>id</th>
                <th>pname</th>
                <th>price</th>
                <th>categories</th>
                <th>quantity</th>
                <th>delete</th> 
                <th>update</th>
            </tr>  
        <?php

        include 'conn.php';
            $q = "select * from product"; 
            $query = mysqli_query($conn,$q);
            while($res = mysqli_fetch_array($query)){
        ?>
            <tr class="text-center">
                <td> <?php echo $res['id']; ?> </td>
                <td> <?php echo $res['pname']; ?> </td>
                <td> <?php echo $res['price']; ?> </td>
                <td> <?php echo $res['categories']; ?> </td>
                <td> <?php echo $res['quantity']; ?> </td>
                <td> <a href="delete.php?id=<?php echo $res['id']; ?>"  onclick="return confirm('Delete this?');" class="text-white"> <button class="btn btn-danger">Delete </button></a></td>
                <td> <a href="update.php?id=<?php echo $res['id']; ?>" class="text-white"><button class="btn btn-primary"> Update</button></a></td>
          
            </tr>
        <?php
            }
        ?>
            </table>
          
            <div class="row my-4">
            <a href="insert.php" class="text-white m-auto"><button class="btn btn-success " type="submit" name="insert">  insert</button></a><br>
            </div> 
       
    </div>




<!---------------------------            search         --------------------------------->
<div class="container">
<div class="row">
    <a href="search.php" class="text-white m-auto"> <button class="btn btn-success " type="submit" name="insert"> search </button></a><br>
</div>



<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>



</body>

</html>