<?php
  class Libros{
    private $id;
    private $nombre;
    private $descripcion;
    private $precio;
    private $autores_id;


    public function_construct($id, $nombre, $descripcion, $precio, $autores_id){
        $this->id = $id;
        $this->nombre = $nombre;
        $this->descripcion = $descripcion;
        $this->precio = $precio;
        $this->autores_id = $autores_id;
    }

    public function_construct($nombre=null,$descripcion=null,$precio=null,$autores_id=null){
        $this->nombre = $nombre;
        $this->descripcion =$descripcion;
        $this->precio = $precio;
        $this->autores_id = $autores_id;
    }

    //get y set

    public function getId(){
        return $this->$id;
    }

    public function setId(){
        $this->id = $id;
    }

    public function getNombre(){
        return $this->$nombre;
    }

    public function setId(){
        $this->nombre = $nombre;
    }

    public function getDescripcion(){
        return $this->$descripcion;
    }

    public function setId(){
        $this->descripcion = $descripcion;
    }


    public function getPrecio(){
        return $this->$precio;
    }

    public function setId(){
        $this->precio = $precio;
    }

    public function getAutoresID(){
        return $this->$autores_id;
    }

    public function setAutoresId(){
        $this->autores_id = $autores_id;
    }
      
  }

?>