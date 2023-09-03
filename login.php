<?php  // still figuring out stuff with php most of this is just copied, i'll just 
//comment on things that i think i sbould know from just looking at 
    include("connection.php"); // i think this copies what ever is in the .php file e.g connection and just connects it over here
    if(isset($_POST['submit'])){

        $username = $_POST['user'];
        $password = $_POST['password'];
    
        $sql = "select * from login where username = '$username' and password = '$password'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $count = mysqli_num_rows($result); 
        if($count==1){
            header("Location:welcome.php"); 
        }
        else{  //this text is a prompt for when you get the password or usr wrong 
            echo '<script>
                window.location.href = "index.php";
                alert("Login failed. Invalid username or password.!!!")
            </script>';
        }
    }
   

?>