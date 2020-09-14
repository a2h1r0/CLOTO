<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class SeatControllerTest extends TestCase
{
    use DatabaseTransactions;

    public function setUp(): void
    {
        parent::setUp();
    }

    /**
     * 着席機能のテスト
     *
     * @return void
     */
    public function testSit()
    {
        $request = ['user_id' => '1'];
        $response = $this->post(route('seatSit', ['seat' => '1']), $request);

        $response->assertOk()->assertJsonFragment([true]);
    }
}
