<?php
namespace MyApplication\controller;
use MyApplication\model\ModelInterface;

/**
 * Description of PessoaController
 *
 * @author Tayron
 */
class PessoaController 
{
    /**
     *
     * @var ModelInterface
     */
    private $pessoaModel;
    
    /**
     * 
     * @param ModelInterface $pessoaModel
     */
    public function __construct(ModelInterface $pessoaModel) 
    {
        $this->pessoaModel = $pessoaModel;
    }
    
    /**
     * 
     */
    public function salvar($nomePessoa)
    {
        try{
            $this->pessoaModel->setNome($nomePessoa);
            $this->pessoaModel->salvar();   
            return 'Dados salvo com sucesso';
        } catch (Exception $ex) {
            return 'Não foi possível salvar os dados: <br />' . $ex->getMessage();
        }

    }
}
