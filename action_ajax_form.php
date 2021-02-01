<?php
if (isset($_POST["repName"])) {
    $q = 'q=' . $_POST["repName"] . 'in:name+language:php+language:javascript';
    $agent = 'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1)';

    $ch = curl_init('https://api.github.com/search/repositories?' . $q);
    curl_setopt($ch, CURLOPT_HEADER, 'Accept: application/vnd.github.v3+json');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    curl_setopt($ch, CURLOPT_USERAGENT, $agent);

    $result = curl_exec($ch);

    echo $result;
}
?>

