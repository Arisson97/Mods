<?php
/**
 *      Sorlaker
*/
function encontraProximoPrimo($aPartirDe){
        $ePrimo = false;
        $aPartirDe += 1;
        while(!$ePrimo){
                $resultado = false;
                for ($i = 2; $i < $aPartirDe; $i++){
                        if ($aPartirDe%$i == 0){
                                $resultado = true;
                                break;
                        }
                }
                if ($resultado) $aPartirDe++;
                else $ePrimo = true;
        }
        return $aPartirDe;
}
function encontraDivisores($number){
        $fatores = array();
        for ($i = 1; $i < $number; $i++){
                if ($number%$i == 0){
                        $fatores[] = $i;
                }
        }
        return $fatores;
}
function fatora($number){ //isso aqui eu fiz de bobo. nao era para encontrar os fatores dele. mas demorei tanto que vou botar aqui.
        $fatores = array();
        $fatores[] = 1;
        $numeroPrimo = 2;
        while($number != 1){
                while ($number%$numeroPrimo == 0){
                        $fatores[] = $numeroPrimo;
                        $number = $number/$numeroPrimo;
                }
                $numeroPrimo = encontraProximoPrimo($numeroPrimo);
        }
        //print_r($fatores); //os fatores estao aqui. basta descomentar esta linha para ver
        return array_sum($fatores); //a funcao array_sum soma todos os itens de um array
}
?>
<form action="" method="post">
        Teste se o numero e perfeito : <input type="text" name="numero"/><br><input type="submit"/>
</form>
<?php
 
if ($_POST){
        echo "<hr>";
        $number = $_POST['numero'];
        $fatores = array_sum(encontraDivisores($number)); //return sera um array. entao usarei a funcao array_sum para somar todos os valores
        if ($fatores == $number){
                echo "O numero $number e perfeito.";
        }
        else{
                echo "O numero $number nao e perfeito.";
        }
}
?>
//Code off
