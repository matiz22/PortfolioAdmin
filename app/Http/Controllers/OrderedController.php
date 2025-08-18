<?php

namespace App\Http\Controllers;

use App\Services\OrderedService;

abstract class OrderedController extends BaseController
{
    protected OrderedService $orderedService;

    public function __construct(OrderedService $service)
    {
        parent::__construct($service);
        $this->orderedService = $service;
    }


    public function ordered()
    {
        return $this->orderedService->getAllOrdered();
    }

    public function orderedTranslated()
    {
        return $this->orderedService->getAllOrderedTranslated();
    }
}
