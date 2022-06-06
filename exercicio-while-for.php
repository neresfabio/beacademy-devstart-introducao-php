<select name="" id="">
    <option selected>--Selecione o Dia--</option>
    <?php
    $dia = 31;
        while($dia > 0){
            echo "<option>{$dia}</option>";
            $dia--;
        }
    ?>
</select>
<select name="" id="">
    <option selected>--Selecione o Mês--</option>
    <?php
    $meses = ['Janeiro','Fevereiro','Março','Abril','Maio','Junho','Julho','Agosto','Setembro','Outubro','Novembro','Dezembro'];
        for($i = 0; $i < count($meses); $i++){
            echo "<option>{$meses[$i]}</option>";
        }
    ?>
</select>
<select name="" id="">
    <option selected>--Selecione o Ano--</option>
    <?php
    $ano = 2022;
        for($i = $ano; $i > 1900; $i--){
            echo "<option>{$i}</option>";
        }
    ?>
</select>