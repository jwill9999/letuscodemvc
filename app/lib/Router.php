<?php
/*
 * App Core Class
 * Creates URL & loads core controller
 * URL FORMAT - /controller/method/_params
 */
class Router extends Parser
{
    protected $_controller = 'index';
    protected $_method = 'index';
    protected $_params = [];

    public function __construct()
    {

        $url = Parser::getUrl();

        $this->setController($url);

        // Check for second part of url
        $this->setMethod($url);

        // Get _params
        $this->setParams($url);

        // Call a callback with array of _params
        call_user_func_array([$this->_controller, $this->_method], $this->_params);
    }

}
