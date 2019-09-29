<?php

declare(strict_types=1);

namespace App\DataFixtures;

use Doctrine\Common\Persistence\ObjectManager;

class AppFixtures extends BaseFixture
{
    public function loadData(ObjectManager $manager): void
    {
        $this->createMany(10, 'basic', function (int $i): void {
//                  $user = new User();
//                  $user->setFirstName($this->faker->firstName);
//
//                   return $user;
        });
        $manager->flush();
    }
}
