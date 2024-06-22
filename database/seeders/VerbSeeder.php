<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Verb;
use Illuminate\Support\Facades\File;

class VerbSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void{
    // {
    //     $verbs = collect([ 
    // "하다" => "to do (गर्नु)",
    // "있다" => "to have; to exist (भएको छ; हुनु)",
    // "되다" => "to become (बन्नु)",
    // "보다" => "to see; to watch (हेर्नु)",
    // "가다" => "to go (जानु)",
    // "오다" => "to come (आउनु)",
    // "말하다" => "to say; to speak (भन्नु)",
    // "알다" => "to know (थाहा हुनु)",
    // "사랑하다" => "to love (माया गर्नु)",
    // "생각하다" => "to think (सोच्नु)",
    // "들다" => "to listen; to hear (सुन्नु)",
    // "되어다" => "to be; to become (बन्नु)",
    // "일어나다" => "to get up; to rise (उठ्नु)",
    // "가져오다" => "to bring (ल्याउनु)",
    // "자다" => "to sleep (सुत्नु)",
    // "좋다" => "to like; to be good (राम्रो लाग्नु)",
    // "되어다" => "to be; to become (बन्नु)",
    // "마시다" => "to drink (पिउनु)",
    // "먹다" => "to eat (खानु)",
    // "돕다" => "to help (मद्दत गर्नु)",
    // "놓다" => "to put; to place (राख्नु)",
    // "걷다" => "to walk (हिँड्नु)",
    // "쓰다" => "to write (लेख्नु)",
    // "보내다" => "to send (पठाउनु)",
    // "찾다" => "to find (खोज्नु)",
    // "차다" => "to wear; to put on (लगाउनु)",
    // "들어오다" => "to come in (अन्तर्धान गर्नु)",
    // "되다" => "to be; to become (बन्नु)",
    // "말하다" => "to say; to speak (भन्नु)",
    // "되다" => "to be; to become (बन्नु)",
    // "일하다" => "to work (काम गर्नु)",
    // "앉다" => "to sit (बस्नु)",
    // "받다" => "to receive (प्राप्त गर्नु)",
    // "가져다주다" => "to bring; to fetch (ल्याउनु; ल्याउने)",
    // "약속하다" => "to promise (वादा गर्नु)",
    // "나가다" => "to go out (बाहिर जानु)",
    // "살다" => "to live (बस्नु)",
    // "빌리다" => "to borrow (ऋण गर्नु)",
    // "돌아가다" => "to return; to go back (फर्कनु)",
    // "만나다" => "to meet (भेट्नु)",
    // "웃다" => "to laugh (हाँस्नु)",
    // "걱정하다" => "to worry (चिन्ता गर्नु)",
    // "닫다" => "to close (बन्द गर्नु)",
    // "열다" => "to open (खोल्नु)",
    // "준비하다" => "to prepare (तयारी गर्नु)",
    // "계속하다" => "to continue (जारी राख्नु)",
    // "배우다" => "to learn (सिक्नु)",
    // "기다리다" => "to wait (प्रतीक्षा गर्नु)",
    // "끝나다" => "to finish (समाप्त हुनु)",
    // "찍다" => "to take (a photo) (खिच्नु)",
    // "가르치다" => "to teach (सिकाउनु)",
    // "바라다" => "to hope (आशा गर्नु)",
    // "끄다" => "to turn off (बन्द गर्नु)",
    // "행복하다" => "to be happy (खुसी गर्नु)",
    // "일어나다" => "to happen; to occur (घटना हुनु)",
    // "늦다" => "to be late (ढिलो हुनु)",
    // "보이다" => "to be visible; to appear (देखिनु)",
    // "가져가다" => "to take; to carry (ल्याउनु)",
    // "볼일이있다" => "to have something to do (गर्न आवश्यक हुनु)",
    // "빨리가다" => "to go quickly (तेजीले जानु)",
    // "떠나다" => "to leave (छोड्नु)",
    // "지내다" => "to spend (time) (बिताउनु)",
    // "보이다" => "to seem; to look (देखिनु)",
    // "이기다" => "to win (जित्नु)",
    // "따라가다" => "to follow (पिछ्याडै जानु)",
    // "따르다" => "to obey; to follow (पालन गर्नु)",
    // "이어가다" => "to continue (जारी राख्नु)",
    // "끊다" => "to cut off (काट्नु)",
    // "생각하다" => "to consider; to think (विचार गर्नु)",
    // "놀다" => "to play (खेल्नु)",
    // "걸다" => "to hang; to put on (लगाउनु)",
    // "방해하다" => "to disturb; to interfere (बाधा गर्नु)",
    // "노래하다" => "to sing (गाउनु)",
    // "만들다" => "to make; to create (बनाउनु)",
    // "건너가다" => "to cross (अतर्क्त हुनु)",
    // "빌다" => "to pray (प्रार्थना गर्नु)",
    // "올라가다" => "to go up; to climb (उठ्नु)",
    // "보다" => "to try; to attempt (कोसिस गर्नु)",
    // "뽑다" => "to choose; to pick (छान्नु)",
    // "피우다" => "to smoke (सुर्ख गर्नु)",
    // "빠지다" => "to fall; to drop (पर्नु)",
    // "지내다" => "to get along; to live (बस्नु)",
    // "마르다" => "to dry (सुक्नु)",
    // "싸우다" => "to fight (लड्नु)",
    // "빠르다" => "to be fast; to be quick (तेज हुनु)",
    // "무시하다" => "to ignore (अवहेलना गर्नु)",
    // "무슨" => "what (के)",
    // "없다" => "to not have; to be absent (छैन)",
    // "없다" => "to not exist (भएन)",

    //     ]);
    $json = File::get(path:'database\json\verbs.json');
    $verbs = collect(json_decode($json));

        $verbs->each(function($nepali,$korean){
            verb::insert([
                'korean' => $korean,
                'nepali' => $nepali
            ]);
        });
    }
}
