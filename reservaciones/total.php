<?php 
//variablede conexion

require 'medoo.php';
 
    $database = new medoo([
     'database_type' => 'mysql',
        'database_name' => 'reservacion',
        'server' => 'localhost',
        'username' => 'root',
        'password' => 'root',
        'charset' => 'utf8'

        ]);
        ?>
        
<html>
<head>
<style>
    .table{ width: 500;
           
        float: inherit;
        background-color: blue;
            
             }
    .body{
         background-color: black;
        
    }
    
    .table.th{
        with=500;
        empty-cells: 7;
        cellspacing
        
    }
    
    </style>
<head>
<body>

 
    <table>
     <tr>
        
         <th>NOMBRE</th>
         <th>APELLIDO</th>
         <th>TIPO DE HABITACION</th>
         <th>CANTIDA ADULTOS</th>
         <th>CANTIDAD NIÑOS</th>
         <th>TOTAL A PAGAR</th>
         
         
     </tr>
     
 </table>

   
<body>
</head>
</html>
