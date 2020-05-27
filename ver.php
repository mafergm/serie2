<?php
include('creacion.php')

         if(isset($_GET['Name']))
         {
            include ('uno.php');
            $con= new Conexion();
            $nombre=$_GET['Name'];
            $apellido=$_GET['Lastname'];
            $edad=$_GET['Age'];
            $usuario=$_GET['User'];
            $co=$_GET['Password'];
          

            $query="INSERT INTO `USUARIOS`(`Name`, `Lastname`, `Age`, `User`, `Password`) VALUES (['$nombre','$apellido','$edad','$usuario','$co');";
          
            $consulta=$con->query($query);
            $con->close();
         
         
             $con= new Conexion();
             $query="SELECT * FROM `USUARIOS` WHERE 1;";
             $pro=$con->query($query);
             $con->close();
             $t=0;
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
           
          </table>

?>