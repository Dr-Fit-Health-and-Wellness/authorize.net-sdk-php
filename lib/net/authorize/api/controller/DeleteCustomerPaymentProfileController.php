<?php
namespace net\authorize\api\controller;

use net\authorize\api\contract\v1\ANetApiRequestType;
use net\authorize\api\controller\base\ApiOperationBase;

class DeleteCustomerPaymentProfileController extends ApiOperationBase
{
    public function __construct(ANetApiRequestType $request)
    {
        $responseType = 'net\authorize\api\contract\v1\DeleteCustomerPaymentProfileResponse';
        parent::__construct($request, $responseType);
    }

    protected function validateRequest()
    {
        //validate required fields of $this->apiRequest->

        //validate non-required fields of $this->apiRequest->
    }
}
