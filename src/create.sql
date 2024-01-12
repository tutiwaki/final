CREATE TABLE product(
id INT NOT NULL AUTO_INCREMENT ,
name VARCHAR( 100 ) NOT NULL ,
price INT NOT NULL ,
PRIMARY KEY ( id )
)

CREATE TABLE customer(
id INT NOT NULL AUTO_INCREMENT ,
name VARCHAR( 100 ) NOT NULL ,
address VARCHAR( 200 ) NOT NULL ,
login VARCHAR( 100 ) NOT NULL ,
PRIMARY KEY ( id ) ,
UNIQUE (
login
)
)

CREATE TABLE purchase(
id INT NOT NULL AUTO_INCREMENT ,
customer_id INT NOT NULL ,
PRIMARY KEY ( id ) ,
FOREIGN KEY ( customer_id ) REFERENCES customer( id )
)


CREATE TABLE purchase_detail(
purchase_id INT NOT NULL ,
product_id INT NOT NULL ,
count INT NOT NULL ,
PRIMARY KEY ( purchase_id, product_id ) ,
FOREIGN KEY ( purchase_id ) REFERENCES purchase( id ) ,
FOREIGN KEY ( product_id ) REFERENCES product( id )
)


CREATE TABLE favorite(
customer_id INT NOT NULL ,
product_id INT NOT NULL ,
PRIMARY KEY ( customer_id, product_id ) ,
FOREIGN KEY ( customer_id ) REFERENCES customer( id ) ,
FOREIGN KEY ( product_id ) REFERENCES product( id )
