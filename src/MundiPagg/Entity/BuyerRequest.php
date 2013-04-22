<?php

namespace MundiPagg\Entity;

/**
 * BuyerRequest Entity
 *
 * @author Carlos Cima
 */
class BuyerRequest extends AbstractEntity
{
    /**
     * Coleção de Endereços do Buyer
     * 
     * Obrigatoriedade: Não Obrigatório.
     * 
     * @see \MundiPagg\Entity\BuyerAddress
     * @var array $BuyerAddressCollection
     * @access public
     */
    public $BuyerAddressCollection;

    /**
     * Identificação do cliente junto a plataforma One. (GUID)
     * 
     * Obrigatoriedade: Não Obrigatório.
     * 
     * @var string $BuyerKey
     * @access public
     */
    public $BuyerKey;

    /**
     * Identificação do Buyer junto a loja.
     * 
     * Obrigatoriedade: Não Obrigatório.
     * 
     * @var string $BuyerReference
     * @access public
     */
    public $BuyerReference;

    /**
     * Data de cadastro do usuário na loja.
     * 
     * Obrigatoriedade: Não Obrigatório.
     * 
     * @var \DateTime $CreateDateInMerchant
     * @access public
     */
    public $CreateDateInMerchant;

    /**
     * E-mail do Buyer.
     * 
     * Obrigatoriedade: Obrigatório para gestão de fraude.
     * 
     * @var string $Email
     * @access public
     */
    public $Email;

    /**
     * Identificação do Buyer no facebook.
     * 
     * Obrigatoriedade: Não Obrigatório.
     * 
     * @var string $FacebookId
     * @access public
     */
    public $FacebookId;

    /**
     * Gênero do Buyer.
     * 
     * Obrigatoriedade: Obrigatório para gestão de fraude.
     * 
     * @see \MundiPagg\Entity\Enum\GenderEnum
     * @var string $GenderEnum
     * @access public
     */
    public $GenderEnum;

    /**
     * Telefone residencial do Buyer.
     * Formato (ddi+ddd+número)
     * 
     * Obrigatoriedade: Obrigatório para gestão de fraude se não enviado WorkPhone ou MobilePhone.
     * 
     * @var string $HomePhone
     * @access public
     */
    public $HomePhone;

    /**
     * Ip do Buyer.
     * 
     * Obrigatoriedade: Obrigatório para gestão de fraude.
     * 
     * @var string $IpAddress
     * @access public
     */
    public $IpAddress;

    /**
     * Data da última atualização do cadastro do usuário na loja.
     * 
     * Obrigatoriedade: Não Obrigatório.
     * 
     * @var \DateTime $LastBuyerUpdateInMerchant
     * @access public
     */
    public $LastBuyerUpdateInMerchant;

    /**
     * Telefone celular do Buyer.
     * Formato (ddi+ddd+número)
     * 
     * Obrigatoriedade: Obrigatório para gestão de fraude se não enviado HomePhone ou WorkPhone.
     * 
     * @var string $MobilePhone
     * @access public
     */
    public $MobilePhone;

    /**
     * Nome do Buyer.
     * 
     * Obrigatoriedade: Não Obrigatório.
     * 
     * @var string $Name
     * @access public
     */
    public $Name;

    /**
     * Tipo de Buyer.
     * 
     * Obrigatoriedade: Obrigatório para gestão de fraude.
     * 
     * @see \MundiPagg\Entity\Enum\PersonTypeEnum
     * @var string $PersonTypeEnum
     * @access public
     */
    public $PersonTypeEnum;

    /**
     * Número do documento informado.
     * 
     * Obrigatoriedade: Obrigatório.
     * 
     * @var string $TaxDocumentNumber
     * @access public
     */
    public $TaxDocumentNumber;

    /**
     * Tipo de documento do Buyer (Ex:CPF,CNPJ).
     * 
     * Obrigatoriedade: Não Obrigatório.
     * 
     * @see \MundiPagg\Entity\Enum\TaxDocumentTypeEnum
     * @var string $TaxDocumentTypeEnum
     * @access public
     */
    public $TaxDocumentTypeEnum;

    /**
     * Identificação do Buyer no Twitter.
     * 
     * Obrigatoriedade: Não Obrigatório.
     * 
     * @var string $TwitterId
     * @access public
     */
    public $TwitterId;

    /**
     * Telefone comercial do Buyer.
     * Formato (ddi+ddd+número)
     * 
     * Obrigatoriedade: Obrigatório para gestão de fraude se não enviado HomePhone ou MobilePhone.
     * 
     * @var string $WorkPhone
     * @access public
     */
    public $WorkPhone;

}
