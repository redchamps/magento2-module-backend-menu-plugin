<?php
namespace RedChamps\BackendMenuPlugin\Plugin\Backend\Model;

use Magento\Backend\Model\Menu;

class MenuPlugin
{
    public function afterMove(Menu $subject, $result)
    {
        return $result;
    }
}
