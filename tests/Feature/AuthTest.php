<?php

namespace Tests\Feature;

use App\User;
use Dpc\LaravelShopify\RequestFactory;
use Dpc\LaravelShopify\Services\GuzzleClient;
use Dpc\LaravelShopify\ShopifyFactory;
use GuzzleHttp\Client;
use Tests\TestCase;


class AuthTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testRequestStuff()
    {
        $factory = new ShopifyFactory();
        $factory->product->foo()->bar();

    }
}
