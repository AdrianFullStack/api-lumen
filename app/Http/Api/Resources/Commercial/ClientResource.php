<?php
/**
 * Created by AdrianFullStack
 * Date: 07/06/2019
 * Time: 02:03 PM
 */

namespace App\Http\Api\Resources\Commercial;

use Illuminate\Http\Resources\Json\Resource;

class ClientResource extends Resource
{
    public function toArray($request)
    {
        return [
            'type' => $this->resource ? strtolower(class_basename(get_class($this->resource))) : '',
            'id' => $this->resource->id ?? '',
            'attributes' => $this->resource,
            'relationships' => $this->resource,
            'link' => $request->url().'/'.($this->resource->id ?? '')
        ];
    }
}