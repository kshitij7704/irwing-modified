<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon;
use App\Models\Blog;

class BlogSeeder extends Seeder
{
    public function run()
    {
        $commonContent = <<<HTML
<div class="blog-content" style="font-size: 1.15rem; color: #232526; line-height: 1.7;">
    <section style="padding: 0px !important">
        <p>In the fast-paced and technology-driven business landscape, staying ahead of the competition requires adopting innovative solutions that enhance efficiency and customer engagement. One such transformative technology is the implementation of chatbots within Customer Relationship Management (CRM) systems, particularly Salesforce. <b>Ailifebot</b>, a leading <b class="text-primary">Chatbot company in Noida</b>, is at the forefront of revolutionizing business interactions by integrating intelligent chatbots into the Salesforce ecosystem.</p>
    </section>
    <section style="padding: 0px !important">
        <h2 class="h4 fw-bold mb-3">What exactly is a Salesforce chatbot?</h2>
        <p>Salesforce chatbots are artificial intelligence (AI) applications designed to operate seamlessly within the Salesforce platform, empowering businesses to streamline their customer interactions and enhance overall productivity. These chatbots leverage natural language processing (NLP) and machine learning (ML) to understand and respond to user queries, enabling a more interactive and personalized customer experience.</p>
        <p>The integration of chatbots into Salesforce transforms traditional CRM systems into dynamic platforms capable of automating routine tasks, providing real-time support, and gathering valuable insights from customer interactions. Ailifebot's commitment to excellence is evident in its development of state-of-the-art chatbots, tailored to meet the specific needs of businesses across various industries.</p>
    </section>
    <section style="padding: 0px !important">
        <h2 class="h4 fw-bold mb-3">How to Use Chatbots in Salesforce:</h2>
        <p>Ailifebot recognizes that businesses can harness the power of Salesforce chatbots in diverse ways to optimize their operations and enhance customer satisfaction.</p>
        <ul class="mb-3 ps-3">
            <li class="mb-2"><b>1. Automating Routine Tasks:</b> Salesforce chatbots excel at automating repetitive and time-consuming tasks, allowing employees to focus on more strategic activities. From data entry to appointment scheduling, chatbots can efficiently handle routine tasks, improving operational efficiency and reducing the risk of errors.</li>
            <li class="mb-2"><b>2. Enhancing Customer Support:</b> Ailifebot's chatbots are designed to provide instant and accurate responses to customer queries, ensuring a seamless support experience. By incorporating natural language understanding, these chatbots can engage in meaningful conversations, addressing customer concerns and inquiries in real time, leading to improved customer satisfaction.</li>
            <li class="mb-2"><b>3. Gathering Customer Insights:</b> Salesforce chatbots can be programmed to collect and analyze data from customer interactions, providing valuable insights into customer preferences, behaviours, and trends. This information can be leveraged to refine marketing strategies, personalize offerings, and enhance overall customer engagement.</li>
        </ul>
    </section>
    <section style="padding: 0px !important">
        <h2 class="h4 fw-bold mb-3">How to Set Up a Chatbot in Salesforce in Three Steps:</h2>
        <div class="bg-light rounded-3 p-3">
            <ol class="mb-0 ps-3">
                <li class="mb-2"><b>Integration Planning:</b> Before implementing a chatbot, businesses need to define their goals and objectives. Ailifebot collaborates with clients to understand their specific needs and tailors chatbot solutions accordingly.</li>
                <li class="mb-2"><b>Customization and Training:</b> Ailifebot's expertise lies in creating highly customizable chatbots that align with the unique requirements of each business.</li>
                <li class="mb-2"><b>Deployment and Integration:</b> Ailifebot ensures a seamless deployment process, integrating the chatbot into the Salesforce platform with minimal disruption.</li>
            </ol>
        </div>
    </section>
    <section style="padding: 0px !important">
        <h2 class="h4 fw-bold mb-3">Conclusion</h2>
        <p class="mb-0">As businesses navigate the ever-evolving landscape of customer interactions, <b>Ailifebot</b> stands out as a pioneer in providing top-tier chatbot services in the National Capital Region (NCR). The integration of chatbots into Salesforce not only streamlines operations but also elevates customer engagement to new heights.</p>
    </section>
</div>
HTML;

        $blogs = [
            [
                'slug' => 'ai-agents-in-enterprise',
                'title' => 'AI Agents in the Enterprise: Revolutionizing Customer Service',
                'featured_image' => 'assets/img/0044.png',
                'content' => $commonContent,
                'author_name' => 'Naman Hooda',
                'created_at' => Carbon::now()->subDays(1),
            ],
            [
                'slug' => 'ai-agents-in-finance',
                'title' => 'Use of AI Agents in Finance: From Smart Advisors to Fraud Watchdogs',
                'featured_image' => 'assets/img/0033.jpg',
                'content' => $commonContent,
                'author_name' => 'John Smith',
                'created_at' => Carbon::now()->subDays(3),
            ],
            [
                'slug' => 'ai-agents-vs-automation',
                'title' => 'AI Agents vs. Traditional Automation: What\'s the Real Difference?',
                'featured_image' => 'assets/img/0033.png',
                'content' => $commonContent,
                'author_name' => 'Emily Lee',
                'created_at' => Carbon::now()->subDays(5),
            ],
            [
                'slug' => 'conversational-ai-business-success',
                'title' => 'Driving Business Success with Conversational AI',
                'featured_image' => 'assets/img/0022.jpg',
                'content' => $commonContent,
                'author_name' => 'Michael Brown',
                'created_at' => Carbon::now()->subDays(7),
            ],
        ];

        
        foreach ($blogs as $blog) {
            Blog::firstOrCreate(
                ['slug' => $blog['slug']],
                array_merge($blog, ['updated_at' => now()])
            );
        }
    }
}
