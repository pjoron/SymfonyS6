<?php
// tests/Entity/PdfTest.php
namespace App\Tests\Entity;

use App\Entity\Pdf;
use App\Entity\User;
use PHPUnit\Framework\TestCase;

class PdfTest extends TestCase
{
    public function testGetterAndSetter()
    {
        // Création d'une instance de l'entité Pdf
        $pdf = new Pdf();

        // Définition de données de test
        $createdAt = new \DateTimeImmutable('now');
        $user = new User(); // Assuming User is another Entity related to Pdf

        // Utilisation des setters
        $pdf->setCreatedAt($createdAt)
            ->setUserId($user);

        // Vérification des getters
        $this->assertEquals($createdAt, $pdf->getCreatedAt());
        $this->assertEquals($user, $pdf->getUserId());
    }
}
