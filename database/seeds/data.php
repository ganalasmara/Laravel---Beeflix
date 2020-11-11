<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\facades\DB;

class data extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('genres')->insert([
            [
                'name'=>'Drama'
            ],
            
            [
                'name'=>'Kids'
            ],
            
            [
                'name'=>'TV Show'
            ]
        ]);

        DB::table('movies')->insert([
            [
                'genre_id'=>'1',
                'title'=>'Reply 1988',
                'photo'=>'../img/reply1988.jpg',
                'description'=> 'Follows the lives of 5 families living on the same street in a neighbourhood called Ssangmundong in Seoul. A nostalgic look back at the year 1988.',
                'rating'=>'5'
            ],
            
            [
                'genre_id'=>'1',
                'title'=>'Along with the Gods',
                'photo'=>'../img/alonggods.jpg',
                'description'=> 'Three grim reapers escorts a man to the afterlife and will decide his fate based on what he had done when he was alive.',
                'rating'=>'5'
            ],
            
            [
                'genre_id'=>'1',
                'title'=>'Itaewon Class',
                'photo'=>'../img/itaewon.jpg',
                'description'=> 'An ex-con and his friends fight to make their ambitious dreams for their street bar a reality.',
                'rating'=>'4'
            ],

            [
                'genre_id'=>'1',
                'title'=>'Extracullicular',
                'photo'=>'../img/extra.jpg',
                'description'=> 'Determined to escape a dead-end life, a gifted high school student turns to a life of crime to ensure he can pay for college.',
                'rating'=>'3'
            ],

            [
                'genre_id'=>'2',
                'title'=>'Spongebob Squarepants',
                'photo'=>'../img/spongebob.jpg',
                'description'=> 'A yellow sea sponge named SpongeBob SquarePants, who enjoys being a cook at Krusty Krab, lives in the Pacific Ocean. He embarks on various adventures with his friends at Bikini Bottom.',
                'rating'=>'5'
            ],
            
            [
                'genre_id'=>'2',
                'title'=>'Danny Phantom',
                'photo'=>'../img/danny.jpg',
                'description'=> 'Danny Fenton was once your typical kid until he accidentally blew up his parents laboratory and became ghost-hunting superhero Danny Phantom.',
                'rating'=>'3'
            ],
            
            [
                'genre_id'=>'2',
                'title'=>'Jimmy Neutron',
                'photo'=>'../img/jimmy.jpg',
                'description'=> 'Jimmy is a fifth grade genius always inventing some new gadget to solve some new problem. With his robotic dog Goddard always ready to lend advice, and his best friends Carl and Sheen,',
                'rating'=>'4'
            ],

            [
                'genre_id'=>'2',
                'title'=>'Mickey Mouse',
                'photo'=>'../img/mickey.jpg',
                'description'=> 'Mickey, Minnie, Pluto, Goofy, Daisy, Donald and many other clubhouse friends go on educational adventures and impart important lessons in a fun way.',
                'rating'=>'2'
            ],

            [
                'genre_id'=>'3',
                'title'=>'Sword Art Online',
                'photo'=>'../img/sao.jpg',
                'description'=> 'In the year 2022, virtual reality has progressed by leaps and bounds, and a massive online role-playing game called Sword Art Online (SAO) is launched. With the aid of "NerveGear" technology, players can control their avatars within the game using nothing but their own thoughts.',
                'rating'=>'3'
            ],
            
            [
                'genre_id'=>'3',
                'title'=>'Demon Slayer',
                'photo'=>'../img/demon.jpg',
                'description'=> 'Ever since the death of his father, the burden of supporting the family has fallen upon Tanjirou Kamados shoulders. Though living impoverished on a remote mountain, the Kamado family are able to enjoy a relatively peaceful and happy life.',
                'rating'=>'5'
            ],
            
            [
                'genre_id'=>'3',
                'title'=>'Dr. Stone',
                'photo'=>'../img/drstone.jpg',
                'description'=> 'After five years of harboring unspoken feelings, high-schooler Taiju Ooki is finally ready to confess his love to Yuzuriha Ogawa. Just when Taiju begins his confession however, a blinding green light strikes the Earth and petrifies mankind around the world—turning every single human into stone.',
                'rating'=>'5'
            ],

            [
                'genre_id'=>'3',
                'title'=>'Attack on Titan',
                'photo'=>'../img/aot.jpg',
                'description'=> 'Centuries ago, mankind was slaughtered to near extinction by monstrous humanoid creatures called titans, forcing humans to hide in fear behind enormous concentric walls. What makes these giants truly terrifying is that their taste for human flesh is not born out of hunger but what appears to be out of pleasure. ',
                'rating'=>'5'
            ]
        ]);

        DB::table('episodes')->insert([
            [
                'movie_id'=>'1',
                'episode'=>'1',
                'title'=>'family is the priority'
            ],
            
            [
                'movie_id'=>'1',
                'episode'=>'2',
                'title'=>'first love'
            ],
            
            [
                'movie_id'=>'1',
                'episode'=>'3',
                'title'=>'heartbroken'
            ],

            [
                'movie_id'=>'1',
                'episode'=>'4',
                'title'=>'love and lies'
            ],
            
            [
                'movie_id'=>'1',
                'episode'=>'5',
                'title'=>'understanding love'
            ],
            
            [
                'movie_id'=>'1',
                'episode'=>'6',
                'title'=>'lies, lies, and lies'
            ],

            [
                'movie_id'=>'1',
                'episode'=>'7',
                'title'=>'love is beautiful'
            ],
            
            [
                'movie_id'=>'1',
                'episode'=>'8',
                'title'=>'unexpected'
            ],
            
            [
                'movie_id'=>'1',
                'episode'=>'9',
                'title'=>'love journey'
            ],



            [
                'movie_id'=>'2',
                'episode'=>'1',
                'title'=>'gods and humans'
            ],
            
            [
                'movie_id'=>'2',
                'episode'=>'2',
                'title'=>'forbidden path'
            ],
            
            [
                'movie_id'=>'2',
                'episode'=>'3',
                'title'=>'unruled'
            ],

            [
                'movie_id'=>'2',
                'episode'=>'4',
                'title'=>'heavens feel'
            ],
            
            [
                'movie_id'=>'2',
                'episode'=>'5',
                'title'=>'god vs human'
            ],
            
            [
                'movie_id'=>'2',
                'episode'=>'6',
                'title'=>'unexpected guest'
            ],

            [
                'movie_id'=>'2',
                'episode'=>'7',
                'title'=>'unstoppable time'
            ],
            
            [
                'movie_id'=>'2',
                'episode'=>'8',
                'title'=>'infinity war'
            ],
            
            [
                'movie_id'=>'2',
                'episode'=>'9',
                'title'=>'end of time'
            ],

            

            [
                'movie_id'=>'3',
                'episode'=>'1',
                'title'=>'the first step'
            ],
            
            [
                'movie_id'=>'3',
                'episode'=>'2',
                'title'=>'first love'
            ],
            
            [
                'movie_id'=>'3',
                'episode'=>'3',
                'title'=>'first tragedy'
            ],

            [
                'movie_id'=>'3',
                'episode'=>'4',
                'title'=>'moving on'
            ],
            
            [
                'movie_id'=>'3',
                'episode'=>'5',
                'title'=>'a new start'
            ],
            
            [
                'movie_id'=>'3',
                'episode'=>'6',
                'title'=>'progress'
            ],

            [
                'movie_id'=>'3',
                'episode'=>'7',
                'title'=>'a new rival'
            ],
            
            [
                'movie_id'=>'3',
                'episode'=>'8',
                'title'=>'final showdown'
            ],
            
            [
                'movie_id'=>'3',
                'episode'=>'9',
                'title'=>'success'
            ],

            [
                'movie_id'=>'4',
                'episode'=>'1',
                'title'=>'hardship of life'
            ],
            
            [
                'movie_id'=>'4',
                'episode'=>'2',
                'title'=>'criminal'
            ],
            
            [
                'movie_id'=>'4',
                'episode'=>'3',
                'title'=>'uncontrolled'
            ],

            [
                'movie_id'=>'4',
                'episode'=>'4',
                'title'=>'unruled society'
            ],
            
            [
                'movie_id'=>'4',
                'episode'=>'5',
                'title'=>'daydream'
            ],
            
            [
                'movie_id'=>'4',
                'episode'=>'6',
                'title'=>'drama queen'
            ],

            [
                'movie_id'=>'4',
                'episode'=>'7',
                'title'=>'infested mind'
            ],
            
            [
                'movie_id'=>'4',
                'episode'=>'8',
                'title'=>'cheater'
            ],
            
            [
                'movie_id'=>'4',
                'episode'=>'9',
                'title'=>'death'
            ],

            [
                'movie_id'=>'5',
                'episode'=>'1',
                'title'=>'Episode 1'
            ],
            
            [
                'movie_id'=>'5',
                'episode'=>'2',
                'title'=>'Episode 2'
            ],
            
            [
                'movie_id'=>'5',
                'episode'=>'3',
                'title'=>'Episode 3'
            ],

            [
                'movie_id'=>'5',
                'episode'=>'4',
                'title'=>'Episode 4'
            ],
            
            [
                'movie_id'=>'5',
                'episode'=>'5',
                'title'=>'Episode 5'
            ],
            
            [
                'movie_id'=>'5',
                'episode'=>'6',
                'title'=>'Episode 6'
            ],

            [
                'movie_id'=>'5',
                'episode'=>'7',
                'title'=>'Episode 7'
            ],
            
            [
                'movie_id'=>'5',
                'episode'=>'8',
                'title'=>'Episode 8'
            ],
            
            [
                'movie_id'=>'5',
                'episode'=>'9',
                'title'=>'Episode 9'
            ],


            [
                'movie_id'=>'6',
                'episode'=>'1',
                'title'=>'Episode 1'
            ],
            
            [
                'movie_id'=>'6',
                'episode'=>'2',
                'title'=>'Episode 2'
            ],
            
            [
                'movie_id'=>'6',
                'episode'=>'3',
                'title'=>'Episode 3'
            ],

            [
                'movie_id'=>'6',
                'episode'=>'4',
                'title'=>'Episode 4'
            ],
            
            [
                'movie_id'=>'6',
                'episode'=>'5',
                'title'=>'Episode 5'
            ],
            
            [
                'movie_id'=>'6',
                'episode'=>'6',
                'title'=>'Episode 6'
            ],

            [
                'movie_id'=>'6',
                'episode'=>'7',
                'title'=>'Episode 7'
            ],
            
            [
                'movie_id'=>'6',
                'episode'=>'8',
                'title'=>'Episode 8'
            ],
            
            [
                'movie_id'=>'6',
                'episode'=>'9',
                'title'=>'Episode 9'
            ],


            [
                'movie_id'=>'7',
                'episode'=>'1',
                'title'=>'Episode 1'
            ],
            
            [
                'movie_id'=>'7',
                'episode'=>'2',
                'title'=>'Episode 2'
            ],
            
            [
                'movie_id'=>'7',
                'episode'=>'3',
                'title'=>'Episode 3'
            ],

            [
                'movie_id'=>'7',
                'episode'=>'4',
                'title'=>'Episode 4'
            ],
            
            [
                'movie_id'=>'7',
                'episode'=>'5',
                'title'=>'Episode 5'
            ],
            
            [
                'movie_id'=>'7',
                'episode'=>'6',
                'title'=>'Episode 6'
            ],

            [
                'movie_id'=>'7',
                'episode'=>'7',
                'title'=>'Episode 7'
            ],
            
            [
                'movie_id'=>'7',
                'episode'=>'8',
                'title'=>'Episode 8'
            ],
            
            [
                'movie_id'=>'7',
                'episode'=>'9',
                'title'=>'Episode 9'
            ],

            [
                'movie_id'=>'8',
                'episode'=>'1',
                'title'=>'Episode 1'
            ],
            
            [
                'movie_id'=>'8',
                'episode'=>'2',
                'title'=>'Episode 2'
            ],
            
            [
                'movie_id'=>'8',
                'episode'=>'3',
                'title'=>'Episode 3'
            ],

            [
                'movie_id'=>'8',
                'episode'=>'4',
                'title'=>'Episode 4'
            ],
            
            [
                'movie_id'=>'8',
                'episode'=>'5',
                'title'=>'Episode 5'
            ],
            
            [
                'movie_id'=>'8',
                'episode'=>'6',
                'title'=>'Episode 6'
            ],

            [
                'movie_id'=>'8',
                'episode'=>'7',
                'title'=>'Episode 7'
            ],
            
            [
                'movie_id'=>'8',
                'episode'=>'8',
                'title'=>'Episode 8'
            ],
            
            [
                'movie_id'=>'8',
                'episode'=>'9',
                'title'=>'Episode 9'
            ],

            [
                'movie_id'=>'9',
                'episode'=>'1',
                'title'=>'Episode 1'
            ],
            
            [
                'movie_id'=>'9',
                'episode'=>'2',
                'title'=>'Episode 2'
            ],
            
            [
                'movie_id'=>'9',
                'episode'=>'3',
                'title'=>'Episode 3'
            ],

            [
                'movie_id'=>'9',
                'episode'=>'4',
                'title'=>'Episode 4'
            ],
            
            [
                'movie_id'=>'9',
                'episode'=>'5',
                'title'=>'Episode 5'
            ],
            
            [
                'movie_id'=>'9',
                'episode'=>'6',
                'title'=>'Episode 6'
            ],

            [
                'movie_id'=>'9',
                'episode'=>'7',
                'title'=>'Episode 7'
            ],
            
            [
                'movie_id'=>'9',
                'episode'=>'8',
                'title'=>'Episode 8'
            ],
            
            [
                'movie_id'=>'9',
                'episode'=>'9',
                'title'=>'Episode 9'
            ]
        ]);       
    }
}
