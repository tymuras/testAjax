<script id="idForm"  src="jquery.js"></script>
<form method="get" action="page.html">
    <input type="hidden" name="field1" value="value1" />
    <input type="hidden" name="field2" value="value2" />
    <select name="status">
         <option value=""></option>
         <option value="good">Good</option>
         <option value="bad">Bad</option>
    </select>
	 <input id="submitButtonId" type="button" name="field2" value="Go" />
</form>

<script>

$(document).ready(function() {
	// this is the id of the submit button
	$("#submitButtonId").click(function() {

		var url = "ajax.php"; // the script where you handle the form input.

		$.ajax({
			   type: "POST",
			   url: url,
			   data: $("#idForm").serialize(), // serializes the form's elements.
			   'dataType': 'json',
			   success: function(data)
			   {
				   console.debug(data['HTTP_HOST']);
			   }
			 });

		return false; // avoid to execute the actual submit of the form.
	});
});
	
</script>