<?php

namespace MundiPagg\Entity;

/**
 * Abstract Entity
 *
 * @author Carlos Cima
 */
class AbstractEntity
{

    public function __toString()
    {
        $class = explode('\\', get_class($this));
        return end($class);
    }
}
