﻿<!DOCTYPE html>
<head>
    <meta charset="utf-8" />
    <title>Tower Defense Stepwise</title>
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <script src="js/jquery.js"></script>
</head>
<body>
    <div class="main">
        <div class="nav">
            <ul id="navbar">
                <li><a href="singleplayer.php"><br>Одиночная игра</a></li>
                <li><a href="multiplayer.php"><br>Мультиплеер</a></li>
                <li><a href="rating.php"><br>Рейтинг</a></li>
                <li><a href="rules.php"><br>Правила игры</a></li>
                <li><a href="settings.php"><br>Настройки</a></li>
                <li><a href="scripts/sign_out.php"><br>Выход</a></li>
            </ul>
        </div>
		Рейтинг
		<div class="center">
			<table class="table">
				<thead>
					<tr>
						<th>First Name</th>
						<th>Last Name</th>
						<th>ZIP</th>
						<th>Birthday</th>
						<th>Points</th>
						<th>Average</th>
						<th>Amount</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>Gloria</td>
						<td>Reeves</td>
						<td>67439</td>
						<td>10/18/1985</td>
						<td>4</td>
						<td>0.1</td>
						<td>$50</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
	<script>
		
		
	  $(setInterval(function() {
	    $.post('scripts/getData.php', {}, function(data) {
	      $('table').remove();

	      data = JSON.parse(data);
	      
	      string = '<table class="table"><tr><th>Nickname</th><th>Count game</th><th>Wins</th><th>Loses</th><th>Score</th></tr>';

	      for (let item of data)
	      {
	        string += '<tr>';
	          string += '<td>' + item.login + '</td>';
	          string += '<td>' + item.game_count + '</td>';
	          string += '<td>' + item.game_win + '</td>';
	          string += '<td>' + item.game_loss + '</td>'
	          string += '<td>' + item.score + '</td>';
	        string += '</tr>';
	      }

	      string += '</table>';

	      $('.main').append(string);
	    });
	  }),1000);
	</script>
</body>
</html>