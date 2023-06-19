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