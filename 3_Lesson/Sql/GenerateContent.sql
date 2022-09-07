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


-- Create topics

-- Create posts

INSERT INTO
        posts(post_content, post_date, post_topic, post_by)
    VALUES
        ('this is some decent content right here!',
        NOW(),
        1,
        1
        );

-- Create replies

-- Create categories