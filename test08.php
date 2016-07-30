<?php
	if(isset($_GET['sub'])){
		$num1=$_GET['num1'];
		$num2=$_GET['num2'];
		
		if(is_numeric($num1) && is_numeric($num2)){
			
		}
		$ysf=$_GET['ysf'];
		$sum=0;
		switch($ysf){
			case '+' :
				$sum=$num1+$sum2;
				break;
			case '-' :
				$sum=$num1-$num2;
				break;
			case '*' :
				$sum=$num1*$num2;
				break;
			case '/' :
				$sum=$num1 / $num2;
				break;
			case '%' :
				$sum=$num1 % $num2;
			default:
				echo "输入运算符非法";
				break;
				
		}
	}

?>
<meta charset="UTF-8">
<form action='test08.php' method="get">
 <table width ='500' border = '1' align = 'center'>;
	<caption><h1>计算器</h1></caption>
		<tr>
		<td><input type="text" name="num1" value=<?php echo $_GET['num1']?$_GET['num1']:""?>></td>
			
			<td>
				<select name="ysf">
					<option value="+"  <?php if($_GET['ysf']=='+') echo 'selected';?>>+</option>
					<option value="-"  <?php if($_GET['ysf']=='-') echo 'selected';?>>-</option>
					<option value="*"  <?php if($_GET['ysf']=='*') echo 'selected';?>>×</option>
					<option value="/"  <?php if($_GET['ysf']=='/') echo 'selected';?>>/</option>
					<option value="%"  <?php if($_GET['ysf']=='%') echo 'selected';?>>%</option>
				</select>
			</td>
			<td><input type="text" name="num2" value=<?php echo $_GET['num2']?$_GET['num2']:""?>></td>
			<td><input type="submit" name="sub" value="计算"></td>
		</tr>
		<?php
			if(isset($_GET['sub'])){
				echo "<tr>";
						echo "<td colspan='4'>"."结果为:".$num1." ".$ysf." ".$num2." = ".$sum."</td>";
				echo "</tr>";
			}
		
		
		
		
		?>
		
		
		
		
		
		
	</table>
 </form>
