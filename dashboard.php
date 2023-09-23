<?php
require("connect.php");
session_start();

// if (isset($_SESSION['adminID']) && isset($_SESSION['firstname'])) {


?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="text.css">
<link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
<title> ADMIN VIEW</title>

</head>
<body>
    <input type="checkbox" name="" class="nav-toggle">
     <div class="sidebar">
         <div class="sidebar-brand">
             <h2> <span class="lab la-accusoft"></span>fashionNova</h2>
         </div>
         <div class="sidebar-menu">
             <ul>
                
                 <li>
                     <a href="#" class="active"> <span class="las la-igloo"></span>
                        <span>dashboard</span></a>
                 </li>
                  <li>
                     <a href="category.php" ><span class="las la-igloo"></span>
                        <span> category</span></a>
                 </li>
                 <li>
                     <a href="subcategory.php" ><span class="las la-igloo"></span>
                        <span>sub-category</span></a>
                 </li>
                  <li>
                     <a href="addProduct.php"> <span class="las la-igloo"></span>
                        <span>product</span></a>
                 </li>
                  <li>
                     <a href="#" ><span class="las la-igloo"></span>
                        <span>orders</span></a>
                 </li>
                  <li>
                     <a href="#"> <span class="las la-igloo"></span>
                        <span>inventory</span></a>
                 </li>
                  <li>
                     <a href="adminlogin.php"> <span class="las la-igloo"></span>
                        <span>logout</span></a>
                 </li>
             </ul>
         </div>
     </div>
     <div class="main-content">
         <header>
            <h2>  
                 <label for="nav-toggle">
                     <span class="las la-bars"></span>
                 </label>
                 Dashboard
             </h2>
             <div class="search-wrapper">
                 <span class="las la-search"></span>
                 <input type="search" name="" placeholder="search here">
             </div>
             <div class="user-wrapper">
                <!-- <h3 class="hello"> Hello  <?php echo $_SESSION['firstname'];?></h3>
 -->

             </div>
            
         </header>
         <main>
             <div class="cards">
                

                    <div class="card-single">
                        <div><h1>users</h1>
                        <span><a href="viewuser.php">users</a></span></div>
                         <div>
                            <span class="las la-users"></span>
                         </div>
                    </div>
                   

                    <div class="card-single">
                        <div><h1>60</h1>
                        <span>orders</span></div>
                        <div>
                        <span class="las la-clipboard-list"></span>
                         </div>
                    </div>
                    <div class="card-single">
                       <div><h1>products</h1>
                        <span><a href="viewproduct.php">products</a></span></div> 
                        <div>
                        <span class="las la-shopping-bag"></span>
                    </div>
                    </div>
                    
                    <div class="card-single">
                        <div><h1>600</h1>
                        <span>inventory</span></div>
                        <div>
                        <span class="las la-users"></span>
                    </div>
                    </div>

                                      
                    

                
                </div>
         </main>
     </div>
</body>
</html>
