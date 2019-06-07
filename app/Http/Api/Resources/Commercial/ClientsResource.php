<?php
/**
 * Created by AdrianFullStack
 * Date: 07/06/2019
 * Time: 03:24 PM
 */

namespace App\Http\Api\Resources\Commercial;

use Illuminate\Http\Resources\Json\ResourceCollection;

class ClientsResource extends ResourceCollection
{
    public function toArray($request)
    {
        return [
            'data' => ClientResource::collection($this->collection)
        ];
    }
}