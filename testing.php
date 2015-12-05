<?php

/**
 * DropsizeMVCf - extension of the SlimFramework and others tools
 *
 * @author      Isaac Trenado <isaac.trenado@codigolimpio.com>
 * @copyright   2013 Isaac Trenado
 * @link        http://dropsize.codigolimpio.com
 * @license     http://dropsize.codigolimpio.com/license.txt
 * @version     3.0.1
 * @package     DropsizeMVCf
 *
 * DropsizeMVCf - Web publishing software
 * Copyright 2015 by the contributors
 * 
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 * 
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
 * 
 * This program incorporates work covered by the following copyright and
 * permission notices:
 * 
 * DropsizeMVCf is (c) 2013, 2015 
 * Isaac Trenado - isaac.trenado@codigolimpio.com -
 * http://www.codigolimpio.com
 * 
 * Wherever third party code has been used, credit has been given in the code's comments.
 *
 * DropsizeMVCf is released under the GPL
 * 
 */
/**
 * Create Basic and complex examples Query to MYSQL
 * 
 * @package com.dropsizemvcf
 * @author  Isaac Trenado
 * @since   1.0.0
 */
include "./UnicodeUtf8Replace.php";
include "./DPManagerJSON.php";
include "./DPManager.php";
include "./Conexion.php";

$con = new Conexion();

$con->setDebug(0);

$model = array("ID" => "id_cliente",
    "Metodo" => "GET",
    "Tipo" => "Seguros", // Params
    "Index" => array('nombre', 'paterno', 'materno', 'campo', 'extra'),
    "Alias" => array(
        "materno" => "IFNULL(materno, '-')",
        "nombre" => "CONCAT('*', nombre)",
        "paterno" => "CONCAT_WS('', LOWER(SUBSTRING(paterno, 1, 1)), UCASE(SUBSTRING(paterno, 2)))",
        "campo" => "concat_ws(' ', nombre, paterno)",
        "extra" => "(SELECT curdate())"
    ),
    "Report" => array(),
    "Params" => array(),
    "Seguros" => $_GET // $HTTP_GET_VARS
);

$campos = DPManager::buildDatosTo($model, $otros);

echo "El parametro materno tiene valor : <br />";
echo isset($campos['paterno']) && !empty($campos['materno']) ? "true" : "false";
echo "<br />";

echo "<h1>Return array params required for the app and otros params no ables with app</h1>";
echo "<pre>";
echo "<h1>Safe params</h1>";
print_r($campos);
echo "<h1>Other params</h1>";
print_r($otros);
echo "</pre>";

echo "<hr />Imprimir seleccion de campos en una sola fila o un solo registro<hr />";
$lstCampos = DPManager::buildDatosJsonTo($model, "tabla", true);
$lstSelectJSONQuery = DPManager::buildSelectQuery($lstCampos, "tabla", true);

//echo $lstCampos;
//echo "<hr />";
//echo $lstSelectJSONQuery;
//echo "<hr />";

$lstQueryResult = DPManager::getField($con, $lstSelectJSONQuery);

echo "<hr />";
echo $lstQueryResult;
echo "<hr />";

$lstCampos = DPManager::buildSingleJsonTo($model);
$lstSelectJSONQuery = DPManager::buildSelectQuery($lstCampos, "tabla", true);
echo $lstQueryResult = DPManager::getField($con, $lstSelectJSONQuery);
echo "<br />";

$lstCampos = DPManager::buildSingleFieldJsonTo($model);
$lstSelectJSONQuery = DPManager::buildSelectQuery($lstCampos, "tabla", true);
echo $lstQueryResult = DPManager::getField($con, $lstSelectJSONQuery);
echo "<br />";

$lstJSONArrayField = DPManager::buildSingleArrayFieldJsonTo($model);
$lstSelectJSONArrayQuery = DPManager::buildSelectQuery($lstJSONArrayField, "tabla");
echo $lstJSONArrayRow = DPManager::getField($con, $lstSelectJSONArrayQuery);
echo "<br />";
die();




