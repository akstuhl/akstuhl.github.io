<?php
	include('config.php');
?>

<html>
<head>
	<title>Survey</title>
	<link rel="stylesheet" href="http://akstuhl.net/survey/style.css" type="text/css">
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" ></script>
</head>
<body>
	<form id="survey" name="survey" action="http://www.mturk.com/mturk/externalSubmit" method="post">
	
		<input type="hidden" name="assignmentId" value="<?php echo $_GET[assignmentId]; ?>">
		
		<input type="hidden" name="timestamp" id="timestamp" value="">
		
	<div id="page0">
	
<?php if($_GET[assignmentId] == ASSIGNMENT_ID_NOT_AVAILABLE) { ?>
		<p>Note: you have not accepted the HIT yet. Please accept the HIT before recording your answers.</p>
<?php } ?>

		<p>These questions are about imagining sounds.</p>
		
		<p>There are 3 pages in the survey. For each one, read and follow its
instructions and then answer its questions. Only fully completed surveys (all pages filled and all audio files played) will be accepted.</p>

		<p>The third page involves listening to sound recordings and requires headphones.</p>

		<button type="button" id="p1">Next</button>
		<script> $("#p1").click(function(){
			$("#page0").hide();
			$("#page1").show();
			var sDate = new Date();
			var sDateSeconds = Math.floor(sDate.getTime()/1000);
			document.getElementById("timestamp").value = sDateSeconds;
		}); </script>		
	
	</div>

	<div id="page1">
	
		<h3>Page 1 of 3</h3>
		
		<p>Please fill out the following information:<br />
		Sex: <input type="text" name="sex" maxlength="10"><br />
		Age: <input type="text" name="age" maxlength="3"><br />
		How many years of formal private instrumental or voice lessons have you had? <input type="text" name="yearsMusicInstruction" maxlength="3"><br />
		How many additional years of other musical experience (ensemble participation, self-taught, composing, etc.) have you had? <input type="text" name="addMusicExp" maxlength="3"><br />
		Occupation: <input type="text" name="occupation" maxlength="100"></p>
		
		<hr />
		
		<p>The following scale is designed to measure auditory imagery, or the way in which you "think about sounds in your head."  For the following items you are asked to do the following:</p>
		
		<p>Read the item and consider whether you think of an image of the described sound in your head.  Then rate the vividness of your image using the following "Vividness Rating Scale." If no image is generated, give a rating of 1.</p>
		
		<p>Please feel free to use all of the levels in the scale when selecting your ratings.</p>
		
		<div class="scale">
		<p>Vividness Rating Scale:</p>
		<table border=0>
			<tr>
				<td>1</td><td>2</td><td>3</td><td>4</td><td>5</td><td>6</td><td>7</td>
			</tr>
			<tr>
				<td>No Image<br />Present At All</td><td></td><td></td><td>Fairly Vivid</td><td></td><td></td><td>As Vivid As<br />Actual Sound</td>
			</tr>
		</table>
		</div>
		
		<table border=0>
			<tr>
				<td></td><td>Vividness<br />Rating</td>
			</tr>
			<tr>
				<td>1. For the first item, consider the beginning of the song "Happy Birthday."</td><td></td>
			</tr>
			<tr>
				<td class="prompt">The sound of a trumpet beginning the piece.</td>
				<td><select name="question1_1"><option value="0">-</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option></select></td>
			</tr>
			<tr>
				<td>2. For the next item, consider ordering something over the phone.</td><td></td>
			</tr>
			<tr>
				<td class="prompt">The voice of an elderly clerk assisting you.</td>
				<td><select name="question1_2"><option value="0">-</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option></select></td>
			</tr>
			<tr>
				<td>3. For the next item, consider being at the beach.</td><td></td>
			</tr>
			<tr>
				<td class="prompt">The sound of the waves crashing against nearby rocks.</td>
				<td><select name="question1_3"><option value="0">-</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option></select></td>
			</tr>
			<tr>
				<td>4. For the next item, consider going to a dentist appointment.</td><td></td>
			</tr>
			<tr>
				<td class="prompt">The loud sound of the dentist's drill.</td>
				<td><select name="question1_4"><option value="0">-</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option></select></td>
			</tr>
			<tr>
				<td>5. For the next item, consider being present at a jazz club.</td><td></td>
			</tr>
			<tr>
				<td class="prompt">The sound of a saxophone solo.</td>
				<td><select name="question1_5"><option value="0">-</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option></select></td>
			</tr>
			<tr>
				<td>6. For the next item, consider being at a live baseball game.</td><td></td>
			</tr>
			<tr>
				<td class="prompt">The cheer of the crowd as a player hits the ball.</td>
				<td><select name="question1_6"><option value="0">-</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option></select></td>
			</tr>
			<tr>
				<td>7. For the next item, consider attending a choir rehearsal.</td><td></td>
			</tr>
			<tr>
				<td class="prompt">The sound of an all-children's choir singing the first verse of a song.</td>
				<td><select name="question1_7"><option value="0">-</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option></select></td>
			</tr>
			<tr>
				<td>8. For the next item, consider attending an orchestral performance of Beethoven's Fifth.</td><td></td>
			</tr>
			<tr>
				<td class="prompt">The sound of the ensemble playing.</td>
				<td><select name="question1_8"><option value="0">-</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option></select></td>
			</tr>
			<tr>
				<td>9. For the next item, consider listening to a rain storm.</td><td></td>
			</tr>
			<tr>
				<td class="prompt">The sound of gentle rain.</td>
				<td><select name="question1_9"><option value="0">-</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option></select></td>
			</tr>
			<tr>
				<td>10. For the next item, consider attending classes.</td><td></td>
			</tr>
			<tr>
				<td class="prompt">The slow-paced voice of your English teacher.</td>
				<td><select name="question1_10"><option value="0">-</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option></select></td>
			</tr>
			<tr>
				<td>11. For the next item, consider seeing a live opera performance.</td><td></td>
			</tr>
			<tr>
				<td class="prompt">The voice of an opera singer in the middle of a verse.</td>
				<td><select name="question1_11"><option value="0">-</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option></select></td>
			</tr>
			<tr>
				<td>12. For the next item, consider attending a new tap-dance performance.</td><td></td>
			</tr>
			<tr>
				<td class="prompt">The sound of tap-shoes on the stage.</td>
				<td><select name="question1_12"><option value="0">-</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option></select></td>
			</tr>
			</tr>
			<tr>
				<td>13. For the next item, consider a kindergarten class.</td><td></td>
			</tr>
			<tr>
				<td class="prompt">The voice of the teacher reading a story to the children.</td>
				<td><select name="question1_13"><option value="0">-</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option></select></td>
			</tr>			</tr>
			<tr>
				<td>14. For the next item, consider driving in a car.</td><td></td>
			</tr>
			<tr>
				<td class="prompt">The sound of an upbeat rock song on the radio.</td>
				<td><select name="question1_14"><option value="0">-</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option></select></td>
			</tr>		
		</table>

		<button type="button" id="p2">Next Page</button>
		<script> $("#p2").click(function(){
			$("#page1").hide();
			$("#page2").show();
		}); </script>

	</div>
	
	<div id="page2">
				
		<h3>Page 2 of 3</h3>
		
		<p>The following scale is designed to measure auditory imagery, or the way in which you "think about sounds in your head."  For the following pairs of items you are asked to do the following:</p>
		
		<p>Read the first item (marked "a") and consider whether you think of an image of the described sound in your head.  Then read the second item (marked "b") and consider how easily you could change your image of the first sound to that of the second sound and hold this image.  Rate how easily you could make this change using the "Ease of Change Rating Scale."  If no images are generated, give a rating of 1.</p>
		
		<p>Please read "a" first and "b" second for each pair.  It may be necessary to cover up "b" so that you focus first on "a" for each pair.</p>
		
		<p>Please feel free to use all of the levels in each scale when selecting your ratings.</p>
		
		<div class="scale">
		<p>Ease of Change Rating Scale:</p>
		<table border=0>
			<tr>
				<td>1</td><td>2</td><td>3</td><td>4</td><td>5</td><td>6</td><td>7</td>
			</tr>
			<tr>
				<td>No Image<br />Present At All</td><td></td><td></td><td>Could Change<br />The Image,<br />But With Effort</td><td></td><td></td><td>Extremely Easy<br />To Change<br />The Image</td>
			</tr>
		</table>
		</div>		

		<table border=0>
			<tr>
				<td></td><td>Change Rating</td>
			</tr>
			<tr>
				<td>1. For the first pair, consider attending a choir rehearsal.</td><td></td>
			</tr>
			<tr>
				<td class="prompt">a. The sound of an all-children's choir singing the first verse of a song.<br />b. An all-adults' choir now sings the second verse of the song.</td>
				<td><select name="question2_1"><option value="0">-</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option></select></td>
			</tr>
			<tr>
				<td>2. For the next pair, consider being present at a jazz club.</td><td></td>
			</tr>
			<tr>
				<td class="prompt">a. The sound of a saxophone solo.<br />b. The saxophone is now accompanied by a piano.</td>
				<td><select name="question2_2"><option value="0">-</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option></select></td>
			</tr>
			<tr>
				<td>3. For the next pair, consider listening to a rain storm.</td><td></td>
			</tr>
			<tr>
				<td class="prompt">a. The sound of gentle rain.<br />b. The gentle rain turns into a violent thunderstorm.</td>
				<td><select name="question2_3"><option value="0">-</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option></select></td>
			</tr>
			<tr>
				<td>4. For the next pair, consider driving in a car.</td><td></td>
			</tr>
			<tr>
				<td class="prompt">a. The sound of an upbeat rock song on the radio.<br />b. The song is now masked by the sound of the car coming to a screeching halt.</td>
				<td><select name="question2_4"><option value="0">-</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option></select></td>
			</tr>
			<tr>
				<td>5. For the next pair, consider ordering something over the phone.</td><td></td>
			</tr>
			<tr>
				<td class="prompt">a. The voice of an elderly clerk assisting you.<br />b. The elderly clerk leaves and the voice of a younger clerk is now on the line.</td>
				<td><select name="question2_5"><option value="0">-</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option></select></td>
			</tr>
			<tr>
				<td>6. For the next pair, consider seeing a live opera performance.</td><td></td>
			</tr>
			<tr>
				<td class="prompt">a. The voice of an opera singer in the middle of a verse.<br />b. The opera singer now reaches the end of the piece and holds the final note.</td>
				<td><select name="question2_6"><option value="0">-</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option></select></td>
			</tr>
			<tr>
				<td>7. For the next pair, consider going to a dentist appointment.</td><td></td>
			</tr>
			<tr>
				<td class="prompt">a. The loud sound of the dentist's drill.<br />b. The drill stops and you can now hear the soothing voice of the receptionist.</td>
				<td><select name="question2_7"><option value="0">-</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option></select></td>
			</tr>
			<tr>
				<td>8. For the next pair, consider the beginning of the song "Happy Birthday."</td><td></td>
			</tr>
			<tr>
				<td class="prompt">a. The sound of a trumpet beginning the piece.<br />b. The trumpet stops and a violin continues the piece.</td>
				<td><select name="question2_8"><option value="0">-</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option></select></td>
			</tr>
			<tr>
				<td>9. For the next pair, consider attending an orchestral performance of Beethoven's Fifth.</td><td></td>
			</tr>
			<tr>
				<td class="prompt">a. The sound of the ensemble playing.<br />b. The ensemble stops but the sound of a piano solo is present.</td>
				<td><select name="question2_9"><option value="0">-</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option></select></td>
			</tr>
			<tr>
				<td>10. For the next pair, consider attending a new tap-dance performance.</td><td></td>
			</tr>
			<tr>
				<td class="prompt">a. The sound of tap-shoes on the stage.<br />b. The sound of the shoes speeds up and gets louder.	</td>
				<td><select name="question2_10"><option value="0">-</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option></select></td>
			</tr>
			<tr>
				<td>11. For the next pair, consider being at a live baseball game.</td><td></td>
			</tr>
			<tr>
				<td class="prompt">a. The cheer of the crowd as a player hits the ball.<br />b. Now the crowd boos as the fielder catches the ball.</td>
				<td><select name="question2_11"><option value="0">-</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option></select></td>
			</tr>
			<tr>
				<td>12. For the next pair, consider a kindergarten class.</td><td></td>
			</tr>
			<tr>
				<td class="prompt">a. The voice of the teacher reading a story to the children.<br />b. The teacher stops reading for a minute to talk to another teacher.</td>
				<td><select name="question2_12"><option value="0">-</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option></select></td>
			</tr>
			</tr>
			<tr>
				<td>13. For the next pair, consider attending classes.</td><td></td>
			</tr>
			<tr>
				<td class="prompt">a. The slow-paced voice of your English teacher.<br />b. The pace of the teacher's voice gets faster at the end of class.</td>
				<td><select name="question2_13"><option value="0">-</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option></select></td>
			</tr>			</tr>
			<tr>
				<td>14. For the next pair, consider being at the beach.</td><td></td>
			</tr>
			<tr>
				<td class="prompt">a. The sound of the waves crashing against nearby rocks.<br />b. The waves are now drowned out by the loud sound of a boat's horn out at sea.</td>
				<td><select name="question2_14"><option value="0">-</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option></select></td>
			</tr>		
		</table>

		<button type="button" id="p3">Next Page</button>
		<script> $("#p3").click(function(){
			$("#page2").hide();
			$("#page3").show();
		}); </script>			
	</div>

	<div id="page3">
	
		<h3>Page 3 of 3</h3>

		<p>Please use headphones while completing this part of the survey and play every audio file to completion. Some of the audio files are silent.</p> 
		
		<hr />
		
		<p>Please listen to each of the three sound files below. For each sound, indicate which of the adjectives listed accurately describe the sound by checking the adjacent boxes. You may check no boxes or multiple boxes for any of the sounds.</p>

