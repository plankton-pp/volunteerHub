check login
<?php 
session_start();
        if(isset($_POST['username'])){
        //connection
          $con = mysqli_connect("localhost","root","","volunteerhub");
            if(!$con) {
              die("Could not connect : " . mysqli_error());
              }
          mysqli_set_charset($con,"utf8");
          mysqli_select_db($con,"volunteer"); 
                //รับค่า user & password
                          $username = $_POST['username'];
                          $password = $_POST['password'];
                //query 
                          $sql="SELECT * FROM register Where username='".$username."' AND password='".$password."' ";
                  
                          $result = mysqli_query($con,$sql);
                
                          if(mysqli_num_rows($result)==1){

                              $row = mysqli_fetch_array($result);

                              $_SESSION["username"] = $username;
                              $_SESSION["status"] = $row["status"];
                              $_SESSION['id'] = $row['id'];
                              $_SESSION['name'] = $row['name'];
                              $_SESSION['email'] = $row['email'];
                              $_SESSION['phone'] = $row['telephone'];
                              $_SESSION['photo'] = $row['photo'];
                              echo "<script type=\"text/javascript\">
                                     sessionStorage.setItem('loggedin','true');
                                  </script>";
                              if($_SESSION["status"]=="admin"){ //ถ้าเป็น admin ให้กระโดดไปหน้า admin_page.php
                                echo "<script>window.location.href = \"../htm/index.php\";</script>";
                              }
                              if ($_SESSION["status"]=="user"){  //ถ้าเป็น member ให้กระโดดไปหน้า user_page.php
                                echo "<script>window.location.href = \"../htm/index.php\";</script>";
                              }
                              if ($_SESSION["status"]=="agency"){  //ถ้าเป็น member ให้กระโดดไปหน้า user_page.php
                                echo "<script>window.location.href = \"../htm/index.php\";</script>";
                              }
                          }else{
                            echo "<script>";
                                echo "alert(\" user หรือ  password ไม่ถูกต้อง\");"; 
                                echo "window.history.back()";
                            echo "</script>";
                          }
        }else{
             Header("Location: login.php"); //user & password incorrect back to login again
        }
?>