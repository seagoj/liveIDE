<!doctype html>
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

<html>
  <head>
    <meta http-equiv="Content-type" content="text/html;charset=UTF-8"/>
    <title>CodeMirror: PHP mode</title>
    <link rel="stylesheet" href="codemirror/lib/codemirror.css">
    <script src="../codemirror/lib/codemirror.js"></script>
    <script src="../codemirror/mode/xml/xml.js"></script>
    <script src="../codemirror/mode/javascript/javascript.js"></script>
    <script src="../codemirror/mode/css/css.js"></script>
    <script src="../codemirror/mode/clike/clike.js"></script>
    <script src="../codemirror/mode/php/php.js"></script>
    <style type="text/css">.CodeMirror {border-top: 1px solid black; border-bottom: 1px solid black;}</style>
    <link rel="stylesheet" href="../codemirror/doc/docs.css">
    <link rel="stylesheet" href="../codemirror/theme/lesser-dark.css">
    <!--//
    <link href="google-code-prettify/prettify.css" type="text/css" rel="stylesheet" />
    <script type="text/javascript" src="google-code-prettify/prettify.js"></script>
    //-->
    <link rel="stylesheet" type="text/css" href="style.css" />
    <script src="http://jqueryjs.googlecode.com/files/jquery-1.2.6.min.js" type="text/javascript"></script>
    <script src="devenv.js" type="text/javascript"></script>

  </head>
  <body style='background-color:grey'>
    <h1>CodeMirror: PHP mode</h1>

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

    <script>
      var editor = CodeMirror.fromTextArea(document.getElementById("code"), {
        lineNumbers: true,
        theme: "lesser-dark",
        matchBrackets: true,
        mode: "application/x-httpd-php",
        indentUnit: 4,
        indentWithTabs: true,
        enterMode: "keep",
        tabMode: "shift"
      });
    </script>

  </body>
</html>

