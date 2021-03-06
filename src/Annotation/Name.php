<?php

/**
 * Created by PhpStorm.
 * User: milos
 * Date: 29/05/17
 * Time: 21:51
 */
namespace Annotation;

/**
 * @Annotation
 * @Target("PROPERTY")
 */
class Name
{
    /**
     * @var string
     */
    public $name;

    public function __construct($values) {
        if(empty($values) || !isset($values['value'])) {
            throw new \Exception('You must specify a name.');
        }
        $this->name = $values['value'];
    }
}