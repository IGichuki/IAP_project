
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="category.css">
<link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
<title> CATEGORY</title>

</head>
<body>
    <main>
        <section id="mainsection">
            <div class= hero-content>
    <form action="processCategory.php" method="post"  enctype="multipart/form-data" class="category">
        <fieldset>
            <div class="fieldset">
             <p><label for="category"><b>categoryName</b></label>
    
             <input type="text" placeholder="Enter category name" name="categoryName" class="category"  required></p>

           </div><br>
           
           
       
         <tr>
             <td coolspan="2">
                 <input type="submit" name="submit" value="Add category" class="btn-primary">
             </td>
             <td>
                <button onclick="window.location.href='dashboard.php'">return</button>
             </td>
         </tr>

        </fieldset>
        
   </form>
</div>
<div class="hero-image">
    <img src= "kids2.png">
</div>
</section>
  </main>    
</body>
</html>