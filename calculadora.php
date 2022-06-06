
<h1>Calculadora</h1>
<form action="" method="post">
    <input name="valor01" type="text" placeholder="0"><br/><br/>
    <input name="valor02" type="text" placeholder="0"><br/><br/>

    <button name="soma">Somar</button>
    <button name="subtrair">Subtrair</button>
    <button name="multiplicar">Multiplicar</button>
    <button name="dividir">Dividir</button>

</form>

<?php

if($_POST){
    if(isset($_POST['soma'])){
        echo "Resultado: ".$_POST['valor01'] + $_POST['valor02'];
    }
    if(isset($_POST['subtrair'])){
        echo "Resultado: ".$_POST['valor01'] - $_POST['valor02'];
    }
    if(isset($_POST['multiplicar'])){
        echo "Resultado: ".$_POST['valor01'] * $_POST['valor02'];
    }
    if(isset($_POST['dividir'])){
        echo "Resultado: ".$_POST['valor01'] / $_POST['valor02'];
    }
}