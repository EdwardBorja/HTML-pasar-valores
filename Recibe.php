
<html>
<body >

    <h1>Factura </h1><br />

<?php

$cantidad1=$_GET['cantidad1']; $producto1=$_GET['Producto1']; $precio1=$_GET['Precio1'];
 
$cantidad2=$_GET['cantidad2'];
$producto2=$_GET['Producto2'];
$precio2=$_GET['Precio2'];

$cantidad3=$_GET['cantidad3'];
$producto3=$_GET['Producto3'];
$precio3=$_GET['Precio3'];



$total1=$cantidad1*$precio1;
$total2=$cantidad2*$precio2;
$total3=$cantidad3*$precio3;
$Subtotal=$total1+$total2+$total3;
$iva=$Subtotal*0.16;
$Total=$iva+$Subtotal;

?>
<table>

    <tr style="background-color:beige;">
            <th>Cantidad </th>
            <th>Producto </th>
            <th>Precio unitario</th>
            <th>Total</th>
    </tr>
    
    
    <tr>
        <td><?php  echo $cantidad1   ?></td>
        <td><?php  echo $producto1   ?></td>
        <td><?php  echo $precio1   ?></td>
        <td><?php  echo $total1   ?></td>
    </tr>
    
     <tr>
        <td><?php  echo $cantidad2   ?></td>
        <td><?php  echo $producto2  ?></td>
        <td><?php  echo $precio2   ?></td>
        <td><?php  echo $total2   ?></td>
    </tr>
    
    <tr>
        <td><?php  echo $cantidad3   ?></td>
        <td><?php  echo $producto3  ?></td>
        <td><?php  echo $precio3   ?></td>
        <td><?php  echo $total3   ?></td>
    </tr>
    
    <tr style="background-color: brown;color: white;">
            <th> </th>
            <th> </th>
            <th>Sub-total</th>
            <th><?php  echo $Subtotal   ?></th>
    </tr>
    
    <tr style="background-color: gold; color: black;">
            <th> </th>
            <th> </th>
            <th>Iva</th>
            <th><?php  echo $iva   ?></th>
    </tr>
    
    <tr style="background-color: blue; color: white;">
            <th> </th>
            <th> </th>
            <th>Total</th>
            <th><?php  echo $Total   ?></th>
    </tr>
    
    
    
    
    
</table>

</body>
</html>
