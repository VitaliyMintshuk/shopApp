<?php

include __DIR__ . DIRECTORY_SEPARATOR . 'src' . DIRECTORY_SEPARATOR . 'config.php';

date_default_timezone_set('Europe/Kiev');

$config = new Config();

$SD = $config->getShopData();

$mes = '';
$sum_all = 0;
$sum_cash_all = 0;
$sum_card_all = 0;
foreach ($SD as $item) {
    if ($item['poster_token'] !== false) {
        // Get sale info from Poster
        $url = 'https://joinposter.com/api/dash.getPaymentsReport' .
            '?token=' . $item['poster_token'] .
            '&date_from=' . date('Ymd') .
            '&date_to=' . date('Ymd');

        $respond = file_get_contents($url);
        $json = json_decode($respond);
        if (!is_null($json)) {
            $card = $json->response->total->payed_card_sum;
            $cash = $json->response->total->payed_cash_sum;
            $sum = $json->response->total->payed_sum_sum;
            $sum_all += $sum;
            $sum_card_all += $card;
            $sum_cash_all += $cash;
            $mes .= $item['name'] . ':' . PHP_EOL .
                'Время: ' . date('H:i') . PHP_EOL .
                'Выторг: ' . round($sum/100, 2) . PHP_EOL .
                'Картой: ' . round($card/100,2) . PHP_EOL .
                'Нал: ' . round($cash/100,2) . PHP_EOL . PHP_EOL;
        } else {
            $mes .= $item['name'] . ': нет данных' . PHP_EOL . PHP_EOL;
        }
    }
}

$mes .= 'Всего: ' . round($sum_all/100, 2) . PHP_EOL .
    'Карта: ' . round($sum_card_all/100, 2) . PHP_EOL .
    'Нал: ' . round($sum_cash_all/100, 2) . PHP_EOL;

$tURL = 'https://api.telegram.org/bot' .
    $config::TM_VB_TOKEN .
    '/sendMessage?chat_id=' . $config::TM_VB_A_CHAT_ID .
    '&text=' . urlencode($mes) . '&parse_mode=html';

file_get_contents($tURL);

$tURL2 = 'https://api.telegram.org/bot' .
    $config::TM_VB_TOKEN .
    '/sendMessage?chat_id=' . $config::TM_VB_U_CHAT_ID .
    '&text=' . urlencode($mes) . '&parse_mode=html';

file_get_contents($tURL2);
