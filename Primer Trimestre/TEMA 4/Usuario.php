<?php
class Usuario{
    public $nombre;
     public $email;
    
     public function __construct($nombre, $email){
        $this -> nombre = $nombre;
        $this -> email = $email;
     }
}

class Alumno extends Usuario {
    public $curso;
    public function __construct($nombre,$email,$curso){
        parent::__construct($nombre, $email);
        $this -> curso = $curso;
    }

    public function mostrarDatos(){
        echo "Este alumno: $this->nombre y su correo electronico cuyo: $this->email esta en el curso:  $this->curso" ;
    }
}
//Objeto:

$alumno = new Alumno("Emman", "jlr0020@gmail.com", "DAW");
echo $alumno -> mostrarDatos();
?>