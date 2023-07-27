<?php

declare(strict_types=1);

namespace App\Controller;

use Cake\Datasource\ConnectionManager;

/**
 * About Controller
 *
 */
class AboutController extends AppController
{
    public function index()
    {
        // Define qual BD vai se comunicar
        $conmection = ConnectionManager::get('default');

        //Insert usando classe de conexão
        // $conmection->execute(
        //     'insert into users(firstName, lastName, email, password) values (:firstName, :lastName, :email, :password)',
        //     ['firstName' => "Cássio", 'lastName' => "Gabriel", 'email' => "cassioriachinho@gmail.com", 'password' => password_hash('123', PASSWORD_DEFAULT)]
        // );
        //Update usando classe de conexão
        // $conmection->execute(
        //     'update users set firstName = :firstName where id = :id',
        //     ["firstName" => "Teste", "id" => 14]
        // );

        // Busca no banco os users com id especificos
        // $users = $conmection->execute('select * from users where id > :id', ['id' => 3])->fetchAll('obj');

        // $conmection->update('users', ['firstName' => "Naruto"], ['id' => 18]);

        //O Begin e o Commit evita que parte do codigo seja executado caso exista algum erro
        // $conmection->begin();
        // $conmection->execute(
        //     'update users set firstName = :firstName where id = :id',
        //     ["firstName" => "Teste14", "id" => 14]
        // );
        // $conmection->execute(
        //     'update users set firstName2 = :firstName where id = :id',
        //     ["firstName" => "TesteCommit", "id" => 10]
        // );
        // $conmection->commit();
        $users = $conmection->newQuery()->select('*')->from('users')->where(['id >' => 5])->execute()->fetchAll('obj');
        $this->set(compact('users'));
        $this->render('index', "master");
    }
}
