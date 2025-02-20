<?php
  class Autor{
    private $id;
    private $nombre;
    private $descripcion;

    public function_construct($id, $nombre, $description) {
      $this ->id =$id;
      $this ->nombre = $nombre;
      $this ->descripcion = $descripcion;
    }

    //constructor

    public function_construct($nombre=null, $descripcion=null){
      $this->nombre = $nombre;
      $this->descripcion = $descripcion;
    }

    //get y set
    public function getId(){
      return $this->$id;
    }

    public function setId($id){
      $this->id =$id;
    }

    public function getNombre(){
      return $this->$nombre;
    }

    public function setNombre($id){
      $this->nombre =$nombre;
    }


    public function getDescripcion(){
      return $this->$descripcion;
    }

    public function setDescripcion($id){
      $this->descripcion =$descripcion;
    }


    

  }
?>