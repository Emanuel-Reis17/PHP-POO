<?php
/*
"get_class_methods()"     : Retorna um vetor com os nomes dos métodos da classe
"get_class_vars()"        : Retorna um vetor com os nomes das propriedade e seus valores definidos na classe
"get_object_vars()"       : Retorna um vetor com os nomes das propriedade e seus valores atuais do código 
"get_class()"             : Retorna o nome da classe que o objeto pertence
"get_parent_class()"      : Retorna o nome da classe ancestral (classe-pai)
"is_subclass_of()"        : Verifica se uma classe ou objeto é derivada de um determinada classe
"call_user_func()"        : Executa uma função ou um método da classe ou objeto
"method_exists()"         : Verifica se um método existe no objeto
*/

class Funcionario {
    var $Codigo;
    var $Nome;
    var $Salario = 586;
    var $Departamento = 'Contabilidade';

    function SetSalario() {

    }
    function GetSalario() {

    }
    function SetNome() {

    }
    function GetNome() {

    }
    function minhaFuncao() {
        echo 'Minha função!';
    }
};

class Estagiario extends Funcionario {
    var $Salario;
    var $Bolsa;
}

function minhaFuncao() {
    echo 'Minha função!';
}

$emanuel = new Funcionario;
$emanuel->Codigo = 17;
$emanuel->Nome = 'Emanuel Reis';
$emanuel->Salario += 100;
$emanuel->Departamento = 'Desenvolvimento';

$melissa = new Estagiario;
$melissa->Codigo = 77;
$melissa->Nome = 'Melissa Reis';
$melissa->Salario += 100;
$melissa->Departamento = 'Desenvolvimento';
$melissa->Bolsa = '50% de desconto na Estácio';

print_r(get_class_methods('Funcionario'));
print_r(get_class_vars('Funcionario'));
print_r(get_object_vars($emanuel));
print_r(get_class($emanuel));
print_r(get_parent_class($melissa));
echo "\n";
print_r(get_parent_class('Estagiario'));
if (is_subclass_of('Estagiario', 'Funcionario')) {
    echo "A classe Estagiario é derivada de Funcionario\n";
}
if (is_subclass_of($melissa, 'Funcionario')) {
    echo 'A classe do objeto $melissa é derivada Funcionario';
}
if (method_exists($melissa, 'SetSalario')) {
    echo true;
}
call_user_func('minhaFuncao');
call_user_func(array($emanuel, 'minhaFuncao'));