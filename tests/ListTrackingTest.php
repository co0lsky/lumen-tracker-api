<?php


class ListTrackingTest extends TestCase
{
    public function testBasic()
    {
        $this->json('GET', '/9999/trackings');

        $responseArr = json_decode($this->response->getContent(), true);

        $result = array_pop($responseArr);

        $this->assertArrayHasKey('user_id', $result);

        $this->assertArrayHasKey('code', $result);

        $this->assertArrayHasKey('last_location', $result);
    }
}
