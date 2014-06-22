<?php

namespace App\Services\Pub;

use App\Managers\People\PersonManager;
use App\Vo\People\PersonVoExport;

class PeopleService
{
    /**
     * @param $id
     *
     * @return array
     */
    public function getPerson($id)
    {
        $personVo = PersonManager::getInstance()->getPersonData($id);

        return PersonVoExport::one($personVo);
    }
} 