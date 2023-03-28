<script src="
https://cdn.jsdelivr.net/npm/sweetalert2@11.7.3/dist/sweetalert2.all.min.js
"></script>
<link href="
https://cdn.jsdelivr.net/npm/sweetalert2@11.7.3/dist/sweetalert2.min.css
" rel="stylesheet">
<?php

$area_solicita = $_POST['area_solicita'];



// $servername = "localhost:3306";
// $username = "feb27esc_salas";
// $password = "Salas5457*";
// $dbname = "feb27esc_matricula";

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cafedsys";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conexión exitosa";
    $fecha_registro = date("Y-m-d H:i:s");

    $acceso_siga = isset($_POST['acceso_siga']) ? implode(',', $_POST['acceso_siga']) : '';
    $acceso_sigauser = isset($_POST['acceso_sigauser']) ? implode(',', $_POST['acceso_sigauser']) : '';
    $acceso_sigapersonal = isset($_POST['acceso_sigapersonal']) ? implode(',', $_POST['acceso_sigapersonal']) : '';


    // Preparar la sentencia SQL para insertar los datos
    $stmt = $conn->prepare("INSERT INTO formato (area_solicita, nom_area, modo_contrato, nombres, usuario_dominio, acceso_siga, 
    acceso_siaf, acceso_sigauser, acceso_sigapersonal, correo, carpeta_compartida, impresora_scaner,fecha_registro) VALUES 
    (:area_solicita, :nom_area, :modo_contrato, :nombres, :usuario_dominio, '$acceso_siga',  
    :acceso_siaf, '$acceso_sigauser', '$acceso_sigapersonal', :correo, :carpeta_compartida, :impresora_scaner, '$fecha_registro')");


if (empty($_POST['acceso_siaf'])) {
    echo "<script>alert('Debe seleccionar al menos una opción de acceso SIAF.')
    window.location.href = 'index.php';</script>";
  } else {
    $acceso_siaf = implode(',', $_POST['acceso_siaf']);


  $stmt->bindParam(':area_solicita', $_POST['area_solicita']);
  $stmt->bindParam(':nom_area', $_POST['nom_area']);
  $stmt->bindParam(':modo_contrato', $_POST['modo_contrato']);
  $stmt->bindParam(':nombres', $_POST['nombres']);
  $stmt->bindParam(':usuario_dominio', $_POST['usuario_dominio']);
  $stmt->bindParam(':acceso_siaf', $acceso_siaf);
  $stmt->bindParam(':correo', $_POST['correo']);
  $stmt->bindParam(':carpeta_compartida', $_POST['carpeta_compartida']);
  $stmt->bindParam(':impresora_scaner', $_POST['impresora_scaner']);

            if ($stmt->execute()) {
                echo "<script>Swal.fire({
                        icon: 'success',
                        title: 'Envío exitoso!',
                        text: 'Enviado correctamente.',
                        confirmButtonText: 'Aceptar'
                    }).then(function() {
                        window.location.href = 'index.php';
                    });
            </script>";
            } else {
                echo '<script>
                        swal({
                            title: "Error",
                            text: "Ha ocurrido un error al registrar los datos.",
                            icon: "error",
                            button: "Aceptar",
                        });
                    </script>';
            }

        }
}catch (PDOException $e) {
  	echo "Error: " . $e->getMessage();
  	file_put_contents('pdo_errors.log', $e->getMessage(), FILE_APPEND);
  }

?>	