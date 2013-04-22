<?php

namespace MundiPagg\Entity\Enum;

/**
 * Severity Code Enum
 *
 * @author Carlos Cima
 */
class SeverityCodeEnum
{
    /**
     * Severity Code Enumerator
     */
    const ERROR = 'Error';
    const WARNING = 'Warning';

    public static $severityDescription = array(
        self::ERROR => 'A requisição não foi processada.',
        self::WARNING => 'A requsição foi processada porém um ou mais dados foram enviados de forma incorreta e o Serviço One alterou os mesmos para conseguir realizar a conversão da transação.'
    );

}
