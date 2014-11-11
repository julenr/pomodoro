<?php
// app/database/seeds/taskTableSeeder.php

class tasksTableSeeder extends Seeder 
{

	public function run()
	{
		DB::table('tasks')->delete();

		Tasks::create(array(
			'task' => 'refactor main module',
		));

		Tasks::create(array(
			'task' => 'redesing footer',
		));

		Tasks::create(array(
			'task' => 'improve performance',
		));
		
	}

}
