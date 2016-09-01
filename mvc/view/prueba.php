<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
   
    <title>R</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">

 <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.1/themes/base/jquery-ui.css" />
 <link href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet">
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="http://code.jquery.com/ui/1.10.1/jquery-ui.js"></script>


</head>

<script>
$(function () {
$.datepicker.setDefaults($.datepicker.regional["es"]);
$("#datepicker").datepicker({
firstDay: 1,
onSelect: function (date) {
alert("la fecha que escojio es "+date)
},
});
});
</script>
<body>

<p>Date: <input type="text" id="datepicker"></p>
<div  id="datepicker"></div>
</body>
</html>