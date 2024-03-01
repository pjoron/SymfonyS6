<?php
// tests/Entity/UserTest.php
// namespace App\Tests\Entity;

// use App\Entity\User;
// use App\Entity\Subs;
// use App\Entity\Pdf;
// use PHPUnit\Framework\TestCase;
// use Doctrine\Common\Collections\ArrayCollection;

// class UserTest extends TestCase
// {
//     public function testGetterAndSetter()
//     {
//         // Création d'une instance de l'entité User
//         $user = new User();

//         // Définition de données de test
//         $email = 'test@test.com';
//         $roles = ['ROLE_USER', 'ROLE_ADMIN'];
//         $password = 'password123';
//         $firstname = 'John';
//         $lastname = 'Doe';
//         $dateEndSubs = new \DateTime('+1 year');
//         $createdAt = new \DateTimeImmutable('now');
//         $updateAt = new \DateTime('now');
//         $subscription = new Subs(); // Assuming Subs is another Entity
//         $pdf = new Pdf(); // Assuming Pdf is another Entity

//         // Utilisation des setters
//         $user->setEmail($email)
//              ->setRoles($roles)
//              ->setPassword($password)
//              ->setFirstname($firstname)
//              ->setLastname($lastname)
//              ->setDateEndSubs($dateEndSubs)
//              ->setCreatedAt($createdAt)
//              ->setUpdateAt($updateAt)
//              ->setSubscriptionId($subscription)
//              ->addPdf($pdf);

//         // Vérification des getters
//         $this->assertEquals($email, $user->getEmail());
//         $this->assertEquals($roles, $user->getRoles());
//         $this->assertEquals($password, $user->getPassword());
//         $this->assertEquals($firstname, $user->getFirstname());
//         $this->assertEquals($lastname, $user->getLastname());
//         $this->assertEquals($dateEndSubs, $user->getDateEndSubs());
//         $this->assertEquals($createdAt, $user->getCreatedAt());
//         $this->assertEquals($updateAt, $user->getUpdateAt());
//         $this->assertEquals($subscription, $user->getSubscriptionId());

//         // Pour vérifier les PDFs, on s'attend à ce qu'ils soient stockés dans une Collection
//         $this->assertInstanceOf(ArrayCollection::class, $user->getPdfs());
//         $this->assertTrue($user->getPdfs()->contains($pdf));

//         // Test removePdf
//         $user->removePdf($pdf);
//         $this->assertFalse($user->getPdfs()->contains($pdf));
//     }
// }
