<?php
session_start();
 $test=$_SESSION['myValue'];

?>
<html>
<head>
</head>
<body background=l.jpg>
<table><th><button style="width:100px; height: 50px;opacity: 0.5;background-color:black;font-size: 10pt;color: white;border: solid 1px #000;border-radius: 100%;" onclick="window.location.href='home.html'">HOME</button> </th><th> <button style="width:100px; height: 50px;opacity: 0.5;background-color:black;font-size: 10pt;color: white;border: solid 1px #000;border-radius: 100%;" onclick="window.location.href='insert.php'">INSERT</button></th><th><button style="width:100px; height: 50px;opacity: 0.5;background-color:black;font-size: 10pt;color: white;border: solid 1px #000;border-radius: 100%;" onclick="window.location.href='view.php'">VIEW</button></th><th>                                          <button style="width:100px; height: 50px;opacity: 0.5;background-color:black;font-size: 10pt;color: white;border: solid 1px #000;border-radius: 100%;" onclick="window.location.href='viewall.php'">VIEW ALL</button></th><th>                       <button style="width:100px; height: 50px;opacity: 0.5;background-color:black;font-size: 10pt;color: white;border: solid 1px #000;border-radius: 100%;" onclick="window.location.href='logout.php'">LOGOUT</button></th></table>


<link rel="stylesheet" href="rose.css">
<div class="form-style-3"><center>
<p style="font-size:20pt;color:blue;"> <b>INPLANT TRAINING</b></P></center>
<form action="upload_implant.php " method="get">

<label for="field1"><span>NAME OF COMPANY: <span class="required"></span></span><input type="text" class="input-field" name="company_name" value="" /></label>
<label for="field1"><span>ADDRESS: <span class="required"></span></span><textarea name="address"></textarea></label>
<label for="field2"><span>EMAIL: <span class="required"></span></span><input type="email" class="input-field" name="email" value="" /></label>
<label for="field3"><span>PHONE:<span class="required"></span></span><input type="text" class="input-field" name="phone" value="" /></label>
<label for="field1"><span>TRAINING ATTENDED BY: <span class="required"></span></span><input type="text" class="input-field" name="attend_by" value="" /></label>
<label for="field1"><span>DATE:<span class="required"></span></span></label><br><br><br>
<label for="field1"><span>From:<span class="required"></span></span><br>
<input type="date" class="input-field" name="from_date" /></label>
<label for="field1"><span>To:<span class="required"></span></span><input type="date" class="input-field" name="to_date"  /></label>
</fieldset>
<fieldset><legend>MESSAGE</legend>
<label for="field6"><span>MESSAGE <span class="required"></span></span><textarea name="message" class="textarea-field"></textarea></label>
<label><span>&nbsp;</span><input type="submit" value="Submit" /></label>
</fieldset>
</form>
</div>

</body>
</html>
<input type="text" class="input-field" name="address" value="" />
