<?php
namespace MyApplicationTest\controller;

use MyApplication\controller\PessoaController;

/**
 * PessoaControllerTest
 * 
 * Execmplo de teste unitário utilizando PHPUnit
 * 
 * Para executar basta executar o comando no diretório raiz:
 * ./vendor/bin/phpunit
 *
 * @author Tayron Miranda <dev@tayron.com.br>
 */
class PessoaControllerTest extends \PHPUnit_Framework_TestCase
{
    /**
     *
     * @var PessoaController
     */
    private $pessoaController;
    
    
    /**
     * PessoaControllerTest::__construct
     */
    public function __construct() 
    {
        // Crio um mock da minha classe Usuário com o método teste.
        $pessoaModel = $this->getMockBuilder('MyApplication\model\PessoaModel')
            ->disableOriginalConstructor()
            ->getMock();

        $this->pessoaController = new PessoaController($pessoaModel);
    }
    
    
    /**
     * PessoaControllerTest::testSalvar
     * 
     * Testa método salvar
     * 
     * @return void
     */
    public function testSalvar()
    {
        try{
            $retorno = $this->pessoaController->salvar('Pedro');    
            $this->assertEquals($retorno, 'Dados salvo com sucesso');
        } catch ( Exception $ex){
            $this->assertFalse(false, $ex->getMessage());
        }
    }
}
