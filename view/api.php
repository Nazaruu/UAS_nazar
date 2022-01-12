<?php
header("Access-Control-Allow-Origin:*");
header("Content-Type:application/json;charset-UTF-8");
header("Access-Control-Allow-Methods:POST,GET,PUT,DELETE");
header("Access-Control-Max-Age:3600");
header("Access-Control-Allow-Header:Content-Type,Access-Control-Allow-Header,Auth
	orization,X-Requested-With");

include '../controller/rental.php';
$clrl = new Rental();
$request = $_SERVER['REQUEST_METHOD'];
switch ($request) {
	case 'GET':
		$ctrl->getJenisData();

		break;
		case 'POST' :
		break;

		case 'PUT':
		break;
		case 'DELETE':
		break;
		default:
		http_response_code(404);
		echo "Request Tidak diizinkan";
}

?>