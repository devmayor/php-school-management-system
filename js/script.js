$(document).ready(function(){
	$("#menubar li").hover(function(){
		$(this).children(":hidden").slideDown();
	},function(){
		$(this).parent().find("ul").slideUp();
	
	});
	

	$("#buttonadmin").click(function(){
		$('#adminlogin').slideToggle();
	
	});
	$("#buttonteacher").click(function(){
		$('#teacherlogin').slideToggle();
	
	});



	$("#click_admin").click(function(){
		$('#adminlogin').slideToggle();
		
	});
	
	$("#click_teacher").click(function(){
		$('#teacherlogin').slideToggle();
		
	});
	});
