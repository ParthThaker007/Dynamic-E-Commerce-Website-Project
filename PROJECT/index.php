<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
  
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <title>
     
      Puma Online Store
    </title>
    <link rel="icon" href="images/unnamed.jpg" type="image/x-icon">
   
</head>

<body>
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark fixed-top">
        <div class="container-fluid">

            <img src="images/unnamed.jpg" id="logo" >

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
                 <span class="navbar-toggler-icon"></span>
             </button>
    <div  id="check">
          <a class="nav-link" href="checkout.php" id="check"><i class="fas fa-money-check-alt mr-2" id="pm"></i></a>
    </div>
    <div id="check">      
        
        
          <a class="nav-link" href="cart.php" id="check"><i class="fa fa-shopping-cart"></i> <span id="cart-item" class="badge badge-danger"></span></a>
    </div>
    
        


<?php
include_once 'AdminDB/configure.php';

$sql = "SELECT id,cat_name,cat_des,cat_img FROM category";
$result = $conn->query($sql);//to execute sql query  it return 3 rows & 4 columns 


?>
    <div class="dropdown" id="dropdown1">
        <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown">
          Categories
        </button>
        <ul class="dropdown-menu">
            <?php
            
                if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                        echo" <li><a class='dropdown-item' href='loadsubcat.php?id="
                        .$row['id']."'>".$row['cat_name']."</a></li>";
             
            ?>
      
          
        
        
        <?php
                  
                
                }
            } else {
                echo "0 results";
            }
        ?>
        </ul>
        
      </div>
      
           

            <div style="margin-left: 500px;">
                <form class="d-flex">
                    <input class="form-control me-2" type="text" placeholder="Search">
                    <button class="btn btn-primary jam" type="button" style="width: 120px;">Search</button>
                    <button onclick="document.getElementById('id01').style.display='block'" style="width: auto;margin-left: 5px; "class="btn btn-success jam">Login/Signup</button>
                   <div id="id01" class="modal">
                        <form class="modal-content animate" action="/action_page.php" method="POST">
                        <!-- Create an image container -->
                        <div class="imgcontainer">

                        <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                        <i class="fa fa-user" style="font-size:68px;color: white;"></i>
                        </div>
                        <!-- Create a form container -->
                        <div class="container1" style="margin-left: 440px;">
                        <!-- Username -->
                        <label for="uname" style="color: white;"><b>Username</b></label>
                        <input type="text" placeholder="Enter Username" name="uname" required>
                        <!-- Password -->
                        <label for="psw" style="color: white;"><b>Password</b></label>
                        <input type="password" placeholder="Enter Password" name="psw" required>
                        <!-- Submit Button -->
                        <button type="submit">Login</button>
                        <label>
                        <input type="checkbox" checked="checked" name="remember">Remember Me
                        </label>
                        <div>
                            <a href="Signup.html" style="color: white;">New User</a>
                        </div>
                        </div>
                        <div class="container1" style="background-color: #f1f1f1;margin-left: 440px;">
                        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
                        <span class="psw">Forgot <a href="#">password?</a></span>
                        </div>
                       



                </form>
            </div>
            
    </nav>
    <br>
    <br>
    <br>
    <div id="img1">
        <img src="../images/offer.png"  class="p-2 rounded" alt="Couldn't Download image" width="100%" height="350px" >
    
    </div>
    
    <div>
        <img src="../images/offer2.png"  class="p-2  rounded " alt="Couldn't Download image"  width="100%" height="350px">
    </div>

    <div>
        <img src="../images/ad1.png"  class="p-2  rounded " alt="Couldn't Download image"  width="100%" height="350px">
    </div>
    <div>
        <video src="https://videos.puma.net/videos/fn/%7Eregional%7EIND%7Eothers%7ENitro+Video%7E22SS_Ecom_RT_RUN-PUMA_Velocity-Nitro-2_Q1_1_1440x500_15s.mp4" data-fordevice="desktop" poster="https://images.puma.com/image/upload/q_auto,f_auto,w_543/regional/%7Eregional%7EIND%7Eothers%7EKOP%7EMay+2022%7ENitro%7E22SS_Ecom_RT_RUN-PUMA_Velocity-Nitro-2_Q1_1_1440x500_15s.jpg/fmt/jpg/fmt/png" data-type="file" class="img-overscale kop-htmlvideo " preload="metadata" playsinline="" autoplay="" loop="" muted="" data-started="true" id="vid">
            Sorry, but your browser doesn't suppport embedded video
        </video> 
    </div>
    <div style="text-align: center;height: 150px;">
        <section class="showcase">
            <video src="https://videos.puma.net/videos/fn/%7Eregional%7EIND%7Eothers%7ENitro+Video%7E22SS_Ecom_RT_RUN-PUMA_Velocity-Nitro-2_Q1_1_1440x500_15s.mp4" autoplay loop muted></video>
            <h1 class="title">New Arivals</h1>
        </section>
    </div>

    <div id="joko">
       <div class="row">  
         <?php
                include_once 'AdminDB/configure.php';

                $sql = "SELECT pid,pname,pprice,pimg,pbrand,pcolor FROM products Where pprice>=45";
                $result = $conn->query($sql);//to execute sql query  it return 3 rows & 4 columns 

         ?>
        <?php 
        if ($result->num_rows > 0) {
          // output data of each row
        
          while($row = $result->fetch_assoc()) {
            ?>
                   <div class="col-4 mt-3">
                    <div class="card" style="width:400px" id="moto">
                        <img class="card-img-top" src="AdminDB/<?php echo $row['pimg'] ?>" alt="Card image" style="width:100%">
                        <div class="card-body">
                          <h4 class="card-title"><?php echo $row['pname']; ?></h4>
                          <p class="card-text">$<?php echo $row['pprice']; ?></p>
                          <p><?php echo $row['pbrand']; ?></p>
                          <p><?php echo $row['pcolor']; ?></p>
                          Quantity:<input type="number"><br><br>
                          
                          <a href="#" class="btn btn-primary add-to-cart" ><i class="fa fa-shopping-cart"></i>ADD TO CART</a>
                        </div>
                      </div>
                    </div>
                    <?php 
                   }
              } else {
                echo "0 results";
              }

             ?>
             
      </table>
   
   </div>
  
  
    <div id="feet">
      <h1 >PUMA – Clothing, Shoes &amp; Accessories</h1>
      <p>Welcome to PUMA – the Fastest Sports Brand in the World. Shop for Men, Women and Kids Clothing, Shoes & Accessories. Get the Edge in Style & Comfort Now.</p> 
      </div>
    <div>
        <img src="../images/foot.png" alt="Data not found" id="footi">
    </div>
   
</body>

</html>