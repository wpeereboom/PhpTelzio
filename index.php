<?php
require_once 'vendor/autoload.php';

use PhpTelzio\TelzioClient;

$telzioClient = new TelzioClient('8406e304-a8f0-49d1-b03a-a60ea406fd80', '9aac176c-976c-40f4-9476-a8c1d2bdf864');
$telzioClient->getLog();
