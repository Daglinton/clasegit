<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema Mall</title>
    <link rel="shorcut icon" href="https://png.pngtree.com/element_our/png_detail/20181229/vector-shop-icon-png_302739.jpg">
    <link rel="stylesheet" href="./css/styles.css">
</head>
<body>
    <header>
        <h1><?php   
       
        echo isset($_GET['dato'])?$dato=$_GET['dato']:"" ;
        
        ?></h1>
    <nav>
    <ul class="menu">
        <li class="enlace"><a href="#"> Home</a></li>
        <li class="enlace"><a href="index.php">Quienes somos</a></li>
        <li class="enlace"><a href="#">contactenos</a></li>
        <li class="enlace" > <a href="#" id="enlace-login">login</a></li>
    </ul>
    
    </nav>
    <img class="img" src="https://s03.s3c.es/imag/_v0/770x419/1/f/7/Comercio.jpg" alt="">
    <div class="parrafo">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum laboriosam dignissimos voluptas soluta sint provident, eligendi error necessitatibus et repellat repellendus ipsum perferendis quae autem laborum voluptate velit dolorum sit.
        Facilis debitis fugiat reiciendis quas consequatur placeat voluptate! Officiis iure expedita alias labore exercitationem cupiditate laudantium obcaecati, nesciunt rem aspernatur temporibus eaque. Quisquam unde et quibusdam quam natus, sit mollitia!
        Neque suscipit accusamus consectetur optio dicta excepturi perferendis atque est ex veritatis, debitis, minus possimus natus, quos rem! Temporibus modi eius ducimus quis recusandae, voluptatibus vel cupiditate incidunt itaque impedit.
    </div>
    <div class="login" id="login">
        <div id="close" class="close">
         x
        </div>
        <form class="form1" action="./validar.php" method="post">
          <p><input name="log" type="text"></p> 
           <p><input name="pass" type="password"></p> 
           <p> <input type="submit"></p>   
               
        </form>
              
    </div>
    </header>
    <script src="./js/script.js"></script>
</body>
</html>