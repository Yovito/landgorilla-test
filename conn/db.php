<?php
/******************************
 *  db.php    *
 ******************************/

class Database{

    public function Connect(){

  		try {
  			$conexion = mysqli_connect( "localhost", "root", "Yosved.villar3");
        $db = mysqli_select_db( $conexion, "landGorilla" ) or die ( "error");
  		}
  		catch (PDOException $e) {
  			$this->ExceptionLog($e, '', 'Connect');
  		}
  	}


}
