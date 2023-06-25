-- Populate Users Table
USE internship;
INSERT INTO users
VALUES (
        1,
        "admin@gmail.com",
        "Admin Account",
        "1, Taman Admin",
        21,
        "011-1111111"
    );
INSERT INTO users
VALUES (
        2,
        "coordinator@gmail.com",
        "Coordinator Account",
        "2, Taman Coordinator",
        21,
        "022-2222222"
    );
INSERT INTO users
VALUES (
        3,
        "foozheng@gmail.com",
        "Lai Foo Zheng",
        "66, Taman Daya",
        21,
        "018-2653007"
    );
INSERT INTO users
VALUES (
        4,
        "adamm@gmail.com",
        "Muhammad Adam Bin Yaacob",
        "234, Taman Universiti",
        21,
        "019-7715162"
    );
INSERT INTO users
VALUES (
        5,
        "weilong@gmail.com",
        "Ang Wei Long",
        "88, Taman Daya",
        21,
        "017-7276326"
    );
INSERT INTO users
VALUES (
        6,
        "weichun@gmail.com",
        "Ho Wei Chun",
        "24, Taman Mutiara",
        21,
        "017-7449148"
    );
-- Populate Login Table (Defaullt 4 Users)
INSERT INTO login
VALUES ("admin", "admin", 1, 1);
INSERT INTO login
VALUES ("coordinator", "coordinator", 2, 2);
INSERT INTO login
VALUES ("foozheng", "foozheng", 3, 3);
INSERT INTO login
VALUES ("adamm", "adamm", 3, 4);
INSERT INTO login
VALUES ("wlong", "wlong", 3, 5);
INSERT INTO login
VALUES ("weichun", "weichun", 3, 6);
-- Populate Practical Training Table
INSERT INTO practical_training
VALUES (
        1,
        "Intel/Back-End",
        "27-Jun-2022",
        "Submitted",
        3
    );
INSERT INTO practical_training
VALUES (
        2,
        "Google/Back-End",
        "12-Jun-2022",
        "Approved",
        3
    );
INSERT INTO practical_training
VALUES (
        3,
        "Intel/Network",
        "14-Jun-2022",
        "Submitted",
        3
    );
INSERT INTO practical_training
VALUES (
        4,
        "Google/Front-End",
        "14-Jun-2022",
        "Submitted",
        4
    );
INSERT INTO practical_training
VALUES (
        5,
        "Intel/Full-stack",
        "24-May-2022",
        "Rejected",
        4
    );
INSERT INTO practical_training
VALUES (
        6,
        "Google/Back-End",
        "24-Jun-2022",
        "Submitted",
        5
    );
INSERT INTO practical_training
VALUES (
        7,
        "Intel/Back-End",
        "21-Jun-2022",
        "Rejected",
        5
    );
INSERT INTO practical_training
VALUES (
        8,
        "Miscrosoft/Back-End",
        "12-Jun-2022",
        "Submitted",
        6
    );
INSERT INTO practical_training
VALUES (
        9,
        "Intel/Back-End",
        "30-Jun-2022",
        "Approved",
        6
    );
INSERT INTO practical_training
VALUES (
        10,
        "Miscrosoft/UIUX-dessigner",
        "24-Jun-2022",
        "Submitted",
        6
    );
-- -- Populate User Detail Table
INSERT INTO user_detail
VALUES ("Female", "A001", "Malaysia", 1);
INSERT INTO user_detail
VALUES ("Female", "A002", "Malaysia", 2);
INSERT INTO user_detail
VALUES ("Male", "A003", "Malaysia", 3);
INSERT INTO user_detail
VALUES ("Male", "A004", "Malaysia", 4);
INSERT INTO user_detail
VALUES ("Male", "A005", "Malaysia", 5);
INSERT INTO user_detail
VALUES ("Male", "A006", "Malaysia", 6);
-- -- Populate Company Table
INSERT INTO company
VALUES (
        "Intel",
        "03-5678765",
        "intel@gmail.com",
        "Software",
        "Back-End",
        "2022-06-23",
        "2022-07-23",
        1
    ),
    (
        "Intel",
        "03-5678765",
        "intel@gmail.com",
        "Network",
        "Network",
        "2022-06-23",
        "2022-08-23",
        3
    ),
    (
        "Intel",
        "03-5678765",
        "intel@gmail.com",
        "Software",
        "Full-stack",
        "2022-06-23",
        "2022-09-23",
        5
    ),
    (
        "Intel",
        "03-5678765",
        "intel@gmail.com",
        "Software",
        "Back-End",
        "2022-06-23",
        "2022-10-23",
        7
    ),
    (
        "Intel",
        "03-5678765",
        "intel@gmail.com",
        "Software",
        "Back-End",
        "2022-06-23",
        "2022-11-23",
        9
    ),
    (
        "Google",
        "03-5675463",
        "google@gmail.com",
        "Software",
        "Back-End",
        "2022-06-23",
        "2022-12-23",
        2
    ),
    (
        "Google",
        "03-5675463",
        "google@gmail.com",
        "Software",
        "Front-End",
        "2022-06-23",
        "2022-07-23",
        4
    ),
    (
        "Google",
        "03-5675463",
        "google@gmail.com",
        "Software",
        "Back-End",
        "2022-06-23",
        "2022-08-23",
        6
    ),
    (
        "Miscrosoft",
        "03-5675463",
        "miscrosoft@gmail.com",
        "Software",
        "Back-End",
        "2022-06-23",
        "2022-09-23",
        8
    ),
    (
        "Miscrosoft",
        "03-5675463",
        "miscrosoft@gmail.com",
        "Software",
        "UIUX-dessigner",
        "2022-06-23",
        "2022-10-23",
        10
    );