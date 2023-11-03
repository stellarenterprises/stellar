<?php
/**
 * Campaign: Compasia_MY
 * Created: 2023-10-19 13:29:24 UTC
 */

require 'leadcloak-1cia1c16y8u0.php';

// ---------------------------------------------------
// Configuration

// Set this to false if application is properly installed.
$enableDebugging = false;

// Set this to false if you won't want to log error messages
$enableLogging = true;

if ($enableDebugging) {
	isApplicationReadyToRun();
}

$data = httpRequestMakePayload($campaignId, $campaignSignature);

$response = httpRequestExec($data);

$handler = httpHandleResponse($response, $enableLogging);

if ($handler) {
	exit();
}

?>