<?php

include "GCMPushMessage.php";

$apiKey = "AIzaSyB9oUuvP_JMIDLH43YfyicockRgWGnnxLM";
$devices = array(
	"282696219668",
);
$message = "GCM Test Message";

$an = new GCMPushMessage($apiKey);
$an->setDevices($devices);

$response = $an->send($message);

echo $response;
