<?php
/**
 * Created by AdrianFullStack
 * Date: 07/06/2019
 * Time: 10:07 AM
 */

namespace App\Http\Api\Repositories;

class Repository
{
    protected $model;

    public function __construct($model)
    {
        $this->model = $model;
    }
}