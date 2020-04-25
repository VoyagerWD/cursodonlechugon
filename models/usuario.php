<?php

class Usuario{

	private $id;
	private $nombre;
	private $apellidos;
	private $password;
	private $empresa;
	private $cuit;
	private $email;
	private $telefono;
	private $direcCalle;
	private $direcAltura;
	private $piso;
	private $depto;
	private $esquina1;
	private $esquina2;
	private $rol;
	private $imagen;
	private $db;
	


	public function __construct() {
		$this->db = Database::connect();
	}
	
	function getId() {
		return $this->id;
	}

	function getNombre() {
		return $this->nombre;
	}

	function getApellidos() {
		return $this->apellidos;
	}

	function getEmail() {
		return $this->email;
	}

	function getPassword() {
		return password_hash($this->db->real_escape_string($this->password), PASSWORD_BCRYPT, ['cost' => 4]);
	}

	function getEmpresa(){
		return $this->empresa;
	}

	function getCuit(){
		return $this->cuit;
	}

	function getTelefono(){
		return $this->telefono;
	}

	function getDirecCalle(){
		return $this->direCalle;
	}

	function getDirecAltura(){
		return $this->direcAltura;
	}

	function getDirecDepto(){
		return $this->depto;
	}

	function getRol() {
		return $this->rol;
	}

	function getImagen() {
		return $this->imagen;
	}

	function getDirecPiso(){
		return $this->piso;
	}

	function getEsquina1(){
		return $this->esquina1;
	}

	function getEsquina2(){
		return $this->esquina2;
	}


	function setEmpresa($empresa){
		$this->empresa = $this->db->real_escape_string($empresa);
	}

	function setCuit($cuit){
		$this->cuit = $this->db->real_escape_string($cuit);
	}

	function setTelefono($telefono){
		$this->telefono = $this->db->real_escape_string($telefono);
	}	

	function setDirecCalle($direCalle){
		$this->direCalle = $this->db->real_escape_string($direCalle);
	}

	function setDirecAltura($direcAltura){
		$this->direcAltura = $this->db->real_escape_string($direcAltura);
	}

	function setDirecPiso($direcPiso){
		$this->direcPiso = $this->db->real_escape_string($direcPiso);
	}

	function setDirecDepto($direcDepto){
		$this->direcDepto = $this->db->real_escape_string($direcDepto);
	}	

	function setEsquina1($esquina1){
		$this->esquina1 = $this->db->real_escape_string($esquina1);
	}

	function setEsquina2($esquina2){
		$this->esquina2 = $this->db->real_escape_string($esquina2);
	}
	
	function setId($id) {
		$this->id = $id;
	}

	function setNombre($nombre) {
		$this->nombre = $this->db->real_escape_string($nombre);
	}

	function setApellidos($apellidos) {
		$this->apellidos = $this->db->real_escape_string($apellidos);
	}

	function setEmail($email) {
		$this->email = $this->db->real_escape_string($email);
	}

	function setPassword($password) {
		$this->password = $password;
	}

	function setRol($rol) {
		$this->rol = $rol;
	}

	function setImagen($imagen) {
		$this->imagen = $imagen;
	}

	public function save(){
		$sql = "INSERT INTO usuarios VALUES(NULL, '{$this->getNombre()}', '{$this->getApellidos()}', '{$this->getPassword()}', '{$this->getEmpresa()}', '{$this->getCuit()}', '{$this->getEmail()}', '{$this->getTelefono()}', '{$this->getDirecCalle()}', '{$this->getDirecAltura()}', '{$this->getDirecPiso()}', '{$this->getDirecDepto()}', '{$this->getEsquina1()}', '{$this->getEsquina2()}', 'user', null);";
		
		$save = $this->db->query($sql);
		
		$result = false;
		if($save){
			$result = true;
		}
		return $result;
	}
	
	public function login(){
		$result = false;
		$email = $this->email;
		$password = $this->password;
		
		// Comprobar si existe el usuario
		$sql = "SELECT * FROM usuarios WHERE email = '$email'";
		$login = $this->db->query($sql);
		
		
		if($login && $login->num_rows == 1){
			$usuario = $login->fetch_object();
			
			// Verificar la contraseña
			$verify = password_verify($password, $usuario->password);
			
			if($verify){
				$result = $usuario;
			}
		}
		
		return $result;
	}
	
	public function conseguirUnUsuario($id){
		$query = $this->db->query("SELECT * FROM usuarios WHERE id = $id");
		return $query;
	}
	
	
}