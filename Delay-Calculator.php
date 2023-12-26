<form name="myForm" action="" method="GET">
  Distance(meters): <br>
  <input type="number" name="dist" value=""> <br>
  Tempreature(celsius): <br>
  <input type="number" name="temp" value=""> <br>
  <input type="button" name="button" value="Calculate" onclick="testResults(this.form)">
<input type="reset" value="Reset">
</form>

<script>
function testResults (form) {
    var inputDist = form.dist.value
    var inputTemp = form.temp.value
   var delayTotal = inputDist/(331+(0.61*inputTemp))*1e3;
alert ("Distance in mS: " + delayTotal.toFixed(2));
}
</script>
