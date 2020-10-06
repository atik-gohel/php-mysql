

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
<!---------------------------            search         --------------------------------->

    <div class="container">
        <h2 class="text-warning mt-5"> Search Data </h2>       
        
            <form action="" method="post" class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Enter Product Name" value="" name="search" >
                <div class="input-group-append">
                <input class="btn btn-outline-secondary" type=submit name="searchbtn" value="search">
            </form>
      
    </div>
   

<?php 
    
    include 'conn.php';
    if(isset($_POST['searchbtn'])){
         
        $search_value = $_POST ['search'];
        
        $sql = "select * from product where pname like '$search_value%'"; 
        
        $query = mysqli_query($conn,$sql);
        if (mysqli_num_rows($query) > 0){
?>
   
        <div class="container">
            <div calss="col-lg-12">
                <h1 class="text-warning text-center mt-4 mb-4"> search value </h1>
                <table class="table table-striped  table-hover table-bordered">
                    <tr class="bg-dark text-white">
                        <th>id</th>
                        <th>pname</th>
                        <th>price</th>
                        <th>categories</th>
                        <th>quantity</th>
                        <th>delete</th> 
                        <th>update</th>
                    </tr>
            
<?php
            
            while ($res=mysqli_fetch_array($query)){      
?>
                    <tr class="text-center">
                        <td> <?php echo $res['id']; ?> </td>
                        <td> <?php echo $res['pname']; ?> </td>
                        <td> <?php echo $res['price']; ?> </td>
                        <td> <?php echo $res['categories']; ?> </td>
                        <td> <?php echo $res['quantity']; ?> </td>
                        <td> <button class="btn btn-danger"> <a href="delete.php?id=<?php echo $res['id']; ?>" class="text-white">Delete</a> </button></td>
                        <td> <button class="btn btn-primary"> <a href="update.php?id=<?php echo $res['id']; ?>" class="text-white">Update</a> </button></td>
                    </tr>
<?php
            } } else{
                echo "No employee Found<br><br>";
              }
?>
                </table>
            </div>
        </div>
        <div class="container">
<div class="row my-4">
        <a href="insert.php" class="text-white">
            <button class="btn btn-success  m-auto" type="submit" name="insert"> insert </button>
        </a>
</div>
<div class="row my-4">
<a href="display.php" class="text-white">
            <button class="btn btn-success  m-auto" type="submit" name="display"> display all </button>
</a>
</div>
<?php
    }
?>
    


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>