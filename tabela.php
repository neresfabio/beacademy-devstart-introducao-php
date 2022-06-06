<h1>Entrada</h1>
<form action="" method="post">
    <input name="nome" type="text" placeholder="Nome" required><br>
    <input name="numero" type="text" placeholder="93 00000-0000" required><br>

    <button name="salvar">Salvar</button>
</form>

<?php

if($_POST){
    $tabela = '<h2>Tabela</h2>';
    //crie uma variável para receber o código da tabela
    $tabela .= '<table border="1">';//abre table
    $tabela .='<thead>';//abre cabeçalho
    $tabela .= '<tr>';//abre uma linha
    $tabela .= '<th>Nome</th>'; // colunas do cabeçalho
    $tabela .= '<th>Numero</th>';
    $tabela .= '</tr>';//fecha linha
    $tabela .='</thead>'; //fecha cabeçalho
    $tabela .='<tbody>';//abre corpo da tabela
    /*Se você tiver um loop para exibir os dados ele deve ficar aqui*/
    if(isset($_POST['salvar'])){
    $tabela .= '<tr>'; // abre uma linha
    $tabela .= '<td>'.$_POST['nome'].'</td>'; // coluna nome
    $tabela .= '<td>'.$_POST['numero'].'</td>'; //coluna numero
    $tabela .= '</tr>'; // fecha linha
    }
    /*loop deve terminar aqui*/
    $tabela .='</tbody>'; //fecha corpo
    $tabela .= '</table>';//fecha tabela

    echo $tabela; // imprime
}