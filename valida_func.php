<?php

	
    session_start(); 
    //Incluindo a conexão com banco de dados   
    include_once("conexao.php");    
    //O campo usuário e senha preenchido entra no if para validar
    if((isset($_POST['email_func'])) && (isset($_POST['senha_func']))){
		
		
		
        $usuario = mysqli_real_escape_string($conn, $_POST['email_func']); //Escapar de caracteres especiais, como aspas, prevenindo SQL injection
        $senha = mysqli_real_escape_string($conn, $_POST['senha_func']);
		$senha = md5($_POST['senha_func']);
        //Buscar na tabela usuario o usuário que corresponde com os dados digitado no formulário
        $result_usuario = "SELECT * FROM funcionario WHERE email_func = '$usuario' && senha_func = '$senha' LIMIT 1";
        $resultado_usuario = mysqli_query($conn, $result_usuario);
        $resultado = mysqli_fetch_assoc($resultado_usuario);
        
        //Encontrado um usuario na tabela usuário com os mesmos dados digitado no formulário
        if(isset($resultado)){
			$_SESSION['usuarioId_func'] = $resultado['id_func'];
            $_SESSION['usuarioNome_func'] = $resultado['nome_func'];
            $_SESSION['usuarioEmail_func'] = $resultado['email_func'];
			$_SESSION['usuarioSenha_func'] = $resultado['senha_func'];
            header("Location: perfil.php");
        //Não foi encontrado um usuario na tabela usuário com os mesmos dados digitado no formulário
        //redireciona o usuario para a página de login
        }else{    
            //Váriavel global recebendo a mensagem de erro
            $_SESSION['loginErro'] = "<script language='javascript' type='text/javascript'>alert('Usuário ou senha Inválidos')</script>";
            header("Location: login.php");
        }
    //O campo usuário e senha não preenchido entra no else e redireciona o usuário para a página de login
    }else{
        $_SESSION['loginErro'] = "<script language='javascript' type='text/javascript'>alert('Usuário ou senha Inválidos')</script>";
        header("Location: login.php");
    }
?>