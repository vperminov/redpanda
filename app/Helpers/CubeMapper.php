<?php

namespace App\Helpers;

class CubeMapper
{

    /**
     * @param string $movement
     * @param string $direction
     * @return array
     * @throws \Exception
     */
    public function getMapper(string $movement, string $direction): array
    {
        $mapper = 'mapper' . $movement . $direction;
        if (!isset($this->{$mapper})) {
            throw new \ErrorException('Mapper not exist');
        }
        return $this->{$mapper};
    }

    /**
     * @var array
     */
    private $mapperUdirect = [
        'lub' => 'ful',
        'lu' => 'fu',
        'luf' => 'luf',
        'ful' => 'ruf',
        'fu' => 'ru',
        'fur' => 'rub',
        'ruf' => 'bur',
        'ru' => 'bu',
        'rub' => 'bul',
        'bur' => 'lub',
        'bu' => 'lu',
        'bul' => 'luf',
    ];

    /**
     * @var array
     */
    private $mapperUcounter = [
        'ful' => 'lub',
        'fu' => 'lu',
        'fur' => 'luf',
        'ruf' => 'ful',
        'ru' => 'fu',
        'rub' => 'fur',
        'bur' => 'ruf',
        'bu' => 'ru',
        'bul' => 'rub',
        'lub' => 'bur',
        'lu' => 'bu',
        'luf' => 'bul',
    ];

    /**
     * @var array
     */
    private $mapperDdirect = [
        'ldb' => 'fdl',
        'ld' => 'fd',
        'ldf' => 'fdr',
        'fdl' => 'rdf',
        'fd' => 'rd',
        'fdr' => 'rdb',
        'rdf' => 'bdr',
        'rd' => 'bd',
        'rdb' => 'bdl',
        'bdr' => 'ldb',
        'bd' => 'ld',
        'bdl' => 'ldf',
    ];

    /**
     * @var array
     */
    private $mapperDcounter = [
        'fdl' => 'ldb',
        'fd' => 'ld',
        'fdr' => 'ldf',
        'rdf' => 'fdl',
        'rd' => 'fd',
        'rdb' => 'fdr',
        'bdr' => 'rdf',
        'bd' => 'rd',
        'bdl' => 'rdb',
        'ldb' => 'bdr',
        'ld' => 'bd',
        'ldf' => 'bdl',
    ];

    /**
     * @var array
     */
    private $mapperRdirect = [
        'fur' => 'ubr',
        'fr' => 'ur',
        'fdr' => 'ufr',
        'ubr' => 'bul',
        'ur' => 'bl',
        'ufr' => 'bdl',
        'bul' => 'dfr',
        'bl' => 'dr',
        'bdl' => 'dbr',
        'dfr' => 'fur',
        'dr' => 'fr',
        'dbr' => 'fdr',
    ];

    /**
     * @var array
     */
    private $mapperRcounter = [
        'ubr' => 'fur',
        'ur' => 'fr',
        'ufr' => 'fdr',
        'bul' => 'ubr',
        'bl' => 'ur',
        'bdl' => 'ufr',
        'dfr' => 'bul',
        'dr' => 'bl',
        'dbr' => 'bdl',
        'fur' => 'dfr',
        'fr' => 'dr',
        'fdr' => 'dbr',
    ];

    /**
     * @var array
     */
    private $mapperLdirect = [
        'ful' => 'ubl',
        'fl' => 'ul',
        'fdl' => 'ufl',
        'ubl' => 'bur',
        'ul' => 'br',
        'ufl' => 'bdr',
        'bur' => 'dfl',
        'br' => 'dl',
        'bdr' => 'dbl',
        'dfl' => 'ful',
        'dl' => 'fl',
        'dbl' => 'fdl',
    ];

    /**
     * @var array
     */
    private $mapperLcounter = [
        'ubl' => 'ful',
        'ul' => 'fl',
        'ufl' => 'fdl',
        'bur' => 'ubl',
        'br' => 'ul',
        'bdr' => 'ufl',
        'dfl' => 'bur',
        'dl' => 'br',
        'dbl' => 'bdr',
        'ful' => 'dfl',
        'fl' => 'dl',
        'fdl' => 'dbl',
    ];

    /**
     * @var array
     */
    private $mapperFdirect = [
        'ful' => 'fur',
        'fu' => 'fr',
        'fur' => 'fdr',
        'fr' => 'fd',
        'fdr' => 'fdl',
        'fd' => 'fl',
        'fdl' => 'ful',
        'fl' => 'fu',
        'ufl' => 'ruf',
        'uf' => 'rf',
        'ufr' => 'rdf',
        'ruf' => 'dfr',
        'ru' => 'df',
        'rub' => 'dbr',
        'dfl' => 'luf',
        'df' => 'lf',
        'dfr' => 'ldf',
        'luf' => 'ufr',
        'lf' => 'uf',
        'ldf' => 'ufl',
    ];

