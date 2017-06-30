function logout(){
alert("You have Successfully Logout");
}
$(document).ready(function(){

						   $("#first").hide();
						   $("#second").hide();
						   $("#third").hide();
						   $("#result").click(function(){
													   $("#first").toggle("1000");
													   $("#second").toggle("1000");
													   $("#third").toggle("1000");
													   $("#first").css("list-style-type","none");
													   $("#second").css("list-style-type","none");
													   $("#third").css("list-style-type","none");
													   })
						   
						   
						   })