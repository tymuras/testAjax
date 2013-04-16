<script type="text/javascript" src="jquery.js"></script>
<form id="test_form" method="get" action="page.html">
    <input type="hidden" name="field1" value="value1" />
    <input type="hidden" name="field2" value="value2" />
    <select name="status">
         <option value=""></option>
         <option value="good">Good</option>
         <option value="bad">Bad</option>
    </select>
	 <input id="submitButtonId" type="button" name="field2" value="Go" />
</form>
<a href="http://www.w3schools.com/">Visit W3Schools</a>
<script>
	
function callAjax(ajax_url, post_data, callback)
{
    $.ajax
    (
        {
            type: "POST",
            url: ajax_url,
            data: post_data,
            dataType: "json",
            async: true,
            cache:false,
            success: callback
        }
    );
}
 
// succes method
 function successMethod(data){ console.debug(data)}
	

$(document).ready(function() {
	// this is the id of the submit button
	$("#submitButtonId").click(function() {	
		
		var post_data = {"title": "exampliukas","geras":"vardas"}
		var post_data = $('#test_form').serialize();
		callAjax('ajax.php',post_data, successMethod);	
		return;
	});
});
	
</script>