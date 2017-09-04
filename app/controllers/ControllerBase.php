<?php
use Phalcon\Mvc\Controller;
class ControllerBase extends Controller
{
    public function initialize()
    {
        //Javascripts in the header
        $this->assets
            ->collection('headerjs')
            ->addJs('http://static.origos.hu/s/js/modules/jquery-1.11.0.min.js', false)
            ->addJs('http://static.origos.hu/s/js/modules/mustache.min.js', false)
            ->addJs('assets/js/app.js');

        //Css in the header
        $this->assets
            ->collection('headercss')
            ->addCss('css/style.css');

        $this->view->setTemplateBefore('template');
    }
}