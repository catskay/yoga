
<!DOCTYPE html>
<html>
<head>
  <title>jQuery multiselect</title>
  <link href="css/bootstrap.css" media="screen" rel="stylesheet" type="text/css" />
  <link href="css/multi-select.css" media="screen" rel="stylesheet" type="text/css" />

</head>
<body>

  <div class='container'>
    <div class='hero-multiselect'>
     <select id='optgroup' multiple='multiple'>
      <optgroup label='Friends'>
        <option value='1'>Yoda</option>
        <option value='2' selected>Obiwan</option>
      </optgroup>
      <optgroup label='Enemies'>
        <option value='3'>Palpatine</option>
        <option value='4' disabled>Darth Vader</option>
      </optgroup>
    </select>
  </div>
</div>

<script src="js/jquery.js" type="text/javascript"></script>
<script src="js/bootstrap.js" type="text/javascript"></script>
<script src="js/jquery.multi-select.js" type="text/javascript"></script>
<script src="js/application.js" type="text/javascript"></script> 

</html>
