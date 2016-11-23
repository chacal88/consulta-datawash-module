<?php
/**
 * Copyright (c) 2016 , Kaue Rodrigues All rights reserved.
 *
 * Redistribution and use in source and binary forms, with or without modification, are permitted,:
 *
 */

namespace DataWashModule;

use DataWashModule\Service\DataWashServiceConsult;
use DataWashModule\Service\Factory\DataWashServiceConsultFactory;
use Zend\ModuleManager\Feature\ServiceProviderInterface;

/**
 * Class Module
 *
 * @author Kaue Rodrigues <kauemsc@gmail.com>
 *
 * @package DataWashModule
 */
class Module implements ServiceProviderInterface
{

    /**
     * getServiceConfig
     *
     * @return array
     */
    public function getServiceConfig()
    {
        return [
            'factories' => [
                DataWashServiceConsult::class => DataWashServiceConsultFactory::class
            ]
        ];
    }

}