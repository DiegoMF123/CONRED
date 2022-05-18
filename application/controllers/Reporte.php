<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Reporte extends CI_Controller
{

    // construct
    public function __construct()
    {
        parent::__construct();
        // load model
        $this->load->model('reportes');
    }
    public function prueba()
    {

        $listInfo = $this->reportes->reportegeneral();
        var_dump($listInfo);
    }

    //Creamos la función reportegeneral
    public function reporteSedes()
    {

        $this->load->helper('form');
        //Carmos la url para que nos cargue la pagina
        $this->load->helper('url');

        //$id = trim($_REQUEST["id"]);
        //Definomos como se va a llamar el nombre del docuemento que vamos a descargar
        $fileName = 'data-' . '.xlsx';
        // Cargamos la libreria excel
        $this->load->library('excel');
        // Definimos una variable la cual le cargaremos los valores del modelo reportes de la función reportegeneral
        $listInfo = $this->reportes->reporteDelasSedes();
        //Creamos un objeto para llamar la función phphexcel de la librería
        $objPHPExcel = new PHPExcel();
        // Con esto definimos que nuestro conteo de valores este vacío
        $objPHPExcel->setActiveSheetIndex(0);
        // Defininmos el valor de la primera fila en donde se pondrá el nombre de los campos que deseamos mostrar en el excel
        $objPHPExcel->getActiveSheet()->SetCellValue('A1', 'No');
        $objPHPExcel->getActiveSheet()->SetCellValue('B1', 'Sede');
        $objPHPExcel->getActiveSheet()->SetCellValue('C1', 'Dirección Fiscal');
        $objPHPExcel->getActiveSheet()->SetCellValue('D1', 'Teléfono');
        $objPHPExcel->getActiveSheet()->SetCellValue('E1', 'Extensión');
        $objPHPExcel->getActiveSheet()->SetCellValue('F1', 'Celular Institucional');

        // set Row
        $rowCount = 2;
        // Definimos un foreach para poder mandarle los datos que queremos mostrarle al excel, la variable listinfo nos define todos los valores que estamos agarrando de nuestro modelo
        // Para luego mandarselos a una nueva variable llamada $list y esa variable list nos traera consigo el nombre de los campos que deseamos mandar a llamar.

        foreach ($listInfo as $list) {
            $objPHPExcel->getActiveSheet()->SetCellValue('A' . $rowCount, $list->idSedes);
            $objPHPExcel->getActiveSheet()->SetCellValue('B' . $rowCount, $list->NombreSede);
            $objPHPExcel->getActiveSheet()->SetCellValue('C' . $rowCount, $list->DireccionFiscal);
            $objPHPExcel->getActiveSheet()->SetCellValue('D' . $rowCount, $list->Telefono);
            $objPHPExcel->getActiveSheet()->SetCellValue('E' . $rowCount, $list->Extension);
            $objPHPExcel->getActiveSheet()->SetCellValue('F' . $rowCount, $list->CelularInstitucional);

            $rowCount++;
        }
        //Por ultmo definimos el nombre del archivo, le mandamos la fecha en la que se está descargando el archivo y el tipo de archivo que va a descargar en este caso es un .xls
        // Que es un archivo de excel
        $filename = "Sedes Conred" . ".xls";
        header('Content-Type: application/vnd.ms-excel');
        // Acada mandamos la variable $fileName la cual pues solo almacena el dato que anteriormente se explico
        header('Content-Disposition: attachment;filename="' . $filename . '"');
        header('Cache-Control: max-age=0');
        //Definimos nada mas como queremos que nos aparezca la estructura del excel en este caso nos saldra una estructura bonita
        $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
        $objWriter->save('php://output');


        // code...
        //$this->load->view('dashboard');


    }

    //Creamos la función reportegeneral
    public function reporteContacto()
    {

        $this->load->helper('form');
        //Carmos la url para que nos cargue la pagina
        $this->load->helper('url');

        //$id = trim($_REQUEST["id"]);
        //Definomos como se va a llamar el nombre del docuemento que vamos a descargar
        $fileName = 'data-' . '.xlsx';
        // Cargamos la libreria excel
        $this->load->library('excel');
        // Definimos una variable la cual le cargaremos los valores del modelo reportes de la función reportegeneral
        $listInfo = $this->reportes->reporteContacto();
        //Creamos un objeto para llamar la función phphexcel de la librería
        $objPHPExcel = new PHPExcel();
        // Con esto definimos que nuestro conteo de valores este vacío
        $objPHPExcel->setActiveSheetIndex(0);
        // Defininmos el valor de la primera fila en donde se pondrá el nombre de los campos que deseamos mostrar en el excel
        $objPHPExcel->getActiveSheet()->SetCellValue('A1', 'Contacto');
        $objPHPExcel->getActiveSheet()->SetCellValue('B1', 'Direccion');
        $objPHPExcel->getActiveSheet()->SetCellValue('C1', 'Telefono');
        $objPHPExcel->getActiveSheet()->SetCellValue('D1', 'Correo');
        $objPHPExcel->getActiveSheet()->SetCellValue('E1', 'Horario De Atencion');

        // set Row
        $rowCount = 2;
        // Definimos un foreach para poder mandarle los datos que queremos mostrarle al excel, la variable listinfo nos define todos los valores que estamos agarrando de nuestro modelo
        // Para luego mandarselos a una nueva variable llamada $list y esa variable list nos traera consigo el nombre de los campos que deseamos mandar a llamar.

        foreach ($listInfo as $list) {
            $objPHPExcel->getActiveSheet()->SetCellValue('A' . $rowCount, $list->NombreContacto);
            $objPHPExcel->getActiveSheet()->SetCellValue('B' . $rowCount, $list->Direccion);
            $objPHPExcel->getActiveSheet()->SetCellValue('C' . $rowCount, $list->Telefono);
            $objPHPExcel->getActiveSheet()->SetCellValue('D' . $rowCount, $list->Correo);
            $objPHPExcel->getActiveSheet()->SetCellValue('E' . $rowCount, $list->HorarioDeAtencion);

            $rowCount++;
        }
        //Por ultmo definimos el nombre del archivo, le mandamos la fecha en la que se está descargando el archivo y el tipo de archivo que va a descargar en este caso es un .xls
        // Que es un archivo de excel
        $filename = "Contacto Conred" . ".xls";
        header('Content-Type: application/vnd.ms-excel');
        // Acada mandamos la variable $fileName la cual pues solo almacena el dato que anteriormente se explico
        header('Content-Disposition: attachment;filename="' . $filename . '"');
        header('Cache-Control: max-age=0');
        //Definimos nada mas como queremos que nos aparezca la estructura del excel en este caso nos saldra una estructura bonita
        $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
        $objWriter->save('php://output');


        // code...
        //$this->load->view('dashboard');


    }

    //Creamos la función reportegeneral
    public function reportePersonal()
    {

        $this->load->helper('form');
        //Carmos la url para que nos cargue la pagina
        $this->load->helper('url');

        //$id = trim($_REQUEST["id"]);
        //Definomos como se va a llamar el nombre del docuemento que vamos a descargar
        $fileName = 'data-' . '.xlsx';
        // Cargamos la libreria excel
        $this->load->library('excel');
        // Definimos una variable la cual le cargaremos los valores del modelo reportes de la función reportegeneral
        $listInfo = $this->reportes->reportePersonal();
        //Creamos un objeto para llamar la función phphexcel de la librería
        $objPHPExcel = new PHPExcel();
        // Con esto definimos que nuestro conteo de valores este vacío
        $objPHPExcel->setActiveSheetIndex(0);
        // Defininmos el valor de la primera fila en donde se pondrá el nombre de los campos que deseamos mostrar en el excel
        $objPHPExcel->getActiveSheet()->SetCellValue('A1', 'Id_Personal');
        $objPHPExcel->getActiveSheet()->SetCellValue('B1', 'Nombre');
        $objPHPExcel->getActiveSheet()->SetCellValue('C1', 'Puesto');
        $objPHPExcel->getActiveSheet()->SetCellValue('D1', 'Edad');
        $objPHPExcel->getActiveSheet()->SetCellValue('E1', 'Correo');
        $objPHPExcel->getActiveSheet()->SetCellValue('F1', 'Telefono');
        $objPHPExcel->getActiveSheet()->SetCellValue('G1', 'Salario');
        $objPHPExcel->getActiveSheet()->SetCellValue('H1', 'Bonificacion');
        $objPHPExcel->getActiveSheet()->SetCellValue('I1', 'Bonificacion Profesional');
        $objPHPExcel->getActiveSheet()->SetCellValue('J1', 'Total del Salario');

        // set Row
        $rowCount = 2;
        // Definimos un foreach para poder mandarle los datos que queremos mostrarle al excel, la variable listinfo nos define todos los valores que estamos agarrando de nuestro modelo
        // Para luego mandarselos a una nueva variable llamada $list y esa variable list nos traera consigo el nombre de los campos que deseamos mandar a llamar.

        foreach ($listInfo as $list) {
            $objPHPExcel->getActiveSheet()->SetCellValue('A' . $rowCount, $list->idPersonal);
            $objPHPExcel->getActiveSheet()->SetCellValue('B' . $rowCount, $list->Nombre);
            $objPHPExcel->getActiveSheet()->SetCellValue('C' . $rowCount, $list->Puesto);
            $objPHPExcel->getActiveSheet()->SetCellValue('D' . $rowCount, $list->Edad);
            $objPHPExcel->getActiveSheet()->SetCellValue('E' . $rowCount, $list->Correo);
            $objPHPExcel->getActiveSheet()->SetCellValue('F' . $rowCount, $list->Telefono);
            $objPHPExcel->getActiveSheet()->SetCellValue('G' . $rowCount, $list->Salario);
            $objPHPExcel->getActiveSheet()->SetCellValue('H' . $rowCount, $list->Bonificacion);
            $objPHPExcel->getActiveSheet()->SetCellValue('I' . $rowCount, $list->BonificacionProfesional);
            $objPHPExcel->getActiveSheet()->SetCellValue('J' . $rowCount, $list->TotalSalario);

            $rowCount++;
        }
        //Por ultmo definimos el nombre del archivo, le mandamos la fecha en la que se está descargando el archivo y el tipo de archivo que va a descargar en este caso es un .xls
        // Que es un archivo de excel
        $filename = "Reporte Personal Conred" . ".xls";
        header('Content-Type: application/vnd.ms-excel');
        // Acada mandamos la variable $fileName la cual pues solo almacena el dato que anteriormente se explico
        header('Content-Disposition: attachment;filename="' . $filename . '"');
        header('Cache-Control: max-age=0');
        //Definimos nada mas como queremos que nos aparezca la estructura del excel en este caso nos saldra una estructura bonita
        $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
        $objWriter->save('php://output');


        // code...
        //$this->load->view('dashboard');


    }
}
