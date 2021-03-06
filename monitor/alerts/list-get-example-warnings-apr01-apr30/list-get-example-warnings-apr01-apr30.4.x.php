<?php
// Get the PHP helper library from https://twilio.com/docs/libraries/php
require_once('/path/to/twilio-php/Services/Twilio.php'); // Loads the library

// Your Account Sid and Auth Token from twilio.com/user/account
$sid = "ACXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX";
$token = "your_auth_token";
$client = new Monitor_Services_Twilio($sid, $token);

// Loop over the list of alerts and echo a property for each one
foreach ($client->alerts->getIterator(0, 50, array(
    "StartDate" => "2015-04-01T00:00:00Z",
    "EndDate" => "2015-04-30T23:59:59Z",
    "LogLevel" => "warning"
    )) as $alert
) {
    echo $alert->alert_text;
}