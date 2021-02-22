<!DOCTYPE html>
<?php session_start(); 
  include 'navbar2.php';
?>
<html>
<head>
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> 

           <!-------------------------------------------------------------------------------------------------------------------------------------->
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
          <!-------------------------------------------------------------------------------------------------------------------------------------->
          <link href="https://fonts.googleapis.com/css2?family=Kanit&display=swap" rel="stylesheet">
          <!-------------------------------------------------------------------------------------------------------------------------------------->
          <!-------------------------------------------------------------------------------------------------------------------------------------->
          <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" crossorigin="anonymous">
          <!-------------------------------------------------------------------------------------------------------------------------------------->
          <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" crossorigin="anonymous">
          <!-------------------------------------------------------------------------------------------------------------------------------------->
          <link rel="stylesheet" href="https://unpkg.com/bootstrap-table@1.18.2/dist/bootstrap-table.min.css">
          <!-------------------------------------------------------------------------------------------------------------------------------------->
          <!--Script-->
          <!-------------------------------------------------------------------------------------------------------------------------------------->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <!-------------------------------------------------------------------------------------------------------------------------------------->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <!-------------------------------------------------------------------------------------------------------------------------------------->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <!-------------------------------------------------------------------------------------------------------------------------------------->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" crossorigin="anonymous"></script>
    <!-------------------------------------------------------------------------------------------------------------------------------------->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" crossorigin="anonymous"></script>
    <!-------------------------------------------------------------------------------------------------------------------------------------->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" crossorigin="anonymous"></script>
    <!-------------------------------------------------------------------------------------------------------------------------------------->
    <script src="https://unpkg.com/bootstrap-table@1.18.2/dist/bootstrap-table.min.js"></script>
    <!-------------------------------------------------------------------------------------------------------------------------------------->
    <script src="https://unpkg.com/bootstrap-table@1.18.2/dist/extensions/key-events/bootstrap-table-key-events.min.js"></script>
     <!-------------------------------------------------------------------------------------------------------------------------------------->
     <script type="text/javascript" src="../js/script-main.js"></script>
</head>
<body>
  <style type="text/css">
    .user_row{
      padding-right: 30px; padding-bottom: 10px;
    }
    .user_col{
      padding-bottom: 10px;
    }
  </style>
  <?php 

  $conn=mysqli_connect("localhost", "root", "","volunteerhub");
  $conn->query("SET NAMES UTF8"); 

  $sql = "SELECT * FROM volunteer WHERE id = '".$_SESSION['id']."' ";
  $query= mysqli_query($conn,$sql);
  
  $result = mysqli_fetch_array($query);

  if(!$result){
    echo "Not found ID=".$_SESSION['id'];
  }else
  {
    //echo "error check id=".$result['ID'];
  
  }

  $sql_user = "SELECT * FROM register WHERE id = '".$_SESSION['id']."' ";
  $query_user= mysqli_query($conn,$sql_user);
  
  $result_user = mysqli_fetch_array($query_user);

  if(!$result_user){
    echo "Not found ID=".$_SESSION['id'];
  }else
  {
    //echo "error check id=".$result['ID'];
  
  }
  ?>
           <div class="container">
                 <!--User Information-->
                  <h2><b>ข้อมูลส่วนตัว</b></h2><br>
                  <table>
                    <tr>
                      <td class="user_row">
                         <!--Username-->
                          <label for="userid">ID</label>
                      </td>
                      <td class="user_col">
                        <input type="text" name="userid" size="20" value="<?php echo $result_user['id'];?>" class='form-control' style="width: 200px;"readonly/>
                      </td>
                    </tr>
                    <tr>
                      <td class="user_row">
                         <!--Username-->
                          <label for="userid">ชื่อ</label>
                      </td>
                      <td class="user_col">
                        <input type="text" name="userid" size="20" value="<?php echo $result_user['username'];?>" class='form-control' style="width: 200px;"readonly/>
                      </td>
                    </tr>
                    <tr>
                      <td class="user_row">
                         <!--Username-->
                          <label for="userid">อีเมล</label>
                      </td>
                      <td class="user_col">
                        <input type="text" name="userid" size="20" value="<?php echo $result_user['email'];?>" class='form-control' style="width: 200px;"readonly/>
                      </td>
                    </tr>
                    <tr>
                      <td class="user_row">
                         <!--Username-->
                          <label for="userid">ที่อยู่</label>
                      </td>
                      <td class="user_col">
                        <input type="text" name="userid" size="20" value="<?php echo $result_user['address'];?>" class='form-control' style="width: 200px; height: 100px;"readonly/>
                      </td>
                    </tr>
                  </table>
                  <hr/>  
                <div align="center">
                    <table
                      id="table"
                      data-toggle="table"
                      data-url="json/data1.json">
                      <thead>
                        <tr>
                          <th data-field="id">ID</th>
                          <th data-field="name">Item Name</th>
                          <th data-field="price">Item Price</th>
                        </tr>
                      </thead>
                    </table> 
</body>
</html>