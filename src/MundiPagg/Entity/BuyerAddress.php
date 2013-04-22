<?php

namespace MundiPagg\Entity;

/**
 * BuyerAddress Entity
 *
 * @author Carlos Cima
 */
class BuyerAddress extends AbstractEntity
{
    /**
     * Tipo de Endereço.
     * 
     * Obrigatoriedade: Não Obrigatório.
     * 
     * @see \MundiPagg\Entity\Enum\AddressTypeEnum
     * @var string $AddressTypeEnum
     * @access public
     */
    public $AddressTypeEnum;

    /**
     * Cidade
     * 
     * Obrigatoriedade: Obrigatório para gestão de fraude.
     * 
     * @var string $City
     * @access public
     */
    public $City;

    /**
     * Complemento
     * 
     * Obrigatoriedade: Não Obrigatório.
     * 
     * @var string $Complement
     * @access public
     */
    public $Complement;

    /**
     * País
     * 
     * Obrigatoriedade: Não Obrigatório.
     * 
     * @see \MundiPagg\Entity\Enum\CountryEnum
     * @var string $CountryEnum
     * @access public
     */
    public $CountryEnum;

    /**
     * Bairro
     * 
     * Obrigatoriedade: Obrigatório para gestão de fraude.
     * 
     * @var string $District
     * @access public
     */
    public $District;

    /**
     * Número
     * 
     * Obrigatoriedade: Obrigatório para gestão de fraude.
     * 
     * @var string $Number
     * @access public
     */
    public $Number;

    /**
     * Estado
     * 
     * Obrigatoriedade: Obrigatório para gestão de fraude.
     * 
     * @var string $State
     * @access public
     */
    public $State;

    /**
     * Rua
     * 
     * Obrigatoriedade: Obrigatório para gestão de fraude.
     * 
     * @var string $Street
     * @access public
     */
    public $Street;

    /**
     * Código Postal do endereço (CEP).
     * 
     * Obrigatoriedade: Obrigatório para gestão de fraude.
     * 
     * @var string $ZipCode
     * @access public
     */
    public $ZipCode;

}
