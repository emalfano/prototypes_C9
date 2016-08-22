Place your queries below
-- find one user from your user table by username

SELECT * FROM `users` WHERE `username`='elizabeth'

-- change one user's email

UPDATE `users` set `email` = 'elizabeth@learningfuze.com' WHERE id = 1

-- insert a user

INSERT INTO `users` SET `username`='sam', `email`='sam@learningfuze.com', `password`=md5('ciaoprofessore')

-- delete a user

DELETE FROM `users` WHERE `username`='nicholas'

-- Feature Set 2 - make a table

-- Select all todo_items made by 1 user of your choice

SELECT * FROM `todo_items` WHERE `user_id` = 4

-- Insert a new todo item into the table by that same user

INSERT INTO `todo_items` (`title`, `details`, `user_id`, `timestamp`) VALUES ('Mop', 'mop the floors', '4', now())

-- Delete a todo item by that user

DELETE FROM `todo_items` WHERE `user_id` = 4 and `title` = 'Mop'

-- Update a todo item by that user with data of your choice

UPDATE `todo_items` SET `details`='buy shoes' WHERE `details`= 'buy groceries' AND `user_id` = 4

-- Perform a select to get all information from `users` by using the user's id

SELECT * FROM `todo_items` WHERE `user_id` = 4
