<?php


class GetTrackerTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasic()
    {
        $this->json('GET', '/9999', [])
            ->seeJson([
                'user_id' => 9999,
            ]);
    }
}
