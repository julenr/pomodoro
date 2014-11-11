<?php

// app/models/Task.php

class Task extends Eloquent {
        // let eloquent know that these attributes will be available for mass assignment
	protected $fillable = array('task'); 
}

