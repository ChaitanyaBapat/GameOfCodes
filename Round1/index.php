<!DOCTYPE html>
<html>
<head>
	<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
	<title>Game Of Codes - Round 1</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="../css/styles.css">
</head>
<body class="container">

	<div class="header-container">
		<div class="header">
			<div class="website-title">Game Of Codes</div>
		</div>
	</div>

	<div class="rest-of-the-body">
		<div class="question">
			<pre style='color:#000000;background-color: #FAFAFA'>n <span style='color:#808030; '>=</span> <span style='color:#400000; '>int</span><span style='color:#808030; '>(</span><span style='color:#400000; '>input</span><span style='color:#808030; '>(</span><span style='color:#0000e6; '>"Enter length : "</span><span style='color:#808030; '>)</span><span style='color:#808030; '>)</span>
			<span style='color:#800000; font-weight:bold; '>if</span> n <span style='color:#44aadd; '>==</span> <span style='color:#008c00; '>1</span><span style='color:#808030; '>:</span>
				<span style='color:#800000; font-weight:bold; '>print</span> <span style='color:#808030; '>(</span><span style='color:#400000; '>str</span><span style='color:#808030; '>(</span><span style='color:#008c00; '>0</span><span style='color:#808030; '>)</span><span style='color:#808030; '>)</span>
			<span style='color:#800000; font-weight:bold; '>elif</span> n <span style='color:#44aadd; '>></span> <span style='color:#008c00; '>1</span><span style='color:#808030; '>:</span>
				i <span style='color:#808030; '>=</span> <span style='color:#008c00; '>0</span>
				a <span style='color:#808030; '>=</span> <span style='color:#008c00; '>0</span>
				b <span style='color:#808030; '>=</span> <span style='color:#008c00; '>1</span>
				<span style='color:#800000; font-weight:bold; '>print</span> <span style='color:#808030; '>(</span><span style='color:#400000; '>str</span><span style='color:#808030; '>(</span>a<span style='color:#808030; '>)</span> <span style='color:#44aadd; '>+</span> <span style='color:#0000e6; '>" "</span> <span style='color:#44aadd; '>+</span> <span style='color:#400000; '>str</span><span style='color:#808030; '>(</span>b<span style='color:#808030; '>)</span><span style='color:#808030; '>,</span>end<span style='color:#808030; '>=</span><span style='color:#0000e6; '>" "</span><span style='color:#808030; '>)</span>
				<span style='color:#800000; font-weight:bold; '>while</span> i <span style='color:#44aadd; '>&lt;</span> n<span style='color:#808030; '>:</span>
					c <span style='color:#808030; '>=</span> a <span style='color:#44aadd; '>+</span> b
					<span style='color:#800000; font-weight:bold; '>print</span> <span style='color:#808030; '>(</span>c<span style='color:#808030; '>,</span>end<span style='color:#808030; '>=</span><span style='color:#0000e6; '>" "</span><span style='color:#808030; '>)</span>
					a <span style='color:#808030; '>=</span> b
					b <span style='color:#808030; '>=</span> c
					i <span style='color:#44aadd; '>+</span><span style='color:#808030; '>=</span> <span style='color:#008c00; '>1</span>
			</pre>
		</div>

		<div class="answer">
			<form class="form">
				Enter your solution here :<br>
				<textarea rows="5" class="input-from-user"></textarea><br>
				<input type="submit" name="submit" value="Submit" class="submit-btn">
			</form>
		</div>
	</div>
	
</body>
</html>