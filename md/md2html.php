<?php
require 'vendor/autoload.php';
use \Michelf\Markdown;

$md = file_get_contents("md/sample.md");
$html = Markdown::defaultTransform($md);
?>
<html>
  <head>
    <style type="text/css">
      blockquote {
        margin-left: 0.5em;
        padding-left: 0.5em;
        border-left: 1px solid #CCCCCC;
      }
      code{
        display: block;
        padding: 0.5em;
        width: 80%;
        background-color: #DDDDDD;
        border: 1px dotted #666666;
      }
    </style>
  </head>
  <body>
    <?php print $html; ?>
  </body>
</html>
