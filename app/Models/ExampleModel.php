<?php

namespace Models;

use \DB\Cortex;

class ExampleModel extends Cortex
{
    use EmptyArrayFindTrait;

    protected $db = 'DB';
    protected $table = 'example_table';

    protected $fillable = ['field'];

    protected $fieldConf = [
        'field' => ['type' => \DB\SQL\Schema::DT_VARCHAR128],
    ];

}
