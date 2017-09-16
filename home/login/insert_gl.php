<!DOCTYPE html>
<html>
<head>
</head>
<body background="l.jpg"><table><th><button style="width:100px; height: 50px;opacity: 0.5;background-color:black;font-size: 10pt;color: white;border: solid 1px #000;border-radius: 100%;" onclick="window.location.href='home.html'">HOME</button> </th><th> <button style="width:100px; height: 50px;opacity: 0.5;background-color:black;font-size: 10pt;color: white;border: solid 1px #000;border-radius: 100%;" onclick="window.location.href='insert.php'">INSERT</button></th><th><button style="width:100px; height: 50px;opacity: 0.5;background-color:black;font-size: 10pt;color: white;border: solid 1px #000;border-radius: 100%;" onclick="window.location.href='view.php'">VIEW</button></th><th>                                          <button style="width:100px; height: 50px;opacity: 0.5;background-color:black;font-size: 10pt;color: white;border: solid 1px #000;border-radius: 100%;" onclick="window.location.href='viewall.php'">VIEW ALL</button></th><th>                       <button style="width:100px; height: 50px;opacity: 0.5;background-color:black;font-size: 10pt;color: white;border: solid 1px #000;border-radius: 100%;" onclick="window.location.href='logout.php'">LOGOUT</button></th></table>


<link rel="stylesheet" href="rose.css">
<div class="form-style-3"><center>
<p style="font-size:30pt;color:pink;font-family=Regular;"> <b>GUEST LECTURE </b></P></center>
<form action="upload_gl.php " method="get">
<center><fieldset>
<label ><span>Name Of Person: <span class="required"></span></span><input type="text" class="input-field" name="person_name" value="" /></label>
<label for="field1"><span>College (or) Company: <span class="required"></span></span><input type="text" class="input-field" name="cname" value="" /></label>
<label for="field1"><span>Designation: <span class="required"></span></span><input type="text" class="input-field" name="designation_name" value="" /></label>
<label for="field1"><span>Topics: <span class="required"></span></span><input type="text" class="input-field" name="topic" value="" /></label>
<label for="field1"><span>Target Attended: <span class="required"></span></span><input type="text" class="input-field" name="target_attended" value="" /></label>
<label for="field2"><span>Email: <span class="required"></span></span><input type="email" class="input-field" name="email" value="" /></label>
<label for="field1"><span>Phone:<span class="required"></span></span><input type="number" class="input-field" name="phone" value="" /></label>

<label for="field1"><span>Date:<span class="required"></span></span><input type="date" class="input-field" name="date" value="" /></label>
</fieldset>
<fieldset><legend>Message</legend>
<label for="field6"><span>Message <span class="required"></span></span><textarea name="message" class="textarea-field"></textarea></label>
<label><span>&nbsp;</span><input type="submit" value="Submit" /></label>
</fieldset></center>
</form>
</div>

</body>
</html>
