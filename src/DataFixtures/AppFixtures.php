<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;
use App\Entity\Login;
use App\Entity\User;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);


        $faker=Factory::create('fr_FR');
        for ($i=0; $i < 10 ; $i++) { 
            
           $User= new User();
            $User ->setName($faker->name)
                  ->setNumber($faker->realText(200));
                  
       
    
       
            $manager->persist($User);
        }
        for ($i=0; $i < 10 ; $i++) { 
            
            $Login= new Login();
             $Login ->setNumber($faker->realText(200));
                   
        
     
        
             $manager->persist($Login);
         }





        $manager->flush();
    }
}
