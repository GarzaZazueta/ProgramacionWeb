<?php require_once('html2pdf/html2pdf.class.php');
$contenido="<h2>FORMULARIO CONTACTO</h2>
			<hr>
			<h4> CONTACTO EMPRESA </h4><ul>";
			if(isset($_POST["nom"]))
			{
				$contenido.="<li>Nombre:$_POST[nom]</li>";
			}
			
			if(isset($_POST["dir"]))
			{
				$contenido.="<li>Direccion:$_POST[dir]</li>";
			}
			
			if(isset($_POST["edad"]))
			{
				$contenido.="<li>Edad:$_POST[edad]</li>";
			}
			
			if(isset($_POST["email"]))
			{
				$contenido.="<li>Correo Electronico:$_POST[email]</li>";
			}

			$contenido.="</ul>";

$html2pdf=new HTML2PDF('P','A4','es');
$html2pdf->WriteHTML($contenido);
$html2pdf->Output('curriculum.pdf');

?>
			