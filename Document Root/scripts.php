<script>
$("#header_login").click(
	function(){
		if($("#main_login").is(":visible")){
			$("#main_login").hide("slow");
		}
		else{
			$("#main_login").show("slow");		
		}
	}
);

$("#header_project").click(
	function(){
		if($("#header_add_project").is(":visible")){
			$("#header_add_project").hide("slow");
		}
		else{
			$("#header_add_project").show("slow");		
		}
	}
);

$("#register").click(
	function(){
		if($("#main_login_form").is(":visible")){
			$("#main_login_form").hide("slow");
			$("#main_register_form").show("slow");		
		}
		else{
			$("#main_login_form").show("slow");		
			$("#main_register_form").hide("slow");		
		}
	}
);

$("#login").click(
	function(){
		if($("#main_login_form").is(":visible")){
			$("#main_login_form").show("slow");		
			$("#main_register_form").hide("slow");	
		}
		else{
			$("#main_login_form").hide("slow");
			$("#main_register_form").show("slow");		
		}
	}
);
</script>
</body>
</html>