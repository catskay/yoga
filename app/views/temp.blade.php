
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
     <select id='optgroupp' multiple='multiple' class="searchable" name="searchable[]">
      <optgroup label='Section 1'>
        <option value='1'>Method 1</option>
        <option value='2' >Method 2</option>
        <option value='5' >Method 3</option>
      </optgroup>
      <optgroup label='Section 2'>
        <option value='3'>Method 1</option>
        <option value='4' disabled>Method 2</option>
      </optgroup>
    </select>
  </div>
</div>

<script src="js/jquery.js" type="text/javascript"></script>
<script src="js/bootstrap.js" type="text/javascript"></script>
<script src="js/jquery.multi-select.js" type="text/javascript"></script>
<script src="js/application.js" type="text/javascript"></script> 
<script src="js/jquery.tinysort.js" type="text/javascript"></script>
<script src="js/jquery.quicksearch.js" type="text/javascript"></script>

</html>
