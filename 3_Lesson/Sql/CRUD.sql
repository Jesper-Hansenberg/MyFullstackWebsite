-- Create/Insert
INSERT INTO 
        users(user_name, user_pass, user_email, user_date)
    VALUES('',
        '',
        '',
        NOW());

-- Read
SELECT 
        user_id,
        user_name
    FROM
        users
    WHERE
        user_name = 'Bobby tables';

-- Update
UPDATE 
        replies
    SET 
        reply_content = 'ID 1'
    WHERE 
        reply_id = 1;

-- Delete
DELETE FROM 
        users 
    WHERE 
        user_name ='Bobby tables';



-- Advanced read

SELECT
        posts.post_topic,
        posts.post_content,
        posts.post_date,
        posts.post_by,
        users.user_id,
        users.user_name
    FROM
        posts
    LEFT JOIN
        users
    ON
        posts.post_by = users.user_id
    WHERE
        posts.post_topic = 1