<?php
/**
 * Created by AdrianFullStack
 * Date: 07/06/2019
 * Time: 09:53 AM
 */

namespace App\Http\Api\Contracts;

interface ICrud
{
    public function create(array $params);

    public function read(int $id);

    public function update(int $id, array $params);

    public function destroy(int $id);
}