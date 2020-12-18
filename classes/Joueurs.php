<?php
	                class Joueurs{

	                  		private $_id;
	                     	private $_nom;


		                  	public function __construct(array $donnees){

		                    	$this->initialiser($donnees);

		                    }

		                    public function getId(){

		                      return $this->_id;

		                    }

		                    public function getNom(){

		                      return $this->_nom;

		                    }

		                    public function setId($id){

		                      $this->_id=$id;

		                    }

		                    public function setNom($nom){

		                      $this->_nom=$nom;

		                    }

		                  	public function initialiser(array $donnees){

		                        foreach ($donnees as $cle => $valeur) {

		                           $fonction='set'.ucfirst($cle);

		                           if(method_exists($this,$fonction)){

		                              $this->$fonction($valeur);

		                           }

		                        }

		                    }
	                }
