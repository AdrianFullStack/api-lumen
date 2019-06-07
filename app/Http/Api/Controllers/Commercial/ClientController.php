<?php
/**
 * Created by AdrianFullStack
 * Date: 07/06/2019
 * Time: 09:40 AM
 */

namespace App\Http\Api\Controllers\Commercial;

use App\Http\Api\Contracts\Commercial\IClient;
use App\Http\Api\Requests\Commercial\ClientRequest;
use App\Http\Api\Resources\Commercial\ClientResource;
use App\Http\Api\Resources\Commercial\ClientsResource;
use App\Http\Controllers\Controller;
use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    private $IClient;

    public function __construct(IClient $IClient)
    {
        $this->IClient = $IClient;
    }

    public function index(Request $request)
    {
        #$clients = Client::paginate();
        #return $clients ? new ClientsResource(Client::paginate()) : response()->json('Data Not Fund', 404);

        $client = Client::with('extradata')->find(2);

        return $client;

        return $client ? new ClientResource($client) : response()->json('Data Not Fund', 404);

        return $this->IClient->all($request);
    }

    public function create()
    {

    }

    public function store(ClientRequest $request)
    {
        return $request;
    }

    public function edit($id)
    {

    }

    public function update($id, Request $request)
    {

    }

    public function destroy($id)
    {

    }
}