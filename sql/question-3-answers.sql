-- select by id 1:
select * from post where id = 1;

-- select all posts where title = includes "title 2":
select * from post where title like 'title 2';

-- select all posts and order by the title column alphabetically:
select * from post order by name ASC;

-- insert 3 new posts
insert into post (name, title, content) values
('post_1', 'Title 1', 'Post 1'),
('post_2', 'Title 2', 'Post 2'),
('post_3', 'Title 3', 'Post 3');

-- update posts where id = 1, set the title to "new title"
update post set name = 'Updated Post' where id = 1;

-- delete post where id = 2
delete from post where id = 2;
