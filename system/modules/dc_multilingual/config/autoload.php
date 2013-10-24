<?php

/**
 * @author  Kamil Kuzminski <kamil.kuzminski@codefog.pl>
 * @package DC_Multilingual
 * @license LGPL
 */


/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	'Contao\DC_Multilingual'       => 'system/modules/dc_multilingual/drivers/DC_Multilingual.php',
	'Contao\MultilingualModel'     => 'system/modules/dc_multilingual/models/MultilingualModel.php',
	'Contao\MultilingualQueryBuilder' => 'system/modules/dc_multilingual/classes/MultilingualQueryBuilder.php',
	'Contao\DC_Multilingual_Query' => 'system/modules/dc_multilingual/classes/DC_Multilingual_Query.php'
));
