<?php
    require_once('lib.lagger/init.php');
    require_once('class.devenv.php');

    function interpret($code)
    {
        print "Function launched";
        $end = 0;
        while($end <= strlen($code))
        {
            $sectionStart = strpos($code, '<?php');
            if($sectionStart) {
               $sectionEnd = strpos($code, '?>', $sectionStart);
                print substr($code, $sectionStart, $sectionEnd-$sectionStart);
                $end = $sectionEnd;
            } else
                $end = 1+strlen($code);
        }
    }
?>

<meta http-equiv="Content-type" content="text/html;charset=UTF-8"/>
<link href="google-code-prettify/prettify.css" type="text/css" rel="stylesheet" />
<link rel="stylesheet" type="text/css" href="style.css" />
<script src="http://jqueryjs.googlecode.com/files/jquery-1.2.6.min.js" type="text/javascript"></script>
<script type="text/javascript" src="google-code-prettify/prettify.js"></script>
<script src="devenv.js" type="text/javascript"></script>

<?php
    $env = new devenv();

    /*
    if($_POST['view']) {
        $env->view = interpret($_POST['view']);
        print $_POST['view'];
    } else print "No Post";
*/
    print "<div id='viewWindow'>".$env->view."</div>";
    print "<textarea id='codeWindow' cols='125' rows='600'>".$env->code."</textarea>";
?>
