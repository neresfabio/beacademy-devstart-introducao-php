<select name="" id="">
    <option selected>--Selecione o Ano--</option>

    <?php
        $ano = 2022;

        while ($ano>= 1900){
            echo "<option value=\"$ano\">$ano</option>";
            $ano--;
        }
    
    ?>
</select>
<select name="" id="">
    <option selected>--Selecione o Ano--</option>

    <?php
        $ano1 = 1900;

        while ($ano <= 2022){
            echo "<option value=\"$ano\">$ano</option>";
            $ano++;
        }
       
    ?>
</select>