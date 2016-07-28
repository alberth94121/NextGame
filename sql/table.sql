USE test2;


CREATE TABLE Games(
	gameID INT NOT NULL AUTO_INCREMENT,
	name VARCHAR(100) NOT NULL,
	systemID INT NOT NULL,
	description VARCHAR(512),
	releaseDate DATE,
	PRIMARY KEY(gameID),
	FOREIGN KEY(systemID) REFERENCES System(systemID);
);


CREATE TABLE System(
	systemID INT NOT NULL AUTO_INCREMENT,
	system VARCHAR(100),
	PRIMARY KEY(systemID),
	UNIQUE(system)
);


