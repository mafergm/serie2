<!doctype html>

<head><title>Creacion de usuarios</title>
<link rel = "stylesheet" href = "creacionestilo.css" type = "text/css" />
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous"></head>

<body>
<header><h1>CREACION DE CONTACTOS</h1></header>
<br /> <hr / >

  <?php
         if(isset($_GET['Name']))
         {
            include ('uno.php');
            $con= new Conexion();
            $uno=$_GET['Name'];
            $dos=$_GET['Lastname'];
             $tres=$_GET['Age'];
            $cuatro=$_GET['User'];
            $cinco=$_GET['Password'];

            $query="INSERT INTO `usuarios`(`Name`, `Lastname`, `Age`, `User`, `Password`) VALUES ('$uno','$dos', '$tres', '$cuatro', '$cinco');";
            $consulta=$con->query($query);
            $con->close();
         
         ?>
        
            }
             
         
          

<section>

<form method = "post" action = "ver.php">
        <label  id = "lbl1" for = "nombre"></label>
      <input id="tt" type="text" class="form-control" placeholder="Name" name = "nombre" />

  <br /> 
  <label id = "lbl1" for = "last"></label>
      <input id="tt" type="text" class="form-control" placeholder="Last name" name = "last" />
  <br /> 
  <label  id = "lbl1"  for = "edad"></label>
      <input  id="tt" type="text" class="form-control" placeholder="Age" name = "edad" />
       
    <br /> 
     <label  id = "lbl1"  for = "user"></label>
      <input id="tt" type="text" class="form-control" placeholder="User" name = "user" />
        <br />
         <label   id = "lbl1" for = "contra"></label>
      <input id="tt" type="text" class="form-control" placeholder="Password" name = "contra" />
       <br />
      <a href="?Name=nombre" >Crear y ver contactos</a>
</form>

</section>
<hr />
<footer><h4>Fernanda Garcia</h4></footer>

</body>

</html>