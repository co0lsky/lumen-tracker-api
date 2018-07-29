<?php


class UpdateLocationTest extends TestCase
{
    public function testBasic()
    {
        $lastLocation = [
            'name' => 'Apt. 872',
            'address' => '1, Jalan 2/38d Taman Sri Sinar 51200 Kuala Lumpur Wilayah Persekutuan Kuala Lumpur',
//            'address' => '',
            'lat' => -73.74072700,
            'lng' => 114.93097500,
        ];

        $this->json('POST', '/9999', $lastLocation)
            ->seeStatusCode(201)
            ->seeJson([
                'user_id' => 9999,
                'last_location' => $lastLocation,
            ]);
    }
}
