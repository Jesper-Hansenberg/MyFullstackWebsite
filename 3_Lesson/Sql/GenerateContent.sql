-- Create users

INSERT INTO 
        users(user_name, user_pass, user_email, created_at)
    VALUES('snaps',
        'asdasd',
        'snaps@lortemail.dk',
        NOW());

INSERT INTO 
        users(user_name, user_pass, user_email, created_at)
    VALUES('haps',
        'asdasd',
        'haps@lortemail.dk',
        NOW());

INSERT INTO 
        users(user_name, user_pass, user_email, created_at)
    VALUES('flerpderp',
        'asdasd',
        'flerpderp@lortemail.dk',
        NOW());

INSERT INTO 
        users(user_name, user_pass, user_email, created_at)
    VALUES('Bobby tables',
        'asdasd',
        'bobby_tables@lortemail.dk',
        NOW());

-- Create categories

INSERT INTO
        categories(cat_name, cat_description)
    VALUES
        ('Worldnews',
        'Whats going down globally'
        );

INSERT INTO
        categories(cat_name, cat_description)
    VALUES
        ('Programmer humor',
        '1337 programmerz 0nly'
        );

INSERT INTO
        categories(cat_name, cat_description)
    VALUES
        ('Wallstreetbets',
        'Best way to loose money, fast!'
        );

INSERT INTO
        categories(cat_name, cat_description)
    VALUES
        ('CATegory',
        'Something about cats'
        );

-- Create topics
INSERT INTO
        topics(topic_subject, topic_date, topic_cat, topic_by)
    VALUES
        ('Ukraine today',
        NOW(),
        1,
        1
        );

INSERT INTO
        topics(topic_subject, topic_date, topic_cat, topic_by)
    VALUES
        ('Javascript bad',
        NOW(),
        2,
        2
        );

INSERT INTO
        topics(topic_subject, topic_date, topic_cat, topic_by)
    VALUES
        ('How to not buy the dip?',
        NOW(),
        3,
        3
        );

-- Create posts

INSERT INTO
        posts(post_content, post_date, post_topic, post_by)
    VALUES
        ('bla bla bla',
        NOW(),
        1,
        2
        );

INSERT INTO
        posts(post_content, post_date, post_topic, post_by)
    VALUES
        ('Putler is a fart',
        NOW(),
        1,
        3
        );

INSERT INTO
        posts(post_content, post_date, post_topic, post_by)
    VALUES
        ('Python better',
        NOW(),
        2,
        1
        );

INSERT INTO
        posts(post_content, post_date, post_topic, post_by)
    VALUES
        ('Buy the dip',
        NOW(),
        3,
        1
        );