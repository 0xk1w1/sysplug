<?php
/**
 * Created by PhpStorm.
 * User: sklein
 * Date: 04.04.16
 * Time: 09:42
 */
defined('_JEXEC') or die;
class plgSystemSysplug extends JPlugin
{
    protected $autoloadlanguage = true;
    function onAfterRender()
    {
        $app = JFactory::getApplication();
        if($app->isAdmin())
        {
            return;
        }
        $body = JFactory::getApplication()->getBody();
        $body = str_replace('Big 5 Concepts', '<img src="./media/b5c-logo-signatur-1.png" width="100px" height="20px"/>', $body);
        JFactory::getApplication()->setBody($body);
        return true;
    }
}