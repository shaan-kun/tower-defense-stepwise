CREATE TABLE IF NOT EXISTS user(
	user_id INT PRIMARY KEY AUTO_INCREMENT,
	login VARCHAR(30) NOT NULL UNIQUE,
	password VARCHAR(30),
	reg_date DATETIME DEFAULT "1970-01-01 00:00:00",
	game_count INT,
	game_win INT,
	game_loss INT,
	score INT
);

CREATE TABLE IF NOT EXISTS game(
	game_id INT PRIMARY KEY AUTO_INCREMENT,
	start_date DATETIME,
	move INT,
	is_private BIT,
	keyword VARCHAR(30)
);

CREATE TABLE IF NOT EXISTS player(
	player_id INT PRIMARY KEY AUTO_INCREMENT,
	user INT,
	game INT,
	is_first BIT,
	points INT,
	score INT,
	is_moved BIT,
	FOREIGN KEY (user) REFERENCES user(user_id) ON DELETE CASCADE,
	FOREIGN KEY (game) REFERENCES game(game_id) ON DELETE CASCADE
);

CREATE TABLE IF NOT EXISTS building(
	building_id INT PRIMARY KEY AUTO_INCREMENT,
	player INT,
	type VARCHAR(30),
	axis_x INT,
	axis_y INT,
	FOREIGN KEY (player) REFERENCES player(player_id) ON DELETE CASCADE
);

CREATE TABLE IF NOT EXISTS unit(
	unit_id INT PRIMARY KEY AUTO_INCREMENT,
	building INT,
	type VARCHAR(30),
	FOREIGN KEY (building) REFERENCES building(building_id) ON DELETE CASCADE
);