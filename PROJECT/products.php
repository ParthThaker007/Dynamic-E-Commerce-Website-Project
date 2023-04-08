<?php
include_once 'AdminDB/configure.php';
$sub_cat_id=$_REQUEST['id'];
$sql = "SELECT pid,sub_cat_id,pname,pdes,pimg,pbrand,pprice,pcolor,psize,prating FROM products WHERE sub_cat_id='$sub_cat_id'";
$result = $conn->query($sql);//to execute sql query  it return 3 rows & 4 columns 
?>
<?php

if (isset($_POST['insert'])) {

  //$cat_image=$_POST['cat_image'];

  /*	$sql = "INSERT INTO customer (name, emailid, mno)
  VALUES ('$name', '$emailid', '$mno')";
  if ($conn->query($sql) === TRUE) {
  
  header("location:index.php");
  echo "<script> alert('record inserted');</script>";	
  } else {
  echo "Error: " . $sql . "<br>" . $conn->error;
  }*/
  $pqty = $_POST['pqty'];
  $sql = "INSERT INTO cart (pqty)
  VALUES ('$pqty')";

  if ($conn->query($sql) === TRUE) {
  
    echo "<meta http-equiv='refresh' content='0;url=product-list.php'>";
      echo "<script> alert('record inserted');</script>";	
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css' />
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css' />
    <link rel="stylesheet" type="text/css" href="../css/login.css">
    <link rel="stylesheet" type="text/css" href="../css/main.css">
    <title>
     
      Puma Online Store
    </title>
    <link rel="icon" href="images/unnamed.jpg" type="image/x-icon">
</head>

<body>
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark fixed-top">
        <div class="container-fluid">

            <img src="../images/unnamed.jpg" id="logo" >

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="box"><a href="index.php"><i class="fa fa-home" style="color: white;font-size: 30px;"></i></a></div>
    <div id="kam" class="btn btn-primary">      
        
        
        <a class="nav-link" href="cart.php" id="jam" ><i class="fa fa-shopping-cart" id="pm"></i> <span id="cart-item" class="badge badge-danger"></span></a>
  </div>
    
    
    <div  id="check">
          <a class="nav-link" href="checkout.php" id="check"><i class="fas fa-money-check-alt mr-2" id="pm"></i></a>
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
      
      
            
            <div style="margin-left: 350px;">
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
    <br><br><br><br>
    <div>
      <table>
        <tr>
          <td id="ad1">
            <img src="../images/image11.jpg" >
          </td>
          <td>
      <div id="mk" class="carousel slide " data-bs-ride="carousel" >

          <!-- Indicators/dots -->
          <div class="carousel-indicators">
              <button type="button" data-bs-target="#mk" data-bs-slide-to="0" class="active"></button>
              <button type="button" data-bs-target="#mk" data-bs-slide-to="1"></button>
              <button type="button" data-bs-target="#mk" data-bs-slide-to="2"></button>
              <button type="button" data-bs-target="#mk" data-bs-slide-to="3"></button>
              <button type="button" data-bs-target="#mk" data-bs-slide-to="4"></button>
              <button type="button" data-bs-target="#mk" data-bs-slide-to="5"></button>
              <button type="button" data-bs-target="#mk" data-bs-slide-to="6"></button>
              <button type="button" data-bs-target="#mk" data-bs-slide-to="7"></button>

          </div>

          <!-- The slideshow/carousel -->
          <div class="carousel-inner">
              <div class="carousel-item active">
                  <img src="../images/image9.webp" alt="Los Angeles" class="d-block" style="height:450px;width: 100%;">
              </div>
              <div class="carousel-item">
                  <img src="../images/image6.webp" alt="Chicago" class="d-block" style="height: 450px;width: 100%;">
              </div>
              <div class="carousel-item">
                  <img src="../images/image8.webp" alt="New York" class="d-block" style="height: 450px;width: 100%;">
              </div>
              <div class="carousel-item">
                  <img src="../images/image7.webp" alt="New York" class="d-block" style="height: 450px;width: 100%;">
              </div>
              <div class="carousel-item">
                <img src="../images/image1.webp" alt="New York" class="d-block" style="height: 450px ;width: 100%;">
            </div>
            <div class="carousel-item">
                <img src="../images/image3.webp" alt="New York" class="d-block" style="height: 450px;width: 100%;">
            </div>
            <div class="carousel-item">
                <img src="../images/image4.webp" alt="New York" class="d-block" style="height: 450px;width: 100%;">
            </div>
          
              
          </div>

          <!-- Left and right controls/icons -->
          <button class="carousel-control-prev" type="button" data-bs-target="#mk" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#mk" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
          </button>
      </div>
      </td>
      <td id="ad2">
        <img src="../images/image12.jpg">
      </td>
      </tr>
      </table>
    </div>
    <br>
    <br>
    <br>
    <div>
      <img src="images/adm2.png" id="adm2" class="image">
    </div>
    <br>
    <div>
      <img src="images/adm3.png" id="adm2" class="image">
    </div>
            <?php
        include_once 'AdminDB/configure.php';
        $sub_cat_id=$_REQUEST['id'];
        $sql = "SELECT pid,sub_cat_id,pname,pdes,pimg,pbrand,pprice,pcolor,psize,prating FROM products WHERE sub_cat_id='$sub_cat_id'";
        $result = $conn->query($sql);//to execute sql query  it return 3 rows & 4 columns 
        ?>
 
     
       <div id="joko">
       <div class="row">  
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
                          <div class="card-footer p-1">
                                    <form action="" class="form-submit" method="post">
                                      <div class="row p-2">
                                        <div class="col-md-6 py-1 pl-4">
                                          <b>Quantity : </b>
                                        </div>
                                        <div class="col-md-6">
                                          <input type="number" class="form-control"  name="pqty"  value="<?= $row['pqty'] ?>">
                                        </div>
                                      </div>
                                      <input type="hidden" class="pid" value="<?= $row['pid'] ?>">
                                      <input type="hidden" class="pname" value="<?= $row['pname'] ?>">
                                      <input type="hidden" class="pprice" value="<?= $row['pprice'] ?>">
                                      <input type="hidden" class="pimage" value="<?= $row['pimg'] ?>">
                                      <input type="hidden" class="pcode" value="<?= $row['pcolor'] ?>">
                                      <button class="btn btn-info btn-block addItemBtn"><i class="fas fa-cart-plus"></i>&nbsp;&nbsp;Add to cart</button>
                                    </form>
                           </div>
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
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js'></script>

  <script type="text/javascript">
  $(document).ready(function() {

    // Send product details in the server
    $(".addItemBtn").click(function(e) {
      e.preventDefault();
      var $form = $(this).closest(".form-submit");
      var pid = $form.find(".pid").val();
      var pname = $form.find(".pname").val();
      var pprice = $form.find(".pprice").val();
      var pimage = $form.find(".pimage").val();
      var pcode = $form.find(".pcode").val();

      var pqty = $form.find(".pqty").val();

      $.ajax({
        url: 'action.php',
        method: 'post',
        data: {
          pid: pid,
          pname: pname,
          pprice: pprice,
          pqty: pqty,
          pimage: pimage,
          pcode: pcode
        },
        success: function(response) {
          $("#message").html(response);
          window.scrollTo(0, 0);
          load_cart_item_number();
        }
      });
    });

    // Load total no.of items added in the cart and display in the navbar
    load_cart_item_number();

    function load_cart_item_number() {
      $.ajax({
        url: 'action.php',
        method: 'get',
        data: {
          cartItem: "cart_item"
        },
        success: function(response) {
          $("#cart-item").html(response);
        }
      });
    }
  });
  </script>

    
   
    <div id="feet">
      <h1 >PUMA – Clothing, Shoes &amp; Accessories</h1>
      <p>Welcome to PUMA – the Fastest Sports Brand in the World. Shop for Men, Women and Kids Clothing, Shoes & Accessories. Get the Edge in Style & Comfort Now.</p> 
      </div>
      <div>
          <img src="../images/foot.png" alt="Data not found"  id="footi">
      </div>

</body>
</html>