/*
 * 
 * DPManager::buildDatosJsonTo($model, "tabla", " nombre = 'Super' ")
 * 
 * Output : 
 * 
 * CONCAT("{\"success\":true,\"total\":\"",(SELECT COUNT(*) 
 *  FROM tabla WHERE  nombre = 'Super' ),"\",",
 *  "\"rows\":[",GROUP_CONCAT(CONCAT("{"),CONCAT("\"id_cliente\":\"",id_cliente,"\","),
 *  CONCAT("\"nombre\":\"",nombre,"\","),CONCAT("\"paterno\":\"",paterno,"\","),
 *  CONCAT("\"materno\":\"",materno,"\""),CONCAT("}")), "]}") AS json
 * 
 * 
 * DPManager::buildSelectQuery($lstSimpleQuery, "tabla", " nombre = 'Super' ");
 * 
 * Output : 
 * 
 * SELECT 
 * 
 *  CONCAT("{\"success\":true,\"total\":\"",(SELECT COUNT(*) FROM tabla WHERE nombre = 'Super' ),
 *  "\",", "\"rows\":[",GROUP_CONCAT(CONCAT("{"),CONCAT("\"id_cliente\":\"",id_cliente,"\","),
 *  CONCAT("\"nombre\":\"",nombre,"\","),CONCAT("\"paterno\":\"",paterno,"\","),
 *  CONCAT("\"materno\":\"",materno,"\""),CONCAT("}")), "]}") AS json 
 * 
 * FROM 
 *      tabla 
 * WHERE 
 *      nombre = 'Super' 
 * 
 * Result :
 * 
 * {"success":true,"total":"1","rows":[{"id_cliente":"1","nombre":"Super","paterno":"Chinazo","materno":"Poderoso"}]}
 * 
 * NiceFormat : jsonlint.com
 * 
 * {
 *      "success": true,
 *      "total": "1",
 *      "rows": [{
 *          "id_cliente": "1",
 *          "nombre": "Super",
 *          "paterno": "Chinazo",
 *          "materno": "Poderoso"
 *      }]
 * }
 * 
 */

$lstSimpleFieldsQuery = DPManager::buildDatosJsonTo($model, "tabla", " nombre = 'Super' ");
$lstSelectJsonQry = DPManager::buildSelectQuery($lstSimpleFieldsQuery, "tabla", " nombre = 'Super' ");
$lstResult = DPManager::getField($con, $lstSelectJsonQry);

echo "<h1>Return complex Query in format JSON</h1>";
echo "<pre>";
echo "<h3>Query format JSON</h3>";
print_r($lstSimpleFieldsQuery);
echo "<h3>Query complete JSON Query</h3>";
print_r($lstSelectJsonQry);
echo "<h2>Result</h2>";
print_r($lstResult);
echo "</pre>";

/*
 * 
 * DPManager::buildSingleJsonTo($parModelo, $pstExtra = false)
 * 
 * Output :
 * 
 * CONCAT("[",GROUP_CONCAT(CONCAT("{"),CONCAT("\"id_cliente\":\"",id_cliente,"\","),
 * CONCAT("\"nombre\":\"",nombre,"\","),CONCAT("\"paterno\":\"",paterno,"\","),
 * CONCAT("\"materno\":\"",materno,"\""),CONCAT("}")), "]") AS jsons
 * 
 * DPManager::buildSelectQuery($lstSimpleSingleFieldsQuery, "tabla", false);
 * 
 * Output :
 * 
 * SELECT 
 * 
 * CONCAT("[",GROUP_CONCAT(CONCAT("{"),CONCAT("\"id_cliente\":\"",id_cliente,"\","),
 * CONCAT("\"nombre\":\"",nombre,"\","),CONCAT("\"paterno\":\"",paterno,"\","),
 * CONCAT("\"materno\":\"",materno,"\""),CONCAT("}")), "]") AS json 
 * 
 * FROM 
 * 
 *  tabla
 * 
 * Result : 
 * 
 * [{"id_cliente":"1","nombre":"Super","paterno":"Chinazo","materno":"Poderoso"},{"id_cliente":"2","nombre":"Will","paterno":"Smith","materno":"Ricardo"},{"id_cliente":"3","nombre":"Maicol","paterno":"Torres","materno":"Fuertes"}]
 * 
 * NiceFormat : jsonlint.com
 * 
 * [
 *  {
 *      "id_cliente": "1",
 *      "nombre": "Super",
 *      "paterno": "Chinazo",
 *      "materno": "Poderoso"
 *  }, 
 *  {
 *      "id_cliente": "2",
 *      "nombre": "Will",
 *      "paterno": "Smith",
 *      "materno": "Ricardo"
 *  }, 
 *  {
 *      "id_cliente": "3",
 *      "nombre": "Maicol",
 *      "paterno": "Torres",
 *      "materno": "Fuertes"
 *  }
 * ]
 */

$lstSimpleSingleFieldsQuery = DPManager::buildSingleJsonTo($model, false);
$lstSelectSingleJSON = DPManager::buildSelectQuery($lstSimpleSingleFieldsQuery, "tabla", false);
$lstJGetAllsJSON = DPManager::getField($con, $lstSelectSingleJSON);

echo "<h1>Return complex Simple All Array Object in format JSON</h1>";
echo "<pre>";
echo "<h3>Query format JSON</h3>";
print_r($lstSimpleSingleFieldsQuery);
echo "<h3>Query complete JSON Query</h3>";
print_r($lstSelectSingleJSON);
echo "<h2>Result</h2>";
print_r($lstJGetAllsJSON);
echo "</pre>";

