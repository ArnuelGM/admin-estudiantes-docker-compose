<?php 

  include_once './model.php';

  switch( $_GET['q'] ) {

    case 'all':
      $respuesta = Estudiantes::getAll();
    break;

    case 'one':
      $respuesta = Estudiantes::get( $_GET['id'] );
    break;

    case 'create':
      $respuesta = Estudiantes::save( $_POST );
    break;

    case 'delete':
      $respuesta = Estudiantes::delete( $_GET['id'] );
    break;

    case 'update':
      $respuesta = Estudiantes::update( $_GET['id'], $_POST );
    break;

    default:
      $respuesta = Estudiantes::getAll();

  }

  print ( json_encode( $respuesta) );