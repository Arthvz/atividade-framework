<?php
namespace App\Controllers;

use Core\Controller;
use App\Models\Funcionario;
use Core\Request;

class salarioDepto extends Controller {

    public function salarioDepto(){
        $salario = $_POST['salario'];
        $departamento = $_POST['departamento'];
        $nome = $_POST['nome'];

        if($salario > 600) {
            switch ($departamento()) {
                case "T.I.":
                    $atualS = $salario + $salario * 15 / 100;
                    echo $nome . ' você que é do departamento ' . $departamento . ' teve um aumento de salário de 15% e seu salário agora é: ' . $atualS;
                    break;
                case "ADM":
                    $atualS = $salario + $salario * 5 / 100;
                    echo $nome . ' você que é do departamento ' . $departamento . ' teve um aumento de salário de 5% e seu salário agora é: ' . $atualS;
                    break;
                case "R.H.":
                    $atualS = $salario + $salario * 10 / 100;
                    echo $nome . ' você que é do departamento ' . $departamento . ' teve um aumento de salário de 10% e seu salário agora é: ' . $atualS;
                    break;
            }
        } else {
            echo 'Salário inválido!! Tente novamente!!';
        }
        
        $salarioNovo = new salarioDepto();

        $this->view('valor', $salarioNovo);
    }
}