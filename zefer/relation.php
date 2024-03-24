<html>
<head>
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body><div id="format">
<h1>Relation:</h1><br />
<form>
Asset ID <input type="text" class="text" />
<input type="button" value="Search" class="button" />
 </form><hr /><br />
 
 <h2>Create Relation</h2>
 <br />
 <form>
 Incident ID: <input type="text" class="text" />
 <select>
	<option value="Duplicate of">Duplicate of</option>
	<option value="Caused due to">Caused due to</option>
	<option value="Parent">Parent</option>
	<option value="Child">Child</option>
	<option value="Related to">Related to</option>
	<option value="Other">Other</option>
</select> 
 <input type="button" value="Relate" class="button" />
 </form>
 <br /><br />
 <form>
 Customer ID: <input type="text" class="text" /> 
 <select>
	<option value="Duplicate of">Duplicate of</option>
	<option value="Caused due to">Caused due to</option>
	<option value="Parent">Parent</option>
	<option value="Child">Child</option>
	<option value="Other">Other</option>
</select>
 <input type="button" value="Relate" class="button" />
 </form>
 <hr /><br />
 <h2>Related To:</h2>
 <table border="1">
 <tr>
 <th>Incedent No.</th>
 <th>Customer ID</th>
 </tr>
 <tr>
 <td></td>
 <td></td>
 </tr>
 </table>
</div>
</body>
</html>