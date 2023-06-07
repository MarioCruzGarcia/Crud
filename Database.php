<?php

    class Database{

        public static function conectar(){
            $driver = 'mysql';
            $host = 'localhost';
            $port = '3306';
            $user = 'root';
            $password = '';
            $db = 'ordenadores';

            $dsn   = "$driver:dbname=$db;host=$host;port=$port";

            try {

                      $gbd = new PDO($dsn, $user, $password);
                
                    } catch (PDOException $e) { 
                
                      echo 'Falló la conexión: ' . $e->getMessage();
                
                    }
                
                  return $gbd;
                
                    }

        public function getAll(){
            $sql = "SELECT * FROM ordenadores";
            $resultado = $this->conectar()->query($sql);
            return $resultado;
        }


        //Funcion que elimina segun el id seleccionado
        public static function delete($id){
            $sql = "DELETE FROM ordenadores WHERE id = $id";
            self::conectar()->exec($sql);
        }

        //Funcion que inserta un ordenador en la basedeDatos
        public static function save($datos){
            $sql = "INSERT INTO ordenadores (modelo, marca, precio, descripcion) VALUES ('$datos[0]', '$datos[1]', '$datos[2]', '$datos[3]')";
            self::conectar()->exec($sql);
        }

        //Funcion que recibe un id por parametro y busca su ordenador asociado
        public static function findById($id) {
            $sql = "SELECT * FROM ordenadores WHERE id = $id";
            $datos = self::conectar()->query($sql);
            return $datos->fetch(PDO::FETCH_ASSOC);
        }
    
        public static function update($datos) {
            $sql = "UPDATE ordenadores SET modelo = '$datos[1]', marca = '$datos[2]', precio = '$datos[3]', descripcion = '$datos[4]' WHERE id = $datos[0]";
            self::conectar()->exec($sql);
        }

    }

?>