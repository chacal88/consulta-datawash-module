<?php
/**
 * Copyright (c) 2016 , Kaue Rodrigues All rights reserved.
 *
 * Redistribution and use in source and binary forms, with or without modification, are permitted,:
 *
 */

namespace DataWashModule\Service;


use DataWash\Service\DataWashService;

/**
 * Class DataWashServiceConsult
 *
 * @author Kaue Rodrigues <kauemsc@gmail.com>
 *
 * @package DataWashModule\Service
 */
class DataWashServiceConsult
{
    /**
     * @var DataWashService
     */
    private $dataWashService;


    /**
     * DataWashServiceConsult constructor.
     * @param DataWashService $dataWashService
     */
    public function __construct(DataWashService $dataWashService)
    {
        $this->dataWashService = $dataWashService;
    }

    /**
     * findByDoc
     *
     * @param $doc
     * @return \DataWash\Entity\PessoaFisica|\DataWash\Entity\PessoaJuridica
     */
    public function findByDoc($doc)
    {
        $numeros = preg_replace('/[^0-9]/', '', $doc);

        if (strlen($numeros) <= 11) {

            return $this->findCpf($doc);
        } elseif (strlen($numeros) > 11) {

            return $this->findCnpj($doc);
        }
    }

    /**
     * findCpf
     *
     * @param $doc
     * @return \DataWash\Entity\PessoaFisica
     */
    public function findCpf($doc)
    {
        $result = $this->dataWashService->ConsultaCPFCompleta($doc);

        return $result;
    }

    /**
     * findCnpj
     *
     * @param $doc
     * @return \DataWash\Entity\PessoaJuridica
     */
    public function findCnpj($doc)
    {

        $result = $this->dataWashService->ConsultaCNPJ($doc);

        return $result;
    }
}