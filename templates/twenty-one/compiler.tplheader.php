
<?php
/*
 * Smarty plugin
 * -------------------------------------------------------------
 * File:     compiler.tplheader.php
 * Type:     compiler
 * Name:     tplheader
 * Purpose:  Output header containing the source file name and
 *           the time it was compiled.
 * -------------------------------------------------------------
 */

function smarty_compiler_tplheader($params, Smarty $smarty)
{
   //    var_dump('ddd');die;
    return "<?php \n echo '" . $smarty->_current_file . " compiled at " . date('Y-m-d H:M'). "';\n?>";
}
?>