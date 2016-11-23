<?php
/**
 * Copyright (c) 2016 , Kaue Rodrigues All rights reserved.
 *
 * Redistribution and use in source and binary forms, with or without modification, are permitted,:
 *
 */

namespace DataWashModule\Service\Factory;

use DataWash\Lib\Enum\DataWashEnum;
use DataWash\Service\DataWashService;
use Interop\Container\ContainerInterface;
use DataWashModule\Service\DataWashServiceConsult as DataWashServiceConsult;

/**
 * Class DataWashServiceConsultFactory
 *
 * @author Kaue Rodrigues <kauemsc@gmail.com>
 *
 * @package DataWashModule\Service\Factory
 */
class DataWashServiceConsultFactory
{

    /**
     * __invoke
     *
     * @param ContainerInterface $container
     * @return DataWashServiceConsult
     */
    public function __invoke(ContainerInterface $container)
    {

        $dataWashService = new DataWashService(new \SoapClient(DataWashEnum::DATAWASH), 'neoshare', '*', 'neoshare2015');

        return new DataWashServiceConsult($dataWashService);
    }

}