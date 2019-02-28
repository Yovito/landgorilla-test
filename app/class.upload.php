<?php
/******************************
 *  class.uploadFile.php    *
 ******************************/
require ("./conn/db.php");

class uploadFile {

  public function build( $fecha, $file1, $file2 ){
    $conn = new Database();
    $conn->Connect();

      $sql = "INSERT INTO lg_test (fecha, img1, img2)
          VALUES (
            '".$fecha."',
            'images/".$file1."',
            'images/".$file2."'
          )";

      move_uploaded_file($file1,"images/".$file1);
      move_uploaded_file($file2,"images/".$file2);
  }


}
