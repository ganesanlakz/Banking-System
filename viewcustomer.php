<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet" />
    <link href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" rel="stylesheet" />
    <link href="css/style.css"   rel="stylesheet"/> 
    <title>View customer</title>
    <
</head>    
<body>
    <?php
    include "config.php";
    $query = "SELECT * FROM users" ;
    $result = mysqli_query($conn, $query);
    ?>


  <!-- logo -->
    <nav class="navbar">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">
            <img src="img/1111.png" alt="" width="90" height="90" class="d-inline-block align-text-top ">URBAN<span>BANK</span>
        </a>
          
        </div>
      </nav>

<!-- section -->
      <div class="container divStyle">
        <h2 style="color:black;
    font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;    font-style: oblique;">Select a customer you wish to transfer funds from.</h2>
        <br>

            <div class="rows">
                <div class="col">
                    <div class="table-responsive-sm">
                    <table class="table roundedCorners tabletext table-sm table-condensed table-bordered table-dark">
                        <thead>
                            <tr>
                            <th scope="col">id</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email Id</th>
                            <th scope="col">Current Balance</th>
                            <th scope="col"></th>

                            </tr>
                        </thead>
                        <tbody>
                <?php
                    while($rows=mysqli_fetch_array($result)){
                ?>
                    <tr>
                        <td><?php echo $rows['id'] ?></td>
                        <td><?php echo $rows['name']?></td>
                        <td><?php echo $rows['email']?></td>
                        <td><?php echo $rows['balance']?></td>
                        <td><a href="trans.php?id= <?php echo $rows['id'] ;?>"> <button type="button" class="btn btn-info">Transfer</button></a></td>
                    </tr>
                <?php
                    }
                ?>

                        </tbody>
                    </table>
                    </div>
                </div>
            </div>
            </div>
            <!-- footer -->

            
      <footer>
        <div class="last">INTERSHIP AT 
          <span>THE SPARK FOUNDATION</span>
        </div>
      </footer> 

</div>

      















    
</body>
</html>