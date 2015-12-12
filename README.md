# DPManagerJSON

BuildQuerys From Arrays to get Results in format JSON, Array, Array object, Objects. Crossdomain

Dudas y comentarios

http://blog.codigolimpio.com
http://www.codigolimpio.com
http://dropsize.codigolimpio.com

<pre style='color:#000000;background:#ffffff;'><span style='color:#5f5035; background:#ffffe8; '>&lt;?php</span><span style='color:#000000; background:#ffffe8; '></span>
<span style='color:#000000; background:#ffffe8; '></span>
<span style='color:#c0bd92; background:#ffffe8; '>/*</span><span style='color:#3f5fbf; background:#ffffe8; '>*</span>
<span style='color:#3f5fbf; background:#ffffe8; '>&#xa0;* DropsizeMVCf - extension of the SlimFramework and others tools</span>
<span style='color:#3f5fbf; background:#ffffe8; '>&#xa0;*</span>
<span style='color:#3f5fbf; background:#ffffe8; '>&#xa0;* </span><span style='color:#005fd2; background:#ffffe8; '>@author</span><span style='color:#3f5fbf; background:#ffffe8; '>      Isaac Trenado </span><span style='color:#0000e6; background:#ffffe8; '>&lt;</span><span style='color:#7144c4; background:#ffffe8; '>isaac.trenado@codigolimpio.com</span><span style='color:#0000e6; background:#ffffe8; '>></span><span style='color:#3f5fbf; background:#ffffe8; '></span>
<span style='color:#3f5fbf; background:#ffffe8; '>&#xa0;* </span><span style='color:#005fd2; background:#ffffe8; '>@copyright</span><span style='color:#3f5fbf; background:#ffffe8; '>   2013 Isaac Trenado</span>
<span style='color:#3f5fbf; background:#ffffe8; '>&#xa0;* </span><span style='color:#005fd2; background:#ffffe8; '>@link</span><span style='color:#3f5fbf; background:#ffffe8; '>        </span><span style='color:#5555dd; background:#ffffe8; '>http://dropsize.codigolimpio.com</span><span style='color:#3f5fbf; background:#ffffe8; '></span>
<span style='color:#3f5fbf; background:#ffffe8; '>&#xa0;* </span><span style='color:#005fd2; background:#ffffe8; '>@license</span><span style='color:#3f5fbf; background:#ffffe8; '>     </span><span style='color:#5555dd; background:#ffffe8; '>http://dropsize.codigolimpio.com/license.txt</span><span style='color:#3f5fbf; background:#ffffe8; '></span>
<span style='color:#3f5fbf; background:#ffffe8; '>&#xa0;* </span><span style='color:#005fd2; background:#ffffe8; '>@version</span><span style='color:#3f5fbf; background:#ffffe8; '>     3.0.1</span>
<span style='color:#3f5fbf; background:#ffffe8; '>&#xa0;* </span><span style='color:#005fd2; background:#ffffe8; '>@package</span><span style='color:#3f5fbf; background:#ffffe8; '>     DropsizeMVCf</span>
<span style='color:#3f5fbf; background:#ffffe8; '>&#xa0;*</span>
<span style='color:#3f5fbf; background:#ffffe8; '>&#xa0;* DropsizeMVCf - Web publishing software</span>
<span style='color:#3f5fbf; background:#ffffe8; '>&#xa0;* Copyright 2015 by the contributors</span>
<span style='color:#3f5fbf; background:#ffffe8; '>&#xa0;* </span>
<span style='color:#3f5fbf; background:#ffffe8; '>&#xa0;* This program is free software; you can redistribute it and/or modify</span>
<span style='color:#3f5fbf; background:#ffffe8; '>&#xa0;* it under the terms of the GNU General Public License as published by</span>
<span style='color:#3f5fbf; background:#ffffe8; '>&#xa0;* the Free Software Foundation; either version 2 of the License, or</span>
<span style='color:#3f5fbf; background:#ffffe8; '>&#xa0;* (at your option) any later version.</span>
<span style='color:#3f5fbf; background:#ffffe8; '>&#xa0;* </span>
<span style='color:#3f5fbf; background:#ffffe8; '>&#xa0;* This program is distributed in the hope that it will be useful,</span>
<span style='color:#3f5fbf; background:#ffffe8; '>&#xa0;* but WITHOUT ANY WARRANTY; without even the implied warranty of</span>
<span style='color:#3f5fbf; background:#ffffe8; '>&#xa0;* MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the</span>
<span style='color:#3f5fbf; background:#ffffe8; '>&#xa0;* GNU General Public License for more details.</span>
<span style='color:#3f5fbf; background:#ffffe8; '>&#xa0;* </span>
<span style='color:#3f5fbf; background:#ffffe8; '>&#xa0;* You should have received a copy of the GNU General Public License</span>
<span style='color:#3f5fbf; background:#ffffe8; '>&#xa0;* along with this program; if not, write to the Free Software</span>
<span style='color:#3f5fbf; background:#ffffe8; '>&#xa0;* Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA</span>
<span style='color:#3f5fbf; background:#ffffe8; '>&#xa0;* </span>
<span style='color:#3f5fbf; background:#ffffe8; '>&#xa0;* This program incorporates work covered by the following copyright and</span>
<span style='color:#3f5fbf; background:#ffffe8; '>&#xa0;* permission notices:</span>
<span style='color:#3f5fbf; background:#ffffe8; '>&#xa0;* </span>
<span style='color:#3f5fbf; background:#ffffe8; '>&#xa0;* DropsizeMVCf is (c) 2013, 2015 </span>
<span style='color:#3f5fbf; background:#ffffe8; '>&#xa0;* Isaac Trenado - </span><span style='color:#7144c4; background:#ffffe8; '>isaac.trenado@codigolimpio.com</span><span style='color:#3f5fbf; background:#ffffe8; '> -</span>
<span style='color:#3f5fbf; background:#ffffe8; '>&#xa0;* </span><span style='color:#5555dd; background:#ffffe8; '>http://www.codigolimpio.com</span><span style='color:#3f5fbf; background:#ffffe8; '></span>
<span style='color:#3f5fbf; background:#ffffe8; '>&#xa0;* </span>
<span style='color:#3f5fbf; background:#ffffe8; '>&#xa0;* Wherever third party code has been used, credit has been given in the code's comments.</span>
<span style='color:#3f5fbf; background:#ffffe8; '>&#xa0;*</span>
<span style='color:#3f5fbf; background:#ffffe8; '>&#xa0;* DropsizeMVCf is released under the GPL</span>
<span style='color:#3f5fbf; background:#ffffe8; '>&#xa0;* </span>
<span style='color:#3f5fbf; background:#ffffe8; '>&#xa0;</span><span style='color:#c0bd92; background:#ffffe8; '>*/</span><span style='color:#000000; background:#ffffe8; '></span>
<span style='color:#c0bd92; background:#ffffe8; '>/*</span><span style='color:#3f5fbf; background:#ffffe8; '>*</span>
<span style='color:#3f5fbf; background:#ffffe8; '>&#xa0;* Create Basic and complex examples Query to MYSQL</span>
<span style='color:#3f5fbf; background:#ffffe8; '>&#xa0;* </span>
<span style='color:#3f5fbf; background:#ffffe8; '>&#xa0;* </span><span style='color:#005fd2; background:#ffffe8; '>@package</span><span style='color:#3f5fbf; background:#ffffe8; '> com.dropsizemvcf</span>
<span style='color:#3f5fbf; background:#ffffe8; '>&#xa0;* </span><span style='color:#005fd2; background:#ffffe8; '>@author</span><span style='color:#3f5fbf; background:#ffffe8; '>  Isaac Trenado</span>
<span style='color:#3f5fbf; background:#ffffe8; '>&#xa0;* </span><span style='color:#005fd2; background:#ffffe8; '>@since</span><span style='color:#3f5fbf; background:#ffffe8; '>   1.0.0</span>
<span style='color:#3f5fbf; background:#ffffe8; '>&#xa0;</span><span style='color:#c0bd92; background:#ffffe8; '>*/</span><span style='color:#000000; background:#ffffe8; '></span>
<span style='color:#800000; background:#ffffe8; font-weight:bold; '>include</span><span style='color:#000000; background:#ffffe8; '> </span><span style='color:#0000e6; background:#ffffe8; '>"./UnicodeUtf8Replace.php"</span><span style='color:#800080; background:#ffffe8; '>;</span><span style='color:#000000; background:#ffffe8; '></span>
<span style='color:#800000; background:#ffffe8; font-weight:bold; '>include</span><span style='color:#000000; background:#ffffe8; '> </span><span style='color:#0000e6; background:#ffffe8; '>"./DPManagerJSON.php"</span><span style='color:#800080; background:#ffffe8; '>;</span><span style='color:#000000; background:#ffffe8; '></span>
<span style='color:#800000; background:#ffffe8; font-weight:bold; '>include</span><span style='color:#000000; background:#ffffe8; '> </span><span style='color:#0000e6; background:#ffffe8; '>"./DPManager.php"</span><span style='color:#800080; background:#ffffe8; '>;</span><span style='color:#000000; background:#ffffe8; '></span>
<span style='color:#800000; background:#ffffe8; font-weight:bold; '>include</span><span style='color:#000000; background:#ffffe8; '> </span><span style='color:#0000e6; background:#ffffe8; '>"./Conexion.php"</span><span style='color:#800080; background:#ffffe8; '>;</span><span style='color:#000000; background:#ffffe8; '></span>
<span style='color:#000000; background:#ffffe8; '></span>
<span style='color:#797997; background:#ffffe8; '>$con</span><span style='color:#000000; background:#ffffe8; '> </span><span style='color:#808030; background:#ffffe8; '>=</span><span style='color:#000000; background:#ffffe8; '> </span><span style='color:#800000; background:#ffffe8; font-weight:bold; '>new</span><span style='color:#000000; background:#ffffe8; '> Conexion</span><span style='color:#808030; background:#ffffe8; '>(</span><span style='color:#808030; background:#ffffe8; '>)</span><span style='color:#800080; background:#ffffe8; '>;</span><span style='color:#000000; background:#ffffe8; '></span>
<span style='color:#000000; background:#ffffe8; '></span>
<span style='color:#797997; background:#ffffe8; '>$con</span><span style='color:#808030; background:#ffffe8; '>-</span><span style='color:#808030; background:#ffffe8; '>></span><span style='color:#000000; background:#ffffe8; '>setDebug</span><span style='color:#808030; background:#ffffe8; '>(</span><span style='color:#008c00; background:#ffffe8; '>1</span><span style='color:#808030; background:#ffffe8; '>)</span><span style='color:#800080; background:#ffffe8; '>;</span><span style='color:#000000; background:#ffffe8; '></span>
<span style='color:#000000; background:#ffffe8; '></span>
<span style='color:#696969; background:#ffffe8; '>/*</span>
<span style='color:#696969; background:#ffffe8; '>&#xa0;* All samples are based on the "under Model" of Dropsize MVCF. </span>
<span style='color:#696969; background:#ffffe8; '>&#xa0;* For more information check Dropsize MVCF</span>
<span style='color:#696969; background:#ffffe8; '>&#xa0;*/</span><span style='color:#000000; background:#ffffe8; '></span>
<span style='color:#000000; background:#ffffe8; '></span>
<span style='color:#696969; background:#ffffe8; '>/*</span>
<span style='color:#696969; background:#ffffe8; '>&#xa0;* </span>
<span style='color:#696969; background:#ffffe8; '>&#xa0;* array("ID" => "id_table",</span>
<span style='color:#696969; background:#ffffe8; '>&#xa0;*      "Metodo" => "POST",</span>
<span style='color:#696969; background:#ffffe8; '>&#xa0;*      "Tipo" => "None",</span>
<span style='color:#696969; background:#ffffe8; '>&#xa0;*      "Index" => array('id_cliente', 'nombre', 'paterno', 'materno'),</span>
<span style='color:#696969; background:#ffffe8; '>&#xa0;*      "Alias" => array(),</span>
<span style='color:#696969; background:#ffffe8; '>&#xa0;*      "Report" => array(),</span>
<span style='color:#696969; background:#ffffe8; '>&#xa0;*      "Params" => $args[0],</span>
<span style='color:#696969; background:#ffffe8; '>&#xa0;*      "Seguros" => $args[1]</span>
<span style='color:#696969; background:#ffffe8; '>&#xa0;*  )</span>
<span style='color:#696969; background:#ffffe8; '>&#xa0;*/</span><span style='color:#000000; background:#ffffe8; '></span>
<span style='color:#000000; background:#ffffe8; '></span>
<span style='color:#696969; background:#ffffe8; '>/*</span>
<span style='color:#696969; background:#ffffe8; '>&#xa0;* Get Array From param GET or POST Request</span>
<span style='color:#696969; background:#ffffe8; '>&#xa0;* </span>
<span style='color:#696969; background:#ffffe8; '>&#xa0;* InPut : </span>
<span style='color:#696969; background:#ffffe8; '>&#xa0;* </span>
<span style='color:#696969; background:#ffffe8; '>&#xa0;* array("ID" => "id_table",</span>
<span style='color:#696969; background:#ffffe8; '>&#xa0;*      "Metodo" => "POST",</span>
<span style='color:#696969; background:#ffffe8; '>&#xa0;*      "Tipo" => "None",</span>
<span style='color:#696969; background:#ffffe8; '>&#xa0;*      "Index" => array('id_cliente', 'nombre', 'paterno', 'materno'),</span>
<span style='color:#696969; background:#ffffe8; '>&#xa0;*      "Alias" => array(),</span>
<span style='color:#696969; background:#ffffe8; '>&#xa0;*      "Report" => array(),</span>
<span style='color:#696969; background:#ffffe8; '>&#xa0;*      "Params" => $args[0],</span>
<span style='color:#696969; background:#ffffe8; '>&#xa0;*      "Seguros" => $args[1]</span>
<span style='color:#696969; background:#ffffe8; '>&#xa0;*  )</span>
<span style='color:#696969; background:#ffffe8; '>&#xa0;* </span>
<span style='color:#696969; background:#ffffe8; '>&#xa0;* URL : ?id_cliente=1&amp;nombre=Super&amp;paterno=Chinazo&amp;materno=Poderoso&amp;direccion=Mexico</span>
<span style='color:#696969; background:#ffffe8; '>&#xa0;* </span>
<span style='color:#696969; background:#ffffe8; '>&#xa0;* Output :</span>
<span style='color:#696969; background:#ffffe8; '>&#xa0;* </span>
<span style='color:#696969; background:#ffffe8; '>&#xa0;* Safe params</span>
<span style='color:#696969; background:#ffffe8; '>&#xa0;* </span>
<span style='color:#696969; background:#ffffe8; '>&#xa0;* Array(</span>
<span style='color:#696969; background:#ffffe8; '>&#xa0;*      [id_cliente] => 1</span>
<span style='color:#696969; background:#ffffe8; '>&#xa0;*      [nombre] => Super</span>
<span style='color:#696969; background:#ffffe8; '>&#xa0;*      [paterno] => Chinazo</span>
<span style='color:#696969; background:#ffffe8; '>&#xa0;*      [materno] => Poderoso</span>
<span style='color:#696969; background:#ffffe8; '>&#xa0;* )</span>
<span style='color:#696969; background:#ffffe8; '>&#xa0;* </span>
<span style='color:#696969; background:#ffffe8; '>&#xa0;* Other params</span>
<span style='color:#696969; background:#ffffe8; '>&#xa0;* </span>
<span style='color:#696969; background:#ffffe8; '>&#xa0;* Array(</span>
<span style='color:#696969; background:#ffffe8; '>&#xa0;*  </span>
<span style='color:#696969; background:#ffffe8; '>&#xa0;*      [direccion] => Mexico</span>
<span style='color:#696969; background:#ffffe8; '>&#xa0;* )</span>
<span style='color:#696969; background:#ffffe8; '>&#xa0;* </span>
<span style='color:#696969; background:#ffffe8; '>&#xa0;*/</span><span style='color:#000000; background:#ffffe8; '></span>
<span style='color:#000000; background:#ffffe8; '></span>
<span style='color:#797997; background:#ffffe8; '>$model</span><span style='color:#000000; background:#ffffe8; '> </span><span style='color:#808030; background:#ffffe8; '>=</span><span style='color:#000000; background:#ffffe8; '> </span><span style='color:#800000; background:#ffffe8; font-weight:bold; '>array</span><span style='color:#808030; background:#ffffe8; '>(</span><span style='color:#0000e6; background:#ffffe8; '>"ID"</span><span style='color:#000000; background:#ffffe8; '> </span><span style='color:#808030; background:#ffffe8; '>=</span><span style='color:#808030; background:#ffffe8; '>></span><span style='color:#000000; background:#ffffe8; '> </span><span style='color:#0000e6; background:#ffffe8; '>"id_cliente"</span><span style='color:#000000; background:#ffffe8; '></span>
<span style='color:#000000; background:#ffffe8; '>&#xa0;&#xa0;&#xa0;&#xa0;</span><span style='color:#808030; background:#ffffe8; '>,</span><span style='color:#000000; background:#ffffe8; '> </span><span style='color:#0000e6; background:#ffffe8; '>"Metodo"</span><span style='color:#000000; background:#ffffe8; '> </span><span style='color:#808030; background:#ffffe8; '>=</span><span style='color:#808030; background:#ffffe8; '>></span><span style='color:#000000; background:#ffffe8; '> </span><span style='color:#0000e6; background:#ffffe8; '>"GET"</span><span style='color:#000000; background:#ffffe8; '></span>
<span style='color:#000000; background:#ffffe8; '>&#xa0;&#xa0;&#xa0;&#xa0;</span><span style='color:#808030; background:#ffffe8; '>,</span><span style='color:#000000; background:#ffffe8; '> </span><span style='color:#0000e6; background:#ffffe8; '>"Tipo"</span><span style='color:#000000; background:#ffffe8; '> </span><span style='color:#808030; background:#ffffe8; '>=</span><span style='color:#808030; background:#ffffe8; '>></span><span style='color:#000000; background:#ffffe8; '> </span><span style='color:#0000e6; background:#ffffe8; '>"Seguros"</span><span style='color:#000000; background:#ffffe8; '></span>
<span style='color:#000000; background:#ffffe8; '>&#xa0;&#xa0;&#xa0;&#xa0;</span><span style='color:#808030; background:#ffffe8; '>,</span><span style='color:#000000; background:#ffffe8; '> </span><span style='color:#0000e6; background:#ffffe8; '>"Index"</span><span style='color:#000000; background:#ffffe8; '> </span><span style='color:#808030; background:#ffffe8; '>=</span><span style='color:#808030; background:#ffffe8; '>></span><span style='color:#000000; background:#ffffe8; '> </span><span style='color:#800000; background:#ffffe8; font-weight:bold; '>array</span><span style='color:#808030; background:#ffffe8; '>(</span><span style='color:#0000e6; background:#ffffe8; '>'id_cliente'</span><span style='color:#808030; background:#ffffe8; '>,</span><span style='color:#000000; background:#ffffe8; '> </span><span style='color:#0000e6; background:#ffffe8; '>'nombre'</span><span style='color:#808030; background:#ffffe8; '>,</span><span style='color:#000000; background:#ffffe8; '> </span><span style='color:#0000e6; background:#ffffe8; '>'paterno'</span><span style='color:#808030; background:#ffffe8; '>,</span><span style='color:#000000; background:#ffffe8; '> </span><span style='color:#0000e6; background:#ffffe8; '>'materno'</span><span style='color:#808030; background:#ffffe8; '>)</span><span style='color:#000000; background:#ffffe8; '></span>
<span style='color:#000000; background:#ffffe8; '>&#xa0;&#xa0;&#xa0;&#xa0;</span><span style='color:#808030; background:#ffffe8; '>,</span><span style='color:#000000; background:#ffffe8; '> </span><span style='color:#0000e6; background:#ffffe8; '>"Alias"</span><span style='color:#000000; background:#ffffe8; '> </span><span style='color:#808030; background:#ffffe8; '>=</span><span style='color:#808030; background:#ffffe8; '>></span><span style='color:#000000; background:#ffffe8; '> </span><span style='color:#800000; background:#ffffe8; font-weight:bold; '>array</span><span style='color:#808030; background:#ffffe8; '>(</span><span style='color:#808030; background:#ffffe8; '>)</span><span style='color:#000000; background:#ffffe8; '></span>
<span style='color:#000000; background:#ffffe8; '>&#xa0;&#xa0;&#xa0;&#xa0;</span><span style='color:#808030; background:#ffffe8; '>,</span><span style='color:#000000; background:#ffffe8; '> </span><span style='color:#0000e6; background:#ffffe8; '>"Params"</span><span style='color:#000000; background:#ffffe8; '> </span><span style='color:#808030; background:#ffffe8; '>=</span><span style='color:#808030; background:#ffffe8; '>></span><span style='color:#000000; background:#ffffe8; '> </span><span style='color:#800000; background:#ffffe8; font-weight:bold; '>array</span><span style='color:#808030; background:#ffffe8; '>(</span><span style='color:#808030; background:#ffffe8; '>)</span><span style='color:#000000; background:#ffffe8; '></span>
<span style='color:#000000; background:#ffffe8; '>&#xa0;&#xa0;&#xa0;&#xa0;</span><span style='color:#696969; background:#ffffe8; '>//, "Seguros" => array()    // if not isset array GET</span><span style='color:#000000; background:#ffffe8; '></span>
<span style='color:#000000; background:#ffffe8; '>&#xa0;&#xa0;&#xa0;&#xa0;</span><span style='color:#808030; background:#ffffe8; '>,</span><span style='color:#000000; background:#ffffe8; '> </span><span style='color:#0000e6; background:#ffffe8; '>"Seguros"</span><span style='color:#000000; background:#ffffe8; '> </span><span style='color:#808030; background:#ffffe8; '>=</span><span style='color:#808030; background:#ffffe8; '>></span><span style='color:#000000; background:#ffffe8; '> </span><span style='color:#797997; background:#ffffe8; '>$_GET</span><span style='color:#000000; background:#ffffe8; '>        </span><span style='color:#696969; background:#ffffe8; '>// if isset array GET or POST so uncomment this line</span><span style='color:#000000; background:#ffffe8; '></span>
<span style='color:#808030; background:#ffffe8; '>)</span><span style='color:#800080; background:#ffffe8; '>;</span><span style='color:#000000; background:#ffffe8; '></span>
<span style='color:#000000; background:#ffffe8; '></span>
<span style='color:#797997; background:#ffffe8; '>$campos</span><span style='color:#000000; background:#ffffe8; '> </span><span style='color:#808030; background:#ffffe8; '>=</span><span style='color:#000000; background:#ffffe8; '> </span><span style='color:#797997; background:#ffffe8; '>$lstUpdateQuery1</span><span style='color:#000000; background:#ffffe8; '> </span><span style='color:#808030; background:#ffffe8; '>=</span><span style='color:#000000; background:#ffffe8; '> DPManager</span><span style='color:#800080; background:#ffffe8; '>:</span><span style='color:#800080; background:#ffffe8; '>:</span><span style='color:#000000; background:#ffffe8; '>buildDatosTo</span><span style='color:#808030; background:#ffffe8; '>(</span><span style='color:#797997; background:#ffffe8; '>$model</span><span style='color:#808030; background:#ffffe8; '>,</span><span style='color:#000000; background:#ffffe8; '> </span><span style='color:#797997; background:#ffffe8; '>$otros</span><span style='color:#808030; background:#ffffe8; '>)</span><span style='color:#800080; background:#ffffe8; '>;</span><span style='color:#000000; background:#ffffe8; '></span>
<span style='color:#000000; background:#ffffe8; '></span>
<span style='color:#800000; background:#ffffe8; font-weight:bold; '>echo</span><span style='color:#000000; background:#ffffe8; '> </span><span style='color:#0000e6; background:#ffffe8; '>"&lt;h1>Return array params required for the app and otros params no ables with app&lt;/h1>"</span><span style='color:#800080; background:#ffffe8; '>;</span><span style='color:#000000; background:#ffffe8; '></span>
<span style='color:#800000; background:#ffffe8; font-weight:bold; '>echo</span><span style='color:#000000; background:#ffffe8; '> </span><span style='color:#0000e6; background:#ffffe8; '>"&lt;pre>"</span><span style='color:#800080; background:#ffffe8; '>;</span><span style='color:#000000; background:#ffffe8; '></span>
<span style='color:#800000; background:#ffffe8; font-weight:bold; '>echo</span><span style='color:#000000; background:#ffffe8; '> </span><span style='color:#0000e6; background:#ffffe8; '>"&lt;h1>Safe params&lt;/h1>"</span><span style='color:#800080; background:#ffffe8; '>;</span><span style='color:#000000; background:#ffffe8; '></span>
<span style='color:#400000; background:#ffffe8; '>print_r</span><span style='color:#808030; background:#ffffe8; '>(</span><span style='color:#797997; background:#ffffe8; '>$campos</span><span style='color:#808030; background:#ffffe8; '>)</span><span style='color:#800080; background:#ffffe8; '>;</span><span style='color:#000000; background:#ffffe8; '></span>
<span style='color:#800000; background:#ffffe8; font-weight:bold; '>echo</span><span style='color:#000000; background:#ffffe8; '> </span><span style='color:#0000e6; background:#ffffe8; '>"&lt;h1>Other params&lt;/h1>"</span><span style='color:#800080; background:#ffffe8; '>;</span><span style='color:#000000; background:#ffffe8; '></span>
<span style='color:#400000; background:#ffffe8; '>print_r</span><span style='color:#808030; background:#ffffe8; '>(</span><span style='color:#797997; background:#ffffe8; '>$otros</span><span style='color:#808030; background:#ffffe8; '>)</span><span style='color:#800080; background:#ffffe8; '>;</span><span style='color:#000000; background:#ffffe8; '></span>
<span style='color:#800000; background:#ffffe8; font-weight:bold; '>echo</span><span style='color:#000000; background:#ffffe8; '> </span><span style='color:#0000e6; background:#ffffe8; '>"&lt;/pre>"</span><span style='color:#800080; background:#ffffe8; '>;</span><span style='color:#000000; background:#ffffe8; '></span>
<span style='color:#000000; background:#ffffe8; '></span>
<span style='color:#696969; background:#ffffe8; '>/*</span>
<span style='color:#696969; background:#ffffe8; '>&#xa0;* </span>
<span style='color:#696969; background:#ffffe8; '>&#xa0;* DPManager::buildDatosJsonTo($model, "tabla", " nombre = 'Super' ")</span>
<span style='color:#696969; background:#ffffe8; '>&#xa0;* </span>
<span style='color:#696969; background:#ffffe8; '>&#xa0;* Output : </span>
<span style='color:#696969; background:#ffffe8; '>&#xa0;* </span>
<span style='color:#696969; background:#ffffe8; '>&#xa0;* CONCAT("{\"success\":true,\"total\":\"",(SELECT COUNT(*) </span>
<span style='color:#696969; background:#ffffe8; '>&#xa0;*  FROM tabla WHERE  nombre = 'Super' ),"\",",</span>
<span style='color:#696969; background:#ffffe8; '>&#xa0;*  "\"rows\":[",GROUP_CONCAT(CONCAT("{"),CONCAT("\"id_cliente\":\"",id_cliente,"\","),</span>
<span style='color:#696969; background:#ffffe8; '>&#xa0;*  CONCAT("\"nombre\":\"",nombre,"\","),CONCAT("\"paterno\":\"",paterno,"\","),</span>
<span style='color:#696969; background:#ffffe8; '>&#xa0;*  CONCAT("\"materno\":\"",materno,"\""),CONCAT("}")), "]}") AS json</span>
<span style='color:#696969; background:#ffffe8; '>&#xa0;* </span>
<span style='color:#696969; background:#ffffe8; '>&#xa0;* </span>
<span style='color:#696969; background:#ffffe8; '>&#xa0;* DPManager::buildSelectQuery($lstSimpleQuery, "tabla", " nombre = 'Super' ");</span>
<span style='color:#696969; background:#ffffe8; '>&#xa0;* </span>
<span style='color:#696969; background:#ffffe8; '>&#xa0;* Output : </span>
<span style='color:#696969; background:#ffffe8; '>&#xa0;* </span>
<span style='color:#696969; background:#ffffe8; '>&#xa0;* SELECT </span>
<span style='color:#696969; background:#ffffe8; '>&#xa0;* </span>
<span style='color:#696969; background:#ffffe8; '>&#xa0;*  CONCAT("{\"success\":true,\"total\":\"",(SELECT COUNT(*) FROM tabla WHERE nombre = 'Super' ),</span>
<span style='color:#696969; background:#ffffe8; '>&#xa0;*  "\",", "\"rows\":[",GROUP_CONCAT(CONCAT("{"),CONCAT("\"id_cliente\":\"",id_cliente,"\","),</span>
<span style='color:#696969; background:#ffffe8; '>&#xa0;*  CONCAT("\"nombre\":\"",nombre,"\","),CONCAT("\"paterno\":\"",paterno,"\","),</span>
<span style='color:#696969; background:#ffffe8; '>&#xa0;*  CONCAT("\"materno\":\"",materno,"\""),CONCAT("}")), "]}") AS json </span>
<span style='color:#696969; background:#ffffe8; '>&#xa0;* </span>
<span style='color:#696969; background:#ffffe8; '>&#xa0;* FROM </span>
<span style='color:#696969; background:#ffffe8; '>&#xa0;*      tabla </span>
<span style='color:#696969; background:#ffffe8; '>&#xa0;* WHERE </span>
<span style='color:#696969; background:#ffffe8; '>&#xa0;*      nombre = 'Super' </span>
<span style='color:#696969; background:#ffffe8; '>&#xa0;* </span>
<span style='color:#696969; background:#ffffe8; '>&#xa0;* Result :</span>
<span style='color:#696969; background:#ffffe8; '>&#xa0;* </span>
<span style='color:#696969; background:#ffffe8; '>&#xa0;* {"success":true,"total":"1","rows":[{"id_cliente":"1","nombre":"Super","paterno":"Chinazo","materno":"Poderoso"}]}</span>
<span style='color:#696969; background:#ffffe8; '>&#xa0;* </span>
<span style='color:#696969; background:#ffffe8; '>&#xa0;* NiceFormat : jsonlint.com</span>
<span style='color:#696969; background:#ffffe8; '>&#xa0;* </span>
<span style='color:#696969; background:#ffffe8; '>&#xa0;* {</span>
<span style='color:#696969; background:#ffffe8; '>&#xa0;*      "success": true,</span>
<span style='color:#696969; background:#ffffe8; '>&#xa0;*      "total": "1",</span>
<span style='color:#696969; background:#ffffe8; '>&#xa0;*      "rows": [{</span>
<span style='color:#696969; background:#ffffe8; '>&#xa0;*          "id_cliente": "1",</span>
<span style='color:#696969; background:#ffffe8; '>&#xa0;*          "nombre": "Super",</span>
<span style='color:#696969; background:#ffffe8; '>&#xa0;*          "paterno": "Chinazo",</span>
<span style='color:#696969; background:#ffffe8; '>&#xa0;*          "materno": "Poderoso"</span>
<span style='color:#696969; background:#ffffe8; '>&#xa0;*      }]</span>
<span style='color:#696969; background:#ffffe8; '>&#xa0;* }</span>
<span style='color:#696969; background:#ffffe8; '>&#xa0;* </span>
<span style='color:#696969; background:#ffffe8; '>&#xa0;*/</span><span style='color:#000000; background:#ffffe8; '></span>
<span style='color:#000000; background:#ffffe8; '></span>
<span style='color:#797997; background:#ffffe8; '>$lstSimpleFieldsQuery</span><span style='color:#000000; background:#ffffe8; '> </span><span style='color:#808030; background:#ffffe8; '>=</span><span style='color:#000000; background:#ffffe8; '> DPManager</span><span style='color:#800080; background:#ffffe8; '>:</span><span style='color:#800080; background:#ffffe8; '>:</span><span style='color:#000000; background:#ffffe8; '>buildDatosJsonTo</span><span style='color:#808030; background:#ffffe8; '>(</span><span style='color:#797997; background:#ffffe8; '>$model</span><span style='color:#808030; background:#ffffe8; '>,</span><span style='color:#000000; background:#ffffe8; '> </span><span style='color:#0000e6; background:#ffffe8; '>"tabla"</span><span style='color:#808030; background:#ffffe8; '>,</span><span style='color:#000000; background:#ffffe8; '> </span><span style='color:#0000e6; background:#ffffe8; '>" nombre = 'Super' "</span><span style='color:#808030; background:#ffffe8; '>)</span><span style='color:#800080; background:#ffffe8; '>;</span><span style='color:#000000; background:#ffffe8; '></span>
<span style='color:#797997; background:#ffffe8; '>$lstSelectJsonQry</span><span style='color:#000000; background:#ffffe8; '> </span><span style='color:#808030; background:#ffffe8; '>=</span><span style='color:#000000; background:#ffffe8; '> DPManager</span><span style='color:#800080; background:#ffffe8; '>:</span><span style='color:#800080; background:#ffffe8; '>:</span><span style='color:#000000; background:#ffffe8; '>buildSelectQuery</span><span style='color:#808030; background:#ffffe8; '>(</span><span style='color:#797997; background:#ffffe8; '>$lstSimpleFieldsQuery</span><span style='color:#808030; background:#ffffe8; '>,</span><span style='color:#000000; background:#ffffe8; '> </span><span style='color:#0000e6; background:#ffffe8; '>"tabla"</span><span style='color:#808030; background:#ffffe8; '>,</span><span style='color:#000000; background:#ffffe8; '> </span><span style='color:#0000e6; background:#ffffe8; '>" nombre = 'Super' "</span><span style='color:#808030; background:#ffffe8; '>)</span><span style='color:#800080; background:#ffffe8; '>;</span><span style='color:#000000; background:#ffffe8; '></span>
<span style='color:#797997; background:#ffffe8; '>$lstResult</span><span style='color:#000000; background:#ffffe8; '> </span><span style='color:#808030; background:#ffffe8; '>=</span><span style='color:#000000; background:#ffffe8; '> DPManager</span><span style='color:#800080; background:#ffffe8; '>:</span><span style='color:#800080; background:#ffffe8; '>:</span><span style='color:#000000; background:#ffffe8; '>getField</span><span style='color:#808030; background:#ffffe8; '>(</span><span style='color:#797997; background:#ffffe8; '>$con</span><span style='color:#808030; background:#ffffe8; '>,</span><span style='color:#000000; background:#ffffe8; '> </span><span style='color:#797997; background:#ffffe8; '>$lstSelectJsonQry</span><span style='color:#808030; background:#ffffe8; '>)</span><span style='color:#800080; background:#ffffe8; '>;</span><span style='color:#000000; background:#ffffe8; '></span>
<span style='color:#000000; background:#ffffe8; '></span>
<span style='color:#800000; background:#ffffe8; font-weight:bold; '>echo</span><span style='color:#000000; background:#ffffe8; '> </span><span style='color:#0000e6; background:#ffffe8; '>"&lt;h1>Return complex Query in format JSON&lt;/h1>"</span><span style='color:#800080; background:#ffffe8; '>;</span><span style='color:#000000; background:#ffffe8; '></span>
<span style='color:#800000; background:#ffffe8; font-weight:bold; '>echo</span><span style='color:#000000; background:#ffffe8; '> </span><span style='color:#0000e6; background:#ffffe8; '>"&lt;pre>"</span><span style='color:#800080; background:#ffffe8; '>;</span><span style='color:#000000; background:#ffffe8; '></span>
<span style='color:#800000; background:#ffffe8; font-weight:bold; '>echo</span><span style='color:#000000; background:#ffffe8; '> </span><span style='color:#0000e6; background:#ffffe8; '>"&lt;h3>Query format JSON&lt;/h3>"</span><span style='color:#800080; background:#ffffe8; '>;</span><span style='color:#000000; background:#ffffe8; '></span>
<span style='color:#400000; background:#ffffe8; '>print_r</span><span style='color:#808030; background:#ffffe8; '>(</span><span style='color:#797997; background:#ffffe8; '>$lstSimpleFieldsQuery</span><span style='color:#808030; background:#ffffe8; '>)</span><span style='color:#800080; background:#ffffe8; '>;</span><span style='color:#000000; background:#ffffe8; '></span>
<span style='color:#800000; background:#ffffe8; font-weight:bold; '>echo</span><span style='color:#000000; background:#ffffe8; '> </span><span style='color:#0000e6; background:#ffffe8; '>"&lt;h3>Query complete JSON Query&lt;/h3>"</span><span style='color:#800080; background:#ffffe8; '>;</span><span style='color:#000000; background:#ffffe8; '></span>
<span style='color:#400000; background:#ffffe8; '>print_r</span><span style='color:#808030; background:#ffffe8; '>(</span><span style='color:#797997; background:#ffffe8; '>$lstSelectJsonQry</span><span style='color:#808030; background:#ffffe8; '>)</span><span style='color:#800080; background:#ffffe8; '>;</span><span style='color:#000000; background:#ffffe8; '></span>
<span style='color:#800000; background:#ffffe8; font-weight:bold; '>echo</span><span style='color:#000000; background:#ffffe8; '> </span><span style='color:#0000e6; background:#ffffe8; '>"&lt;h2>Result&lt;/h2>"</span><span style='color:#800080; background:#ffffe8; '>;</span><span style='color:#000000; background:#ffffe8; '></span>
<span style='color:#400000; background:#ffffe8; '>print_r</span><span style='color:#808030; background:#ffffe8; '>(</span><span style='color:#797997; background:#ffffe8; '>$lstResult</span><span style='color:#808030; background:#ffffe8; '>)</span><span style='color:#800080; background:#ffffe8; '>;</span><span style='color:#000000; background:#ffffe8; '></span>
<span style='color:#800000; background:#ffffe8; font-weight:bold; '>echo</span><span style='color:#000000; background:#ffffe8; '> </span><span style='color:#0000e6; background:#ffffe8; '>"&lt;/pre>"</span><span style='color:#800080; background:#ffffe8; '>;</span><span style='color:#000000; background:#ffffe8; '></span>
<span style='color:#000000; background:#ffffe8; '></span>
<span style='color:#696969; background:#ffffe8; '>/*</span>
<span style='color:#696969; background:#ffffe8; '>&#xa0;* </span>
<span style='color:#696969; background:#ffffe8; '>&#xa0;* DPManager::buildSingleJsonTo($parModelo, $pstExtra = false)</span>
<span style='color:#696969; background:#ffffe8; '>&#xa0;* </span>
<span style='color:#696969; background:#ffffe8; '>&#xa0;* Output :</span>
<span style='color:#696969; background:#ffffe8; '>&#xa0;* </span>
<span style='color:#696969; background:#ffffe8; '>&#xa0;* CONCAT("[",GROUP_CONCAT(CONCAT("{"),CONCAT("\"id_cliente\":\"",id_cliente,"\","),</span>
<span style='color:#696969; background:#ffffe8; '>&#xa0;* CONCAT("\"nombre\":\"",nombre,"\","),CONCAT("\"paterno\":\"",paterno,"\","),</span>
<span style='color:#696969; background:#ffffe8; '>&#xa0;* CONCAT("\"materno\":\"",materno,"\""),CONCAT("}")), "]") AS jsons</span>
<span style='color:#696969; background:#ffffe8; '>&#xa0;* </span>
<span style='color:#696969; background:#ffffe8; '>&#xa0;* DPManager::buildSelectQuery($lstSimpleSingleFieldsQuery, "tabla", false);</span>
<span style='color:#696969; background:#ffffe8; '>&#xa0;* </span>
<span style='color:#696969; background:#ffffe8; '>&#xa0;* Output :</span>
<span style='color:#696969; background:#ffffe8; '>&#xa0;* </span>
<span style='color:#696969; background:#ffffe8; '>&#xa0;* SELECT </span>
<span style='color:#696969; background:#ffffe8; '>&#xa0;* </span>
<span style='color:#696969; background:#ffffe8; '>&#xa0;* CONCAT("[",GROUP_CONCAT(CONCAT("{"),CONCAT("\"id_cliente\":\"",id_cliente,"\","),</span>
<span style='color:#696969; background:#ffffe8; '>&#xa0;* CONCAT("\"nombre\":\"",nombre,"\","),CONCAT("\"paterno\":\"",paterno,"\","),</span>
<span style='color:#696969; background:#ffffe8; '>&#xa0;* CONCAT("\"materno\":\"",materno,"\""),CONCAT("}")), "]") AS json </span>
<span style='color:#696969; background:#ffffe8; '>&#xa0;* </span>
<span style='color:#696969; background:#ffffe8; '>&#xa0;* FROM </span>
<span style='color:#696969; background:#ffffe8; '>&#xa0;* </span>
<span style='color:#696969; background:#ffffe8; '>&#xa0;*  tabla</span>
<span style='color:#696969; background:#ffffe8; '>&#xa0;* </span>
<span style='color:#696969; background:#ffffe8; '>&#xa0;* Result : </span>
<span style='color:#696969; background:#ffffe8; '>&#xa0;* </span>
<span style='color:#696969; background:#ffffe8; '>&#xa0;* [{"id_cliente":"1","nombre":"Super","paterno":"Chinazo","materno":"Poderoso"},{"id_cliente":"2","nombre":"Will","paterno":"Smith","materno":"Ricardo"},{"id_cliente":"3","nombre":"Maicol","paterno":"Torres","materno":"Fuertes"}]</span>
<span style='color:#696969; background:#ffffe8; '>&#xa0;* </span>
<span style='color:#696969; background:#ffffe8; '>&#xa0;* NiceFormat : jsonlint.com</span>
<span style='color:#696969; background:#ffffe8; '>&#xa0;* </span>
<span style='color:#696969; background:#ffffe8; '>&#xa0;* [</span>
<span style='color:#696969; background:#ffffe8; '>&#xa0;*  {</span>
<span style='color:#696969; background:#ffffe8; '>&#xa0;*      "id_cliente": "1",</span>
<span style='color:#696969; background:#ffffe8; '>&#xa0;*      "nombre": "Super",</span>
<span style='color:#696969; background:#ffffe8; '>&#xa0;*      "paterno": "Chinazo",</span>
<span style='color:#696969; background:#ffffe8; '>&#xa0;*      "materno": "Poderoso"</span>
<span style='color:#696969; background:#ffffe8; '>&#xa0;*  }, </span>
<span style='color:#696969; background:#ffffe8; '>&#xa0;*  {</span>
<span style='color:#696969; background:#ffffe8; '>&#xa0;*      "id_cliente": "2",</span>
<span style='color:#696969; background:#ffffe8; '>&#xa0;*      "nombre": "Will",</span>
<span style='color:#696969; background:#ffffe8; '>&#xa0;*      "paterno": "Smith",</span>
<span style='color:#696969; background:#ffffe8; '>&#xa0;*      "materno": "Ricardo"</span>
<span style='color:#696969; background:#ffffe8; '>&#xa0;*  }, </span>
<span style='color:#696969; background:#ffffe8; '>&#xa0;*  {</span>
<span style='color:#696969; background:#ffffe8; '>&#xa0;*      "id_cliente": "3",</span>
<span style='color:#696969; background:#ffffe8; '>&#xa0;*      "nombre": "Maicol",</span>
<span style='color:#696969; background:#ffffe8; '>&#xa0;*      "paterno": "Torres",</span>
<span style='color:#696969; background:#ffffe8; '>&#xa0;*      "materno": "Fuertes"</span>
<span style='color:#696969; background:#ffffe8; '>&#xa0;*  }</span>
<span style='color:#696969; background:#ffffe8; '>&#xa0;* ]</span>
<span style='color:#696969; background:#ffffe8; '>&#xa0;*/</span><span style='color:#000000; background:#ffffe8; '></span>
<span style='color:#000000; background:#ffffe8; '></span>
<span style='color:#797997; background:#ffffe8; '>$lstSimpleSingleFieldsQuery</span><span style='color:#000000; background:#ffffe8; '> </span><span style='color:#808030; background:#ffffe8; '>=</span><span style='color:#000000; background:#ffffe8; '> DPManager</span><span style='color:#800080; background:#ffffe8; '>:</span><span style='color:#800080; background:#ffffe8; '>:</span><span style='color:#000000; background:#ffffe8; '>buildSingleJsonTo</span><span style='color:#808030; background:#ffffe8; '>(</span><span style='color:#797997; background:#ffffe8; '>$model</span><span style='color:#808030; background:#ffffe8; '>,</span><span style='color:#000000; background:#ffffe8; '> </span><span style='color:#0f4d75; background:#ffffe8; '>false</span><span style='color:#808030; background:#ffffe8; '>)</span><span style='color:#800080; background:#ffffe8; '>;</span><span style='color:#000000; background:#ffffe8; '></span>
<span style='color:#797997; background:#ffffe8; '>$lstSelectSingleJSON</span><span style='color:#000000; background:#ffffe8; '> </span><span style='color:#808030; background:#ffffe8; '>=</span><span style='color:#000000; background:#ffffe8; '> DPManager</span><span style='color:#800080; background:#ffffe8; '>:</span><span style='color:#800080; background:#ffffe8; '>:</span><span style='color:#000000; background:#ffffe8; '>buildSelectQuery</span><span style='color:#808030; background:#ffffe8; '>(</span><span style='color:#797997; background:#ffffe8; '>$lstSimpleSingleFieldsQuery</span><span style='color:#808030; background:#ffffe8; '>,</span><span style='color:#000000; background:#ffffe8; '> </span><span style='color:#0000e6; background:#ffffe8; '>"tabla"</span><span style='color:#808030; background:#ffffe8; '>,</span><span style='color:#000000; background:#ffffe8; '> </span><span style='color:#0f4d75; background:#ffffe8; '>false</span><span style='color:#808030; background:#ffffe8; '>)</span><span style='color:#800080; background:#ffffe8; '>;</span><span style='color:#000000; background:#ffffe8; '></span>
<span style='color:#797997; background:#ffffe8; '>$lstJGetAllsJSON</span><span style='color:#000000; background:#ffffe8; '> </span><span style='color:#808030; background:#ffffe8; '>=</span><span style='color:#000000; background:#ffffe8; '> DPManager</span><span style='color:#800080; background:#ffffe8; '>:</span><span style='color:#800080; background:#ffffe8; '>:</span><span style='color:#000000; background:#ffffe8; '>getField</span><span style='color:#808030; background:#ffffe8; '>(</span><span style='color:#797997; background:#ffffe8; '>$con</span><span style='color:#808030; background:#ffffe8; '>,</span><span style='color:#000000; background:#ffffe8; '> </span><span style='color:#797997; background:#ffffe8; '>$lstSelectSingleJSON</span><span style='color:#808030; background:#ffffe8; '>)</span><span style='color:#800080; background:#ffffe8; '>;</span><span style='color:#000000; background:#ffffe8; '></span>
<span style='color:#000000; background:#ffffe8; '></span>
<span style='color:#800000; background:#ffffe8; font-weight:bold; '>echo</span><span style='color:#000000; background:#ffffe8; '> </span><span style='color:#0000e6; background:#ffffe8; '>"&lt;h1>Return complex Simple All Array Object in format JSON&lt;/h1>"</span><span style='color:#800080; background:#ffffe8; '>;</span><span style='color:#000000; background:#ffffe8; '></span>
<span style='color:#800000; background:#ffffe8; font-weight:bold; '>echo</span><span style='color:#000000; background:#ffffe8; '> </span><span style='color:#0000e6; background:#ffffe8; '>"&lt;pre>"</span><span style='color:#800080; background:#ffffe8; '>;</span><span style='color:#000000; background:#ffffe8; '></span>
<span style='color:#800000; background:#ffffe8; font-weight:bold; '>echo</span><span style='color:#000000; background:#ffffe8; '> </span><span style='color:#0000e6; background:#ffffe8; '>"&lt;h3>Query format JSON&lt;/h3>"</span><span style='color:#800080; background:#ffffe8; '>;</span><span style='color:#000000; background:#ffffe8; '></span>
<span style='color:#400000; background:#ffffe8; '>print_r</span><span style='color:#808030; background:#ffffe8; '>(</span><span style='color:#797997; background:#ffffe8; '>$lstSimpleSingleFieldsQuery</span><span style='color:#808030; background:#ffffe8; '>)</span><span style='color:#800080; background:#ffffe8; '>;</span><span style='color:#000000; background:#ffffe8; '></span>
<span style='color:#800000; background:#ffffe8; font-weight:bold; '>echo</span><span style='color:#000000; background:#ffffe8; '> </span><span style='color:#0000e6; background:#ffffe8; '>"&lt;h3>Query complete JSON Query&lt;/h3>"</span><span style='color:#800080; background:#ffffe8; '>;</span><span style='color:#000000; background:#ffffe8; '></span>
<span style='color:#400000; background:#ffffe8; '>print_r</span><span style='color:#808030; background:#ffffe8; '>(</span><span style='color:#797997; background:#ffffe8; '>$lstSelectSingleJSON</span><span style='color:#808030; background:#ffffe8; '>)</span><span style='color:#800080; background:#ffffe8; '>;</span><span style='color:#000000; background:#ffffe8; '></span>
<span style='color:#800000; background:#ffffe8; font-weight:bold; '>echo</span><span style='color:#000000; background:#ffffe8; '> </span><span style='color:#0000e6; background:#ffffe8; '>"&lt;h2>Result&lt;/h2>"</span><span style='color:#800080; background:#ffffe8; '>;</span><span style='color:#000000; background:#ffffe8; '></span>
<span style='color:#400000; background:#ffffe8; '>print_r</span><span style='color:#808030; background:#ffffe8; '>(</span><span style='color:#797997; background:#ffffe8; '>$lstJGetAllsJSON</span><span style='color:#808030; background:#ffffe8; '>)</span><span style='color:#800080; background:#ffffe8; '>;</span><span style='color:#000000; background:#ffffe8; '></span>
<span style='color:#800000; background:#ffffe8; font-weight:bold; '>echo</span><span style='color:#000000; background:#ffffe8; '> </span><span style='color:#0000e6; background:#ffffe8; '>"&lt;/pre>"</span><span style='color:#800080; background:#ffffe8; '>;</span><span style='color:#000000; background:#ffffe8; '></span>
<span style='color:#000000; background:#ffffe8; '></span>
<span style='color:#696969; background:#ffffe8; '>/*</span>
<span style='color:#696969; background:#ffffe8; '>&#xa0;* </span>
<span style='color:#696969; background:#ffffe8; '>&#xa0;* DPManager::buildSingleJFieldsonTo($model)</span>
<span style='color:#696969; background:#ffffe8; '>&#xa0;* </span>
<span style='color:#696969; background:#ffffe8; '>&#xa0;* Output :</span>
<span style='color:#696969; background:#ffffe8; '>&#xa0;* </span>
<span style='color:#696969; background:#ffffe8; '>&#xa0;* CONCAT("[",GROUP_CONCAT(CONCAT("["),CONCAT("\"",id_cliente,"\""),</span>
<span style='color:#696969; background:#ffffe8; '>&#xa0;* CONCAT("\"",nombre,"\""),CONCAT("\"",paterno,"\""),</span>
<span style='color:#696969; background:#ffffe8; '>&#xa0;* CONCAT("\"",materno,"\""),CONCAT("]")), "]") AS json</span>
<span style='color:#696969; background:#ffffe8; '>&#xa0;* </span>
<span style='color:#696969; background:#ffffe8; '>&#xa0;* DPManager::buildSelectQuery($lstSimpleSingleFieldsQuery, "tabla", false);</span>
<span style='color:#696969; background:#ffffe8; '>&#xa0;* </span>
<span style='color:#696969; background:#ffffe8; '>&#xa0;* Output :</span>
<span style='color:#696969; background:#ffffe8; '>&#xa0;* </span>
<span style='color:#696969; background:#ffffe8; '>&#xa0;* SELECT </span>
<span style='color:#696969; background:#ffffe8; '>&#xa0;* </span>
<span style='color:#696969; background:#ffffe8; '>&#xa0;*  CONCAT("[",GROUP_CONCAT(CONCAT("["),CONCAT("\"",id_cliente,"\""),</span>
<span style='color:#696969; background:#ffffe8; '>&#xa0;*  CONCAT("\"",nombre,"\""),CONCAT("\"",paterno,"\""),</span>
<span style='color:#696969; background:#ffffe8; '>&#xa0;*  CONCAT("\"",materno,"\""),CONCAT("]")), "]") AS json </span>
<span style='color:#696969; background:#ffffe8; '>&#xa0;* </span>
<span style='color:#696969; background:#ffffe8; '>&#xa0;* FROM </span>
<span style='color:#696969; background:#ffffe8; '>&#xa0;* </span>
<span style='color:#696969; background:#ffffe8; '>&#xa0;* tabla</span>
<span style='color:#696969; background:#ffffe8; '>&#xa0;* </span>
<span style='color:#696969; background:#ffffe8; '>&#xa0;* Result : </span>
<span style='color:#696969; background:#ffffe8; '>&#xa0;* </span>
<span style='color:#696969; background:#ffffe8; '>&#xa0;* [{"id_cliente":"1","nombre":"Super","paterno":"Chinazo","materno":"Poderoso"},{"id_cliente":"2","nombre":"Will","paterno":"Smith","materno":"Ricardo"},{"id_cliente":"3","nombre":"Maicol","paterno":"Torres","materno":"Fuertes"}]</span>
<span style='color:#696969; background:#ffffe8; '>&#xa0;* </span>
<span style='color:#696969; background:#ffffe8; '>&#xa0;* NiceFormat : jsonlint.com</span>
<span style='color:#696969; background:#ffffe8; '>&#xa0;* </span>
<span style='color:#696969; background:#ffffe8; '>&#xa0;* [</span>
<span style='color:#696969; background:#ffffe8; '>&#xa0;*      ["1", "Super", "Chinazo", "Poderoso"],</span>
<span style='color:#696969; background:#ffffe8; '>&#xa0;*      ["2", "Will", "Smith", "Ricardo"],</span>
<span style='color:#696969; background:#ffffe8; '>&#xa0;*      ["3", "Maicol", "Torres", "Fuertes"]</span>
<span style='color:#696969; background:#ffffe8; '>&#xa0;* ]</span>
<span style='color:#696969; background:#ffffe8; '>&#xa0;*/</span><span style='color:#000000; background:#ffffe8; '></span>
<span style='color:#000000; background:#ffffe8; '></span>
<span style='color:#797997; background:#ffffe8; '>$lstJSONField</span><span style='color:#000000; background:#ffffe8; '> </span><span style='color:#808030; background:#ffffe8; '>=</span><span style='color:#000000; background:#ffffe8; '> DPManager</span><span style='color:#800080; background:#ffffe8; '>:</span><span style='color:#800080; background:#ffffe8; '>:</span><span style='color:#000000; background:#ffffe8; '>buildSingleJFieldsonTo</span><span style='color:#808030; background:#ffffe8; '>(</span><span style='color:#797997; background:#ffffe8; '>$model</span><span style='color:#808030; background:#ffffe8; '>)</span><span style='color:#800080; background:#ffffe8; '>;</span><span style='color:#000000; background:#ffffe8; '></span>
<span style='color:#797997; background:#ffffe8; '>$lstSelectJSONFieldQuery</span><span style='color:#000000; background:#ffffe8; '> </span><span style='color:#808030; background:#ffffe8; '>=</span><span style='color:#000000; background:#ffffe8; '> DPManager</span><span style='color:#800080; background:#ffffe8; '>:</span><span style='color:#800080; background:#ffffe8; '>:</span><span style='color:#000000; background:#ffffe8; '>buildSelectQuery</span><span style='color:#808030; background:#ffffe8; '>(</span><span style='color:#797997; background:#ffffe8; '>$lstJSONField</span><span style='color:#808030; background:#ffffe8; '>,</span><span style='color:#000000; background:#ffffe8; '> </span><span style='color:#0000e6; background:#ffffe8; '>"tabla"</span><span style='color:#808030; background:#ffffe8; '>)</span><span style='color:#800080; background:#ffffe8; '>;</span><span style='color:#000000; background:#ffffe8; '></span>
<span style='color:#797997; background:#ffffe8; '>$lstJSONFieldsAlls</span><span style='color:#000000; background:#ffffe8; '> </span><span style='color:#808030; background:#ffffe8; '>=</span><span style='color:#000000; background:#ffffe8; '> DPManager</span><span style='color:#800080; background:#ffffe8; '>:</span><span style='color:#800080; background:#ffffe8; '>:</span><span style='color:#000000; background:#ffffe8; '>getField</span><span style='color:#808030; background:#ffffe8; '>(</span><span style='color:#797997; background:#ffffe8; '>$con</span><span style='color:#808030; background:#ffffe8; '>,</span><span style='color:#000000; background:#ffffe8; '> </span><span style='color:#797997; background:#ffffe8; '>$lstSelectJSONFieldQuery</span><span style='color:#808030; background:#ffffe8; '>)</span><span style='color:#800080; background:#ffffe8; '>;</span><span style='color:#000000; background:#ffffe8; '></span>
<span style='color:#000000; background:#ffffe8; '></span>
<span style='color:#800000; background:#ffffe8; font-weight:bold; '>echo</span><span style='color:#000000; background:#ffffe8; '> </span><span style='color:#0000e6; background:#ffffe8; '>"&lt;h1>Return complex JSON Array Records&lt;/h1>"</span><span style='color:#800080; background:#ffffe8; '>;</span><span style='color:#000000; background:#ffffe8; '></span>
<span style='color:#800000; background:#ffffe8; font-weight:bold; '>echo</span><span style='color:#000000; background:#ffffe8; '> </span><span style='color:#0000e6; background:#ffffe8; '>"&lt;pre>"</span><span style='color:#800080; background:#ffffe8; '>;</span><span style='color:#000000; background:#ffffe8; '></span>
<span style='color:#800000; background:#ffffe8; font-weight:bold; '>echo</span><span style='color:#000000; background:#ffffe8; '> </span><span style='color:#0000e6; background:#ffffe8; '>"&lt;h3>Query format JSON&lt;/h3>"</span><span style='color:#800080; background:#ffffe8; '>;</span><span style='color:#000000; background:#ffffe8; '></span>
<span style='color:#400000; background:#ffffe8; '>print_r</span><span style='color:#808030; background:#ffffe8; '>(</span><span style='color:#797997; background:#ffffe8; '>$lstJSONField</span><span style='color:#808030; background:#ffffe8; '>)</span><span style='color:#800080; background:#ffffe8; '>;</span><span style='color:#000000; background:#ffffe8; '></span>
<span style='color:#800000; background:#ffffe8; font-weight:bold; '>echo</span><span style='color:#000000; background:#ffffe8; '> </span><span style='color:#0000e6; background:#ffffe8; '>"&lt;h3>Query complete JSON Query&lt;/h3>"</span><span style='color:#800080; background:#ffffe8; '>;</span><span style='color:#000000; background:#ffffe8; '></span>
<span style='color:#400000; background:#ffffe8; '>print_r</span><span style='color:#808030; background:#ffffe8; '>(</span><span style='color:#797997; background:#ffffe8; '>$lstSelectJSONFieldQuery</span><span style='color:#808030; background:#ffffe8; '>)</span><span style='color:#800080; background:#ffffe8; '>;</span><span style='color:#000000; background:#ffffe8; '></span>
<span style='color:#800000; background:#ffffe8; font-weight:bold; '>echo</span><span style='color:#000000; background:#ffffe8; '> </span><span style='color:#0000e6; background:#ffffe8; '>"&lt;h2>Result&lt;/h2>"</span><span style='color:#800080; background:#ffffe8; '>;</span><span style='color:#000000; background:#ffffe8; '></span>
<span style='color:#400000; background:#ffffe8; '>print_r</span><span style='color:#808030; background:#ffffe8; '>(</span><span style='color:#797997; background:#ffffe8; '>$lstJSONFieldsAlls</span><span style='color:#808030; background:#ffffe8; '>)</span><span style='color:#800080; background:#ffffe8; '>;</span><span style='color:#000000; background:#ffffe8; '></span>
<span style='color:#800000; background:#ffffe8; font-weight:bold; '>echo</span><span style='color:#000000; background:#ffffe8; '> </span><span style='color:#0000e6; background:#ffffe8; '>"&lt;/pre>"</span><span style='color:#800080; background:#ffffe8; '>;</span><span style='color:#000000; background:#ffffe8; '></span>
<span style='color:#000000; background:#ffffe8; '></span>
<span style='color:#696969; background:#ffffe8; '>/*</span>
<span style='color:#696969; background:#ffffe8; '>&#xa0;* </span>
<span style='color:#696969; background:#ffffe8; '>&#xa0;* DPManager::buildSingleArrayFieldJsonTo($model)</span>
<span style='color:#696969; background:#ffffe8; '>&#xa0;* </span>
<span style='color:#696969; background:#ffffe8; '>&#xa0;* Output :</span>
<span style='color:#696969; background:#ffffe8; '>&#xa0;* </span>
<span style='color:#696969; background:#ffffe8; '>&#xa0;* CONCAT("[",GROUP_CONCAT(CONCAT("\"",id_cliente,"\","),</span>
<span style='color:#696969; background:#ffffe8; '>&#xa0;* CONCAT("\"",nombre,"\","),CONCAT("\"",paterno,"\","),</span>
<span style='color:#696969; background:#ffffe8; '>&#xa0;* CONCAT("\"",materno,"\"")), "]") AS json</span>
<span style='color:#696969; background:#ffffe8; '>&#xa0;* </span>
<span style='color:#696969; background:#ffffe8; '>&#xa0;* DPManager::buildSelectQuery($lstJSONArrayField, "tabla", "nombre = 'Super'");</span>
<span style='color:#696969; background:#ffffe8; '>&#xa0;* </span>
<span style='color:#696969; background:#ffffe8; '>&#xa0;* Output :</span>
<span style='color:#696969; background:#ffffe8; '>&#xa0;* </span>
<span style='color:#696969; background:#ffffe8; '>&#xa0;* SELECT </span>
<span style='color:#696969; background:#ffffe8; '>&#xa0;* </span>
<span style='color:#696969; background:#ffffe8; '>&#xa0;*  CONCAT("[",GROUP_CONCAT(CONCAT("\"",id_cliente,"\","),</span>
<span style='color:#696969; background:#ffffe8; '>&#xa0;*  CONCAT("\"",nombre,"\","),CONCAT("\"",paterno,"\","),</span>
<span style='color:#696969; background:#ffffe8; '>&#xa0;*  CONCAT("\"",materno,"\"")), "]") AS json </span>
<span style='color:#696969; background:#ffffe8; '>&#xa0;* </span>
<span style='color:#696969; background:#ffffe8; '>&#xa0;* FROM </span>
<span style='color:#696969; background:#ffffe8; '>&#xa0;* </span>
<span style='color:#696969; background:#ffffe8; '>&#xa0;* tabla </span>
<span style='color:#696969; background:#ffffe8; '>&#xa0;* </span>
<span style='color:#696969; background:#ffffe8; '>&#xa0;* WHERE </span>
<span style='color:#696969; background:#ffffe8; '>&#xa0;* </span>
<span style='color:#696969; background:#ffffe8; '>&#xa0;* nombre = 'Super'</span>
<span style='color:#696969; background:#ffffe8; '>&#xa0;* </span>
<span style='color:#696969; background:#ffffe8; '>&#xa0;* Result : </span>
<span style='color:#696969; background:#ffffe8; '>&#xa0;* </span>
<span style='color:#696969; background:#ffffe8; '>&#xa0;* ["1","Super","Chinazo","Poderoso"]</span>
<span style='color:#696969; background:#ffffe8; '>&#xa0;* </span>
<span style='color:#696969; background:#ffffe8; '>&#xa0;* NiceFormat : jsonlint.com</span>
<span style='color:#696969; background:#ffffe8; '>&#xa0;* </span>
<span style='color:#696969; background:#ffffe8; '>&#xa0;* [</span>
<span style='color:#696969; background:#ffffe8; '>&#xa0;*      ["1", "Super", "Chinazo", "Poderoso"],</span>
<span style='color:#696969; background:#ffffe8; '>&#xa0;*      ["2", "Will", "Smith", "Ricardo"],</span>
<span style='color:#696969; background:#ffffe8; '>&#xa0;*      ["3", "Maicol", "Torres", "Fuertes"]</span>
<span style='color:#696969; background:#ffffe8; '>&#xa0;* ]</span>
<span style='color:#696969; background:#ffffe8; '>&#xa0;* </span>
<span style='color:#696969; background:#ffffe8; '>&#xa0;*/</span><span style='color:#000000; background:#ffffe8; '></span>
<span style='color:#000000; background:#ffffe8; '></span>
<span style='color:#797997; background:#ffffe8; '>$lstJSONArrayField</span><span style='color:#000000; background:#ffffe8; '> </span><span style='color:#808030; background:#ffffe8; '>=</span><span style='color:#000000; background:#ffffe8; '> DPManager</span><span style='color:#800080; background:#ffffe8; '>:</span><span style='color:#800080; background:#ffffe8; '>:</span><span style='color:#000000; background:#ffffe8; '>buildSingleArrayFieldJsonTo</span><span style='color:#808030; background:#ffffe8; '>(</span><span style='color:#797997; background:#ffffe8; '>$model</span><span style='color:#808030; background:#ffffe8; '>)</span><span style='color:#800080; background:#ffffe8; '>;</span><span style='color:#000000; background:#ffffe8; '></span>
<span style='color:#797997; background:#ffffe8; '>$lstSelectJSONArrayQuery</span><span style='color:#000000; background:#ffffe8; '> </span><span style='color:#808030; background:#ffffe8; '>=</span><span style='color:#000000; background:#ffffe8; '> DPManager</span><span style='color:#800080; background:#ffffe8; '>:</span><span style='color:#800080; background:#ffffe8; '>:</span><span style='color:#000000; background:#ffffe8; '>buildSelectQuery</span><span style='color:#808030; background:#ffffe8; '>(</span><span style='color:#797997; background:#ffffe8; '>$lstJSONArrayField</span><span style='color:#808030; background:#ffffe8; '>,</span><span style='color:#000000; background:#ffffe8; '> </span><span style='color:#0000e6; background:#ffffe8; '>"tabla"</span><span style='color:#808030; background:#ffffe8; '>,</span><span style='color:#000000; background:#ffffe8; '> </span><span style='color:#0000e6; background:#ffffe8; '>"nombre = 'Super'"</span><span style='color:#808030; background:#ffffe8; '>)</span><span style='color:#800080; background:#ffffe8; '>;</span><span style='color:#000000; background:#ffffe8; '></span>
<span style='color:#797997; background:#ffffe8; '>$lstJSONArrayRow</span><span style='color:#000000; background:#ffffe8; '> </span><span style='color:#808030; background:#ffffe8; '>=</span><span style='color:#000000; background:#ffffe8; '> DPManager</span><span style='color:#800080; background:#ffffe8; '>:</span><span style='color:#800080; background:#ffffe8; '>:</span><span style='color:#000000; background:#ffffe8; '>getField</span><span style='color:#808030; background:#ffffe8; '>(</span><span style='color:#797997; background:#ffffe8; '>$con</span><span style='color:#808030; background:#ffffe8; '>,</span><span style='color:#000000; background:#ffffe8; '> </span><span style='color:#797997; background:#ffffe8; '>$lstSelectJSONArrayQuery</span><span style='color:#808030; background:#ffffe8; '>)</span><span style='color:#800080; background:#ffffe8; '>;</span><span style='color:#000000; background:#ffffe8; '></span>
<span style='color:#000000; background:#ffffe8; '></span>
<span style='color:#800000; background:#ffffe8; font-weight:bold; '>echo</span><span style='color:#000000; background:#ffffe8; '> </span><span style='color:#0000e6; background:#ffffe8; '>"&lt;h1>Return Simple JSON Array Record&lt;/h1>"</span><span style='color:#800080; background:#ffffe8; '>;</span><span style='color:#000000; background:#ffffe8; '></span>
<span style='color:#800000; background:#ffffe8; font-weight:bold; '>echo</span><span style='color:#000000; background:#ffffe8; '> </span><span style='color:#0000e6; background:#ffffe8; '>"&lt;pre>"</span><span style='color:#800080; background:#ffffe8; '>;</span><span style='color:#000000; background:#ffffe8; '></span>
<span style='color:#800000; background:#ffffe8; font-weight:bold; '>echo</span><span style='color:#000000; background:#ffffe8; '> </span><span style='color:#0000e6; background:#ffffe8; '>"&lt;h3>Query format JSON&lt;/h3>"</span><span style='color:#800080; background:#ffffe8; '>;</span><span style='color:#000000; background:#ffffe8; '></span>
<span style='color:#400000; background:#ffffe8; '>print_r</span><span style='color:#808030; background:#ffffe8; '>(</span><span style='color:#797997; background:#ffffe8; '>$lstJSONArrayField</span><span style='color:#808030; background:#ffffe8; '>)</span><span style='color:#800080; background:#ffffe8; '>;</span><span style='color:#000000; background:#ffffe8; '></span>
<span style='color:#800000; background:#ffffe8; font-weight:bold; '>echo</span><span style='color:#000000; background:#ffffe8; '> </span><span style='color:#0000e6; background:#ffffe8; '>"&lt;h3>Query complete JSON Query&lt;/h3>"</span><span style='color:#800080; background:#ffffe8; '>;</span><span style='color:#000000; background:#ffffe8; '></span>
<span style='color:#400000; background:#ffffe8; '>print_r</span><span style='color:#808030; background:#ffffe8; '>(</span><span style='color:#797997; background:#ffffe8; '>$lstSelectJSONArrayQuery</span><span style='color:#808030; background:#ffffe8; '>)</span><span style='color:#800080; background:#ffffe8; '>;</span><span style='color:#000000; background:#ffffe8; '></span>
<span style='color:#800000; background:#ffffe8; font-weight:bold; '>echo</span><span style='color:#000000; background:#ffffe8; '> </span><span style='color:#0000e6; background:#ffffe8; '>"&lt;h2>Result&lt;/h2>"</span><span style='color:#800080; background:#ffffe8; '>;</span><span style='color:#000000; background:#ffffe8; '></span>
<span style='color:#400000; background:#ffffe8; '>print_r</span><span style='color:#808030; background:#ffffe8; '>(</span><span style='color:#797997; background:#ffffe8; '>$lstJSONArrayRow</span><span style='color:#808030; background:#ffffe8; '>)</span><span style='color:#800080; background:#ffffe8; '>;</span><span style='color:#000000; background:#ffffe8; '></span>
<span style='color:#800000; background:#ffffe8; font-weight:bold; '>echo</span><span style='color:#000000; background:#ffffe8; '> </span><span style='color:#0000e6; background:#ffffe8; '>"&lt;/pre>"</span><span style='color:#800080; background:#ffffe8; '>;</span><span style='color:#000000; background:#ffffe8; '></span>
<span style='color:#000000; background:#ffffe8; '></span>
<span style='color:#696969; background:#ffffe8; '>/*</span>
<span style='color:#696969; background:#ffffe8; '>&#xa0;* </span>
<span style='color:#696969; background:#ffffe8; '>&#xa0;* DPManager::setSessionGroupConcatMaxLen($con);</span>
<span style='color:#696969; background:#ffffe8; '>&#xa0;* </span>
<span style='color:#696969; background:#ffffe8; '>&#xa0;* Output :</span>
<span style='color:#696969; background:#ffffe8; '>&#xa0;* </span>
<span style='color:#696969; background:#ffffe8; '>&#xa0;* ADORecordSet_empty Object</span>
<span style='color:#696969; background:#ffffe8; '>&#xa0;*  (</span>
<span style='color:#696969; background:#ffffe8; '>&#xa0;*      [dataProvider] => empty</span>
<span style='color:#696969; background:#ffffe8; '>&#xa0;*      [databaseType] => </span>
<span style='color:#696969; background:#ffffe8; '>&#xa0;*      [EOF] => 1</span>
<span style='color:#696969; background:#ffffe8; '>&#xa0;*      [_numOfRows] => 0</span>
<span style='color:#696969; background:#ffffe8; '>&#xa0;*      [fields] => </span>
<span style='color:#696969; background:#ffffe8; '>&#xa0;*      [connection] => </span>
<span style='color:#696969; background:#ffffe8; '>&#xa0;*  )</span>
<span style='color:#696969; background:#ffffe8; '>&#xa0;* </span>
<span style='color:#696969; background:#ffffe8; '>&#xa0;* Result : </span>
<span style='color:#696969; background:#ffffe8; '>&#xa0;* </span>
<span style='color:#696969; background:#ffffe8; '>&#xa0;* SET SESSION group_concat_max_len = 4294967295   </span>
<span style='color:#696969; background:#ffffe8; '>&#xa0;* </span>
<span style='color:#696969; background:#ffffe8; '>&#xa0;* </span>
<span style='color:#696969; background:#ffffe8; '>&#xa0;*/</span><span style='color:#000000; background:#ffffe8; '></span>
<span style='color:#000000; background:#ffffe8; '></span>
<span style='color:#797997; background:#ffffe8; '>$lobResult</span><span style='color:#000000; background:#ffffe8; '> </span><span style='color:#808030; background:#ffffe8; '>=</span><span style='color:#000000; background:#ffffe8; '> DPManager</span><span style='color:#800080; background:#ffffe8; '>:</span><span style='color:#800080; background:#ffffe8; '>:</span><span style='color:#000000; background:#ffffe8; '>setSessionGroupConcatMaxLen</span><span style='color:#808030; background:#ffffe8; '>(</span><span style='color:#797997; background:#ffffe8; '>$con</span><span style='color:#808030; background:#ffffe8; '>)</span><span style='color:#800080; background:#ffffe8; '>;</span><span style='color:#000000; background:#ffffe8; '></span>
<span style='color:#000000; background:#ffffe8; '></span>
<span style='color:#800000; background:#ffffe8; font-weight:bold; '>echo</span><span style='color:#000000; background:#ffffe8; '> </span><span style='color:#0000e6; background:#ffffe8; '>"&lt;h1>Increase the limit from GroupConcat Max Length&lt;/h1>"</span><span style='color:#800080; background:#ffffe8; '>;</span><span style='color:#000000; background:#ffffe8; '></span>
<span style='color:#800000; background:#ffffe8; font-weight:bold; '>echo</span><span style='color:#000000; background:#ffffe8; '> </span><span style='color:#0000e6; background:#ffffe8; '>"&lt;pre>"</span><span style='color:#800080; background:#ffffe8; '>;</span><span style='color:#000000; background:#ffffe8; '></span>
<span style='color:#800000; background:#ffffe8; font-weight:bold; '>echo</span><span style='color:#000000; background:#ffffe8; '> </span><span style='color:#0000e6; background:#ffffe8; '>"&lt;h3>Query to increase the limit from function Group_concat()&lt;/h3>"</span><span style='color:#800080; background:#ffffe8; '>;</span><span style='color:#000000; background:#ffffe8; '></span>
<span style='color:#400000; background:#ffffe8; '>print_r</span><span style='color:#808030; background:#ffffe8; '>(</span><span style='color:#797997; background:#ffffe8; '>$lobResult</span><span style='color:#808030; background:#ffffe8; '>)</span><span style='color:#800080; background:#ffffe8; '>;</span><span style='color:#000000; background:#ffffe8; '></span>
</pre>

