<?php

namespace App\Vo\People;

use Simplon\Helper\VoExportTrait;

class PersonVoExport
{
    use VoExportTrait;

    /**
     * @param PersonVo $personVo
     *
     * @return array
     */
    public static function one(PersonVo $personVo)
    {
        return [
            'id'    => $personVo->getId(),
            'name'  => $personVo->getName(),
            'email' => $personVo->getEmail(),
        ];
    }
} 