<?php
	$preOrder = range(1, 3);
	shuffle($preOrder);
?>

		<input type="hidden" name="preOrder" value="<?php foreach($preOrder as $item) echo $item . ", "; ?>">
		
		<input type="hidden" name="orderPresented" value="<?php foreach($order as $item) echo $item . ", "; ?>">

<?php
	foreach($preOrder as $item) {
		if ($item == 1) {
?>
		<p>
		<audio id="audioPre1" controls="controls" preload="auto">
			<source src="http://akstuhl.net/survey/2B.mp3" type="audio/wav">
			[your browser does not support HTML5 audio]
		</audio></p>
		<input type="hidden" name="playedAudioPre1" value="false">
		<table>
			<tr>
				<td>Loud</td><td>Quiet</td><td>Artificial</td><td>Natural</td><td>Simple</td><td>Complex</td>
			</tr>
			<tr>
				<td><input type="checkbox" name="question3_i_loud" value="loud"></td>
				<td><input type="checkbox" name="question3_i_quiet" value="quiet"></td>
				<td><input type="checkbox" name="question3_i_artif" value="artificial"></td>
				<td><input type="checkbox" name="question3_i_natural" value="natural"></td>
				<td><input type="checkbox" name="question3_i_simple" value="simple"></td>
				<td><input type="checkbox" name="question3_i_complex" value="complex"></td>
			</tr>
		</table>
		<br />
<?php
		}
		else if ($item == 2) {
?>
		<p>
		<audio id="audioPre2" controls="controls" preload="auto">
			<source src="http://akstuhl.net/survey/4B.mp3" type="audio/wav">
			[your browser does not support HTML5 audio]
		</audio></p>
		<input type="hidden" name="playedAudioPre2" value="false">
		<table>
			<tr>
				<td>Loud</td><td>Quiet</td><td>Artificial</td><td>Natural</td><td>Simple</td><td>Complex</td>
			</tr>
			<tr>
				<td><input type="checkbox" name="question3_ii_loud" value="loud"></td>
				<td><input type="checkbox" name="question3_ii_quiet" value="quiet"></td>
				<td><input type="checkbox" name="question3_ii_artif" value="artificial"></td>
				<td><input type="checkbox" name="question3_ii_natural" value="natural"></td>
				<td><input type="checkbox" name="question3_ii_simple" value="simple"></td>
				<td><input type="checkbox" name="question3_ii_complex" value="complex"></td>
			</tr>
		</table>
		<br />
<?php
		}
		else if ($item == 3) {
?>
		<p>
		<audio id="audioPre3" controls="controls" preload="auto">
			<source src="http://akstuhl.net/survey/8B.mp3" type="audio/wav">
			[your browser does not support HTML5 audio]
		</audio></p>
		<input type="hidden" name="playedAudioPre3" value="false">
		<table>
			<tr>
				<td>Loud</td><td>Quiet</td><td>Artificial</td><td>Natural</td><td>Simple</td><td>Complex</td>
			</tr>
			<tr>
				<td><input type="checkbox" name="question3_iii_loud" value="loud"></td>
				<td><input type="checkbox" name="question3_iii_quiet" value="quiet"></td>
				<td><input type="checkbox" name="question3_iii_artif" value="artificial"></td>
				<td><input type="checkbox" name="question3_iii_natural" value="natural"></td>
				<td><input type="checkbox" name="question3_iii_simple" value="simple"></td>
				<td><input type="checkbox" name="question3_iii_complex" value="complex"></td>
			</tr>
		</table>
		<br />
<?php
		}
	}
