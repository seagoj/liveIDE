<!doctype html>
<html>
  <head>
    <title>CodeMirror: PHP mode</title>
    <link rel="stylesheet" href="codemirror/lib/codemirror.css">
    <script src="codemirror/lib/codemirror.js"></script>
    <script src="codemirror/mode/xml/xml.js"></script>
    <script src="codemirror/mode/javascript/javascript.js"></script>
    <script src="codemirror/mode/css/css.js"></script>
    <script src="codemirror/mode/clike/clike.js"></script>
    <script src="codemirror/mode/php/php.js"></script>
    <style type="text/css">.CodeMirror {border-top: 1px solid black; border-bottom: 1px solid black;}</style>
    <link rel="stylesheet" href="codemirror/doc/docs.css">
    <link rel="stylesheet" href="codemirror/theme/lesser-dark.css">

  </head>
  <body style='background-color:grey'>
    <h1>CodeMirror: PHP mode</h1>

<form><textarea id="code" name="code">
<?php
    print "hello world";
?></textarea></form>

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


    <div id='view'>Render</div>

  </body>
</html>
