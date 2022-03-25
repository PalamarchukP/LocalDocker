<?php
require_once __DIR__ . '/vendor/autoload.php';
$client = new Google_Client();
$client->setApplicationName('Google Sheets API PHP');
$client->setScopes(Google_Service_Sheets::SPREADSHEETS);
$client->setAuthConfig(__DIR__ . '/credentials.json');
$client->setAccessType('offline');
$client->setPrompt('select_account consent');
$service = new Google_Service_Sheets($client);
$spreadsheetId = "1z-baMQPb9sB0AEsZ9gOW_m6NPqeXgFlwQm3fiwUjxAI";
$range = "Sheet1";
$values = [
    [$_POST["adCategory"], $_POST["adTitle"], $_POST['adEmail'], $_POST['adText']]
];
$body = new Google_Service_Sheets_ValueRange(["values" => $values]);
$params = [
    'valueInputOption' => 'RAW',
];
$insert = [
    "insertDataOption" => "INSERT_ROWS"
];
$service->spreadsheets_values->append(
    $spreadsheetId,
    $range,
    $body,
    $params
);
header("Location: main.php");
