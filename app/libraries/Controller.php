<?php
/**
 * Base Controller
 * Loads the models and views
 * 
 */

class Controller 
{

    public function model($model)
    {
        require_once "../app/models/{$model}.php";
        return new $model();
    }

    public function services($services){
        // Require servi file
        require_once '../app/services/implementations/' . $services . '.php';
  
        // Instatiate servi
        return new $services();
      }

    public function view($view, $data = [])
    {
        if (file_exists("../app/views/{$view}.php")) {
            require_once "../app/views/{$view}.php";
        } else {
            die("View $view does not exist!");
        }
    }
}