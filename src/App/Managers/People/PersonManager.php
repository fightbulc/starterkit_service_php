<?php

namespace App\Managers\People;

use App\Vo\People\PersonVo;
use Simplon\Helper\SingletonTrait;

class PersonManager
{
    use SingletonTrait;

    /**
     * @param $id
     *
     * @return PersonVo
     */
    public function getPersonData($id)
    {
        $personVo = (new PersonVo())
            ->setId($id)
            ->setName('Foo Bar')
            ->setEmail('foo@bar.com');

        return $personVo;
    }
} 