<?php
$n = $_POST['nombre'];
$l = $_POST['last'];
$e = $_POST['edad'];
$u = $_POST['user'];
$c = $_POST['contra'];
?>
<html>
<a href = "?Name=$n&Lastname=$l&Age=$e&User=$u&Password=$c">Crear</a>

<?php
    if(isset($_GET['Name']))
         {
            include ('uno.php');
            $con= new Conexion();
            $na=$_GET['Name'];
            $la=$_GET['Lastname'];
              $a=$_GET['Age'];
            $u=$_GET['User'];
             $p=$_GET['Password'];

            $query="INSERT INTO `usuarios`(`Name`, `Lastname`, `Age`, `User`, `Password`) VALUES ('$na', '$la', '$a', '$u', '$p');";
            $consulta=$con->query($query);
            $con->close();
            ?>
         <table align = "center">
             <tr>
             <td><p><strong><h1>CONTACTOS</h1></strong></p></td>
             </tr>
         <?php
          
             $con= new Conexion();
             $query="SELECT * FROM `usuarios` WHERE 1;";
             $pro=$con->query($query);
             $con->close();
          
             while($row=mysqli_fetch_assoc($pro))
             {
                 echo "
                 <tr>
                     <td>
                        <p>".$row['Name']."</p>
                     </td>

                     <td>
                        <p>".$row['Lastname']."</p>
                     </td>
                     <td>
                        <p>".$row['Age']."</p>
                     </td>
                     <td>
                        <p>".$row['User']."</p>
                     </td>
                     <td>
                        <p>".$row['Password']."</p>
                     </td>
                 </tr>
                 ";
             
             }
             }
?>
</html>