<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use App\Entity\User;

class UserFixtures extends Fixture
{

       private $passwordEncoder;

     public function __construct(UserPasswordEncoderInterface $passwordEncoder)
     {
         $this->passwordEncoder = $passwordEncoder;
    }

public function load(ObjectManager $manager)
{
    $user = new User();

    $user->setPassword($this->passwordEncoder-> encodePassword($user, 'admin'));
    $user->setEmail('admin123@gmail.com');
    $user->setUsername('Admin');

    $manager->persist($user);

    $manager->flush();
}
}
