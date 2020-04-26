-- These are the values inserted into my database
-- Users are inserted into the 'users' table through a mysql query through php
-- when they create an account

USE spot_clone;

-- Inserts artists names into the 'artists' table

INSERT INTO artists (name)
VALUES ('K.K. Slider'),
       ('Tom Nook'),
       ('Isabelle'),
       ('Muffy'),
       ('Marshal');

-- Inserts genres into the 'genres' table, more to be added in the future

INSERT INTO genres (name)
VALUES ('Pop'),
       ('Jazz'),
       ('R&B'),
       ('Hip-Hop'),
       ('Rock'),
       ('Classical')
       ('Metal')
       ('Country');

-- Inserts albums into the 'albums' table, artists and genres are matched using their id number

INSERT INTO albums (id, title, artist, genre artworkPath)
VALUES (NULL, 'Get Paid', 2, 4, 'assets/images/album_art/money_tree.jpg')
       (NULL, 'Pretty Bell', 3, 1, 'assets/images/album_art/bells.jpg')
       (NULL, 'Nightshade', 4, 5, 'assets/images/album_art/night_sky.jpg')
       (NULL, 'Cafe Vibez', 5, 6, 'assets/images/album_art/coffee.jpg')
       (NULL, 'Greatest Hits', 1, 1, 'assets/images/album_art/colorful_tiles.jpg');

-- TO DO: Insert songs
