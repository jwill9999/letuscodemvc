<?php

class Parser
{

    public static function getUrl()
    {
        if (isset($_GET['url'])) {
            $url = rtrim($_GET['url'], '/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);
            return $url;
        }

    }

    public function setController($url)
    {
        if (file_exists('../app/controllers/' . ucwords($url[0]) . '.php')) {
            // If exists, set as controller
            $this->_controller = ucwords($url[0]);
            // Unset 0 Index
            unset($url[0]);
        } 
    }

    public function setMethod($url)
    {
        if (isset($url[1])) {
            // Check to see if method exists in controller
            if (method_exists($this->_controller, $url[1])) {
                $this->_method = $url[1];
                // Unset 1 index
                unset($url[1]);
            } 

        }

        // Require the controller
        require_once '../app/controllers/' . $this->_controller . '.php';

        // Instantiate controller class
        $this->_controller = new $this->_controller;

    }

    public function setParams($url)
    {
        $this->_params = $url ? array_values($url) : [];
    }
}
