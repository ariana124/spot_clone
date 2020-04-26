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
       ('EDM')
       ('Alternative');

-- Inserts albums into the 'albums' table, artists and genres are matched using their id number

INSERT INTO albums (id, title, artist, genre artworkPath)
VALUES (NULL, 'Get Paid', 2, 4, 'assets/images/album_art/money_tree.jpg')
       (NULL, 'Pretty Bell', 3, 1, 'assets/images/album_art/bells.jpg')
       (NULL, 'Nightshade', 4, 5, 'assets/images/album_art/night_sky.jpg')
       (NULL, 'Cafe Vibez', 5, 6, 'assets/images/album_art/coffee.jpg')
       (NULL, 'Greatest Hits', 1, 1, 'assets/images/album_art/colorful_tiles.jpg');

-- Inserts songs into the 'songs' tables

INSERT INTO songs (title, artist, album, genre, duration, path, albumOrder, plays)
VALUES ("Happy", 4, 3, 5, "1:45", "assets/music/bensound-happyrock.mp3", 1, 0),
       ("KK Funky", 1, 5, 2, "3:09", "assets/music/bensound-funkyelement.mp3", 1, 0),
       ("Memories", 5, 4, 6, "3:50", "assets/music/bensound-memories.mp3", 1, 0),
       ("Moose", 3, 2, 1, "2:40", "assets/music/bensound-moose.mp3", 1, 0),
       ("Lounge", 2, 1, 4, "1:45", "assets/music/bensound-thelounge.mp3", 1, 0),
       ("November", 5, 4, 6, "3:32", "assets/music/bensound-november.mp3", 2, 0),
       ("Sweet", 3, 2, 1, "5:07", "assets/music/bensound-sweet.mp3", 2, 0),
       ("Better Days", 4, 3, 5, "2:33", "assets/music/bensound-betterdays.mp3", 2, 0),
       ("KK Energy", 1, 5, 1, "2:59", "assets/music/bensound-energy.mp3", 2, 0),
       ("J French", 2, 1, 2, "1:44", "assets/music/bensound-jazzyfrenchy.mp3", 2, 0),
       ("Dream", 5, 4, 6, "4:58", "assets/music/bensound-ofeliasdream.mp3", 3, 0),
       ("A New Beginning", 4, 3, 5, "2:34", "assets/music/bensound-anewbeginning.mp3", 3, 0),
       ("Just Dance", 3, 2, 1, "2:42", "assets/music/bensound-popdance.mp3", 3, 0),
       ("KK Happiness", 1, 5, 1, "2:34", "assets/music/bensound-happiness.mp3", 3, 0),
       ("Dubs", 2, 1, , "2:34", "assets/music/bensound-dubstep.mp3", 3, 0),
       ("Extreme Action", 4, 3, 5, "8:03", "assets/music/bensound-extremeaction.mp3", 4, 0),
       ("Funny", 2, 1, 1, "3:07", "assets/music/bensound-funnysong.mp3", 4, 0),
       ("Going Higher", 3, 2, 8, "4:04", "assets/music/bensound-goinghigher.mp3", 4, 0),
       ("SloMo", 5, 4, 8, "4:44", "assets/music/bensound-slowmotion.mp3", 4, 0),
       ("KK Tomorrow", 1, 5, 8, "1:45", "assets/music/bensound-tomorrow.mp3", 4, 0);
