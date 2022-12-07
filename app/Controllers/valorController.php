<?php
namespace App\Controllers;

use Core\Controller;
use App\Models\Funcionario;
use Core\Request;

class valorController extends Controller {
    
    public function valor(Request $request) {
        $data = $request->getParams();
        
        
        // var_dump($user);

        // $funcionario = new Funcionario();
        
        // $funcionarios = [
        //     'user' => [
        //         'nome' => $funcionario->setNome($_POST['nome']),
        //         'salario' => $funcionario->setSalario($_POST['salario']),
        //         'departamento' => $funcionario->setSalario($_POST['departamento']),
        //         'salarioNovo' => $funcionario->salarioDepto(),
        //     ]

        // ];

        $this->view('valor', ['user' => $data['post']]);
    }
}
