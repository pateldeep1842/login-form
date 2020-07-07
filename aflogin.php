
<?php 
  session_start(); 

  if (!isset($_SESSION['id'])) {
  	$_SESSION['msg'] = "You must login first";
    header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: home.php");
  }
 
?>
<!DOCTYPE html>
<html>
 <head>
     <title>

     </title>
    
     
 </head>

<style> 

@import "https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css";

*{
    margin: 0px;
    padding: 0px;
}


ul{
    float: right;
    list-style-type: none;
    margin-top: 25px;
}

ul li{
   display: inline-block; 
  
}

ul li a{
    text-decoration: none;
    color: #fff;
    padding: 5px 20px;
    border: 1px solid transparent;
    transition: 0.6s ease 0s;
    position: relative;
}

ul li a:hover{
    background-color: #fff;
    color: #000;
}

ul li.active a{
    background-color: #fff;
    color: #000;
}



  .upper-center{
    float: center;
    background-color:gray;
    max-width: 1600px;
    display: flex;
    justify-content: space-between;
    border: 1px solid transparent;
    transition: 0.6s ease 0s;
    position: relative;
    padding:10px 20px;
    height: 40px;
  
     }

  .upper-center .logo2{
      float: left; border: 1px solid transparent;
      transition: 0.6s ease;
     
      }

   .upper-center .upper-right{
      float: right;
      border: 1px solid transparent;
      transition: 0.6s ease;
   }

  

.username{
    float: right;
    margin-top: 1px;
    margin-right: 30px;
    margin-left: 10px;
    color:white;
}



</style>


 <body>
     <header>
                             
                             
                                     <div class="upper-right">
                                    <ul>
                                    <div class="username">
                                          <!-- logged in user information -->
                                              <?php  if (isset($_SESSION['username'])) : ?>
                                            	<p> <strong><?php echo $_SESSION['username']; ?></strong></p>
                                              <?php endif ?>
                                     </div>
                
                                     <i class="fa fa-sign-out"></i>
                                        <li><p> <?php  if (isset($_SESSION['username'])) : ?> <a href="aflogin.php?logout='1'" >logout</a> </p>
                                                 <?php endif ?></li>
                                        
                                    </ul>
                                 </div>
                          
                             </div>
                                
                                      
                             
     </header>


 </body>
</html>  
