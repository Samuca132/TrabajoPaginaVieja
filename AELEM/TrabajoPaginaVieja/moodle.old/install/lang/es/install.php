<?php
// This file is part of Moodle - https://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <https://www.gnu.org/licenses/>.

/**
 * Automatically generated strings for Moodle installer
 *
 * Do not edit this file manually! It contains just a subset of strings
 * needed during the very first steps of installation. This file was
 * generated automatically by export-installer.php (which is part of AMOS
 * {@link http://docs.moodle.org/dev/Languages/AMOS}) using the
 * list of strings defined in /install/stringnames.txt.
 *
 * @package   installer
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['admindirname'] = 'Directorio Admin';
$string['availablelangs'] = 'Paquetes de idiomas disponibles';
$string['chooselanguagehead'] = 'Seleccionar idioma';
$string['chooselanguagesub'] = 'Por favor, seleccione un idioma para el proceso de instalación. Este idioma se usará también como idioma por defecto del sitio, si bien puede cambiarse más adelante.';
$string['clialreadyconfigured'] = 'El archivo de configuración config.php ya existe. Por favor, utilice admin/cli/install_database.php para instalar Moodle en este sitio.';
$string['clialreadyinstalled'] = 'El archivo de configuración config.php ya existe. Por favor, utilice admin/cli/install_database.php para actualizar Moodle en este sitio.';
$string['cliinstallheader'] = 'Programa de instalación Moodle de línea de comando {$a}';
$string['clitablesexist'] = 'Tablas de base de datos ya existentes; la instalación CLI no puede continuar.';
$string['databasehost'] = 'Servidor de la base de datos';
$string['databasename'] = 'Nombre de la base de datos';
$string['databasetypehead'] = 'Seleccione el controlador de la base de datos';
$string['dataroot'] = 'Directorio de Datos';
$string['datarootpermission'] = 'Permiso directorios de datos';
$string['dbprefix'] = 'Prefijo de tablas';
$string['dirroot'] = 'Directorio de Moodle';
$string['environmenthead'] = 'Comprobando su entorno';
$string['environmentsub2'] = 'Cada versión de Moodle tiene algún requisito mínimo de la versión de PHP y un número obligatorio de extensiones de PHP.
Una comprobación del entorno completo se realiza antes de cada instalación y actualización. Por favor, póngase en contacto con el administrador del servidor si no sabes cómo instalar la nueva versión o habilitar las extensiones PHP.';
$string['errorsinenvironment'] = '¡La comprobación del entorno fallo!';
$string['installation'] = 'Instalación';
$string['langdownloaderror'] = 'El idioma "{$a}" no pudo ser descargado. El proceso de instalación continuará en Inglés.';
$string['memorylimithelp'] = '<p>El límite de memoria PHP en su servidor es actualmente {$a}.</p>

<p>Esto puede ocasionar que Moodle tenga problemas de memoria más adelante, especialmente si usted tiene activados muchos módulos y/o muchos usuarios.</p>

<p>Recomendamos que configure PHP si es posible con un límite más alto, como 40M.
Puede probar varias formas de hacer esto:</p>
<ol>
<li>Si puede hacerlo, recopile PHP con <i>--enable-memory-limit</i>.
Esto hace que Moodle fije por sí mismo el límite de memoria.</li>
<li>Si tiene acceso al archivo "php.ini", puede cambiar el ajuste <b>memory_limit</b>
a, digamos, 40M. Si no tiene acceso, puede pedir a su administrador que lo haga por usted.</li>
<li>En algunos servidores PHP puede crear en el directorio Moodle un archivo .htaccess que contenga esta línea:
<p><blockquote>php_value memory_limit 40M</blockquote></p>
<p>Sin embargo, en algunos servidores esto hace que <b>todas</b> las páginas PHP dejen de funcionar
(podrá ver los errores cuando mire las páginas) de modo que tendrá que eliminar el archivo ".htaccess".</p></li>
</ol>';
$string['paths'] = 'Rutas';
$string['pathserrcreatedataroot'] = 'El directorio de los datos ({$a->dataroot}) no puede ser creado por el instalador.';
$string['pathshead'] = 'Confirme las rutas';
$string['pathsrodataroot'] = 'El directorio dataroot no tiene permisos de escritura.';
$string['pathsroparentdataroot'] = 'El directorio padre ({$a->parent}) no tiene permisos de escritura. El directorio de los datos ({$a->dataroot}) no puede ser creado por el instalador.';
$string['pathssubadmindir'] = 'Muy pocos servidores web usan /admin como un URL especial para acceder a un
panel de control o algo similar. Lamentablemente, esto entra en conflicto con la ubicación estándar para las páginas de administración de Moodle. Usted puede solucionar este problema, renombrando el directorio admin en su instalación Moodle, poniendo un nuevo nombre aquí. Por ejemplo: <em> moodleadmin </em>. Esto solucionará los enlaces de administración en instalación Moodle.';
$string['pathssubdataroot'] = '<p>Un directorio en el que Moodle puede guardar los archivos subidos por usuarios.</p>
<p>En este directorio el usuario del servidor web  (por lo general \'nobody\',  \'apache\' o \'www-data\') debe poder leer y escribir.</p>
<p>No debe poderse acceder a esta carpeta directamente a través de la web.</p>
<p>Si el directorio no existe, el instalador tratará de crearlo.</p>';
$string['pathssubdirroot'] = '<p>Ruta completa del directorio que contiene el código de  Moodle.</p>';
$string['pathssubwwwroot'] = '<p>Dirección web completa para acceder a Moodle, es decir, la dirección que los usuarios escribirán en la barra de búsqueda del navegador para acceder a Moodle.</p>
<p>No es posible acceder a Moodle utilizando múltiples direcciones. Si su portal tiene varias direcciones debe configurar la más sencilla y configurar un redireccionamiento permanente desde las otras.</p>
<p>Si su portal es accesible desde internet, y desde una ret interna (llamada intranet), entonces use la dirección pública aquí.</p>
<p>Si la dirección actual no es correcta, por favor, cambie el URL en la barra de búsqueda de su navegador y reinicie la instalación.</p>';
$string['pathsunsecuredataroot'] = 'La ubicación de dataroot no es segura';
$string['pathswrongadmindir'] = 'El directorio admin no existe';
$string['phpextension'] = 'Extensión PHP {$a}';
$string['phpversion'] = 'Versión PHP';
$string['phpversionhelp'] = '<p>Moodle requiere una versión de PHP que sea al menos la 5.6.5 o 7.1 (7.0.x tiene algunas limitaciones del motor).</p>
<p>En este momento está ejecutando la versión {$a}.</p>
<p>Debe actualizar PHP o trasladarse a otro servidor con una versión más reciente de PHP.</p>';
$string['welcomep10'] = '{$a->installername} ({$a->installerversion})';
$string['welcomep20'] = 'Si está viendo esta página es porque ha podido ejecutar el paquete <strong>{$a->packname} {$a->packversion}</strong> satisfactoriamente en su ordenador. ¡Enhorabuena!';
$string['welcomep30'] = 'Esta versión de <strong>{$a->installername}</strong> incluye las
    aplicaciones necesarias para que <strong>Moodle</strong> funcione en su ordenador,
    principalmente:';
$string['welcomep40'] = 'El paquete también incluye <strong>Moodle {$a->moodlerelease} ({$a->moodleversion})</strong>.';
$string['welcomep50'] = 'El uso de todas las aplicaciones del paquete está supeditado a sus respectivas licencias. El programa <strong>{$a->installername}</strong> es <a href="http://www.opensource.org/docs/definition_plain.html">de código abierto</a> y se distribuye bajo licencia <a href="http://www.gnu.org/copyleft/gpl.html">GPL</a>.';
$string['welcomep60'] = 'Las siguientes páginas le guiarán a través de algunos sencillos pasos para configurar y ajustar <strong>Moodle</strong> en su ordenador. Puede utilizar los valores por defecto sugeridos o, de forma opcional, modificarlos para que se ajusten a sus necesidades.';
$string['welcomep70'] = 'Pulse en el botón "Siguiente" para continuar con la configuración de <strong>Moodle</strong>.';
$string['wwwroot'] = 'Dirección Web';
