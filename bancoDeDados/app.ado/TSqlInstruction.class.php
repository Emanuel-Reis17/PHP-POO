<?php
/**
 * Classe  TSqlInstruction
 * Esta classe provê os métodos em comum entre todas instruções
 * SQL (SELECT, INSERT, DELETE, UPDATE)
 */
abstract class TSqlInstruction
{
    protected $sql;      // armazena a instrução SQL
    protected $criteria; // armazena o objeto critério

    /**
     * método setEntity()
     * define o nome da entidade (tabela) manioula pela instrução SQL
     * @param $entity = tabela
     */
    final public function setEntity($entity)
    {
        $this->entity = $entity;
    }

    /**
     * método getEntity()
     * retorna o nome da entidade (tabela)
     */
    final public function getEntity()
    {
        return $this->entity;
    }

    /**
     * método setCriteria()
     * Define um criterio de seleção dos dados através da composição de um objeto
     * do tipo TCriteria, que fornece uma interface para a definição de critérios
     * @param $criteria = objeto do tipo TCriteria
     */
    public function setCriteria(TCriteria $criteria)
    {
        $this->criteria = $criteria;
    }

    /**
     * método getInstruction
     * declarando-o como <abstract> obrigamos sua declaração nas classes filhas
     * uma vez que seu comportamento será distinto em cada uma delas, configurando polimorfismo
     */
    abstract function getInstruction();
}