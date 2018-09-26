<?php

use PHPUnit\Framework\TestCase;

class AppTest extends TestCase {

    /**
     * @test
     */
    public function check_container_can_bind_and_resolve()
    {
        //Prepare
        //Execute
        //IOC -> Inversion of Control Container
//        App::bind() //set

        $config = [
            'database' => [
                'type' => 'mysql',
                'host' => '127.0.0.1',
                'name' => 'php_learning',
                'user' => 'debian',
                'password' => 'XZvcnv9GqJ3DXLXl',
                'options' => [
                    'PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION'
                ],
            ]
        ];
        App::bind('config', $config);

//    $app-> =['config'=> $config];

//    App::resolve('config');
        $this->assertEquals($config,App::resolve('config'));

        //App::resolve()-> get
        //representa el estat de la meva aplicaccio

        //Database
        //config
        //catche
        //Routes

        //assert
//        $this->assert


    }
    /**
     * @test
     */
    public function throws_an_error_when_trying_to_acess_an_unexisting_value ()
    {
        try {
            App::resolve('configuracio');
        } catch (Exception $e) {
            $this->assertEquals($e->getmessage(),'No config found in registry');
        }
    }
}