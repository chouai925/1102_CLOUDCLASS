/*
	Outdated
*/

CREATE TABLE data (
	`ID` PRIMARY KEY,
	`lat` DOUBLE,
	`lon` DOUBLE,
	`locationName` VARCHAR(64),
	`stationId` VARCHAR(64),
	`obsTime` TIMESTAMP,
	`ELEV` float,
	`RAIN` float,
	`MIN_10` float,
	`HOUR_3` float,
	`HOUR_6` float,
	`HOUR_12` float,
	`HOUR_24` float,
	`NOW` float,
	`latest_2days` float,
	`latest_3days` float,
	`HOUR_3` float,
	`CITY` VARCHAR(16),
	`CITY_SN` VARCHAR(16),
	`TOWN` VARCHAR(16),
	'TOWN_SN' VARCHAR(16),
	`ATTRIBUTE` VARCHAR(16)
)