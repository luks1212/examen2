<?php 

	require  'medoo.php';

 
    $database = new medoo([
        // required
        'database_type' => 'mysql',
        'database_name' => 'examen',
        'server' => 'localhost',
        'username' => 'root',
        'password' => 'root',
        'charset' => 'utf8'
    ]);
if($_POST){
    $database->insert("tb_reservaciones",[
        "nombre" => $_POST["nombre"],
        "apellido" => $_POST["apellido"],
        "id_habitacion" => $_POST["id_habitacion"],
        "cant_adultos" =>($_POST["cant_adultos"]),
        "cant_ninos" =>($_POST["cant_ninos"])
      
    ]);
 }
    
?>

<html>
  <head>
   
    <title>reservacion</title>
    
  </head>
  <body>

    <form action="total.php" method="POST">
       <center>
      <div class="form-field">
        <label for="">First Name</label>
        <input type="text"  name="nombre" >
      </div>
      <br/>  <br/>  <br/>
      <div class="form-field">
        <label for="">Last Name</label>
        <input type="text" name="apellido">
      </div>
                    <br/>  <br/>  <br/>
        <div class="form-field">
        <label for="">ID_HABITACION</label>
        <select name="id_habitacion" id="id_habitacion">
                 <option>regular </option>
                  <option>Super </option>
                 <option>Deluxe </option>
                  <option>Full</option>
              </select>
       </div>
                 <br/>  <br/>  <br/>
        <div class="form-field">
        <label for="">CANTIDAD ADULTOS</label>
        <input type="text"  name="cant_adultos" >
    </div>
        <br/>  <br/>  <br/>
            <div class="form-field">
             <label for="">CANTIDAD NINOS</label>
             <input type="text"  name="cant_ninos" >
     </div>

      <br/>  <br/>  <br/>
            <div class="form-field">
            <input class="btn-submit" type="submit"  value="submit">
           </div>
        </center>
    </form>

  </body>
</html>
        
	





