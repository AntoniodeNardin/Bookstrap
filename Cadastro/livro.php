<?php
if(isset($_POST['titulo'],$_POST['autor'],$_POST['resumo'],$_POST['faixa-etaria'],$_POST['numero-de-paginas'],$_POST['lancamento'],$_POST['valor'],$_POST['editora'],$_POST['tipo-de-capa'],$_POST['capa'])){
    
    $account = [
        'titulo' => $_POST['titulo'],
        'autor' => $_POST['autor'],
        'resumo' => $_POST['resumo'],
        'faixa-etaria' => $_POST['faixa-etaria'],
        'lancamento' => $_POST['lancamento'],
        'valor' => $_POST['valor'],
        'editora' => $_POST['editora'],
        'tipodecapa' => $_POST['tipodecapa'],
        'capa' => $_FILE['capa'],
        'numero-de-paginas' => $_POST['numero-de-paginas'],
    ];
    
    try {
      require '../conexao/conexao.php';
        $query = $con->prepare("insert into Livros(titulo, autor, resumo, faixa-etaria, numero-de-paginas, lancamento, valor, editora, tipodecapa,capa) values (:titulo, :autor, :resumo, :faixa-etaria, :numero-de-paginas, :lancamento, :valor, :editora, :tipodecapa, :capa )")->execute($account);
        echo '<button class = "button button-primary">Salvo com sucesso</button>';
        header('location:../lista/listaCRUD.php');
    
    }catch (PDOException $exception){
        echo $exception->getMessage();
    }

};
?>