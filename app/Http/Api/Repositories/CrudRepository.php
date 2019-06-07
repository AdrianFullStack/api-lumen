<?php
/**
 * Created by AdrianFullStack
 * Date: 07/06/2019
 * Time: 10:12 AM
 */

namespace App\Http\Api\Repositories;

class CrudRepository extends Repository
{
    public function create(array $params)
    {
        return $this->model->create($params);
    }

    public function read(int $id)
    {
        // TODO: Implement read() method.
    }

    public function update(int $id, array $params)
    {
        // TODO: Implement update() method.
    }

    public function destroy(int $id)
    {
        // TODO: Implement destroy() method.
    }
}