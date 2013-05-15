<?php

namespace MundiPagg\Entity;

/**
 * Recurrency Entity
 *
 * @author Carlos Cima
 */
class Recurrency extends AbstractEntity
{

    /**
     * Data que inicia a cobrança.
     * Caso a data seja inválida, para não perder a aprovação da transação,
     * será utilizada a informação pré-configurada.
     * 
     * Obrigatoriedade: Não Obrigatório.
     * 
     * @var \DateTime $DateToStartBilling
     * @access public
     */
    public $DateToStartBilling;

    /**
     * Tipo de frequência (Ex: Semanal,Trimestral).
     * 
     * Obrigatoriedade: Não Obrigatório.
     * 
     * @see \MundiPagg\Entity\Enum\FrequencyEnum
     * @var string $FrequencyEnum
     * @access public
     */
    public $FrequencyEnum;

    /**
     * Número de intervalo da frequência(Ex:1 x mensal)
     * 
     * Obrigatoriedade: Obrigatório.
     * 
     * @var int $Interval
     * @access public
     */
    public $Interval;

    /**
     * Caso a loja informe o valor true ou não informe um valor para o mesmo,
     * será realizado uma transação de teste para garantir a veracidade
     * dos dados do cartão.
     * Obs: A transação de teste terá o valor de R$ 1,00 e não será capturada.
     * 
     * Obrigatoriedade: Não Obrigatório.
     * 
     * @var boolean $OneDollarAuth
     * @access public
     */
    public $OneDollarAuth;

    /**
     * Número de recorrências.
     * Caso seja enviado o campo nulo ou com valor zero a recorrência
     * será tratada como infinita. O número máximo de recorrências
     * criadas é de 12.
     * 
     * Obrigatoriedade: Não Obrigatório.
     * 
     * @var int $Recurrences
     * @access public
     */
    public $Recurrences;

}
