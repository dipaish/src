<!DOCTYPE html>
<html>
	<head>
		<title>Javascript Form Validation</title>
		<script src="validation.js"></script>
	</head>
	<body>
	<div class="container">
	<h1>Form Validation</h1>
				<form name="form1" action="#" method="get" onsubmit="return checkAll()">
				First Name <input type="text" id="firstName" name="firstName" onblur="checkFname()">
								<span id="fn" class="display-block"></span>	 <br>	<br>					
							
				Last Name <input type="text" id="lastName" name="name" onblur="checklname()">
								<span id="ln" class="display-block"></span>	<br>	<br>			
						
					
						
					Upload <input type="file" id="valFile" name="valFile"  onchange="validate_fileupload(this.value);">
								<span id="fileMsg" class="display-block"></span>						
							<br>	<br>
					 <input type="submit" value="Save Data">					
						
	</div>
	</body>
</html>