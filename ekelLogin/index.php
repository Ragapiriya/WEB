
<?php
/*
include "config.php";
session_start();
if(isset($_POST['login']))
{$_SESSION['user-name']=$_POST['username'];
$_SESSION['password']=$_POST['password'];

 $query="Select * from `dataofusers` where username='$username' password='$password'";
 $result=($conn,$query); // connecting the query we entered above and 
 if(isset($result)) //checking whether the result variable set to have both connected query and the database related thing 'conn'
 {
    $row=mysqli_fetch_assoc($result) ; //fetching the data rows one by one
    header('location:home.php'); // when doing the certain action, directing to home page



}
 //isset 
// empty method for checking the empty
};
?>
<?php
    include 'config.php';
    session_start();//activating the sessions(global variabels)
    if(isset($_POST['login'])){ //checking whether there is a value related to 'login'
        $email=mysqli_real_escape_string($conn,$_POST['email']); //removing the unnecessary symbols.

       // $email=$_POST['email'];
        $password=mysqli_real_escape_string($conn,$_POST['password']);

    $select_user=mysqli_query($conn,"SELECT * FROM `friends` WHERE friend_email='$email' AND password='$password'") or die('query failed');
    //checking the congruency
    //all the related(duplicate) data {no primary key} to the email and password
     // connecting the query we entered above and
    if(mysqli_num_rows($select_user)>0){ 
        $row = mysqli_fetch_assoc($select_user);  //single row 
        $_SESSION['name']= $row['profile_name'];  //global variable session can be used in any pages, to access the data related to one person
        $_SESSION['email']= $row['friend_email'];
        $_SESSION['id']= $row['friend_id'];
        $_SESSION['no_of_friends']= $row['num_of_friends'];
        header('location:friendList.php');
    }
    
    else{
        $message[]='Incorrect email or password!'; //user defined array //array is containing email and password
    }
}
?>


<?php
*/
include "config.php";
session_start();
$message = array();//user-defined array
if(isset($_POST['login']))
{


    $username=$_POST["username"];    
    //or
    //$username=mysqli_real_escape_string($conn,$_POST['username']);
    $password =$_POST["password"];
    //or
    //$password=mysqli_real_escape_string($conn,$_POST['password]);
    "SELECT * FROM `friends` WHERE friend_email='$email' AND password='$password'"

    $query= "SELECT * FROM 'ekelusers' WHERE username='$username' AND password='$password' ";
    $results=mysqli_query($conn,$query);

    if(mysqli_num_rows($results)>0)
    {
        $row=mysqli_fetch_assoc($results); //this function is going to fetch every single row.
        $_SESSION['username']=$row['username']; //i extract the column name 'username' from the single row i've got and assign it to another global variable
        //so that we can access this username anywhere in the files.
        header('Location:home.php');
    }
    else
    {
        $message[]='Incorrect details'; 
    }

    /*
    or
    $query="SELECT * FROM * 'ekelusers'";  
    $results= myquery($conn,$query);
    if(mysqli_num_rows($results)>0)
    {
        while($row=mysqli_fetch_assoc($results))
        {
            if($username===$row['username'] && $password=$row['password'])
            {
                $_SESSION['username]=$row['username'];
            }
        }
    }

    */
 
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>e-kelaniya Log in to the site</title>
    <link rel="stylesheet" href="style.css">
    <script src="index.js"></script>
</head>
<body>
    <?php
        if(isset($message))
        {
            foreach($message as $msg)
            {
                echo '
                <div class='errorMessage'> <span> '.$msg.' </span>  </div>';
            }
        }

    ?>
<div class="container">
    <div class="whiteBox">
        <div class="innerWhiteBox">
        <div class="img">
            <img src="ek2Solid.png" alt="ekelLogo">
        </div>
        <div class="loginForm">
            <form action="index.php" method="post" id='form'>
                <input type="text" id="username" name="username" required> <br>
                <input type="password" id="password" name="password" required> <br>
                <button id="login" name="login">Log in</button>
                 
            </form>
            
        </div>
        <div class="thirdPart">
            <div class="lostPassword">
            <a href="#">Lost password? </a>

            </div>
            <div class="langAndCookies_float_clear">
                <div class="lang">
                <select class="lang" id="lang">
                    <option>English (en)</option>
                    <option>Tamizh (tam)</option>
                    <option>Sinhala (sin)</option>
                </select>
                </div>
                <div class="cookies">
                    <a href="#">Cookies notice</a>
                </div>
        
            </div>
        </div>
        </div>
        
    </div>
    </div>   
    
</body>
</html>