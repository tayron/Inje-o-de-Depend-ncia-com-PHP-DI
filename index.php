<?php
require_once('bootstrap.php');

try{
    $builder = new \DI\ContainerBuilder();
    $builder->useAutowiring(false);
    $builder->useAnnotations(false);
    $builder->addDefinitions('/src/config/injection/config.php');
    $container = $builder->build();
    $pessoaController = $container->get('PessoaController');
    echo $pessoaController->salvar('Pedro');
} catch (\Exception $ex){
    echo $ex->getMessage();
}

//use MyApplication\model\Model;
//use MyApplication\model\PessoaModel;
//use MyApplication\controller\PessoaController;
//
//$model = new Model();
//$pessoaModel = new PessoaModel($model);
//$pessoaController = new PessoaController($pessoaModel);
//$pessoaController->salvar('Pedro');
