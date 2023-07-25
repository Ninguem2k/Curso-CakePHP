<?php

declare(strict_types=1);

use Migrations\AbstractSeed;
use Faker\Factory;

/**
 * User seed.
 */
class UserSeed extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeds is available here:
     * https://book.cakephp.org/phinx/0/en/seeding.html
     *
     * @return void
     */
    public function run(): void
    {
        $data = [];

        $faker = Factory::create();

        for ($i = 0; $i < 20; $i++) {
            $data['firstName'] = $faker->firstName();
            $data['lastName'] = $faker->lastName();
            $data['email'] = $faker->unique()->email;
            $data['password'] = password_hash('123', PASSWORD_DEFAULT);
            $table = $this->table('users');
            $table->insert($data)->save();
        }
    }
}
