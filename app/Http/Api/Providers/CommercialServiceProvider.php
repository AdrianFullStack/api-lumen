<?php
namespace App\Http\Api\Providers;

use App\Http\Api\Repositories\Commercial\ClientRepository;
use App\Models\Client;
use Illuminate\Support\ServiceProvider;

class CommercialServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind('App\Http\Api\Contracts\Commercial\IClient', function (){
            return new ClientRepository(new Client());
        });
    }
}