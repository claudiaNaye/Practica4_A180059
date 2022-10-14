<?phps
require_once "lib/nusoap.php";
function getAlumnos($datos) {
    if($datos == "Alumnos") {
        return join(",", array(
            "CLAUDIA NAYELI GONZALEZ CUNDAPI",
            "<br>OBDULIA SELENE MENDEZ LOPEZ",
            "<br>JUAN CARLOS ESPINOSA LEON",
            "<br>DANIEL ALEJANDRO ALEGRIA CARRASCO",
            "<br>MAINOR RODRIGO"));
        }
        else{
            return "No existen esos nombres de alumnos";
    }
}
$server = new soap_server();
$server->register("getAlumnos");
if( !isset($HTTP_RAW_POST_DATA))$HTTP_RAW_POST_DATA=file_get_contents('php://input');
    $server->service($HTTP_RAW_POST_DATA);
?>