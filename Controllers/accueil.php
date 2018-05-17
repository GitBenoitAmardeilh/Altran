<?php

class Accueil extends controller{
    
    public function index(){

        $this->loadModel('candidats');
        $data['infos'] = $this->candidats->read();

        $this->setLayout('layout_accueil');
        $this->setDonnees($data);
        $this->render('compte');
    }

    public function profil(){

        $this->setLayout('layout_accueil');
        $this->render('addProfil');
    }

    public function addProfil(){

        $this->loadModel('candidats');

        $arrayCoord = array();

        foreach ($_POST as $key => $value){

            if( $key != 'inputHidden'){

                $arrayCoord[ $key ] = $value;

            }

        }

        $this->candidats->save($arrayCoord);

        header('location:../accueil');

    }

    public function deleteProfil( $id ){

        $this->loadModel('candidats');
        $this->candidats->remove($id);

        header('location:'.ROOT.'accueil');

    }

    public function displayProfil( $id ){

        $this->loadModel('candidats');
        $data['infos'] = $this->candidats->read( "id" , $id );

        $this->setLayout('layout_accueil');
        $this->setDonnees($data);
        $this->render('displayProfil');
    }
}