<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inscripciones en linea Escuela de Talentos Callao | Plataforma de Gestión Educativa </title>

  <meta name="description" content="Matricula para la escuela de talentos callao 2023">
  <meta name="keywords" content="Matricula,2023,escuela de talentos, callao">
  <meta name="author" content="CAFED - Comite de Administración del Fondo Educativo del Callao">
  <meta name="robots" content="index, follow">
  <link rel="canonical" href="https://escueladetalentoscallao.edu.pe/matricula/index.php">

  <link rel="stylesheet" href="css/style.css">
  <link rel="icon" type="image/x-icon" href="../logotalento.ico">

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css">

  <link rel="stylesheet" href=" https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
 

  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.20/dist/sweetalert2.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.20/dist/sweetalert2.min.css">

  
  <!-- Autocomplete -->
  <link rel="stylesheet" href="//code.jquery.com/ui/1.13.0/themes/base/jquery-ui.css">
  <script src="//code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="//code.jquery.com/ui/1.13.0/jquery-ui.min.js"></script>

</head>

<body class="fondoprincipal-m">
  <main class="animated animate__fadeInUp detalleCuadro">
    <section class="fondoblanco-re">
      <div class="logo">
        <img src="../img/cafed.png" alt="">
      </div>



      <!-- FORMULARIO  -->
      <div class="container-fluid">

        <div class="row justify-content-center">
          <div class="col-11 col-sm-10 col-md-10  text-center p-0 mt-3 mb-2">
            <div class="card px-0 pt-4 pb-0 mt-3 mb-3">
              <h2 id="heading" class="titulo">FORMATO DE AUTORIZACIÓN DE USUARIO</h2>

              <form id="msform" class="row g-3" method="POST" action="insert.php" autocomplete="off">

                <fieldset>

                  <div class="form-card col-sm-12 mx-t3 mb-4">
                    <div class="row">
                      <div class="col-7">
                      </div>
                 
                    </div>


                    <div class="row">

                      <div class="col-sm-4 form-group">
                        <label class="fieldlabels" for="area_solicita">Area Solicitante:</label>
                        <select class="form-select" aria-label="area_solicita" name="area_solicita">
                          <option>Seleccionar :</option>
                          <option value="gerencia">GERENCIA</option>
                          <option value="subgerencia">SUBGERENCIA</option>
                          <option value="oficina">OFICINA</option>

                        </select>
                      </div>
                      <div class="col-sm-4 form-group">
                        <label class="fieldlabels" for="nom_area">Nombre Área:</label>
                        <input type="text" class="form-control area-autocompletado" id="nom_area" name="nom_area"
                          placeholder="Escriba el nombre del área">
                        <input type="hidden" id="area_solicita_value" name="area_solicita_value" required
                        oninvalid="this.setCustomValidity('Por favor ingrese el nombre del área')">
                      </div>

                      <div class="col-sm-4 form-group">
                        <label class="fieldlabels" for="modo_contrato">Modo de Contrato:</label>
                        <select class="form-select" aria-label="modo_contrato" name="modo_contrato">
                          <option>Seleccionar :</option>
                          <option value="cas" selected>CAS</option>
                          <option value="locador" selected>LOCADOR</option>
                        </select>
                      </div>

                  
                      <div class="col-sm-8 form-group">
                        <label class="fieldlabels" for="nombres">Apellidos y Nombres </label>
                        <input type="text" class="form-control" id="nombres"
                          placeholder="Ingrese sus Apellidos y nombres" name="nombres" required>
                      </div>

                      <div class="col-sm-4 form-group">
                        <label class="fieldlabels" for="usuario_dominio">Creación de Usuario de Dominio:</label>
                        <select class="form-select" aria-label="usuario_dominio" name="usuario_dominio">
                          <option>Seleccionar :</option>
                          <option value="si" selected>SI</option>
                          <option value="no" selected>NO</option>
                        </select>
                      </div>

                
                      <div class="flexrow">
                      <div class="col-sm-4 form-group">
                        <p><b>ACCESOS MODULOS SIGA MEF</b></p>
                      
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" id="logistica" name="acceso_siga[]"
                            value="logistica">
                          <label class="form-check-label" for="logistica">MODULO DE LOGISTICA</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" id="patrimonio" name="acceso_siga[]"
                            value="patrimonio">
                          <label class="form-check-label" for="patrimonio">MODULO PATRIMONIO</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" id="ppr" name="acceso_siga[]"
                            value="ppr">
                          <label class="form-check-label" for="ppr">MODULO PPR</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" id="utilitarios" name="acceso_siga[]"
                            value="utilitarios">
                          <label class="form-check-label" for="utilitarios">MODULO UTILITARIOS</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" id="configuracion" name="acceso_siga[]"
                            value="configuracion">
                          <label class="form-check-label" for="configuracion">MODULO DE CONFIGURACION</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" id="bienescorrientes" name="acceso_siga[]"
                            value="bienescorrientes">
                          <label class="form-check-label" for="bienescorrientes">MODULO DE BIENES CORRIENTES</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" id="tesoreria" name="acceso_siga[]"
                            value="tesoreria">
                          <label class="form-check-label" for="tesoreria">MODULO DE TESORERIA</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" id="otros" name="acceso_siga[]"
                            value="otros">
                          <label class="form-check-label" for="otros">OTROS</label>
                        </div>
                      </div>

                      <div class="col-sm-4 ">
                        <p><b>ACCESOS MODULOS SIGA USER</b></p>
                      
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" id="sigauser" name="acceso_sigauser[]"
                            value="sigauser">
                          <label class="form-check-label" for="sigauser">MODULO DE SIGA USER</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" id="logistica-sigauser" name="acceso_sigauser[]"
                            value="logistica-sigauser">
                          <label class="form-check-label" for="logistica-sigauser">MODULO DE LOGISTICA</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" id="provision-sigauser" name="acceso_sigauser[]"
                            value="provision-sigauser">
                          <label class="form-check-label" for="provision-sigauser">MODULO PROVISION</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" id="tesoreria-sigauser" name="acceso_sigauser[]"
                            value="tesoreria-sigauser">
                          <label class="form-check-label" for="tesoreria-sigauser">MODULO TESORERIA</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" id="ingresos-sigauser" name="acceso_sigauser[]"
                            value="ingresos-sigauser">
                          <label class="form-check-label" for="ingresos-sigauser">MODULO DE INGRESOS</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" id="presu-sigauser" name="acceso_sigauser[]"
                            value="presu-sigauser">
                          <label class="form-check-label" for="presu-sigauser">MODULO DE PRESUPUESTO</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" id="almacen-sigauser" name="acceso_sigauser[]"
                            value="almacen-sigauser">
                          <label class="form-check-label" for="almacen-sigauser">MODULO DE ALMACEN</label>
                        </div>
                        
                      </div>


                     <div class="col-sm-4 ">
                        <p><b>ACCESOS MODULOS SIGA PERSONAL</b></p>
                      
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" id="marcacion-sigapersonal" name="acceso_sigapersonal[]"
                            value="marcacion-sigapersonal">
                          <label class="form-check-label" for="marcacion-sigapersonal">MODULO DE MARCACION / ANULACION</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" id="asistencia-acceso_sigapersonal" name="acceso_sigapersonal[]"
                            value="asistencia-acceso_sigapersonal">
                          <label class="form-check-label" for="asistencia-acceso_sigapersonal">MODULO DE PLANILLA DE ASISTENCIA</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" id="remuneraciones-acceso_sigapersonal" name="acceso_sigapersonal[]"
                            value="remuneraciones-acceso_sigapersonal">
                          <label class="form-check-label" for="remuneraciones-acceso_sigapersonal">MODULO REMUNERACIONES Y PDT</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" id="papeletas-acceso_sigapersonal" name="acceso_sigapersonal[]"
                            value="papeletas-acceso_sigapersonal">
                          <label class="form-check-label" for="papeletas-acceso_sigapersonal">MODULO PAPELETAS</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" id="vacaciones-acceso_sigapersonal" name="acceso_sigapersonal[]"
                            value="vacaciones-acceso_sigapersonal">
                          <label class="form-check-label" for="vacaciones-acceso_sigapersonal">MODULO DE VACACIONES</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" id="reportes-acceso_sigapersonal" name="acceso_sigapersonal[]"
                            value="reportes-acceso_sigapersonal">
                          <label class="form-check-label" for="reportes-acceso_sigapersonal">MODULO DE REPORTES</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" id="otro-acceso_sigapersonal" name="acceso_sigapersonal[]"
                            value="otro-acceso_sigapersonal">
                          <label class="form-check-label" for="otro-acceso_sigapersonal">OTRO</label>
                        </div>
                        
                      </div>

                      </div>

                      <label class="fieldlabels"><b>ACCESOS MODULOS - SIAF MEF:</b></label>

                      <div class="flexrow">
                        
                        <div class="col-sm-4">
                          <p>MODULO ADMINISTRACIÓN</p>
                          
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="registro-admin" name="acceso_siaf[]"
                              value="registro-admin">
                            <label class="form-check-label" for="registro-admin">REGISTRO</label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="procesos-admin" name="acceso_siaf[]"
                              value="procesos-admin">
                            <label class="form-check-label" for="procesos-admin">PROCESOS</label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="consultas-admin" name="acceso_siaf[]"
                              value="consultas-admin">
                            <label class="form-check-label" for="consultas-admin">CONSULTAS</label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="reportes-admin" name="acceso_siaf[]"
                              value="reportes-admin">
                            <label class="form-check-label" for="reportes-admin">REPORTES</label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="transmision-admin" name="acceso_siaf[]"
                              value="transmision-admin">
                            <label class="form-check-label" for="transmision-admin">TRANSMISION</label>
                          </div>
                        </div>

                       
                        <div class="col-sm-4">
                          <p>MODULO CONTABLE</p>
                         
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="registro-conta" name="acceso_siaf[]"
                              value="registro-conta">
                            <label class="form-check-label" for="registro-conta">REGISTRO</label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="procesos-conta" name="acceso_siaf[]"
                              value="procesos-conta">
                            <label class="form-check-label" for="procesos-conta">PROCESOS</label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="consultas-conta" name="acceso_siaf[]"
                              value="consultas-conta">
                            <label class="form-check-label" for="consultas-conta">CONSULTAS</label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="reportes-conta" name="acceso_siaf[]"
                              value="reportes-conta">
                            <label class="form-check-label" for="reportes-conta">REPORTES</label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="transmision-conta" name="acceso_siaf[]"
                              value="transmision-conta">
                            <label class="form-check-label" for="transmision-conta">TRANSMISION</label>
                          </div>
                        </div>

                        <div class="col-sm-4">
                          <p>MODULO PROCESO PRESUPUESTARIO</p>
                         
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="procesos-procesopresu" name="acceso_siaf[]"
                              value="procesos-procesopresu">
                            <label class="form-check-label" for="procesos-procesopresu">PROCESOS</label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="consultas-procesopresu" name="acceso_siaf[]"
                              value="consultas-procesopresu">
                            <label class="form-check-label" for="consultas-procesopresu">CONSULTAS</label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="reportes-procesopresu" name="acceso_siaf[]"
                              value="reportes-procesopresu">
                            <label class="form-check-label" for="reportes-procesopresu">REPORTES</label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="transmision-procesopresu" name="acceso_siaf[]"
                              value="transmision-procesopresu">
                            <label class="form-check-label" for="transmision-procesopresu">TRANSMISION</label>
                          </div>
                        </div>  

                        <div class="col-sm-4">
                          <p>MODULO CONTROL DE PAGOS PLANILLAS</p>
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="mantenimiento-pagoplanilla" name="acceso_siaf[]"
                              value="mantenimiento-pagoplanilla">
                            <label class="form-check-label" for="mantenimiento-pagoplanilla">MANTENIMIENTO</label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="registro-pagoplanilla" name="acceso_siaf[]"
                              value="registro-pagoplanilla">
                            <label class="form-check-label" for="registro-pagoplanilla">REGISTRO</label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="procesos-pagoplanilla" name="acceso_siaf[]"
                              value="procesos-pagoplanilla">
                            <label class="form-check-label" for="procesos-pagoplanilla">PROCESOS</label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="reportes-pagoplanilla" name="acceso_siaf[]"
                              value="reportes-pagoplanilla">
                            <label class="form-check-label" for="reportes-pagoplanilla">REPORTES</label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="transmision-pagoplanilla" name="acceso_siaf[]"
                              value="transmision-pagoplanilla">
                            <label class="form-check-label" for="transmision-pagoplanilla">TRANSMISION</label>
                          </div>
                        </div> 

                        <div class="col-sm-4">
                          <p>MODULO CONCILIACION DE OPERACIONES SIAF</p>
                        
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="procesos-concilia" name="acceso_siaf[]"
                              value="procesos-concilia">
                            <label class="form-check-label" for="procesos-concilia">PROCESOS</label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="consultas-concilia" name="acceso_siaf[]"
                              value="consultas-concilia">
                            <label class="form-check-label" for="consultas-concilia">CONSULTAS</label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="transmision-concilia" name="acceso_siaf[]"
                              value="transmision-concilia">
                            <label class="form-check-label" for="transmision-concilia">TRANSMISION</label>
                          </div>
                        </div>
                        </div> 

                    

                        <div class="col-sm-4 form-group">
                          <label class="fieldlabels" for="tramite_doc">Tramite Documentario</label>
                          <select id="tramite_doc" name="tramite_doc"
                            class="form-control browser-default custom-select">
                            <option value="si">SI</option>
                            <option value="no" selected>NO</option>
                          </select>
                        </div>

                        <div class="col-sm-4 form-group">
                          <label class="fieldlabels" for="carpeta_compartida">Carpeta Compartida</label>
                          <select id="carpeta_compartida" class="form-select" aria-label="carpeta_compartida"
                            name="carpeta_compartida">
                            <option value="si">SI</option>
                            <option value="no" selected>NO</option>
                          </select>
                        </div>
                        <div class="col-sm-4 form-group">
                          <label class="fieldlabels" for="correo">Correo Electrónico</label>
                          <select id="correo" class="form-select" aria-label="correo" name="correo">
                            <option value="si">SI</option>
                            <option value="no" selected>NO</option>
                          </select>
                        </div>


                        <div class="col-sm-4 form-group">
                          <label class="fieldlabels" for="impresora_scaner">Impresora / Scanner</label>
                          <select id="impresora_scaner" class="form-select" aria-label="impresora_scaner" name="impresora_scaner">
                            <option value="si">SI</option>
                            <option value="no" selected>NO</option>
                          </select>
                        </div>

                     

                      </div>


                    </div>
                     <button type="submit" class="btn btn-primary " name="registro">ENVIAR</button>
                    <!-- <button type="submit" class="btn btn-primary " onclick="validarFormulario(event)">Enviar</button> -->



                    <div class="importante">
                      <p>* Debera llenar de forma obligatoria todos los campos</p>
                    </div>
                </fieldset>





              </form>
            </div>
          </div>
        </div>
      </div>
    </section>

  </main>


  <!-- <script src="js/validaciones.js"></script> -->


  <script>
    $(function () {
      var areas = [
        "Gerencia General",
        "Gerencia de Administración",
        "Gerencia Desarrollo Educativo",
        "Gerencia Infraestructura Educativa",
        "Gerencia de Planificación y Presupuesto",
        "Oficina Informática",
        "Oficina Logística",
        "Oficina Contabilidad",
        "Oficina RRHH",
        "Gerencia Asesoria Juridica",
      ];
      $(".area-autocompletado").autocomplete({
        source: areas,
        select: function (event, ui) {
          $("#area_solicita_value").val(ui.item.value);
        }
      });
    });
  </script>
</body>

</html>