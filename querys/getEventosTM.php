<?php
/*
 * getEcosTM funcion que se conecta al a base de datos para entregar los Eventos de un TM
 * se le debe entregar un Rut
 *
 */
include_once dirname ( __FILE__ ) . '/../conexionLocal.php'; // archivo de conexion local
function getEventosTM($Rut = null) {
	if ($Rut != null) {
		$query = "SELECT idEvento as id, HoraInicio as start, HoraTermino as end, color, idEcos as idEco, Ecos.Nombre as title, Centro.Nombre as description
				FROM Evento, Ecos, TM, Centro
				WHERE Rut=$Rut AND TM_idTM=idTM AND Ecos_idEcos=idEcos AND Centro_idCentro=idCentro";
		
		$res = mysql_query ( $query ) or die ( mysql_error () );
		
		while ( $row = mysql_fetch_assoc ( $res ) ) {
			$result [] = $row;
		} // while
		return $result;
	} // si se le entrega correctamente el idCentro
}
// var_dump ( getEventosTM ( 1 ) );
?>