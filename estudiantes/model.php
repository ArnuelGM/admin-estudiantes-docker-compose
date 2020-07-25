<?php

$db_host = $_ENV['db_host'];
$db_user = $_ENV['db_user'];
$db_pass = $_ENV['db_pass'];
$db_name = $_ENV['db_name'];

$connection = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if( !$connection ) {
  echo "Error: no fue posible conectarse al servidor de base de datos.";
  exit;
}

function mysqlQuery($query) {
  global $connection;
  $data = mysqli_query($connection, $query);
  if( $data ) {
    return mysqli_fetch_all($data, MYSQLI_ASSOC);
  }
  else {
    return [];
  }
}

class Estudiantes {

  static function getAll() {
    return mysqlQuery('SELECT * FROM estudiante ORDER BY nombre');
  }

  static function get($id) {
    return mysqlQuery('SELECT * FROM estudiante WHERE id = ' . $id);
  }

  static function save($data) {
    $sql = "
      INSERT INTO estudiante (id,nombre,identificacion,curso)
      VALUES (null,'{$data['nombre']}','{$data['identificacion']}','{$data['curso']}')
    ";
    // exit;
    return mysqlQuery($sql);
  }

  static function delete($id) {
    return mysqlQuery("DELETE FROM estudiante WHERE id = " . $id);
  }

  static function update($id, $data) {
    $sql = "
      UPDATE estudiante SET 
      nombre = '{$data['nombre']}',
      identificacion = '{$data['identificacion']}',
      curso = '{$data['curso']}'
      WHERE id = {$id}
    ";
    return mysqlQuery($sql);
  }

}