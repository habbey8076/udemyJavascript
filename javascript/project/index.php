<!DOCTYPE html>

	<head>
	
			<title> jQuery </title>
			
			<script type="text/javascript" src="jquery-3.4.1.min.js"></script>
			<style type="text/css">
			
				
		#circle{
		
				background-color:green;
				height: 150px;
				width: 150px;
				border-radius: 50%;
				
			 }
			 
		 .square{
		
				background-color:red;
				height: 150px;
				width: 150px;	
				margin: 15px;
			 }
		
		
			</style>
		
	</head>
	
		
	<body>
	
	
			<div id="circle"> </div>
			<div class="square"> </div>
			<div class="square"> </div>
			 
			<script type="text/javascript">
			
				$("div").click(function(){
				
					$(this).fadeOut("slow", function() {
					
						alert("Fadeout has Finished");
					
					});
					
					//$(this).hide();
					
					
					});
				
			
			</script>
				
	</body>

</html>
