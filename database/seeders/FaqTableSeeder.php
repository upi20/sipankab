<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class FaqTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('faq')->delete();
        
        \DB::table('faq')->insert(array (
            0 => 
            array (
                'id' => 14,
                'nama' => 'What services do digital agencies offer?',
                'link' => NULL,
            'jawaban' => 'Digital agencies typically offer a range of services including website design and development, search engine optimization (SEO), social media management, email marketing, content creation, pay-per-click (PPC) advertising, and more.',
                'type' => 1,
                'status' => 1,
                'created_at' => '2023-04-13 13:25:45',
                'updated_at' => '2023-04-13 13:25:45',
            ),
            1 => 
            array (
                'id' => 15,
                'nama' => 'How do digital agencies help businesses grow?',
                'link' => NULL,
                'jawaban' => 'Digital agencies can help businesses grow by developing effective marketing strategies, improving online visibility and traffic, generating leads and sales, building brand awareness and reputation, and fostering customer engagement and loyalty.',
                'type' => 1,
                'status' => 1,
                'created_at' => '2023-04-13 13:25:56',
                'updated_at' => '2023-04-13 13:25:56',
            ),
            2 => 
            array (
                'id' => 16,
                'nama' => 'How much do digital agencies charge for their services?',
                'link' => NULL,
                'jawaban' => 'The cost of digital agency services varies depending on the agency, the scope of the project, and the services required. Many digital agencies offer customized packages based on the specific needs of each client.',
                'type' => 1,
                'status' => 1,
                'created_at' => '2023-04-13 13:26:07',
                'updated_at' => '2023-04-13 13:26:07',
            ),
            3 => 
            array (
                'id' => 17,
                'nama' => 'What is the process for working with a digital agency?',
                'link' => NULL,
                'jawaban' => 'The process for working with a digital agency typically involves an initial consultation to discuss goals and objectives, followed by a proposal outlining the recommended services and timeline. Once the proposal is accepted, the agency will work closely with the client to execute the project and provide regular updates and progress reports.',
                'type' => 1,
                'status' => 1,
                'created_at' => '2023-04-13 13:26:17',
                'updated_at' => '2023-04-13 13:26:17',
            ),
            4 => 
            array (
                'id' => 18,
                'nama' => 'How long does it take for a digital agency to produce results?',
                'link' => NULL,
                'jawaban' => 'The timeline for producing results can vary depending on the scope of the project and the services required. However, digital agencies typically aim to provide measurable results within a few months of starting a campaign or project.',
                'type' => 1,
                'status' => 1,
                'created_at' => '2023-04-13 13:26:27',
                'updated_at' => '2023-04-13 13:26:27',
            ),
            5 => 
            array (
                'id' => 19,
                'nama' => 'What kind of results can I expect from working with a digital agency?',
                'link' => NULL,
                'jawaban' => 'The results of working with a digital agency can vary depending on the goals and objectives of the project. However, common results include increased website traffic, higher search engine rankings, improved engagement and conversion rates, and greater brand awareness and recognition.',
                'type' => 1,
                'status' => 1,
                'created_at' => '2023-04-13 13:26:37',
                'updated_at' => '2023-04-13 13:26:37',
            ),
        ));
        
        
    }
}