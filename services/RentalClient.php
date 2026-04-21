<?php

class RentalClient
{
    private $base;

    public function __construct($config)
    {
        $this->base = $config['api_base'];
    }

    private function request($endpoint, $method = "GET", $data = null)
    {
        $url = $this->base . $endpoint;

        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        if ($method === "POST") {
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
            curl_setopt($ch, CURLOPT_HTTPHEADER, ["Content-Type: application/json"]);
        }

        $response = curl_exec($ch);
        curl_close($ch);

        return json_decode($response, true);
    }

    public function getEquipment()
    {
        return $this->request("/equipment.php");
    }

    public function createBooking($id, $from, $to)
    {
        return $this->request("/bookings.php", "POST", [
            "id" => $id,
            "from" => $from,
            "to" => $to
        ]);
    }
}
