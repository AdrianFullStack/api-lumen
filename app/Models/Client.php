<?php
/**
 * Created by AdrianFullStack
 * Date: 07/06/2019
 * Time: 02:11 PM
 */

namespace App\Models;

class Client extends BaseModel
{
    protected $table = 'commercial.clients';

    protected $fillable = [

    ];

    protected $hidden = [

    ];

    protected $visible = [

    ];

    public function extraData()
    {
        return $this->hasOne(ClientExtraData::class, 'client_id', 'id');
    }
}