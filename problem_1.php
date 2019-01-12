<!DOCTYPE HTML>
<html lang="en-US">
	<head>
		<meta charset="UTF-8">
		<title>php</title>
		<style type="text/css">
			.phpcoding{
				width:900px;
				margin: 0 auto;
				background:#ddd;
				
				min-height:400px;
			}
			.header,.footer{background:#444;color:#fff;text-align:center;padding:20px;}
			.header h2,.footer h2{margin:0;}
			.content{min-height:800px;padding:20px;}
		
		</style>
	</head>
	<body>
		<div class="phpcoding">
			<section class="header">
				<h2>php project</h2>
			
			</section>
			
			<section class="content">
				
				<form action="problem_1.php" method="post" name="problem">
					Input :<input type="text" name="input" />
					<input type="submit" value="submit"/>
				
				
				</form>
				
				
				<?php
				if(isset($_POST['input'])){
					$input=@$_POST['input'];
				
					
					echo "Your Input"."$input"."</br>";
				}
					
					$note = array("500","100","50","20","10","5","2","1");
					
					
					$length = count($note);
					
					
					if(!empty($input)){
						
						
						for($i=0;$i<$length;$i++){
							
							
							$a = floor($input/$note[$i]);
							$input =$input%$note[$i];
							echo "$note[$i]"."=". "$a"."</br>";
							
							
						}
						
						
						
						
						
						
						
					}
					
					
				
					
					
				
					
					
					
					
				?>
				
				
				
			</section>
			
			
			
			<section class="footer">
				<h2>php project</h2>
			
			</section>
		
		</div>
	</body>
</html>