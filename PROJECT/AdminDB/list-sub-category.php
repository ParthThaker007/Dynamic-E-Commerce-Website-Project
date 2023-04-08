<?php
include_once 'configure.php';

$sql = "SELECT id,cat_id,subcat_name,sub_cat_des,sub_cat_img FROM sub_cat";
$result = $conn->query($sql);//to execute sql query  it return 3 rows & 4 columns 


$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>


<div class="main">
  <!-- <h2>Customer CURD Operations </h2> -->
  <h1>Dashboard</h1>
  <h2>CUSTOMER</h2>
  <h3><a href="add-subcateegory.php" class="btn btn-primary mt-3">Add New Sub Category</a></h3>
 <table class="table table-bordered table-dark table-striped" id="data">
    <thead>
      <tr>
        <th>Id</th>
        <th>Category Id</th>
        <th>Subcat Name</th>
        <th>Description </th>
        <th>Image</th>
        <th>Edit</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>
      <?php 
        if ($result->num_rows > 0) {
          // output data of each row
          while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>".$row['id']."</td>";
            echo "<td>".$row['cat_id']."</td>";
            echo "<td>".$row['subcat_name']."</td>";
            echo "<td>".$row['sub_cat_des']."</td>";
            echo "<td>"."<img src='".$row['sub_cat_img']."' style='width:100px;height:100px'></td>";
            echo "<td>"."<a href='edit_subcategory.php?id=".$row['id']."'>Edit</a></td>";
            echo "<td>"."<a href='delete-subcat.php?id=".$row['id']."'>Delete</a></td>";
          }
        } else {
          echo "0 results";
        }


       ?>
     
    </tbody>
  </table>
</div>
</body>
</html>