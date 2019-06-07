<?php
/**
 * Created by AdrianFullStack
 * Date: 07/06/2019
 * Time: 10:11 AM
 */

namespace App\Http\Api\Repositories\Commercial;

use App\Http\Api\Contracts\Commercial\IClient;
use App\Http\Api\Repositories\CrudRepository;
use Illuminate\Http\Request;

class ClientRepository extends CrudRepository implements IClient
{
    public function all(Request $request)
    {
        return $this->model->paginate();
    }
}