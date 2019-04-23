<?php
/*
 * App Router Class extended from Request
 * loads Router controller
 * URL FORMAT - /controller/method/_params
 */
class Server extends Request
{
    public function __construct()
    {
        // get the url
       
        $url = Request::getUrl();
        // set the current Controller
        $this->setController($url);
        // set the method if passed
        $this->setMethod($url);
        // Get _params passed
        $this->setParams($url);
        // Call a callback with array of _params
        call_user_func_array([$this->_controller, $this->_method], $this->_params);
    }
}
