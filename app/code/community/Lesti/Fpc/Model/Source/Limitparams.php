<?php

class Lesti_Fpc_Model_Source_Limitparams
{

    public function toOptionArray()
    {
        $helper = Mage::helper('fpc');
        return array(
            0 => $helper->__('Only with no query parameters'),
            1 => $helper->__('With 1 or no query parameters'),
            2 => $helper->__('With %d query parameters max', 2),
            3 => $helper->__('With %d query parameters max', 3),
            4 => $helper->__('With %d query parameters max', 4),
            -1 => $helper->__('No maximum number of parameters'),
        );
    }

}