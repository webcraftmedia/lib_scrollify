<?php
/**
 * System - PHP Framework
 *
 * PHP Version 5.6
 *
 * @copyright   2016 Ulf Gebhardt (http://www.webcraft-media.de)
 * @license     http://www.opensource.org/licenses/mit-license.php MIT
 * @link        https://github.com/webcraftmedia/system
 * @package     LIB
 */
namespace LIB;

class docu_scrollify implements \SYSTEM\DOCU\docu_package {
    public static function get_config(){
        return array(   'id' => 'scrollify',
                        'inpath' => new \PLIB('scrollify/'),
                        'outpath' => new \PLIB('scrollify/docu/'),
                        'inpath_md' => new \PLIB('scrollify/docu/structure.xml'),
                        'outpath_md' => new \PLIB('scrollify/wiki/'),
                        'cachepath' => new \PLIB('scrollify/docu/cache/'),
                        'ignore' => array(),
                        'sourcecode' => true,
                        'parseprivate' => false,
                        'title' => 'LIB - Scrollify');
    }
}