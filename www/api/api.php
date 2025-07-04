<?PHP
$requestScheme = isset($_SERVER['REQUEST_SCHEME']) ? $_SERVER['REQUEST_SCHEME'] : "http";
$httpHost = isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : trim(shell_exec("hostname -A | awk '{print $1}'"));
$my_uri = $requestScheme . "://" . $httpHost;

$endpoints_json = [
	"inverter/list"			=> $my_uri . "/api/inverter/list",
	"inverter/id/0"			=> $my_uri . "/api/inverter/id/0",
	"inverter/alarm/0"		=> $my_uri . "/api/inverter/alarm/0",
	"inverter/version/0"	=> $my_uri . "/api/inverter/version/0",
	"generic"				=> $my_uri . "/api/generic",
	"index"					=> $my_uri . "/api/index",
	"setup"					=> $my_uri . "/api/setup",
	"setup/networks"		=> $my_uri . "/api/setup/networks",
	"setup/getip"			=> $my_uri . "/api/setup/getip",
	"system"				=> $my_uri . "/api/system",
	"live"					=> $my_uri . "/api/live",
	"powerHistory"			=> $my_uri . "/api/powerHistory",
	"powerHistoryDay"		=> $my_uri . "/api/powerHistoryDay"
];

$avail_endpoints = array("avail_endpoints" => $endpoints_json);

header('Content-Type: application/json; charset=utf-8');
print json_encode($avail_endpoints);

if (isset($_SERVER["TERM"]) and $_SERVER["TERM"] = "xterm") {
	print "\n";
}
?>
