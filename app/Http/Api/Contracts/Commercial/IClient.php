<?php
/**
 * Created by AdrianFullStack
 * Date: 07/06/2019
 * Time: 09:52 AM
 */

namespace App\Http\Api\Contracts\Commercial;

use App\Http\Api\Contracts\ICrud;
use Illuminate\Http\Request;

interface IClient extends ICrud
{
    public function all(Request $request);
}