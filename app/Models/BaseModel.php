<?php
/**
 * Created by AdrianFullStack
 * Date: 07/06/2019
 * Time: 04:28 PM
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BaseModel extends Model
{
    protected $appends = [
        'id'
    ];

    public function getIdAttribute()
    {
        return $this->attributes[$this->primaryKey ?? 'id'];
    }
}