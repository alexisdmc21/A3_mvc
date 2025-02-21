<?php
require once _DIR__.'../models/Autor.php';
require once _DIR__.'/../repositories/AutorRepository.php';



class AutorService{
    private $autorRepository;

    public function_construct($db){
        $this->autorRepository=new AutorRepository($db);
    }

    public function getAll(){
        $stmt = $this->autorRepository->readAll();
        $resul =[];
        while ($row =  $stmt->fetch(PDO::FECTH_ASSOC)){//dice se convierat un arreglo asociativo
          $resul[]=$row;
        }
        return $resul;
    }

    public function getById($id){
        $data = $this->autorRepository->readONe($id);
        return $data ? $data:null;
    }

    public function create($data){
        $autor = new Autor();
        $autor->setNombre($data->nombre);
        $autor->setDescripcion($data->desscripcion);
        return $this->autorRepository->create($autor);
    }

    public function update ($data){
        $autor = new Autor();
        $autor->setNombre($data->nombre);
        $autor->setDescripcion($data->desscripcion);
        $autor->setId($data->id);
        return $this->autorRepository->update($autor);
    }

    public function delete ($id){
        return $this->autorRepository->delete($id);
    }
}


?>