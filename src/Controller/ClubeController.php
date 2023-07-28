<?php

declare(strict_types=1);

namespace App\Controller;

use Cake\ORM\TableRegistry;

/**
 * Clube Controller
 *
 */
class ClubeController extends AppController
{
    public function index()
    {
        $tableUsers = TableRegistry::getTableLocator()->get('Users');

        // $users = $tableUsers->find('all', ['limit' => 5, 'order' => 'id desc'])->where(['ID >' => 7]);
        // $users = $tableUsers->query()->where(['id >' => 25])->limit(5);


        // $userEntity = $tableUsers->newEmptyEntity();
        //Caso passe o ID ele fararum UPDATE caso contario um INSERT
        // $userEntity->id = 5;
        // $userEntity->firstName = "Londres";
        // $userEntity->lastName = "Testes";
        // $userEntity->email = "CGLVB@gmail.com";
        // $userEntity->password = password_hash('123', PASSWORD_DEFAULT);

        $saved = $tableUsers->query()->update()->set(
            ['firstName' => "Maria"]
        )->where(['id' => 10])->execute();

        $users = $tableUsers->query()->where(['id >' => 4])->limit(100);
        $this->set(compact('users'));
        $this->render('index', "master");
    }
}
