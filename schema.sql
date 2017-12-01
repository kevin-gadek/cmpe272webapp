
-- All database must follow this schema

CREATE TABLE Users(
	_id INT NOT NULL AUTO_INCREMENT,
	firstName VARCHAR(30),
	lastName VARCHAR(30),
	email VARCHAR(30) UNIQUE,
	password VARCHAR(30),
	home_number VARCHAR(10),
	mobile_number VARCHAR(10) UNIQUE,

	PRIMARY KEY (_id)
);

CREATE TABLE Tracking(

	_id INT NOT NULL AUTO_INCREMENT,
	user_id INT,
	product_id INT,
	date_created INT,
	company_id INT,
	PRIMARY KEY (_id),
	FOREIGN KEY (user_id) REFERENCES Users(_id)

);


-- 1, 2, 3, 4

INSERT INTO Tracking (user_id, product_id, date_created, company_id) VALUES (1, 1, 1226390400, 1);
INSERT INTO Tracking (user_id, product_id, date_created, company_id) VALUES (1, 2, 1112108043, 2);
INSERT INTO Tracking (user_id, product_id, date_created, company_id) VALUES (1, 2, 1412108043, 1);
INSERT INTO Tracking (user_id, product_id, date_created, company_id) VALUES (1, 1, 1712108043, 4);

INSERT INTO Tracking (user_id, product_id, date_created, company_id) VALUES (2, 3, NULL, 1);
INSERT INTO Tracking (user_id, product_id, date_created, company_id) VALUES (2, 2, NULL, 1);
INSERT INTO Tracking (user_id, product_id, date_created, company_id) VALUES (2, 2, NULL, 1);


INSERT INTO Tracking (user_id, product_id, date_created, company_id) VALUES (1, 1, NULL, 2);
INSERT INTO Tracking (user_id, product_id, date_created, company_id) VALUES (1, 2, NULL, 2);
INSERT INTO Tracking (user_id, product_id, date_created, company_id) VALUES (1, 2, NULL, 2);
INSERT INTO Tracking (user_id, product_id, date_created, company_id) VALUES (2, 3, NULL, 2);

INSERT INTO Tracking (user_id, product_id, date_created, company_id) VALUES (2, 3, NULL, 1);
INSERT INTO Tracking (user_id, product_id, date_created, company_id) VALUES (2, 2, NULL, 1);
INSERT INTO Tracking (user_id, product_id, date_created, company_id) VALUES (2, 2, NULL, 1);
-- for top 5 most visited total for whole market
select product_id, count(_id) as instance
from tracking
group by product_id
order by instance desc
limit 5;

-- for one company
select product_id, count(_id) as instance
from tracking
where company_id = 2
group by product_id
order by instance desc
limit 5;

-- history of visited company for a user
select * from
(select company_id, max(date_created) as recent_date
from Tracking
where user_id=1
group by(company_id)) as g
order by recent_date desc;