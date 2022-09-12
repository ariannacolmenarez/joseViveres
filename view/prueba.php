<!doctype html>
<html>
<head>
<meta charset="utf-8" />
<title>jQuery UI Datepicker - Estilo Cupertino</title>
<link rel="stylesheet" href="jquery-ui-1.10.2.cupertino.css" />
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="http://code.jquery.com/ui/1.10.1/jquery-ui.js"></script>
<script src="jquery.ui.datepicker-es.js"></script>

<script>
$(function () {
$.datepicker.setDefaults($.datepicker.regional["es"]);
$("#datepicker").datepicker({
firstDay: 1
});
});
</script>

<style>
.ui-widget {
font-size: 1.5em;
font-style: italic;
}
</style>
</head>

<body>
Fecha:
<div id="datepicker"></div>
</body>
</html>