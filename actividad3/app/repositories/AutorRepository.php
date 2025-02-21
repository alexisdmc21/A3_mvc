<?php


require_once_DIR_.'/../models/Autor.php';

  class  AutoRepository{
    private $conn;
    private $table_name="autores";

    public function_construct($db){
       $this->conn=$db;
    }
     

    public function create(Autor $autor){
        $query = "INSERT INTO {$this->table_name} (nombre,descripcion) VALUES (:nombre, :descripcion)";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":nombre",$autor->getNombre());
        $stmt->bindParam(":descripcion", $autor->getDescripcion());
        return $stmt->execute();

      }

      public function readAll(){
        $query = "SELEC * FROM {$this->table_name}"
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
      }
    public function update(Autor $autor){
      $query = "UPDATE {$this->table_name} SET nombre = :nombre, descripcion = :descripcion WHERE id=:id";
      $stmt = $this->conn->prepare($query);
      $stmt ->bindParam(":nombre",$autor->getNombre());
      $stmt ->bindParam(":descripcion", $autor->getDescripcion());
      $stmt ->bindParam(":id",$autor->getId());
      return $stmt->execute();
 
    }
     
    public function delete(){
      $query = "DELETE FROM {$this->table_name} WHERE id=$id";
      $stmt = $this->conn->prepare($query);
      $stmt->bindParam(":id",$id);
      return $stmt->execute();
    }

    public function readOne($id){

      $query = "SELECT * FROM {$this->table_name} WHERE id =:id LIMIT 0,1";
      $stmt = $this->conn->prepare($query);
      $stmt->bindParam("id",$id);
      $stmt->execute();
      return $stmt->fetch(PDO::FETCH_ASSOC);

    }
  }
?>