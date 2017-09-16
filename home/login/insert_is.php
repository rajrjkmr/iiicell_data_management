<html>
<head>
</head>
<body background=l.jpg>
<table><th><button style="width:100px; height: 50px;opacity: 0.5;background-color:black;font-size: 10pt;color: white;border: solid 1px #000;border-radius: 100%;" onclick="window.location.href='home.html'">HOME</button> </th><th> <button style="width:100px; height: 50px;opacity: 0.5;background-color:black;font-size: 10pt;color: white;border: solid 1px #000;border-radius: 100%;" onclick="window.location.href='insert.php'">INSERT</button></th><th><button style="width:100px; height: 50px;opacity: 0.5;background-color:black;font-size: 10pt;color: white;border: solid 1px #000;border-radius: 100%;" onclick="window.location.href='view.php'">VIEW</button></th><th>                                          <button style="width:100px; height: 50px;opacity: 0.5;background-color:black;font-size: 10pt;color: white;border: solid 1px #000;border-radius: 100%;" onclick="window.location.href='viewall.php'">VIEW ALL</button></th><th>                       <button style="width:100px; height: 50px;opacity: 0.5;background-color:black;font-size: 10pt;color: white;border: solid 1px #000;border-radius: 100%;" onclick="window.location.href='logout.php'">LOGOUT</button></th></table>


<link rel="stylesheet" href="rose.css">
<div class="form-style-3"><center>
<p style="font-size:20pt;color:blue;"> <b>INDERNSHIP</b></P></center>
<form action="upload_is.php " method="get">
<fieldset><legend>Personal</legend>
<label for="field1"><span>Name Of Company: <span class="required"></span></span><input type="text" class="input-field" name="company_name" value="" /></label>
<label for="field1"><span>Project Name: <span class="required"></span></span><input type="text" class="input-field" name="project_name" value="" /></label>
<label for="field1"><span>Address: <span class="required"></span></span><textarea  name="address"></textarea></label>
<label for="field2"><span>Email: <span class="required"></span></span><input type="email" class="input-field" name="email" value="" /></label>
<label for="field3"><span>Phone:<span class="required"></span></span><input type="number" class="input-field" name="phone" value="" /></label>
<label for="field1"><span>Training Attended By: <span class="required"></span></span><input type="text" class="input-field" name="attended_by" value="" /></label>
<label for="field1"><span>Date:<span class="required"></span></label><br><br>
<label for="field1"><span>From:<br><span class="required"></span></span><input type="date" class="input-field" name="from_date" value="" /></label><br>
<label for="field1"><span>To:<span class="required"></span></span><input type="date" class="input-field" name="to_date" value="" /></label>
</fieldset>
<fieldset><legend>Message</legend>
<label for="field6"><span>Message <span class="required"></span></span><textarea name="message" class="textarea-field"></textarea></label>
<label><span>&nbsp;</span><input type="submit" value="Submit" /></label>
</fieldset>
</form>
</div>

</body>
</html>
