<?php
namespace App\Tests\Entity;
use App\Entity\Commentaire;
use App\Entity\Reservation;
use PHPUnit\Framework\TestCase;
class CommentaireTest extends TestCase
{
    public function testUri()
    {
        $com = new Commentaire();
        $uri = "Test 2";
        
        $com->setTexte($uri);

    }
}