    /**
     * @var array
     */
    private $mapperFcounter = [
        'fur' => 'ful',
        'fr' => 'fu',
        'fdr' => 'fur',
        'fd' => 'fr',
        'fdl' => 'fdr',
        'fl' => 'fd',
        'ful' => 'fdl',
        'fu' => 'fl',
        'ruf' => 'ufl',
        'rf' => 'uf',
        'rdf' => 'ufr',
        'dfr' => 'ruf',
        'df' => 'ru',
        'dbr' => 'rub',
        'luf' => 'dfl',
        'lf' => 'df',
        'ldf' => 'dfr',
        'ufr' => 'luf',
        'uf' => 'lf',
        'ufl' => 'ldf',
    ];

    /**
     * @var array
     */
    private $mapperBdirect = [
        'bur' => 'bul',
        'bu' => 'bl',
        'bul' => 'bdl',
        'bl' => 'bd',
        'bdl' => 'bdr',
        'bd' => 'br',
        'bdr' => 'bur',
        'br' => 'bu',
        'ubl' => 'ldb',
        'ub' => 'lb',
        'ubr' => 'lub',
        'rub' => 'ubl',
        'rb' => 'ub',
        'rdb' => 'ubr',
        'dbr' => 'rub',
        'db' => 'rb',
        'dbl' => 'rdb',
        'ldb' => 'dbr',
        'lb' => 'db',
        'lub' => 'dbl',
    ];

    /**
     * @var array
     */
    private $mapperBcounter = [
        'bul' => 'bur',
        'bl' => 'bu',
        'bdl' => 'bul',
        'bd' => 'bl',
        'bdr' => 'bdl',
        'br' => 'bd',
        'bur' => 'bdr',
        'bu' => 'br',
        'ldb' => 'ubl',
        'lb' => 'ub',
        'lub' => 'ubr',
        'ubl' => 'rub',
        'ub' => 'rb',
        'ubr' => 'rdb',
        'rub' => 'dbr',
        'rb' => 'db',
        'rdb' => 'dbl',
        'dbr' => 'ldb',
        'db' => 'lb',
        'dbl' => 'lub',
    ];

    /**
     * @var array
     */
    private $mapperMdirect = [
        'uf' => 'fd',
        'u' => 'f',
        'ub' => 'fu',
        'fu' => 'df',
        'f' => 'd',
        'fd' => 'db',
        'df' => 'bd',
        'd' => 'b',
        'db' => 'bu',
        'bu' => 'uf',
        'b' => 'u',
        'bd' => 'ub',
    ];

    /**
     * @var array
     */
    private $mapperMcounter = [
        'fd' => 'uf',
        'f' => 'u',
        'fu' => 'ub',
        'df' => 'fu',
        'd' => 'f',
        'db' => 'fd',
        'bd' => 'df',
        'b' => 'd',
        'bu' => 'db',
        'uf' => 'bu',
        'u' => 'b',
        'ub' => 'bd',
    ];

    /**
     * @var array
     */
    private $mapperEdirect = [
        'fr' => 'rb',
        'f' => 'r',
        'fl' => 'rf',
        'rf' => 'br',
        'r' => 'b',
        'rb' => 'bl',
        'br' => 'lb',
        'b' => 'l',
        'bl' => 'lf',
        'lf' => 'fr',
        'l' => 'f',
        'lb' => 'fl',
    ];

    /**
     * @var array
     */
    private $mapperEcounter = [
        'rb' => 'fr',
        'r' => 'f',
        'rf' => 'fl',
        'br' => 'rf',
        'b' => 'r',
        'bl' => 'rb',
        'lb' => 'br',
        'l' => 'b',
        'lf' => 'bl',
        'fr' => 'lf',
        'f' => 'l',
        'fl' => 'lb',
    ];

    /**
     * @var array
     */
    private $mapperSdirect = [
        'ul' => 'ru',
        'u' => 'r',
        'ur' => 'rd',
        'ru' => 'dr',
        'r' => 'd',
        'rd' => 'dl',
        'dr' => 'ld',
        'd' => 'l',
        'dl' => 'lu',
        'ld' => 'ul',
        'l' => 'u',
        'lu' => 'ur',
    ];

    /**
     * @var array
     */
    private $mapperScounter = [
        'ru' => 'ul',
        'r' => 'u',
        'rd' => 'ur',
        'dr' => 'ru',
        'd' => 'r',
        'dl' => 'rd',
        'ld' => 'dr',
        'l' => 'd',
        'lu' => 'dl',
        'ul' => 'ld',
        'u' => 'l',
        'ur' => 'lu',
    ];
}
