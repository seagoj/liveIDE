<!doctype html>
<html>
  <head>
    <title>CodeMirror: PHP mode</title>
    <link rel="stylesheet" href="/codemirror/lib/codemirror.css">
    <script src="/codemirror/lib/codemirror.js"></script>
    <script src="/codemirror/mode/xml/xml.js"></script>
    <script src="/codemirror/mode/javascript/javascript.js"></script>
    <script src="/codemirror/mode/css/css.js"></script>
    <script src="/codemirror/mode/clike/clike.js"></script>
    <script src="php.js"></script>
    <style type="text/css">.CodeMirror {border-top: 1px solid black; border-bottom: 1px solid black;}</style>
    <link rel="stylesheet" href="/codemirror/doc/docs.css">
    <link rel="stylesheet" href="/codemirror/theme/lesser-dark.css">
  </head>
  <body style='background-color:grey'>
    <h1>CodeMirror: PHP mode</h1>

<form>
    <textarea id="code" name="code">
<?php
    print "hello world";
?>
</textarea>
</form>

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

    <p>Simple HTML/PHP mode based on
    the <a href="../clike/">C-like</a> mode. Depends on XML,
    JavaScript, CSS, and C-like modes.</p>

    <p><strong>MIME types defined:</strong> <code>application/x-httpd-php</code> (HTML with PHP code), <code>text/x-php</code> (plain, non-wrapped PHP code).</p>
  </body>
</html>
