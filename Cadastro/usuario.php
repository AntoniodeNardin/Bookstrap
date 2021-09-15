<?php
if(isset($_POST['nome'],$_POST['funcao'],$_POST['data_de_nascimento'])){
    $account = [
        'nome' => $_POST['nome'],
        'cpf' => $_POST['cpf'],
        'data_de_nascimento' => $_POST['data_de_nascimento'],
        'email' => $_POST['email'],
        'telefone' => $_POST['telefone'],
        'estilo_literario' => $_POST['estilo_literario'],
        'endereco' => $_POST['endereco'],
    ];
    
    try {
      require '../conexão/conexão.php';
        $query = $con->prepare("insert into Usuarios(nome, data_de_nascimento, cpf, email, telefone, estilo_literario, endereco) values (:nome, :data_de_nascimento, :cpf, :email, :telefone, :estilo_literario, :endereco )")->execute($account);
        echo '<button class = "button button-primary">Salvo com sucesso</button>';
        header('location:../lista/listaCRUD.php');
    
    }catch (PDOException $exception){
        echo $exception->getMessage();
    }

};
?>