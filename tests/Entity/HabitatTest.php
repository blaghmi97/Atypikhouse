<?php
namespace App\Tests\Entity;
use App\Entity\Habitat;

use PHPUnit\Framework\TestCase;
class HabitatTest extends TestCase
{
    public function testUri()
    {
        $hab = new Habitat();
        $hab->setType("cabane");
        $hab->setAdresse("rue laile");
        $hab->setCodepostale(92441);
        $hab->setDatePub(date_create(02-10-2022));
        $hab->setDescription("ca bane cool");
        $hab->setNombreCouchage(4);
        $hab->setPays("france");
        $hab->setPrix(5,14);
        $this->addToAssertionCount(1);

    }
}