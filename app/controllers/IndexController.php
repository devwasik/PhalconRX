<?php
class IndexController extends ControllerBase
{
    public function indexAction()
    {
    }
    public function testAction()
    {
        $this->view->setTemplateBefore("template");
        $this->view->hello = "hey, hello!";
    }

    public function homeAction()
    {
        $this->view->setTemplateBefore("template");
    }

    public function registerAction(){

    }

    public function toDoAction(){

    }
}