<?php

namespace Application\View\Helper;


use Zend\View\Model\ViewModel;

class Sidebar extends \Zend\View\Helper\AbstractHelper
{
    public function __invoke()
    {
        $sidebar = new ViewModel();
        $sidebar->setTemplate('application-default-sidebar');
        
        return $this->getView()->render($sidebar);
    }
}
