<?php

/**

 * @date     3 June 2014 16:52
 * @description Setup Controller
 */
App::uses('AppController', 'Controller');

class SetupsController extends Controller {

    var $uses = array('Site');
    var $components = array('Session', 'Cookie');

    public function index() {
                $sites =  $this->Site->find('all');
                $this->set(compact('sites'));
        
    }

}
