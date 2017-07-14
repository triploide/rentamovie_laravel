<?php

use Illuminate\Database\Seeder;

class RealDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::insert($this->genres());
        DB::insert($this->movies());
        DB::insert($this->series());
        DB::insert($this->seasons());
        DB::insert($this->episodes());
        DB::insert($this->actors());
        DB::insert($this->actorMovie());
        DB::insert($this->actorEpisode());
    }

    private function genres()
    {
        return "INSERT INTO genres (name, active, created_at) VALUES
            ('Comedia', 1, '2016-7-04'),
            ('Terror', 1, '2014-7-04'),
            ('Drama', 1, '2013-7-04'),
            ('Accion', 1, '2011-7-04'),
            ('Ciencia Ficcion', 1, '2010-7-04'),
            ('Suspenso', 1, '2013-7-04'),
            ('Animacion', 1, '2005-7-04'),
            ('Aventuras', 1, '2003-7-04'),
            ('Documental', 1, '2008-7-04'),
            ('Infantiles', 1, '2013-7-04'),
            ('Fantasia', 1, '2011-7-04'),
            ('Musical', 1, '2013-7-04')
        ;";
    }

    private function movies()
    {
        return "INSERT INTO movies (title, rating, awards, release_date, length, genre_id, banner, price) VALUES 
            ('Avatar', 7.9, 3, '2010-10-04', 120, 5, 'http://lorempixel.com/720/360/', 10.00),
            ('Titanic', 7.7, 11, '1997-9-04', 320, 3, 'http://lorempixel.com/720/360/', 10.00),
            ('La Guerra de las galaxias: Episodio VI', 9.1, 7, '2004-7-04', NULL, 5, 'http://lorempixel.com/720/360/', 10.00),
            ('La Guerra de las galaxias: Episodio VII', 9, 6, '2003-11-04', 180, 5, 'http://lorempixel.com/720/360/', 10.00),
            ('Parque Jurasico', 8.3, 5, '1999-1-04', 270, 5, 'http://lorempixel.com/720/360/', 10.00),
            ('Harry Potter y las Reliquias de la Muerte - Parte 2', 9, 2, '2008-7-04', 190, 6, 'http://lorempixel.com/720/360/', 10.00),
            ('Transformers: el lado oscuro de la luna', 0.9, 1, '2005-7-04', NULL, 5, 'http://lorempixel.com/720/360/', 10.00),
            ('Harry Potter y la piedra filosofal', 10, 1, '2008-4-04', 120, 8, 'http://lorempixel.com/720/360/', 10.00),
            ('Harry Potter y la cámara de los secretos', 3.5, 2, '2009-8-04', 200, 8, 'http://lorempixel.com/720/360/', 10.00),
            ('El rey león', 9.1, 3, '2000-2-04', NULL, 10, 'http://lorempixel.com/720/360/', 10.00),
            ('Alicia en el país de las maravillas', 5.7, 2, '2008-7-04', 120, 1, 'http://lorempixel.com/720/360/', 10.00),
            ('Buscando a Nemo', 8.3, 2, '2000-7-04', 110, 7, 'http://lorempixel.com/720/360/', 10.00),
            ('Toy Story', 6.1, 0, '2008-3-04', 150, 7, 'http://lorempixel.com/720/360/', 10.00),
            ('Toy Story 2', 3.2, 2, '2003-4-04', 120, 7, 'http://lorempixel.com/720/360/', 10.00),
            ('La vida es bella', 8.3, 5, '1994-10-04', NULL, 3, 'http://lorempixel.com/720/360/', 10.00),
            ('Mi pobre angelito', 3.2, 1, '1989-1-04', 120, 1, 'http://lorempixel.com/720/360/', 10.00),
            ('Intensamente', 9, 2, '2008-7-04', 120, 7, 'http://lorempixel.com/720/360/', 10.00),
            ('Carrozas de fuego', 9.9, 7, '1980-7-04', 180, 1, 'http://lorempixel.com/720/360/', 10.00),
            ('Big', 7.3, 2, '1988-2-04', 130, 8, 'http://lorempixel.com/720/360/', 10.00),
            ('I am Sam', 9, 4, '1999-3-04', 130, 3, 'http://lorempixel.com/720/360/', 10.00),
            ('Hotel Transylvania', 7.1, 1, '2012-5-04', 90, 10, 'http://lorempixel.com/720/360/', 10.00)
        ;";
    }

    private function series()
    {
        return "INSERT INTO series(title, release_date, end_date, genre_id) VALUES
            ('Game of Thrones', '2011-1-01', '2016-3-04', 11),
            ('Supernatural', '2005-1-01', '2016-1-04', 6),
            ('The Walking Dead', '2010-1-01', '2016-1-04', 2),
            ('Person of Interest', '2011-1-01', '2015-1-04', 4),
            ('The Big Bang Theory', '2007-1-01', '2016-1-04', 1),
            ('Breaking Bad', '2008-1-01', '2013-1-04', 3)
        ;";
    }

    private function seasons()
    {
        return "INSERT INTO seasons (number, release_date, end_date, serie_id) VALUES
            (1, '2011-1-01', '2011-1-01',  1),
            (2, '2012-1-01', '2012-1-01',  1),
            (3, '2013-1-01', '2013-1-01',  1),
            (4, '2014-1-01', '2014-1-01',  1),
            (5, '2015-1-01', '2015-1-01',  1),
            (6, '2016-1-01', '2016-1-01',  1),
            (7, '2017-1-01', '2017-1-01',  1),
        
            (1, '2005-1-01', '2006-1-01',  2),
            (2, '2006-1-01', '2007-1-01',  2),
            (3, '2007-1-01', '2008-1-01',  2),
            (4, '2008-1-01', '2009-1-01',  2),
            (5, '2009-1-01', '2010-1-01',  2),
            (6, '2010-1-01', '2011-1-01',  2),
            (7, '2011-1-01', '2012-1-01',  2),
            (8, '2012-1-01', '2013-1-01',  2),
            (9, '2013-1-01', '2014-1-01',  2),
            (10, '2014-1-01', '2015-1-01',  2),
            (11, '2015-1-01', '2016-1-01',  2),
            (12, '2016-1-01', '2017-1-01',  2),
        
            (1, '2010-1-01', '2010-1-01',  3),
            (2, '2011-1-01', '2012-1-01',  3),
            (3, '2012-1-01', '2013-1-01',  3),
            (4, '2013-1-01', '2014-1-01',  3),
            (5, '2014-1-01', '2015-1-01',  3),
            (6, '2015-1-01', '2016-1-01',  3),
            (7, '2016-1-01', '2017-1-01', 3),
        
            (1, '2011-1-01', '2012-1-01',  4),
            (2, '2012-1-01', '2013-1-01', 4),
            (3, '2013-1-01', '2014-1-01',  4),
            (4, '2014-1-01', '2015-1-01',  4),
            (5, '2015-1-01', '2016-1-01',  4),
        
            (1, '2006-1-01', '2008-1-01',  5),
            (2, '2008-1-01', '2009-1-01',  5),
            (3, '2009-1-01', '2010-1-01',  5),
            (4, '2010-1-01', '2011-1-01',  5),
            (5, '2011-1-01', '2012-1-01',  5),
            (6, '2012-1-01', '2013-1-01',  5),
            (7, '2013-1-01', '2014-1-01',  5),
            (8, '2014-1-01', '2015-1-01',  5),
            (9, '2015-1-01', '2016-1-01',  5),
            (10, '2016-1-01', '2017-1-01',  5),
        
            (1, '2008-1-01', '2008-1-01',  6),
            (2, '2009-1-01', '2009-1-01', 6),
            (3, '2010-1-01', '2010-1-01',  6),
            (4, '2011-1-01', '2011-1-01',  6),
            (5, '2012-1-01', '2012-1-01',  6)
        ;";
    }

    private function episodes()
    {
        return "INSERT INTO episodes (title, number, release_date, rating, season_id, banner, price) VALUES
            ('Winter Is Coming', 1, '2011-1-01', 7.3, 1, 'http://lorempixel.com/720/360/', 10.00),
            ('The North Remembers', 1, '2012-1-01', 8.3, 2, 'http://lorempixel.com/720/360/', 10.00),
            ('Valar Dohaeris', 1, '2013-1-01', 6.3, 3, 'http://lorempixel.com/720/360/', 10.00),
            ('Two Swords', 1, '2014-1-01', 7.5, 4, 'http://lorempixel.com/720/360/', 10.00),
            ('The Wars to Come', 1, '2015-1-01', 9.3, 5, 'http://lorempixel.com/720/360/', 10.00),
            ('The Red Woman', 1, '2016-1-01', 7.7, 6, 'http://lorempixel.com/720/360/', 10.00),
        
            ('Pilot', 1, '2005-1-01', 7.3, 8, 'http://lorempixel.com/720/360/', 10.00),
            ('In My Time of Dying', 1, '2006-1-01', 8.3, 9, 'http://lorempixel.com/720/360/', 10.00),
            ('The Magnificent Seven', 1, '2007-1-01', 6.3, 10, 'http://lorempixel.com/720/360/', 10.00),
            ('Lazarus Rising', 1, '2008-1-01', 7.5, 11, 'http://lorempixel.com/720/360/', 10.00),
            ('Sympathy for the Devil', 1, '2009-1-01', 9.3, 12, 'http://lorempixel.com/720/360/', 10.00),
            ('Exile on Main St.', 1, '2010-1-01', 7.7, 13, 'http://lorempixel.com/720/360/', 10.00),
            ('Meet the New Boss', 1, '2011-1-01', 7.3, 14, 'http://lorempixel.com/720/360/', 10.00),
            ('We Need to Talk About Kevin', 1, '2012-1-01', 8.3, 15, 'http://lorempixel.com/720/360/', 10.00),
            ('I Think Im Gonna Like It Here', 1, '2013-1-01', 6.3, 16, 'http://lorempixel.com/720/360/', 10.00),
            ('A Very Special Supernatural Special', 1, '2014-1-01', 7.5, 17, 'http://lorempixel.com/720/360/', 10.00),
            ('Out of the Darkness, Into the Fire', 1, '2015-1-01', 9.3, 18, 'http://lorempixel.com/720/360/', 10.00),
            
            ('Days Gone Bye', 1, '2010-1-01', 7.3, 20, 'http://lorempixel.com/720/360/', 10.00),
            ('What Lies Ahead', 1, '2011-1-01', 8.3, 21, 'http://lorempixel.com/720/360/', 10.00),
            ('Seed', 1, '2012-1-01', 6.3, 22, 'http://lorempixel.com/720/360/', 10.00),
            ('30 Days Without an Accident', 1, '2013-1-01', 7.5, 23, 'http://lorempixel.com/720/360/', 10.00),
            ('No Sanctuary', 1, '2014-1-01', 9.3, 24, 'http://lorempixel.com/720/360/', 10.00),
            ('First Time Again', 1, '2015-1-01', 7.7, 25, 'http://lorempixel.com/720/360/', 10.00),
            
            ('Pilot', 1, '2011-1-01', 7.3, 27, 'http://lorempixel.com/720/360/', 10.00),
            ('The Contingency', 1, '2012-1-01', 8.3, 28, 'http://lorempixel.com/720/360/', 10.00),
            ('Liberty', 1, '2013-1-01', 6.3, 29, 'http://lorempixel.com/720/360/', 10.00),
            ('Panopticon', 1, '2015-1-01', 7.5, 30, 'http://lorempixel.com/720/360/', 10.00),
            ('B.S.O.D.', 1, '2016-1-01', 9.3, 31, 'http://lorempixel.com/720/360/', 10.00),
            
            ('Pilot', 1, '2005-1-01', 7.3, 32, 'http://lorempixel.com/720/360/', 10.00),
            ('The Bad Fish Paradigm', 1, '2006-1-01', 8.3, 33, 'http://lorempixel.com/720/360/', 10.00),
            ('The Electric Can Opener Fluctuation', 1, '2007-1-01', 6.3, 34, 'http://lorempixel.com/720/360/', 10.00),
            ('The Robotic Manipulation', 1, '2008-1-01', 7.5, 35, 'http://lorempixel.com/720/360/', 10.00),
            ('The Skank Reflex Analysis', 1, '2009-1-01', 9.3, 36, 'http://lorempixel.com/720/360/', 10.00),
            ('The Date Night Variable', 1, '2010-1-01', 7.7, 37, 'http://lorempixel.com/720/360/', 10.00),
            ('The Hofstadter Insufficiency', 1, '2011-1-01', 7.3, 38, 'http://lorempixel.com/720/360/', 10.00),
            ('The Locomotion Interruption', 1, '2012-1-01', 8.3, 39, 'http://lorempixel.com/720/360/', 10.00),
            ('The Matrimonial Momentum', 1, '2013-1-01', 6.3, 40, 'http://lorempixel.com/720/360/', 10.00),
            
            ('Pilot', 1, '2009-1-01', 7.3, 42, 'http://lorempixel.com/720/360/', 10.00),
            ('Seven Thirty-Seven', 1, '2010-1-01', 8.3, 43, 'http://lorempixel.com/720/360/', 10.00),
            ('No Más', 1, '2011-1-01', 6.3, 44, 'http://lorempixel.com/720/360/', 10.00),
            ('Box Cutter', 1, '2012-1-01', 7.5, 45, 'http://lorempixel.com/720/360/', 10.00),
            ('Live Free or Die', 1, '2013-1-01', 9.3, 46, 'http://lorempixel.com/720/360/', 10.00),
            ('Madrigal', 2, '2013-2-01', 9.3, 46, 'http://lorempixel.com/720/360/', 10.00),
            ('Hazard Pay', 3, '2013-3-01', 9.3, 46, 'http://lorempixel.com/720/360/', 10.00),
            ('Fifty-One', 4, '2013-4-01', 9.3, 46, 'http://lorempixel.com/720/360/', 10.00),
            ('Dead Freight', 5, '2013-5-01', 9.3, 46, 'http://lorempixel.com/720/360/', 10.00),
            ('Buyout', 6, '2013-6-01', 9.3, 46, 'http://lorempixel.com/720/360/', 10.00),
            ('Say My Name', 7, '2013-6-01', 9.3, 46, 'http://lorempixel.com/720/360/', 10.00),
            ('Gliding Over All', 8, '2013-7-01', 9.3, 46, 'http://lorempixel.com/720/360/', 10.00),
            ('Blood Money', 9, '2013-7-01', 9.3, 46, 'http://lorempixel.com/720/360/', 10.00),
            ('Buried', 10, '2013-7-01', 9.3, 46, 'http://lorempixel.com/720/360/', 10.00),
            ('Confessions', 11, '2013-8-01', 9.3, 46, 'http://lorempixel.com/720/360/', 10.00),
            ('Rabid Dog', 12, '2013-9-01', 9.3, 46, 'http://lorempixel.com/720/360/', 10.00),
            ('To hajiilee', 13, '2013-10-01', 9.3, 46, 'http://lorempixel.com/720/360/', 10.00),
            ('Ozymandias', 14, '2013-11-01', 9.3, 46, 'http://lorempixel.com/720/360/', 10.00),
            ('Granite State', 15, '2013-12-01', 9.3, 46, 'http://lorempixel.com/720/360/', 10.00),
            ('Felina', 16, '2013-12-01', 9.3, 46, 'http://lorempixel.com/720/360/', 10.00)
        ;";
    }

    private function actors()
    {
        return "INSERT INTO actors (first_name, last_name, rating) VALUES
            ('Sam', 'Worthington', 7.5),
            ('Zoe', 'Saldana', 5.5),
            ('Sigourney', 'Weaver', 9.7),
            ('Leonardo', 'Di Caprio', 3.5),
            ('Kate', 'Winslet', 1.5),
            ('Billy', 'Zane', 7.5),
            ('Mark', 'Hamill', 6.5),
            ('Harrison', 'Ford', 7.5),
            ('Carrie', 'Fisher', 7.5),
            ('Sam', 'Neill', 2.5),
            ('Laura', 'Dern', 7.5),
            ('Jeff', 'Goldblum', 4.5),
            ('Daniel', 'Radcliffe', 7.5),
            ('Emma', 'Watson', 2.5),
            ('Rupert', 'Grint', 6.2),
            ('Shia', 'LaBeouf', 9.5),
            ('Rosie', 'Huntington-Whiteley', 1.5),
            ('Matthew', 'Broderick', 6.1),
            ('James', 'Earl Jones', 7.5),
            ('Jeremy', 'Irons', 7.2),
            ('Johnny', 'Depp', 1.5),
            ('Helena', 'Bonham Carter', 7.5),
            ('Mia', 'Wasikowska', 7.5),
            ('Albert', 'Brooks', 2.5),
            ('Ellen', 'DeGeneres', 2.6),
            ('Alexander', 'Gould', 7.5),
            ('Tom', 'Hanks', 4.4),
            ('Tim', 'Allen', 7.5),
            ('Sean', 'Penn', 9.2),
            ('Adam', 'Sandler', 3.1),
            ('Renee', 'Zellweger', 9.5),
            ('Emilia', 'Clarke', 8.2),
            ('Peter', 'Dinklage', 2.3),
            ('Kit', 'Harington', 2.4),
            ('Jared', 'Padalecki', 2.8),
            ('Jensen', 'Ackles', 5.5),
            ('Jim', 'Beaver', 2.6),
            ('Andrew', 'Lincoln', 3.3),
            ('Jon', 'Bernthal', 2.9),
            ('Sarah', 'Callies', 2.4),
            ('Jim', 'Caviezel', 1.9),
            ('Taraji', 'Henson', 5.9),
            ('Kevin', 'Chapman', 2.9),
            ('Johnny', 'Galecki', 2.3),
            ('Jim', 'Parsons', 6.9),
            ('Kaley', 'Cuoco', 2.3),
            ('Bryan', 'Cranston', 7.9),
            ('Aaron', 'Paul', 5.9),
            ('Anna', 'Gunn', 3.7)
        ;";
    }

    private function actorMovie()
    {
        return "INSERT INTO actor_movie (actor_id, movie_id) VALUES
            (1, 1),
            (2, 1),
            (3, 1),
            (4, 2),
            (5, 2),
            (6, 2),
            (7, 3),
            (7, 4),
            (8, 3),
            (8, 4),
            (9, 3),
            (9, 4),
            (10, 5),
            (11, 5),
            (12, 5),
            (13, 6),
            (13, 8),
            (13, 9),
            (14, 6),
            (14, 8),
            (14, 9),
            (15, 6),
            (15, 8),
            (15, 9),
            (16, 7),
            (17, 7),
            (18, 7),
            (19, 10),
            (20, 10),
            (21, 11),
            (22, 11),
            (22, 9),
            (23, 11),
            (24, 12),
            (25, 12),
            (26, 12),
            (27, 13),
            (27, 14),
            (27, 19),
            (28, 13),
            (28, 14),
            (29, 20),
            (30, 21)
        ;";
    }

    private function actorEpisode()
    {
        return "INSERT INTO actor_episode (actor_id, episode_id) VALUES
            (32, 1),
            (32, 2),
            (32, 3),
            (32, 4),
            (32, 5),
            (33, 1),
            (33, 2),
            (33, 3),
            (33, 4),
            (33, 5),
            (33, 6),
            (34, 1),
            (34, 2),
            (34, 4),
            (34, 5),
            (34, 6),
            
            (35, 7),
            (35, 8),
            (35, 9),
            (35, 10),
            (35, 11),
            (35, 12),
            (35, 13),
            (35, 15),
            (35, 16),
            (35, 17),
            (36, 7),
            (36, 8),
            (36, 9),
            (36, 10),
            (36, 13),
            (36, 14),
            (36, 15),
            (36, 16),
            (36, 17),
            (37, 7),
            (37, 8),
            (37, 9),
            (37, 10),
            (37, 11),
            (37, 12),
            (37, 13),
            (37, 14),
            (37, 15),
            (37, 17),
            
            (38, 18),
            (38, 19),
            (38, 20),
            (38, 22),
            (38, 23),
            (39, 18),
            (39, 19),
            (39, 20),
            (39, 21),
            (39, 22),
            (39, 23),
            (40, 19),
            (40, 20),
            (40, 21),
            (40, 22),
            (40, 23),
            
            (41, 24),
            (41, 25),
            (41, 26),
            (41, 27),
            (41, 28),
            (42, 24),
            (42, 25),
            (42, 26),
            (42, 27),
            (42, 28),
            (43, 24),
            (43, 26),
            (43, 27),
            (43, 28),
            
            (44, 29),
            (44, 30),
            (44, 31),
            (44, 32),
            (44, 33),
            (44, 34),
            (44, 35),
            (44, 36),
            (44, 37),
            (45, 29),
            (45, 31),
            (45, 32),
            (45, 33),
            (45, 34),
            (45, 35),
            (45, 36),
            (45, 37),
            (46, 29),
            (46, 30),
            (46, 33),
            (46, 35),
            (46, 36),
            (46, 37),
            
            (47, 38),
            (47, 39),
            (47, 40),
            (47, 41),
            (47, 42),
            (47, 45),
            (47, 46),
            (47, 47),
            (47, 48),
            (47, 49),
            (47, 50),
            (47, 51),
            (47, 52),
            (47, 53),
            (47, 54),
            (47, 55),
            (47, 56),
            (48, 40),
            (48, 41),
            (48, 42),
            (48, 43),
            (48, 44),
            (48, 45),
            (48, 47),
            (48, 48),
            (48, 49),
            (48, 50),
            (48, 51),
            (48, 52),
            (48, 54),
            (48, 55),
            (48, 56),
            (48, 57),
            (49, 38),
            (49, 39),
            (49, 40),
            (49, 41),
            (49, 42),
            (49, 43),
            (49, 44),
            (49, 46),
            (49, 47),
            (49, 48),
            (49, 49),
            (49, 50),
            (49, 51),
            (49, 52),
            (49, 54),
            (49, 55),
            (49, 57)
        ;";
    }
}
