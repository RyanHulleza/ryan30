<html>
<head>
<link rel="stylesheet" href="design_Login.css">
</head>
<body>
<Table class="loginPosition">
<td><ul>
  <li><a href="default.asp">Home</a></li>
  <li style="float:right; border-left:1px solid white;"><a href="ss.sss">About</a></li>
</ul>
</Table>

<Table class="regPosition" align="center">
<h1 align="center">Registration Form (Old Student)</h1>
<tr>
<td><h2 align="left">Student Information:</h2></td>
<tr>
<form action="insert2.php" method="post" class="regForm">
<td>Firstname<br><input type="text" name="FirstName" class="tname" required></td>
<td>Middlename<br><input type="text" name="MiddleName" class="tname" required></td>
<td>Lastname<br><input type="text" name="LastName" class="tname" required></td>
<tr>
<td>Age<br><input type="text" name="Age" size="5" class="tage" required></td>
<td><label for="birthday">Birthday</label><br>
<input type="date" id="birthday" name="Birthday" class="bday" required>
</td>
<td><label for="Gender">Gender</label>
<br>
<select name="Gender" id="gender" class="bday" required>
<option value="" selected hidden>Please Select</option>
<option value="Male">Male</option>
<option value="Female">Female</option>
<tr>
<td>Email Address<br><input type="text" name="email" class="tname" required></td>
<td>Home Address<br><input type="text" name="Address" size="35" class="tname" required></td>
<td>LRN (Learner Refrence Number)<br><input type="text" name="LRN" size="15" class="tname" required></td>
<tr>
<td><h2 align="left">Grade Level Information:</h2></td>
<tr>
<td>Previous Section<br><input type="text" name="PreviousSection" size="35" class="tname" required></td>
<td><label for="GradeLevel">Previous Grade Level</label>
<br>
<select name="PreviousGradeLevel" id="GradeLevel" class="bday" required>
<option value="" selected hidden>Please Select</option>
<option value="grade1">Grade 1</option>
<option value="grade2">Grade 2</option>
<option value="grade3">Grade 3</option>
<option value="grade4">Grade 4</option>
<option value="grade5">Grade 5</option>
<option value="grade6">Grade 6</option>
</select>
</td>
<td>Previous School Year S.Y<br><input type="text" name="PreviousSchoolYear" size="35" class="tname" required></td>
<tr>
<tr>
<td><h2 align="left">Emergency Contact:</h2></td>
<tr>
<td>Name of Guardian<br><input type="text" name="Guardian" size="15" class="tname" required></td>
<td>Contact Number<br><input type="text" name="ContactNumber" size="15" class="tname" required></td>
<td>Relationship to Student<br><input type="text" name="Relationship" size="15" class="tname" required></td>
<tr>
<tr>
<td colspan="3"><input type="submit" class="subbutton"></td>
</table>


</body>
</html> 