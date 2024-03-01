<?php
// tests/Entity/SubsTest.php
// namespace App\Tests\Entity;

// use App\Entity\Subs;
// use App\Entity\User;
// use PHPUnit\Framework\TestCase;
// use Doctrine\Common\Collections\ArrayCollection;

// class SubsTest extends TestCase
// {
//     public function testGetterAndSetter()
//     {
//         // Création d'une instance de l'entité Subs
//         $subs = new Subs();

//         // Définition de données de test
//         $title = 'Basic Subscription';
//         $description = 'This is a basic subscription plan.';
//         $media = 'image.jpg';
//         $limitsPdf = 10;
//         $price = 9.99;
//         $user = new User(); // Assuming User is another Entity related to Subs

//         // Utilisation des setters
//         $subs->setTitle($title)
//              ->setDescription($description)
//              ->setMedia($media)
//              ->setLimitsPdf($limitsPdf)
//              ->setPrice($price)
//              ->addUser($user);

//         // Vérification des getters
//         $this->assertEquals($title, $subs->getTitle());
//         $this->assertEquals($description, $subs->getDescription());
//         $this->assertEquals($media, $subs->getMedia());
//         $this->assertEquals($limitsPdf, $subs->getLimitsPdf());
//         $this->assertEquals($price, $subs->getPrice());

//         // Vérification de la relation avec User
//         $this->assertInstanceOf(ArrayCollection::class, $subs->getUsers());
//         $this->assertTrue($subs->getUsers()->contains($user));

//         // Test removeUser
//         $subs->removeUser($user);
//         $this->assertFalse($subs->getUsers()->contains($user));
//     }
// }
