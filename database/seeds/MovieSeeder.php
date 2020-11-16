<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('movies')->insert([
            [
                'GenreID'=>'1',
                'Title'=>'Fight For My Way',
                'Photo'=>'fight for my way.jpg',
                'Description'=>'A former taekwondo champion and an information desk worker aspire to chase their dreams in a world that isn’t kind to those with mediocre credentials.',
                'Rating'=>'4.8'
            ],
            [
                'GenreID'=>'1',
                'Title'=>'Goblin',
                'Photo'=>'goblin.jpg',
                'Description'=>'In his quest for a bride to break his immortal curse, a 939-year-old guardian of souls meets a grim reaper and a sprightly student with a tragic past.',
                'Rating'=>'4.5'
            ],
            [
                'GenreID'=>'1',
                'Title'=>'Itaewon Class',
                'Photo'=>'itaewon class.png',
                'Description'=>'In a colorful Seoul neighborhood, an ex-con and his friends fight a mighty foe to make their ambitious dreams for their street bar a reality.',
                'Rating'=>'4.9'
            ],
            [
                'GenreID'=>'1',
                'Title'=>'Its Okay Not to Be Okay',
                'Photo'=>'its okay not to be okay.jpeg',
                'Description'=>'An extraordinary road to emotional healing opens up for an antisocial childrens book writer and a selfless psych ward caretaker when they cross paths.',
                'Rating'=>'4.4'
            ],
            [
                'GenreID'=>'1',
                'Title'=>'My Love From Another Star',
                'Photo'=>'my love from another star.jpg',
                'Description'=>'An alien who came to Earth 400 years ago is almost able to return to his own planet, but when he meets a famous actress, he doesnt want to go home.',
                'Rating'=>'4.5'
            ],
            [
                'GenreID'=>'1',
                'Title'=>'Start Up',
                'Photo'=>'start up.jpg',
                'Description'=>'“Startup” is set in South Korea’s fictional Silicon Valley, called Sandbox, and tells the story of people in the world of startup companies.
                Seo Dal Mi dreams of becoming Korea’s Steve Jobs. She’s an adventurer who doesn’t own much, but has a grand plan for herself. She also has experience in a wide range of part-time jobs and is a person of great vitality. 
                Nam Do San is the founder of Samsan Tech. He was once the pride of his family as a math genius, but for the past two years, he’s been going nowhere with his company’s investments. It turns out that Seo Dal Mi remembers him as her ‘cool first love’, and he decides to begin a startup in the hope of turning Seo Dal Mi’s misunderstanding into reality.
                Han Ji Pyung begins a startup company to pay off his debt. A team leader at SH Venture Capital, his astonishing investment skills and sharp tongue earn him the nickname, “the Gordan Ramsay of investments”. Though he’s prickly to most others, he’s softer than anyone to one special person who granted him a great favor in the past.
                Lastly, CEO Won In Jae has everything society respects: the educational background, beautiful appearance, and money. She considers her background as a second generation chaebol a weakness and does everything she can to create success on her own and be acknowledged for her skills. However, she ends up being used and thrown away by her father, and in order to stop being a disposable piece on her father’s chess board, she throws herself into a startup.',
                'Rating'=>'5.0'
            ],
            [
                'GenreID'=>'1',
                'Title'=>'Tales of Nine Tailed',
                'Photo'=>'tales of nine tailed.jpg',
                'Description'=>'The story features the mythical nine-tailed fox, or gumiho, Lee Yeon who has just settled in the city. Able to transform into human form, he goes about cleansing human spirits, all the while creating havoc. Enter the talented television producer Nam Ji Ah whose current show features urban myths.  With nerves of steel, she will stop at nothing to secure unusual, if not dangerous, subject matter to showcase. She sets her sights on Lee Yeon who appears just too good to be true;  irresistibly handsome, intelligent, fit; in fact the ideal guest.  But his heartlessness will render doubt in her that he is indeed of this world. 
                Step-brother to Lee Yeon is the captivating Lee Rang, reputed to be the most dangerous of all gumihos living among humans.  Despite being half-human himself,  he harbors a deep-seated contempt for all people. For sport,  he will unleash his seductive prowess upon his human-du-jour,  by promising to grant them their wishes, only to trick them into paying a hefty price for their earthly desires',
                'Rating'=>'3.9'
            ],
            [
                'GenreID'=>'2',
                'Title'=>'Ben 10',
                'Photo'=>'ben 10.jpg',
                'Description'=>'The story of Ben Tennyson, a typical kid who becomes very atypical after he discovers the Omnitrix, a mysterious alien device with the power to transform the wearer into ten different alien species.',
                'Rating'=>'4.2'
            ],
            [
                'GenreID'=>'2',
                'Title'=>'Boss Baby',
                'Photo'=>'boss baby.jpg',
                'Description'=>'The Boss Baby brings his big brother Tim to the office to teach him the art of business in this animated series sprung from the hit film.',
                'Rating'=>'4.0'
            ],
            [
                'GenreID'=>'2',
                'Title'=>'Digimon Adventure',
                'Photo'=>'digimon.jpg',
                'Description'=>'A group of young children become swept up into a digital realm where they meet talking monsters who aid them in battle against a threat to both their worlds.',
                'Rating'=>'5.0'
            ],
            [
                'GenreID'=>'2',
                'Title'=>'Home Alone',
                'Photo'=>'home alone.jpg',
                'Description'=>'When bratty 8-year-old Kevin McCallister (Macaulay Culkin) acts out the night before a family trip to Paris, his mother (Catherine O Hara) makes him sleep in the attic. After the McCallisters mistakenly leave for the airport without Kevin, he awakens to an empty house and assumes his wish to have no family has come true. But his excitement sours when he realizes that two con men (Joe Pesci, Daniel Stern) plan to rob the McCallister residence, and that he alone must protect the family home.',
                'Rating'=>'4.2'
            ],
            [
                'GenreID'=>'2',
                'Title'=>'Pokemon',
                'Photo'=>'pokemon.png',
                'Description'=>'Along with Misty of Cerulean City, who aims to become a Water Pokémon Master, and Brock of Pewter City, who wishes to become a Pokémon Breeder, Ash travels around the Kanto region, despite being pursued by Team Rocket Trio - Jessie, James and Meowth.',
                'Rating'=>'4.0'
            ],
            [
                'GenreID'=>'2',
                'Title'=>'Spongebob',
                'Photo'=>'spongebob.jpg',
                'Description'=>'Relentlessly optimistic SpongeBob SquarePants lives in the undersea township of Bikini Bottom, along with an assortment of zany supporting characters. Among them is his best friend, the lovable - but dim - sea star named Patrick; the irritable perfectionist neighbor named Squidward; and an athletic squirrel named Sandy who lives in an undersea treedome. SpongeBob is employed as a fry cook at the local burger place, The Krusty Krab, which is operated by a penny-pinching crustacean named Mr. Krabs.',
                'Rating'=>'4.9'
            ],
            [
                'GenreID'=>'2',
                'Title'=>'Tom N Jerry',
                'Photo'=>'tom n jerry.jpg',
                'Description'=>'Tom and Jerry is a series of theatrical musical cartoon shorts created by William Hanna and Joseph Barbera for Metro-Goldwyn-Mayer that centered on a never-ending rivalry between a house cat (Tom) and a mouse (Jerry) whose chases and battles often involved comic violence.',
                'Rating'=>'4.7'
            ],
            [
                'GenreID'=>'3',
                'Title'=>'Black Mirror',
                'Photo'=>'black mirror.jpg',
                'Description'=>'This sci-fi anthology series explores a twisted, high-tech near-future where humanitys greatest innovations and darkest instincts collide.',
                'Rating'=>'4.5'
            ],
            [
                'GenreID'=>'3',
                'Title'=>'Kingdom',
                'Photo'=>'kingdom.jpg',
                'Description'=>'Set during Koreas Joseon period, three years after the Japanese invasions of Korea, the first season depicts the story of Crown Prince Lee Chang (Ju Ji-hoon), who stumbles across a life-threatening political conspiracy while investigating the spread of a mysterious plague. Barred from seeing his ill father, the King of Joseon, by the powerful Chief State Councilor, Lord Cho Hak-ju (Ryu Seung-ryong) and Queen Consort (Kim Hye-jun), Lee Chang takes it upon himself to secretly investigate his fathers illness. Shocked by what he finds, he heads to the Southern province of Gyeongsang with his loyal bodyguard Mu-yeong (Kim Sang-ho) to search for more answers.[15] There he encounters the physician Seo-Bi (Bae Doo-na) and the enigmatic Yeong-Shin (Kim Sung-kyu) who are already struggling to deal with a plague that appears to bring the dead back to life as blood-thirsty monsters. Together they all face a life or death struggle to not only stop the spread of the plague but to also save the royal dynasty from being overthrown.',
                'Rating'=>'4.3'
            ],
            [
                'GenreID'=>'3',
                'Title'=>'Money Heist',
                'Photo'=>'money heist.jpg',
                'Description'=>'Eight thieves take hostages and lock themselves in the Royal Mint of Spain as a criminal mastermind manipulates the police to carry out his plan.',
                'Rating'=>'5.0'
            ],
            [
                'GenreID'=>'3',
                'Title'=>'Stranger Things',
                'Photo'=>'stranger things.jpg',
                'Description'=>'When a young boy vanishes, a small town uncovers a mystery involving secret experiments, terrifying supernatural forces and one strange little girl.',
                'Rating'=>'4.7'
            ],
            [
                'GenreID'=>'3',
                'Title'=>'The Witcher',
                'Photo'=>'the witcher.jpg',
                'Description'=>"The Witcher is a franchise initially told through the novel series written by Polish author Andrzej Sapkowski. Though it was eventually adapted into a few movies and TV shows (and was also known as The Hexer), the franchise did not really gain any major traction, at least outside of Poland, until game developer CD Projekt Red adapted it into the successful series of games that have captured so many fans since the original 2007 release of The Witcher. Its 2011 sequel, The Witcher 2:Assassins of Kings, cemented the franchise’s popularity and made the story of The Witcher reach its peak audience at the time.",
                'Rating'=>'3.9'
            ],
            [
                'GenreID'=>'3',
                'Title'=>'Umbrella Academy',
                'Photo'=>'umbrella academy.jpg',
                'Description'=>"Reunited by their father's death, estranged siblings with extraordinary powers uncover shocking family secrets -- and a looming threat to humanity.",
                'Rating'=>'4.8'
            ],
            [
                'GenreID'=>'3',
                'Title'=>'Vagabond',
                'Photo'=>'vagabond.jpg',
                'Description'=>"Cha Dal-Geon (Lee Seung-Gi) is a stunt man who dreams of becoming a world famous action actor. His career is floundering, while he tries to take care of his nephew as his guardian. His nephew takes a flight from Incheon to Morocco for a taekwondo exhibition, but the flight crashes. In Morocco, Cha Dal-Geon sees someone in public that was a passenger on the fatal flight. He becomes convinced that someone or some group sabotaged his nephew's flight.

                Go Hae-Ri (Bae Suzy) is an NIS agent and is currently working undercover at the Korean embassy in Morocco. She is tasked by the embassy to help the bereaved families from the fatal flight. Cha Dal-Geon turns to Go Hae-Ri for help in finding the man he saw in Morocco who was a passenger on the flight. Soon, Cha Dal-Geon and Go Hae-Ri uncover a far darker and more sinister conspiracy than they expected.",
                'Rating'=>'4.0'
            ]
        ]);
    }
}