/*
 * 
 * DPManager::buildSingleJFieldsonTo($model)
 * 
 * Output :
 * 
 * CONCAT("[",GROUP_CONCAT(CONCAT("["),CONCAT("\"",id_cliente,"\""),
 * CONCAT("\"",nombre,"\""),CONCAT("\"",paterno,"\""),
 * CONCAT("\"",materno,"\""),CONCAT("]")), "]") AS json
 * 
 * DPManager::buildSelectQuery($lstSimpleSingleFieldsQuery, "tabla", false);
 * 
 * Output :
 * 
 * SELECT 
 * 
 *  CONCAT("[",GROUP_CONCAT(CONCAT("["),CONCAT("\"",id_cliente,"\""),
 *  CONCAT("\"",nombre,"\""),CONCAT("\"",paterno,"\""),
 *  CONCAT("\"",materno,"\""),CONCAT("]")), "]") AS json 
 * 
 * FROM 
 * 
 * tabla
 * 
 * Result : 
 * 
 * [{"id_cliente":"1","nombre":"Super","paterno":"Chinazo","materno":"Poderoso"},{"id_cliente":"2","nombre":"Will","paterno":"Smith","materno":"Ricardo"},{"id_cliente":"3","nombre":"Maicol","paterno":"Torres","materno":"Fuertes"}]
 * 
 * NiceFormat : jsonlint.com
 * 
 * [
 *      ["1", "Super", "Chinazo", "Poderoso"],
 *      ["2", "Will", "Smith", "Ricardo"],
 *      ["3", "Maicol", "Torres", "Fuertes"]
 * ]
 */

$lstJSONField = DPManager::buildSingleJFieldsonTo($model);
$lstSelectJSONFieldQuery = DPManager::buildSelectQuery($lstJSONField, "tabla");
$lstJSONFieldsAlls = DPManager::getField($con, $lstSelectJSONFieldQuery);

echo "<h1>Return complex JSON Array Records</h1>";
echo "<pre>";
echo "<h3>Query format JSON</h3>";
print_r($lstJSONField);
echo "<h3>Query complete JSON Query</h3>";
print_r($lstSelectJSONFieldQuery);
echo "<h2>Result</h2>";
print_r($lstJSONFieldsAlls);
echo "</pre>";

/*
 * 
 * DPManager::buildSingleArrayFieldJsonTo($model)
 * 
 * Output :
 * 
 * CONCAT("[",GROUP_CONCAT(CONCAT("\"",id_cliente,"\","),
 * CONCAT("\"",nombre,"\","),CONCAT("\"",paterno,"\","),
 * CONCAT("\"",materno,"\"")), "]") AS json
 * 
 * DPManager::buildSelectQuery($lstJSONArrayField, "tabla", "nombre = 'Super'");
 * 
 * Output :
 * 
 * SELECT 
 * 
 *  CONCAT("[",GROUP_CONCAT(CONCAT("\"",id_cliente,"\","),
 *  CONCAT("\"",nombre,"\","),CONCAT("\"",paterno,"\","),
 *  CONCAT("\"",materno,"\"")), "]") AS json 
 * 
 * FROM 
 * 
 * tabla 
 * 
 * WHERE 
 * 
 * nombre = 'Super'
 * 
 * Result : 
 * 
 * ["1","Super","Chinazo","Poderoso"]
 * 
 * NiceFormat : jsonlint.com
 * 
 * [
 *      ["1", "Super", "Chinazo", "Poderoso"],
 *      ["2", "Will", "Smith", "Ricardo"],
 *      ["3", "Maicol", "Torres", "Fuertes"]
 * ]
 * 
 */

$lstJSONArrayField = DPManager::buildSingleArrayFieldJsonTo($model);
$lstSelectJSONArrayQuery = DPManager::buildSelectQuery($lstJSONArrayField, "tabla", "nombre = 'Super'");
$lstJSONArrayRow = DPManager::getField($con, $lstSelectJSONArrayQuery);

echo "<h1>Return Simple JSON Array Record</h1>";
echo "<pre>";
echo "<h3>Query format JSON</h3>";
print_r($lstJSONArrayField);
echo "<h3>Query complete JSON Query</h3>";
print_r($lstSelectJSONArrayQuery);
echo "<h2>Result</h2>";
print_r($lstJSONArrayRow);
echo "</pre>";

/*
 * 
 * DPManager::setSessionGroupConcatMaxLen($con);
 * 
 * Output :
 * 
 * ADORecordSet_empty Object
 *  (
 *      [dataProvider] => empty
 *      [databaseType] => 
 *      [EOF] => 1
 *      [_numOfRows] => 0
 *      [fields] => 
 *      [connection] => 
 *  )
 * 
 * Result : 
 * 
 * SET SESSION group_concat_max_len = 4294967295   
 * 
 * 
 */

$lobResult = DPManager::setSessionGroupConcatMaxLen($con);

echo "<h1>Increase the limit from GroupConcat Max Length</h1>";
echo "<pre>";
echo "<h3>Query to increase the limit from function Group_concat()</h3>";
print_r($lobResult);

