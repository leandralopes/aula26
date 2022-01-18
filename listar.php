<?php

include "conexao.php";

$sql = "SELECT * from tblblog";

$qry = mysqli_query($con,$sql);









   while($linha=mysqli_fetch_assoc($qry)) { 

     

            echo  $linha["imagem"]."<br>";

           

            echo $linha["texto"]."<br>" ;

            $dataf = implode("/",array_reverse(explode("-",$linha['data'])));

            

            echo $linha['autor']." - ".$dataf."<br>";

            echo "<hr>";

     }