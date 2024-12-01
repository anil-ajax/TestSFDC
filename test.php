<?php

@session_start();

echo $_SESSION['uid'];

if(!isset($_SESSION['uid']) || $_SESSION['uid'] == '') {
	header("Location: index.php");
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Interview App</title>
  <link rel="stylesheet" href="styles.css">
  <script src="jq.js"></script>
</head>
<body>
  <div class="interview-container">
    <div class="avatar-container">
      <div class="avatar interviewer-avatar">
        <img src="interviewer.png" alt="Interviewer">
        
	

      </div>
<div class='actor'>Interviewer</div>
      <p id="intro_q" style='display:none;'>Interviewer: Ready to start the interview.</p>
    </div>

    <div class="avatar-container">
      <div class="avatar user-avatar">
        <img src="user.png" alt="User">
        

      </div>
<div class='actor'>Candidate(You)</div>
      <p id="captured-text" style='display:none;'>User: Waiting to speak...</p>
    </div>
  </div>

  <button id="start">Start Interview</button>

<div id='ended'></div>

  <script src="script.js"></script>
</body>
</html>

<style>
.actor{
border: 3px solid #cccccc;
    padding: 4px;
    border-radius: 3px;
}
</style>
