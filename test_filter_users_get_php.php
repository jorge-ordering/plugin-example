<?php

$body = json_decode(file_get_contents('php://input')); // This returns the data sent from the API
/*
	$ body-> data:
	It contains the data of the model. Ex. The user in this case.
	In case it is a _search the body->data is going to be an array.

	$body->params:
	Contains the data sent by POST and GET

	$body->query:
	Contains the parameters of the url. Ex. GET https://apiv4.ordering.co/v400/en/demo/users/1
	Then $ body->query will contain ["version": "v400", "lang": "en", "project": "demo", "user": "1"]
*/
$body->data->name = '[TEST PLUGIN] '.$body->data->name;
$body->data->params = $body->params;
$body->data->query = $body->query;
echo json_encode($body->data);