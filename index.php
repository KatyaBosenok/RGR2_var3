<html>
	<head>
		<title>�����������</title>
		<link rel="stylesheet" href="calc.css"/>
	</head>
	<body>
		<?php
			if (isset($_GET['val1'])) {
				$val1 = $_GET['val1'];
			} else {
				$val1 = '';
			}
			if (isset($_GET['val2'])) {
				$val2 = $_GET['val2'];
			} else {
				$val2 = '';
			}
		?>
		<form method="GET" action="index.php">

			<!--
			<input type="submit" name="operation" value="������">
			<input type="submit" name="operation" value="����">
			-->

			<?php echo "x = " ?><input  type="text" 	name="val1" value="<?= htmlspecialchars($val1) ?>" size="10" 
				<?php// if ((!preg_match("/^[0-9]+$/")),$val1) {
				//	echo wefwete;
				//} else {
				//	echo "������� ������������ ��������";}
				?>
			>  
			<?php echo "y = " ?><input  type="text" name="val2" value="<?= htmlspecialchars($val2) ?>" size="10">  <br><br>
			<select name="operation">
			
				<?php
					if ($_GET['operation']) {
						$operation = $_GET['operation'];
					} else {
						$operation = '������';
					}
				?>
				<option value="������" <?php
					if ($operation == '������') {
						echo 'selected';
					} ?>>����� �������(r)</option>
				<option value="����" <?php
					if ($operation == '����') {
						echo 'selected';
					} ?>>�������� ���� �����(p)</option>

			</select>
			<input type="submit" value="���������">
		</form>
			
		<?php
			// http://localhost/index.php?val1=11&val2=22&operation=*
			if (isset($_GET['operation']) && $val1 != '' && $val2 != '') {
				if (!(INT)($val1) || $val1<=0  || !(INT)($val2) || $val2<=0  ) {
					echo "������ ������� �������!";
				}
				else {
					switch ($_GET['operation']) {
						case "������":
							$result = sqrt($val1*$val1 + $val2*$val2);
							echo "<b>������ �������(r) = </b>";
							echo (number_format($result, 2, ',' ,  ' '));	
						break;
						case "����":
							if ($val1<0 and $val2>=0){
								$result=pi()+atan($val2/$val1) ;
							} else if ($val1<0 and $val2<0) {
								$result=-(pi())+atan($val2/$val1);
							} else if ($val1==0 and $val2>0) {
								$result=pi()/2;
							} else if ($val1==0 and $val2<0) {
								$result=-pi()/2;
							} elseif ($val1>0)  {
								$result=atan($val2/$val1) ;
							}
							echo '<b> �������� ���� �����(p) = </b>';
							echo (number_format($result, 2, ',' ,  ' '));	
						break;			
						default:
							$result = '����������� ��������';
					}
				}
			}
		?>
<p ><img width="300" height="300"  src="1111.jpg " /> </p>
	</body>
</html>