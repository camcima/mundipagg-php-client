<?php

namespace MundiPagg\Entity\Enum;

/**
 * Error Category Enum
 *
 * @author Carlos Cima
 */
class ErrorCategoryEnum
{

    /**
     * Error Category Enumerator
     */
    const REQUEST_ERROR = 'RequestError';
    const THIRD_PARTY_ERROR = 'ThirdPartyError';
    const SYSTEM_ERROR = 'SystemError';

    public static $errorDescription = array(
        self::REQUEST_ERROR => 'Dado inválido informado para o contrato do serviço.',
        self::THIRD_PARTY_ERROR => 'Erro em aplicações de terceiros.',
        self::SYSTEM_ERROR => 'Erro inesperado.'
    );

}
