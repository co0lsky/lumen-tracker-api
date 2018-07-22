<?php


class UpdateLocationTest extends TestCase
{
    public function testBasic()
    {
        $lastLocation = [
            'name' => 'Apt. 872',
            'lat' => -73.74072700,
            'lng' => 114.93097500,
        ];

        $this->json('POST', '/9999', $lastLocation)
            ->seeJson([
                'user_id' => 9999,
                'last_location' => $lastLocation,
            ]);
    }
}
