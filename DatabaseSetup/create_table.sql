USE internship;

CREATE TABLE IF NOT EXISTS users(
    userid int(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    email varchar(30) NOT NULL,
    name varchar(30) NOT NULL,
    address varchar(100) NOT NULL,
    age int(3) NOT NULL,
    phone varchar(20) NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8;
CREATE TABLE IF NOT EXISTS login(
    username varchar(20) NOT NULL,
    password varchar(30) NOT NULL,
    userlevel int(1) NOT NULL,
    fk_userid int(6) UNSIGNED NOT NULL,
    FOREIGN KEY (fk_userid) REFERENCES users(userid) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB DEFAULT CHARSET = utf8;
CREATE TABLE IF NOT EXISTS practical_training(
    applicationid int(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    applicationtitle varchar(45) NOT NULL,
    applicationdate varchar(20) NOT NULL,
    applicationstatus varchar(10) NOT NULL,
    fk_userid int(6) UNSIGNED NOT NULL,
    FOREIGN KEY (fk_userid) REFERENCES users(userid) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB DEFAULT CHARSET = utf8;
CREATE TABLE IF NOT EXISTS company(
    companyname varchar(20) NOT NULL,
    companycontactno varchar(20) NOT NULL,
    companyemail varchar(20) NOT NULL,
    department varchar(30) NOT NULL,
    jobtitle varchar(25) NOT NULL,
    startdate varchar(20) NOT NULL,
    enddate varchar(20) NOT NULL,
    fk_applicationid int(6) UNSIGNED NOT NULL,
    FOREIGN KEY (fk_applicationid) REFERENCES practical_training(applicationid) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB DEFAULT CHARSET = utf8;
CREATE TABLE IF NOT EXISTS user_detail(
    gender varchar(10) NOT NULL,
    matricnumber varchar(9) NOT NULL,
    nationality varchar(15) NOT NULL,
    fk_applicationid int(6) UNSIGNED NOT NULL,
    FOREIGN KEY (fk_applicationid) REFERENCES practical_training(applicationid) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB DEFAULT CHARSET = utf8;


-- INSERT INTO users
-- VALUES (
--         1,
--         "foozheng@gmail.com",
--         "Lai Foo Zheng",
--         "66, Taman Daya",
--         21,
--         "018-265-3007"
--     );
-- INSERT INTO users
-- VALUES (
--         2,
--         "adamm@gmail.com",
--         "Muhammad Adam Bin Yaacob",
--         "234, Taman Universiti",
--         21,
--         "019-771-5162"
--     );
-- INSERT INTO users
-- VALUES (
--         3,
--         "weilong@gmail.com",
--         "Ang Wei Long",
--         "88, Taman Daya",
--         21,
--         "017-7276326"
--     );
-- INSERT INTO users
-- VALUES (
--         4,
--         "weichun@gmail.com",
--         "Ho Wei Chun",
--         "24, Taman Mutiara",
--         21,
--         "017-7449148"
--     );

-- -- Populate Login Table
-- INSERT INTO login
-- VALUES ("foozheng", "foozheng", 1, 1);
-- INSERT INTO login
-- VALUES ("adamm", "adamm", 2, 2);
-- INSERT INTO login
-- VALUES ("wlong", "wlong", 3, 3);
-- INSERT INTO login
-- VALUES ("weichun", "weichun", 3, 4);