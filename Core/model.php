<?php

class Model{

	protected $bdd;
	
	private $host;
	private $database;
	private $pseudo;
	private $password;

	public $table;
	public $id;

	public function __CONSTRUCT(){

		$this->host = HOST;
		$this->database = DATABASE;
		$this->pseudo = PSEUDO;
		$this->password = PASSWORD;

		$this->connexion();
	}

	public function getBDD(){
		return $this->bdd;
	}

	public function connexion(){
		$this->bdd = new PDO('mysql:host='.$this->host.';dbname='.$this->database,$this->pseudo,$this->password);
	}

	public function read($field = "*" , $value = null){

            $sql = 'SELECT * FROM '.$this->table.' ';

            if( $value != null ){

                $sql .= 'WHERE '.$field.' = '.$value.' ';

            }

            $req = $this->bdd->query($sql);
            return $req;

        }

    public function count($field = "*"){

        if($field == NULL){ $field = "*"; }

        $sql = 'SELECT COUNT('.$field.') AS result FROM '.$this->table.' ';
        $req = $this->bdd->query($sql);
        $data = $req->fetch();
        return $data;
    }

	public function save($data){

        if(isset($data['id']) && !empty($data['id'])){

            $sql = "UPDATE ".$this->table." SET ";

            foreach ( $data as $key => $value){

                $sql .= "$key = '$value',";
            }

            // supprime le dernier caractère qui est ","
            $sql = substr($sql,0,-1);

            $sql .= "where id=".$data["id"];

        } else {

            $sql = "INSERT INTO ".$this->table."(";

            foreach ( $data as $key => $value){

                /* inputValue qui est un input de type hidden */
                if( $key != 'inputValue') {

                    $sql .= " $key ,";

                }

            }

            $sql = substr($sql,0,-1);

            $sql .= " ) VALUES (";

            foreach ( $data as $key => $value){

                if( $key != 'inputValue') {

                    $sql .= " '$value' ,";

                }

            }

            $sql = substr($sql,0,-1);
            $sql .= ")";
        }

        $this->bdd->exec($sql);

    }

    public function remove( $id ){

        $sql = 'DELETE FROM '.$this->table.' WHERE id = '.$id;
        $this->bdd->query($sql);

    }

}