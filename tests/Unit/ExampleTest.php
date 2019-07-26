<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Dpc\GuzzleClient\Client;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $client = new Client();
	$response = $client->make('https://httpbin.org/')->to('get')->withBody([
		'foo' => 'bar'
	])->withHeaders([
		'baz' => 'qux'
	])->withOptions([
		'allow_redirects' => false
	])->asJson()->get();

	$this->assertEquals($response->getStatusCode(), 200);

    }
}
