<?php

//Load the model and the view
class Controller {
    protected function model($model) {
        //Require model file
        require_once '../app/models/' . $model . '.php';
        //Instantiate model
        return new $model();
    }

    //Load the view (checks for the file)
    protected function view($view, $data = []) {
        if (file_exists('../app/views/' . $view . '.php')) {
            require_once '../app/views/' . $view . '.php';
        } else {
            die("View does not exists.");
        }
    }

    protected function library($library) {
        //Require library file
        require_once '../app/libraries/' . $library . '.php';
        //Instantiate library
        return new $library();
    }
}
