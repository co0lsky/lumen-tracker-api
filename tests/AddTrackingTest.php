<?php


class AddTrackingTest extends TestCase
{
    public function testBasic()
    {
        $this->get('/9999');

        $jsonTracker = json_decode($this->response->getContent());

        $this->get('/9991');

        $jsonTracking = json_decode($this->response->getContent());

        $uri = '/' . $jsonTracker->user_id . '/trackings';

        $this->json('POST', $uri, [
            'code' => $jsonTracking->code
        ]);

        $this->seeStatusCode(201);

        $this->seeJsonStructure([
                'user_id',
                'code',
                'last_location',
            ]);

        $this->seeJson([
                'user_id' => $jsonTracking->user_id,
                'code' => $jsonTracking->code,
            ]);
    }
}
