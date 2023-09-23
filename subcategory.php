<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="category.css">
<link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
<title> SUBCATEGORY</title>

</head>
<body>
    <main>
        <section id="mainsection">
            <div class= hero-content>
    <form action="process_subcategory.php" method="post"  enctype="multipart/form-data" class="subcategory">
        <fieldset>
            <div class="fieldset">
             <p><label for="subcategory"><b>subcategoryName</b></label>
    
             <input type="text" placeholder="Enter subcategory name" name="subcategoryName" class="subcategory"  required></p>

           </div><br>
           
           
       
         <tr>
             <td coolspan="2">
                <input type="submit" name="subcategory" value="add subcategory">
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