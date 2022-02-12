<?php
function convertCurrency($amount,$to_currency){
  $apikey = '7be500ed8ac033706027';

  $from_Currency = urlencode('INR');
  $to_Currency = urlencode($to_currency);
  $query =  "{$from_Currency}_{$to_Currency}";

  // change to the free URL if you're using the free version
  $json = file_get_contents("https://free.currconv.com/api/v7/convert?q=$query&compact=ultra&apiKey=$apikey");
  $obj = json_decode($json, true);

  $val = floatval($obj["$query"]);


  $total = $val * $amount;
  return number_format($total, 2, '.', '');
}

function reverseCurrency($amount,$to_currency){
  $apikey = '7be500ed8ac033706027';

  $from_Currency = urlencode($to_currency);
  $to_Currency = urlencode('INR');
  $query =  "{$from_Currency}_{$to_Currency}";

  // change to the free URL if you're using the free version
  $json = file_get_contents("https://free.currconv.com/api/v7/convert?q=$query&compact=ultra&apiKey=$apikey");
  $obj = json_decode($json, true);

  $val = floatval($obj["$query"]);


  $total = $val * $amount;
  return number_format($total, 2, '.', '');
}

function convertCurrency2(){
  $endpoint = 'live';
  $access_key = 'e13bd54057208cb12b5128cd';

  // Initialize CURL:
  $ch = curl_init('https://v6.exchangerate-api.com/v6/e13bd54057208cb12b5128cd/latest/USD');
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

  // Store the data:
  $json = curl_exec($ch);
  curl_close($ch);

  // Decode JSON response:
  $exchangeRates = json_decode($json, true);
     return $exchangeRates;
  // Access the exchange rate values, e.g. GBP:
  // echo $exchangeRates['quotes']['USDGBP'];
}
//uncomment to test
//echo convertCurrency(10, 'USD', 'PHP');
?>