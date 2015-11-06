
<html>
<head>
<title>FORK</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="pragma" content="no-cache" />

<style type="text/css">

  body {
    background-color: #000000;
    color: #FF3333;
    font-family: "Courier New", Courier, monospace;
  }

  div.foo {
    padding:20px;
    margin-left: auto;
    margin-right: auto;
    text-align: center;

    font-size: 14px;
  }

  h1 {
    font-family: "Lucida Console", Monaco, monospace;
    padding: 50px;
  }
</style>
</head>

<body>
  <div class="foo">
      <h1>::BE/AWARE/THAT/YOU/HAVE/BEEN/NOTICED::</h1>

<?php

  $time = microtime();

  echo hash('sha256', $time);
  echo "<br>";
  echo hash('sha256', $time+1);
  echo "<br><br>";

  echo hash('sha256', $time+2);
  echo "<br>";
  echo hash('sha256', $time+3);
  echo "<br><br>";

   echo hash('sha256', $time+4);
  echo "<br>";
  echo hash('sha256', $time+5);
  echo "<br><br>";

?>

  </div>
</body>
</html>
