-- Populate Users Table
USE internship;

INSERT INTO users
VALUES (
        1,
        "foozheng@gmail.com",
        "Lai Foo Zheng",
        "66, Taman Daya",
        21,
        "018-265-3007"
    );
INSERT INTO users
VALUES (
        2,
        "adamm@gmail.com",
        "Muhammad Adam Bin Yaacob",
        "234, Taman Universiti",
        21,
        "019-771-5162"
    );
INSERT INTO users
VALUES (
        3,
        "weilong@gmail.com",
        "Ang Wei Long",
        "88, Taman Daya",
        21,
        "017-7276326"
    );
INSERT INTO users
VALUES (
        4,
        "weichun@gmail.com",
        "Ho Wei Chun",
        "24, Taman Mutiara",
        21,
        "017-7449148"
    );

-- Populate Login Table
INSERT INTO login
VALUES ("foozheng", "foozheng", 1, 1);
INSERT INTO login
VALUES ("adamm", "adamm", 2, 2);
INSERT INTO login
VALUES ("wlong", "wlong", 3, 3);
INSERT INTO login
VALUES ("weichun", "weichun", 3, 4);

-- Populate Practical Training Table
-- INSERT INTO practical_training
-- VALUES (
--         1,
--         "Intel/Back-End",
--         "12-Jun-2023",
--         "submitted",
--         3
--     );
-- INSERT INTO practical_training
-- VALUES (
--         2,
--         "Google/Back-End",
--         "12-Jun-2023",
--         "Approve",
--         3
--     );
-- INSERT INTO practical_training
-- VALUES (
--         3,
--         "Intel/Network",
--         "14-Jun-2023",
--         "submitted",
--         3
--     );
-- INSERT INTO practical_training
-- VALUES (
--         4,
--         "Google/Front-End",
--         "14-Jun-2023",
--         "submitted",
--         4
--     );
-- INSERT INTO practical_training
-- VALUES (
--         5,
--         "Intel/Full-stack",
--         "24-May-2023",
--         "Reject",
--         4
--     );
-- INSERT INTO practical_training
-- VALUES (
--         6,
--         "Google/Back-End",
--         "24-Jun-2023",
--         "submitted",
--         5
--     );
-- INSERT INTO practical_training
-- VALUES (7, "Intel/Back-End", "21-Jun-2023", "Reject", 5);
-- INSERT INTO practical_training
-- VALUES (
--         8,
--         "Miscrosoft/Back-End",
--         "12-Jun-2023",
--         "submitted",
--         6
--     );
-- INSERT INTO practical_training
-- VALUES (9, "Intel/Back-End", "30-Jun-2023", "Approve", 6);
-- INSERT INTO practical_training
-- VALUES (
--         10,
--         "Miscrosoft/UIUX-dessigner",
--         "24-Jun-2023",
--         "submitted",
--         6
--     );

-- -- Populate User Detail Table
-- INSERT INTO user_detail
-- VALUES ("Male", "A088", "Malaysia", 1);
-- INSERT INTO user_detail
-- VALUES ("Male", "A088", "Malaysia", 2);
-- INSERT INTO user_detail
-- VALUES ("Male", "A088", "Malaysia", 3);
-- INSERT INTO user_detail
-- VALUES ("Male", "A001", "Malaysia", 4);
-- INSERT INTO user_detail
-- VALUES ("Male", "A001", "Malaysia", 5);
-- INSERT INTO user_detail
-- VALUES ("Male", "A021", "Malaysia", 6);
-- INSERT INTO user_detail
-- VALUES ("Male", "A021", "Malaysia", 7);
-- INSERT INTO user_detail
-- VALUES ("Male", "A004", "Malaysia", 8);
-- INSERT INTO user_detail
-- VALUES ("Male", "A004", "Malaysia", 9);
-- INSERT INTO user_detail
-- VALUES ("Male", "A004", "Malaysia", 10);

-- -- Populate Company Table
-- INSERT INTO company
-- VALUES (
--         "Intel",
--         "03-5678765",
--         "intel@gmail.com",
--         "Software",
--         "Back-End",
--         "2023-06-23",
--         "2023-07-23",
--         1
--     ),
--     (
--         "Intel",
--         "03-5678765",
--         "intel@gmail.com",
--         "Network",
--         "Network",
--         "2023-06-23",
--         "2023-08-23",
--         3
--     ),
--     (
--         "Intel",
--         "03-5678765",
--         "intel@gmail.com",
--         "Software",
--         "Full-stack",
--         "2023-06-23",
--         "2023-09-23",
--         5
--     ),
--     (
--         "Intel",
--         "03-5678765",
--         "intel@gmail.com",
--         "Software",
--         "Back-End",
--         "2023-06-23",
--         "2023-10-23",
--         7
--     ),
--     (
--         "Intel",
--         "03-5678765",
--         "intel@gmail.com",
--         "Software",
--         "Back-End",
--         "2023-06-23",
--         "2023-11-23",
--         9
--     ),
--     (
--         "Google",
--         "03-5675463",
--         "google@gmail.com",
--         "Software",
--         "Back-End",
--         "2023-06-23",
--         "2023-12-23",
--         2
--     ),
--     (
--         "Google",
--         "03-5675463",
--         "google@gmail.com",
--         "Software",
--         "Front-End",
--         "2023-06-23",
--         "2023-07-23",
--         4
--     ),
--     (
--         "Google",
--         "03-5675463",
--         "google@gmail.com",
--         "Software",
--         "Back-End",
--         "2023-06-23",
--         "2023-08-23",
--         6
--     ),
--     (
--         "Miscrosoft",
--         "03-5675463",
--         "miscrosoft@gmail.com",
--         "Software",
--         "Back-End",
--         "2023-06-23",
--         "2023-09-23",
--         8
--     ),
--     (
--         "Miscrosoft",
--         "03-5675463",
--         "miscrosoft@gmail.com",
--         "Software",
--         "UIUX-dessigner",
--         "2023-06-23",
--         "2023-10-23",
--         10
--     );