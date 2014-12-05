
<!DOCTYPE html>
<html lang=en>
<head>
    <title>Bootbox.js&mdash;alert, confirm and flexible modal dialogs for the Bootstrap framework</title>


    <!-- CSS dependencies -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />

              <div class=col-md-2>
                  <!-- <p><a href="#" data-bb="alert" class="bb-trigger btn btn-primary btn-lg btn-block">Run example</a></p> -->
              	<button type="button" onclick="hello()">press</button>
              </div>
 

<script>
function hello() {
  bootbox.alert("hello ");
}
</script>

    <!-- JS dependencies -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>


    <!-- bootbox code -->
    <script src="js/bootbox.js"></script>

    <!-- put all demo code in one place -->
</body>
</html>
