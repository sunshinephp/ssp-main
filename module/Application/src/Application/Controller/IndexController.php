<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2013 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class IndexController extends AbstractActionController
{
    public function indexAction()
    {
        $this->layout('layout/layout_home');
        
        return new ViewModel(); 
    }
    
    public function registerAction()
    {
        return new ViewModel();
    }

    public function venueAction()
    {
        return new ViewModel();
    }
    
    public function privacyAction()
    {
        return new ViewModel();
    }
    
    public function diversityAction()
    {
        return new ViewModel();
    }
    
    public function conductAction()
    {
        return new ViewModel();
    }

    public function aboutAction()
    {
        return new ViewModel();
    }
    
    public function eventsAction()
    {
        return new ViewModel();
    }
    
    public function unconAction()
    {
        return new ViewModel();
    }
    
    public function sitemapAction()
    {
        $this->layout('layout/xml');
    }
}
