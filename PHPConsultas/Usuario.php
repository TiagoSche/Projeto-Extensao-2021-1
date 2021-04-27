<?php
session_start();

class Usuario{

    private $pdo;

    public function __construct(PDO $driver){
        $this->pdo = $driver;
    }
    
    public function cadastrarUsuario($email, $nome, $senha, $sobrenome, $cpf){
        $senha = md5($senha);
        
        $sql = "INSERT INTO usuario SET nome_usuario = '$nome', email_usuario = '$email', 
        senha_usuario = '$senha', sobrenome_usuario = '$sobrenome', cpf_usuario = '$cpf' ";

		$sql = 	$this->pdo->query($sql);

        $id = $this->pdo->lastInsertId();
        $this->pegaDados($id);

        header("Location: ../phppaginas/index.php");
    }

    public function cadastrarOng($email,$instituicao,$senha,$registro,$cnpj){
        $senha = md5($senha);

        $sql = "INSERT INTO instituicao SET instituicao_ong = '$instituicao', email_ong = '$email', 
        registro_ong = '$registro', cnpj_ong = '$cnpj', senha_ong = '$senha'";

        $sql = $this->pdo->query($sql);
        var_dump("asijbdajsi");
        


    }

    public function verificaEmail($email){

        $sql = "SELECT * FROM usuario WHERE email_usuario = :email";

		$sql = 	$this->pdo->prepare($sql);
        $sql->bindValue(':email', $email);
        $sql->execute();

		if ($sql->rowCount() > 0){ 
			return true;
		}else{
			return false;
		}
    }

    public function fazerLogin($email, $senha){

        $senha = md5($senha);

        $sql = "SELECT * FROM usuario WHERE email_usuario = :email and senha_usuario = :senha";
        
		$sql = 	$this->pdo->prepare($sql);
        $sql->bindValue(':email', $email);
        $sql->bindValue(':senha', $senha);
        $sql->execute();

		if ($sql->rowCount() > 0){ 
           
            //salva os dados do usuario no token
            foreach ($sql->fetchAll() as $usuario) { 
				$_SESSION['id_usuario'] = $usuario['id_usuario'];
                $_SESSION['nome_usuario'] = $usuario['nome_usuario'];
                $_SESSION['email_usuario'] = $usuario['email_usuario'];
			}
            
            header("Location: ../phppaginas/index.php");
		}else{
            header("Location: ../phppaginas/login.php");
			
		}
    }

    public function pegaDados($id){
        $sql = "SELECT * FROM usuario WHERE id_usuario = '$id'";
        $sql = 	$this->pdo->prepare($sql);
        $sql->execute();

        if ($sql->rowCount() > 0){ 

			foreach ($sql->fetchAll() as $usuario) { 
				$_SESSION['id_usuario'] = $usuario['id_usuario'];
                $_SESSION['nome_usuario'] = $usuario['nome_usuario'];
                $_SESSION['email_usuario'] = $usuario['email_usuario'];
			}
            
		}else{
			return false;
		}
    }
}