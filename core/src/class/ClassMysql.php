<?php
class MysqlConnectClass
{
  //mysql params
  public function __construct()
    {
      $this->user = 'admintik_jaramiyo';
      $this->password = 'p)yX)jxHR;(u';
      $this->server = 'localhost';
      $this->database = 'admintik_yamil';

      $this->init_conexion = new mysqli(
        $this->server,
        $this->user,
        $this->password,
        $this->database
      );
      if ($this->init_conexion -> connect_errno) {
       return exit('<h3> Error de capa E/S</h3>');
        }
    }


    public function UserLogin($user, $pass)
    {
        $stmt = $this->init_conexion->prepare("SELECT Users.id, Users.Nombre, Users.Dni, Users.Credito, Users.Status  FROM Users WHERE User=? AND Pass=? LIMIT 1");
        $stmt -> bind_param("ss", $user, $pass);
        $stmt -> execute();
        $stmt ->store_result();
        if ($stmt ->num_rows === 1) {
          $stmt -> bind_result( $id, $Nombre, $Dni, $Credito, $Status);
          if ($stmt->fetch()) {
              session_start();
              $_SESSION['id']=$id;
              $_SESSION['Nombre']=$Nombre;
              $_SESSION['Dni']=$Dni;
              $_SESSION['Credito']=$Credito;
              $_SESSION['Status']=$Status;
              $stmt -> close();
              return true;
          }else {
            $stmt -> close();
            return false;
          }
        }else 
        {
          $stmt -> close();
          return false;
        }
    }

    public function GetMachineFree($CedeID)
    { 
      $Status = '0';
      $stmt = $this->init_conexion->prepare("SELECT Maquinolas.NumeroPC, Maquinolas.id, Maquinolas.Cede FROM Maquinolas WHERE Status=? AND Cede=?");
      $stmt -> bind_param("ii", $Status, $CedeID);
      $stmt -> execute();
      $result = $stmt->get_result();
      $stmt -> close();
      return $result;
    }

    public function GetMachineDateTable($Date)
    { 
      $stmt = $this->init_conexion->prepare("SELECT Rental.MachineID, Rental.id, Rental.Time, Rental.EndTime, Rental.RentalID FROM Rental WHERE Date=?");
      $stmt -> bind_param("s", $Date);
      $stmt -> execute();
      $result = $stmt->get_result();
      $stmt -> close();
      return $result;
    }


    public function GetMachineDateTableByID($Date, $id, $Hour)
    { 
      $stmt = $this->init_conexion->prepare("SELECT Rental.MachineID, Rental.id, Rental.Time, Rental.EndTime, Rental.RentalID FROM Rental WHERE Date=? AND MachineID=? AND Time=?");
      $stmt -> bind_param("sss", $Date,$id,$Hour);
      $stmt -> execute();
      $result = $stmt->get_result();
      $stmt -> close();
      return $result;
    }



    public function UserRegister($user,$password,$repassword,$nombre,$dni,$cmpuser)
    {
      $stmt = $this->init_conexion->prepare("SELECT User FROM Users WHERE User=? AND Pass=?");
      $stmt -> bind_param("ss", $cmpuser);
      $stmt -> execute();
      $stmt ->store_result();
      if($stmt->num_rows === 1){
        echo '<div id="message">
        El nombre de usuario está en uso, por favor escoja otro.
        </div>';
      }
        else {
          if ($password != $repassword) {
            echo '<div id="message">
            Las contraseñas no coinciden, por favor vuelva a introducirlas.
            </div>';
          } else {
            $insertar = $this->init_conexion->prepare("INSERT INTO Users (User,Pass,Nombre,Dni,Credito,Status) values ('$user','$password','$nombre','$dni','nope','1')");
              if ($insertar) {
                header('Refresh: 2; url = index.php');
              }
          }
        }
      
    }
  }

$ObjMysqli = new MysqlConnectClass;
 ?>
