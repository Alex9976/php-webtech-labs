<?php

include "variable.php";
include "config.php";
    
function LoadData($id)
{
    $mySQL = mysqli_connect("localhost", "root", "", "db");
    $SQL = "SELECT `name` FROM `table` WHERE id = $id";
    $request = mysqli_query($mySQL, $SQL);
    if ($request)
        $data = mysqli_fetch_assoc($request);

    return $data['name'];
}
    
$template = file_get_contents("index.html");
    
$template = preg_replace("/({FILE=\")([a-zA-z.0-9_]*)(\"})/u", "<?php include \"$2\"; ?>", $template);
$template = preg_replace("/({CONFIG=\")([a-zA-z.0-9_]*)(\"})/u", "<?=$$2?>", $template);
$template = preg_replace("/({VAR=\")([a-zA-z.0-9_]*)(\"})/u", "<?=\$VARS['$2']?>", $template);
    
$template = preg_replace("/({IF \")([a-zA-z.0-9_]*)(\")([><=!]*)(\")([a-zA-z.0-9_]*)(\"})/u", "<?php if($2 $4 $6): ?>", $template);
$template = preg_replace("/({ELSE})/u", "<?php else: ?>", $template);
$template = preg_replace("/({ENDIF})/u", "<?php endif; ?>", $template);
    
$template = preg_replace("/({DB=\")([a-zA-z.0-9_]*)(\"})/u", "<?=LoadData($2)?>", $template);

file_put_contents("temp", $template);
include "temp";
unlink("temp");