<?php
	include('config.php');
?>

<html>
<head>
	<title>Survey submitted</title>
</head>
<body>

<?php
	$startTime = date("Y-m-d H:i:sP", $_POST[timestamp]);

	$query = "INSERT INTO  `833201_survey`.`survey3` (
		`startTime`,
		`sex`,
		`age`,
		`yearsMusicInstruction`,
		`addMusicExp`,
		`occupation`,
		`question1_1`,
		`question1_2`,
		`question1_3`,
		`question1_4`,
		`question1_5`,
		`question1_6`,
		`question1_7`,
		`question1_8`,
		`question1_9`,
		`question1_10`,
		`question1_11`,
		`question1_12`,
		`question1_13`,
		`question1_14`,
		`question2_1`,
		`question2_2`,
		`question2_3`,
		`question2_4`,
		`question2_5`,
		`question2_6`,
		`question2_7`,
		`question2_8`,
		`question2_9`,
		`question2_10`,
		`question2_11`,
		`question2_12`,
		`question2_13`,
		`question2_14`,
		`preOrder`,
		`orderImagined`,
		`orderPresented`,
		`playedAudioPre1`,
		`playedAudioPre2`,
		`playedAudioPre3`,
		`playedAudio1A`,
		`playedAudio1B`,
		`playedAudio2A`,
		`playedAudio2B`,
		`playedAudio3A`,
		`playedAudio3B`,
		`playedAudio4A`,
		`playedAudio4B`,
		`playedAudio5A`,
		`playedAudio5B`,
		`playedAudio6A`,
		`playedAudio6B`,
		`playedAudio7A`,
		`playedAudio7B`,
		`playedAudio8A`,
		`playedAudio8B`,
		`playedAudio9A`,
		`playedAudio9B`,
		`playedAudio10A`,
		`playedAudio10B`,
		`question3_i_loud`,
		`question3_i_quiet`,
		`question3_i_artif`,
		`question3_i_natural`,
		`question3_i_simple`,
		`question3_i_complex`,
		`question3_ii_loud`,
		`question3_ii_quiet`,
		`question3_ii_artif`,
		`question3_ii_natural`,
		`question3_ii_simple`,
		`question3_ii_complex`,
		`question3_iii_loud`,
		`question3_iii_quiet`,
		`question3_iii_artif`,
		`question3_iii_natural`,
		`question3_iii_simple`,
		`question3_iii_complex`,
		`question3_1`,
		`question3_2`,
		`question3_3`,
		`question3_4`,
		`question3_5`,
		`question3_6`,
		`question3_7`,
		`question3_8`,
		`question3_9`,
		`question3_10`,
		`feedback`
		)
		VALUES (
		'$startTime',
		'$_POST[sex]',
		'$_POST[age]',
		'$_POST[yearsMusicInstruction]',
		'$_POST[addMusicExp]',
		'$_POST[occupation]',
		'$_POST[question1_1]',
		'$_POST[question1_2]',
		'$_POST[question1_3]',
		'$_POST[question1_4]',
		'$_POST[question1_5]',
		'$_POST[question1_6]',
		'$_POST[question1_7]',
		'$_POST[question1_8]',
		'$_POST[question1_9]',
		'$_POST[question1_10]',
		'$_POST[question1_11]',
		'$_POST[question1_12]',
		'$_POST[question1_13]',
		'$_POST[question1_14]',
		'$_POST[question2_1]',
		'$_POST[question2_2]',
		'$_POST[question2_3]',
		'$_POST[question2_4]',
		'$_POST[question2_5]',
		'$_POST[question2_6]',
		'$_POST[question2_7]',
		'$_POST[question2_8]',
		'$_POST[question2_9]',
		'$_POST[question2_10]',
		'$_POST[question2_11]',
		'$_POST[question2_12]',
		'$_POST[question2_13]',
		'$_POST[question2_14]',
		'$_POST[preOrder]',
		'$_POST[orderImagined]',
		'$_POST[orderPresented]',
		'$_POST[playedAudioPre1]',
		'$_POST[playedAudioPre2]',
		'$_POST[playedAudioPre3]',
		'$_POST[playedAudio1A]',
		'$_POST[playedAudio1B]',
		'$_POST[playedAudio2A]',
		'$_POST[playedAudio2B]',
		'$_POST[playedAudio3A]',
		'$_POST[playedAudio3B]',
		'$_POST[playedAudio4A]',
		'$_POST[playedAudio4B]',
		'$_POST[playedAudio5A]',
		'$_POST[playedAudio5B]',
		'$_POST[playedAudio6A]',
		'$_POST[playedAudio6B]',
		'$_POST[playedAudio7A]',
		'$_POST[playedAudio7B]',
		'$_POST[playedAudio8A]',
		'$_POST[playedAudio8B]',
		'$_POST[playedAudio9A]',
		'$_POST[playedAudio9B]',
		'$_POST[playedAudio10A]',
		'$_POST[playedAudio10B]',
		'$_POST[question3_i_loud]',
		'$_POST[question3_i_quiet]',
		'$_POST[question3_i_artif]',
		'$_POST[question3_i_natural]',
		'$_POST[question3_i_simple]',
		'$_POST[question3_i_complex]',
		'$_POST[question3_ii_loud]',
		'$_POST[question3_ii_quiet]',
		'$_POST[question3_ii_artif]',
		'$_POST[question3_ii_natural]',
		'$_POST[question3_ii_simple]',
		'$_POST[question3_ii_complex]',
		'$_POST[question3_iii_loud]',
		'$_POST[question3_iii_quiet]',
		'$_POST[question3_iii_artif]',
		'$_POST[question3_iii_natural]',
		'$_POST[question3_iii_simple]',
		'$_POST[question3_iii_complex]',
		'$_POST[question3_1]',
		'$_POST[question3_2]',
		'$_POST[question3_3]',
		'$_POST[question3_4]',
		'$_POST[question3_5]',
		'$_POST[question3_6]',
		'$_POST[question3_7]',
		'$_POST[question3_8]',
		'$_POST[question3_9]',
		'$_POST[question3_10]',
		'$_POST[feedback]'
		)";
	
	$result = mysql_query($query);
		
	if ($result) {
		echo "<p class='success'>Thank you! Your response has been recorded.</p>";
	}
	else {
		echo "<p class='failure'>There was an error submitting your response.</p>";
	}
?>

</body>
</html>