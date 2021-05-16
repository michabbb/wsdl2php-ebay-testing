<?php

declare(strict_types=1);

namespace macropage\ebaysdk\shopping\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for all operations
 * @subpackage Services
 */
class Service extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named FindProducts
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\shopping\StructType\FindProductsRequestType $findProductsRequest
     * @return \macropage\ebaysdk\shopping\StructType\FindProductsResponseType|bool
     */
    public function FindProducts(\macropage\ebaysdk\shopping\StructType\FindProductsRequestType $findProductsRequest)
    {
        try {
            $this->setResult($resultFindProducts = $this->getSoapClient()->__soapCall('FindProducts', [
                $findProductsRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultFindProducts;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetCategoryInfo
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\shopping\StructType\GetCategoryInfoRequestType $getCategoryInfoRequest
     * @return \macropage\ebaysdk\shopping\StructType\GetCategoryInfoResponseType|bool
     */
    public function GetCategoryInfo(\macropage\ebaysdk\shopping\StructType\GetCategoryInfoRequestType $getCategoryInfoRequest)
    {
        try {
            $this->setResult($resultGetCategoryInfo = $this->getSoapClient()->__soapCall('GetCategoryInfo', [
                $getCategoryInfoRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetCategoryInfo;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetItemStatus
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\shopping\StructType\GetItemStatusRequestType $getItemStatusRequest
     * @return \macropage\ebaysdk\shopping\StructType\GetItemStatusResponseType|bool
     */
    public function GetItemStatus(\macropage\ebaysdk\shopping\StructType\GetItemStatusRequestType $getItemStatusRequest)
    {
        try {
            $this->setResult($resultGetItemStatus = $this->getSoapClient()->__soapCall('GetItemStatus', [
                $getItemStatusRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetItemStatus;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetMultipleItems
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\shopping\StructType\GetMultipleItemsRequestType $getMultipleItemsRequest
     * @return \macropage\ebaysdk\shopping\StructType\GetMultipleItemsResponseType|bool
     */
    public function GetMultipleItems(\macropage\ebaysdk\shopping\StructType\GetMultipleItemsRequestType $getMultipleItemsRequest)
    {
        try {
            $this->setResult($resultGetMultipleItems = $this->getSoapClient()->__soapCall('GetMultipleItems', [
                $getMultipleItemsRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetMultipleItems;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetShippingCosts
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\shopping\StructType\GetShippingCostsRequestType $getShippingCostsRequest
     * @return \macropage\ebaysdk\shopping\StructType\GetShippingCostsResponseType|bool
     */
    public function GetShippingCosts(\macropage\ebaysdk\shopping\StructType\GetShippingCostsRequestType $getShippingCostsRequest)
    {
        try {
            $this->setResult($resultGetShippingCosts = $this->getSoapClient()->__soapCall('GetShippingCosts', [
                $getShippingCostsRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetShippingCosts;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetSingleItem
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\shopping\StructType\GetSingleItemRequestType $getSingleItemRequest
     * @return \macropage\ebaysdk\shopping\StructType\GetSingleItemResponseType|bool
     */
    public function GetSingleItem(\macropage\ebaysdk\shopping\StructType\GetSingleItemRequestType $getSingleItemRequest)
    {
        try {
            $this->setResult($resultGetSingleItem = $this->getSoapClient()->__soapCall('GetSingleItem', [
                $getSingleItemRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetSingleItem;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetUserProfile
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\shopping\StructType\GetUserProfileRequestType $getUserProfileRequest
     * @return \macropage\ebaysdk\shopping\StructType\GetUserProfileResponseType|bool
     */
    public function GetUserProfile(\macropage\ebaysdk\shopping\StructType\GetUserProfileRequestType $getUserProfileRequest)
    {
        try {
            $this->setResult($resultGetUserProfile = $this->getSoapClient()->__soapCall('GetUserProfile', [
                $getUserProfileRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetUserProfile;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named GeteBayTime
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\shopping\StructType\GeteBayTimeRequestType $geteBayTimeRequest
     * @return \macropage\ebaysdk\shopping\StructType\GeteBayTimeResponseType|bool
     */
    public function GeteBayTime(\macropage\ebaysdk\shopping\StructType\GeteBayTimeRequestType $geteBayTimeRequest)
    {
        try {
            $this->setResult($resultGeteBayTime = $this->getSoapClient()->__soapCall('GeteBayTime', [
                $geteBayTimeRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGeteBayTime;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \macropage\ebaysdk\shopping\StructType\FindProductsResponseType|\macropage\ebaysdk\shopping\StructType\GetCategoryInfoResponseType|\macropage\ebaysdk\shopping\StructType\GeteBayTimeResponseType|\macropage\ebaysdk\shopping\StructType\GetItemStatusResponseType|\macropage\ebaysdk\shopping\StructType\GetMultipleItemsResponseType|\macropage\ebaysdk\shopping\StructType\GetShippingCostsResponseType|\macropage\ebaysdk\shopping\StructType\GetSingleItemResponseType|\macropage\ebaysdk\shopping\StructType\GetUserProfileResponseType
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