?>

<hr /><hr />
			
<?php
	$flip = rand(1, 2);
	if ($flip == 1) {
?>
	
		<p>For each of the remaining questions, please listen to the first sound file below (Sound A). Then, play the second sound (Sound B) twice: the first time, read silently the phrase "mechanical turk mechanical turk" in your own voice while the sound plays; the second time, imagine Sound A while the B sound plays. Compare the loudness of your inner reading voice with the loudness of your imagined Sound A.</p>
				
<?php
	}
	else {
?>

		<p>For each of the remaining questions, please listen to the first sound file below (Sound A). Then, play the second sound (Sound B) twice: the first time, imagine Sound A while the B sound plays; the second time, read silently the phrase "mechanical turk mechanical turk" in your own voice while the sound plays. Compare the loudness of your inner reading voice with the loudness of your imagined Sound A.</p>
				
<?php
	}
	$order = range(1, 10);
	shuffle($order);
?>

		<input type="hidden" name="orderImagined" value="<?php echo $flip; ?>">
		<input type="hidden" name="orderPresented" value="
			<?php foreach($order as $item)
				echo $item . ", "; ?>
		">
		
<?php
	foreach($order as $item) {
?>
		<hr />

		<p>Sound A:
		<audio id="audio<?php echo $item; ?>A" controls="controls" preload="auto">
			<source src="http://akstuhl.net/survey/<?php echo $item; ?>A.mp3" type="audio/wav">
			[your browser does not support HTML5 audio]
		</audio></p>
		<input type="hidden" name="playedAudio<?php echo $item; ?>A" value="false">
				
		<p>Sound B:
		<audio id="audio<?php echo $item; ?>B" controls="controls" preload="auto">
			<source src="http://akstuhl.net/survey/<?php echo $item; ?>B.mp3" type="audio/wav">
			[your browser does not support HTML5 audio]
		</audio></p>
		<input type="hidden" name="playedAudio<?php echo $item; ?>B" value="false">
		
		<input type="radio" name="question3_<?php echo $item; ?>" value="1"> Inner voice louder<br />
		<input type="radio" name="question3_<?php echo $item; ?>" value="2"> Imagined Sound A louder<br />
		<input type="radio" name="question3_<?php echo $item; ?>" value="3"> Same loudness for both inner voice and imagined Sound A<br />
		
<?php
	}
?>
	
	<hr />
	
	<p>Was anything about this survey confusing or difficult? Do you have any comments? Please answer in full sentences.</p>
	<textarea rows="6" cols="50" name="feedback" maxlength="1000"></textarea>
	
	<input type="submit" value="Submit" />
		
	<script>
	
		document.getElementById('audioPre1').addEventListener('ended', function(){
			document.survey.playedAudioPre1.value = "true";
		}, false);
		document.getElementById('audioPre2').addEventListener('ended', function(){
			document.survey.playedAudioPre2.value = "true";
		}, false);
		document.getElementById('audioPre3').addEventListener('ended', function(){
			document.survey.playedAudioPre3.value = "true";
		}, false);
		
<?php
	foreach($order as $item) {
?>
		
		document.getElementById('audio<?php echo $item; ?>A').addEventListener('ended', function(){
			document.survey.playedAudio<?php echo $item; ?>A.value = "true";
		}, false);
		document.getElementById('audio<?php echo $item; ?>B').addEventListener('ended', function(){
			document.survey.playedAudio<?php echo $item; ?>B.value = "true";
		}, false);
		
<?php
	}
?>
	</script>
	
	</div>
	
	</form>

</body>
</html>