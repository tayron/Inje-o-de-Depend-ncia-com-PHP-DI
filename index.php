<?php
require_once('bootstrap.php');

$container = DI\ContainerBuilder::buildDevContainer();
$pessoaController = $container->get('MyApplication\controller\PessoaController');
$pessoaController->salvar('Pedro', 'asdf', 'asdfad');

//use MyApplication\model\Model;
//use MyApplication\model\PessoaModel;
//use MyApplication\controller\PessoaController;
//
//$model = new Model();
//$pessoaModel = new PessoaModel($model);
//$pessoaController = new PessoaController($pessoaModel);
//$pessoaController->salvar('Pedro');
