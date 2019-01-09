
CREATE DATABASE caritas;
USE caritas;


CREATE TABLE evaluate_service (
    id int(11) AUTO_INCREMENT,
    rating ENUM ("1","2","3","4","5"),
    PRIMARY KEY(id)
);
