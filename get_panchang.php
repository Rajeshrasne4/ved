<?php
header('Content-Type': 'application/json', 'x-api-key': 'cGLNWvGs6r7a34yKVJEQS9IFD374XDk71YrxUoxL');

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://json.freeastrologyapi.com/tithi-durations',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS =>'{
    "year": 2022,
    "month": 8,
    "date": 11,
    "hours": 6,
    "minutes": 0,
    "seconds": 0,
    "latitude": 17.38333,
    "longitude": 78.4666,
    "timezone": 5.5,
    "config": {
        "observation_point": "topocentric",
        "ayanamsha": "lahiri"
    }
}',
  CURLOPT_HTTPHEADER => array(
    'Content-Type: application/json',
    'x-api-key: cGLNWvGs6r7a34yKVJEQS9IFD374XDk71YrxUoxL'
  ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;

?>
