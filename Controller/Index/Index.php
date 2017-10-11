<?php

namespace Dahl\Homepage\Controller\Index;

class Index extends \Dahl\Homepage\Controller\Index
{
    public function execute()
    {
        $this->_view->loadLayout();
        $this->_view->renderLayout();
    }

}
