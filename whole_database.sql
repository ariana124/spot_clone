-- Creates the database for the spotify clone with the following tables:
--    users, artists, genres, albums, songs

CREATE DATABASE IF NOT EXISTS spot_clone;

USE spot_clone;

-- Table structure for the table 'artists'

CREATE TABLE IF NOT EXISTS artists (
       id INT AUTO INCREMENT NOT NULL,
       name VARCHAR(50) NOT NULL,
       PRIMARY KEY (id));

-- Table structure for the table 'genres'

CREATE TABLE IF NOT EXISTS genres (
       id INT AUTO INCREMENT NOT NULL,
       name VARCHAR(50) NOT NULL,
       PRIMARY KEY (id));

-- Table structure for the table 'albums'

CREATE TABLE IF NOT EXISTS albums (
       id INT AUTO INCREMENT NOT NULL,
       title VARCHAR(100) NOT NULL,
       artist INT NOT NULL,
       genre INT NOT NULL,
       artworkPath VARCHAR(500)
       PRIMARY KEY (id));

-- Table structure for the table 'songs'

CREATE TABLE IF NOT EXISTS songs (
       id INT AUTO INCREMENT NOT NULL,
       title VARCHAR(200) NOT NULL,
       artist INT NOT NULL,
       duration VARCHAR(8) NOT NULL,
       path VARCHAR(500) NOT NULL,
       albumOrder INT NOT NULL,
       plays INT NOT NULL
       PRIMARY KEY (id));
