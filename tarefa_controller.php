<?php

    require '../app_lista_tarefas/tarefa.model.php';
    require '../app_lista_tarefas/tarefa.service.php';
    require '../app_lista_tarefas/conexao.php';
   
    $acao = isset($_GET['acao']) ? $_GET['acao'] == 'inserir' : $acao;

    if($acao == 'inserir' ) {
        $tarefa = new Tarefa();
        $tarefa->__set('tarefa', $_POST['tarefa']);

        $conexao = new Conexao();
        
        $tarefaService = new TarefaService($conexao, $tarefa);
        $tarefaService->inserir();

        header('location: nova_tarefa.php?inclusao=1');
    }else if($acao == 'recuperar') {
        echo 'Chegamos até aqui';
    }

?>