<?php
namespace Dibs\EasyCheckout\Model\Api\Response\Object\Payment\Consumer;

use Magento\Framework\DataObject;

/**
 * Class Company
 * @package Dibs\EasyCheckout\Model\Api\Response\Object\Payment\Consumer
 */
class Company extends DataObject
{

    /**
     * @return mixed|null
     */
    public function getTelephone()
    {
        $result = null;
        $phoneNumberArray = $this->getData('phoneNumber');
        if (!empty($phoneNumberArray)) {
            $result = $phoneNumberArray['prefix'] . $phoneNumberArray['number'];
        }

        return $result;
    }
}