<?php

use PHPUnit\Framework\TestCase;
require  '../models/Task.php';


class HelloWorldTest extends TestCase
{
    public function testTaskClass()
    {
        $task = new Task();

        $this->assertInstanceOf(Task::class, $task);
    }

    /**
     * @test
     */
    public function can_create_a_task_with_a_name()
    {
        //1 preparar 2 ejectuar 3 asseert

        $task = new Task('Comprar pa',false);
        $this->assertEquals('Comprar pa', $task->name);
        echo $task->name;

        //Array association
        //$task

    }

    public function can_create_a_task_with_an_status()
    {
        //1 preparar 2 ejectuar 3 asseert

        $task = new Task('Comprar pa', false);
        $this->assertEquals('Comprar pa', $task->name);
        $this->assertEquals(false, $task->completed);

//        echo  $task->name;
//        echo  $task->completed;
    }
        /** @test */

        public function can_complete_a_task()
        {
        // 1 Prepare
        $task = new Task('Comprar pa',false);
        // 2 Executar
        $task->complete();
        $this->assertEquals(true,$task->completed);

        }
            /**
             * @test
             */
            public function tasks()
            {
                // 1) Prepare 2) Executar 3) Assert
                require_once('../tasks.php');
            }


            //Array association
            //$task




}