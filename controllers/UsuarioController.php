<?php
require_once 'models/usuario.php';

class usuarioController{
	
	public function index(){
		echo "Controlador Usuarios, Acción index";
	}
	
	



	public function registro(){
		require_once 'views/usuario/registro.php';
	}


	
	public function save(){
		
		if(isset($_POST)){
			
			$nombre = isset($_POST['nombre']) ? $_POST['nombre'] : false;
			$apellidos = isset($_POST['apellidos']) ? $_POST['apellidos'] : false;
			$email = isset($_POST['email']) ? $_POST['email'] : false;
			$empresa = isset($_POST['empresa']) ? $_POST['empresa'] : false;
			$cuit = isset($_POST['cuit']) ? $_POST['cuit'] : 'Sin aclarar';
			$telefono = isset($_POST['telefono']) ? $_POST['telefono'] : false;
			$direcCalle = isset($_POST['direcCalle']) ? $_POST['direcCalle'] : false;
			$direcAltura = isset($_POST['direcAltura']) ? $_POST['direcAltura'] : false;
			$piso = isset($_POST['piso']) ? $_POST['piso'] : false;
			$depto = isset($_POST['depto']) ? $_POST['depto'] : false;
			$esquina1 = isset($_POST['esq1']) ? $_POST['esq1'] : false;
			$esquina2 = isset($_POST['esq2']) ? $_POST['esq2'] : false;
			$password = isset($_POST['password']) ? $_POST['password'] : false;
			
			if($nombre && $apellidos && $email && $password && $empresa && $telefono){
				$usuario = new Usuario();
				$usuario->setNombre($nombre);
				$usuario->setApellidos($apellidos);
				$usuario->setEmail($email);
				$usuario->setPassword($password);
				$usuario->setEmpresa($empresa);
				$usuario->setTelefono($telefono);
				$usuario->setdirecCalle($direcCalle);
				$usuario->setdirecAltura($direcAltura);
				$usuario->setDirecPiso($piso);
				$usuario->setDirecDepto($depto);
				$usuario->setEsquina1($esquina1);
				$usuario->setEsquina2($esquina2);

				$save = $usuario->save();

				if($save){
					$_SESSION['register'] = "complete";
				}else{
					$_SESION['register'] = "failed";
				}
			}else{
				$_SESSION['register'] = "failed";
			}
		}else{
			$_SESSION['register'] = "failed";
		}
		header("Location:".base_url.'usuario/registro');
		ob_start();
	}
	
	public function login(){
		if(isset($_POST)){
			// Identificar al usuario
			// Consulta a la base de datos
			$usuario = new Usuario();
			$usuario->setEmail($_POST['email']);
			$usuario->setPassword($_POST['password']);
			
			$identity = $usuario->login();
			
			if($identity && is_object($identity)){
				$_SESSION['identity'] = $identity;
				
				if($identity->rol == 'admin'){
					$_SESSION['admin'] = true;
				}
				
			}else{
				$_SESSION['error_login'] = 'Identificación fallida !!';
			}
		
		}
		header("Location:".base_url);
	}
	
	public function logout(){
		if(isset($_SESSION['identity'])){
			unset($_SESSION['identity']);
		}
		
		if(isset($_SESSION['admin'])){
			unset($_SESSION['admin']);
		}
		
		header("Location:".base_url);
		
	}
	
	
} // fin clase