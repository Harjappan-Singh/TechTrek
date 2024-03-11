@extends('layouts.app')

@section('content')
    <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-20 border-b border-gray-200 ">
        <div class="m-auto sm:m-auto text-left w-4/5 block">
            <h2 class="text-4xl pb-2 text-white">TechTrek: Your Premier Destination for Cutting-Edge Tech Insights, Reviews, and Trends</h2>
            <div class="input-group mb-3">
                 <input type="text" class="border-gray-300 border rounded-lg py-2 px-4 w-80" placeholder="new upgrade in java" aria-label="Recipient's username" aria-describedby="button-addon2">
                <button class="bg-darkBlue hover:bg-blue-900 text-white font-bold py-2 px-4 rounded inline-flex items-center" type="button" id="button-addon2">Search</button>
                <div class="suggestion mt-2">
                    <a class="text-white text-sm px-2" href="#">New update in ios</a>
                    <a class="text-white text-sm px-2" href="#">What's new in bootstrap</a>
                    <a class="text-white text-sm px-2" href="#">Why learn data science</a>         
                </div>
            </div>
        </div>

        <div>
            <img src="home.svg" width="700" alt="read-img" width="700" class="mt-10">
        </div>
    </div>

    <div>
        <section class="py-16 bg-gray-100">
            <div class="container mx-auto">
                <h2 class="text-3xl font-bold text-center mb-8">Featured Posts</h2>
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-8">
                    <div class="bg-white rounded-lg shadow-md overflow-hidden">
                        <img src="https://developer.apple.com/news/images/og/ios-17-og.jpg" alt="Featured Post Image" class="w-full h-64 object-cover">
                        <div class="p-6">
                            <span class="text-xs uppercase text-gray-500">New Upgrade of iOS 17</span>
                            <h3 class="text-xl font-bold mt-2 mb-4">Exciting New Features Coming to iOS 17</h3>
                            <p class="text-gray-700 mb-4">The upcoming release of iOS 17 promises to bring a host of new features and improvements. From enhanced privacy controls to innovative augmented reality experiences, users can expect a seamless and intuitive mobile experience. Stay tuned for updates and insights as we explore what's in store with iOS 17.</p>
                            <a href="#" class="uppercase bg-gray-800 text-white text-xs font-bold py-2 px-4 rounded-full inline-block hover:bg-gray-700">Read More</a>
                        </div>
                    </div>
                    
                    <div class="bg-white rounded-lg shadow-md overflow-hidden">
                        <img src="https://d1m75rqqgidzqn.cloudfront.net/wp-data/2019/09/11134058/What-is-data-science-2.jpg" alt="Featured Post Image" class="w-full h-64 object-cover">
                        <div class="p-6">
                            <span class="text-xs uppercase text-gray-500">Why Learn Data Science</span>
                            <h3 class="text-xl font-bold mt-2 mb-4">Exploring the Importance of Data Science in Today's World</h3>
                            <p class="text-gray-700 mb-4">In an era defined by data-driven decision-making, understanding data science has become increasingly crucial. From unlocking valuable insights to driving innovation, data science empowers organizations to make informed choices and stay ahead of the competition. Discover the significance of data science and why it's a skill worth mastering.</p>
                            <a href="#" class="uppercase bg-gray-800 text-white text-xs font-bold py-2 px-4 rounded-full inline-block hover:bg-gray-700">Read More</a>
                        </div>
                    </div>

                    <div class="bg-white rounded-lg shadow-md overflow-hidden">
                        <img src="https://www.reuters.com/resizer/k22lkKGnpjGFn8fczL9GQI2LCjI=/1920x0/filters:quality(80)/cloudfront-us-east-2.images.arcpublishing.com/reuters/FWTM5XJBSNJ4RLHS433A2ZMPFM.jpg" alt="Featured Post Image" class="w-full h-64 object-cover">
                        <div class="p-6">
                            <span class="text-xs uppercase text-gray-500">Instagram Servers Hang</span>
                            <h3 class="text-xl font-bold mt-2 mb-4">Investigating the Recent Instagram Server Outage</h3>
                            <p class="text-gray-700 mb-4">Millions of users were left frustrated as Instagram experienced a widespread server outage. From businesses relying on social media marketing to individuals sharing their daily lives, the outage had far-reaching implications. Join us as we delve into the causes behind the outage and explore its impact on the digital landscape.</p>
                            <a href="#" class="uppercase bg-gray-800 text-white text-xs font-bold py-2 px-4 rounded-full inline-block hover:bg-gray-700">Read More</a>
                        </div>
                    </div>
                </div>

            </div>
        </section>
    </div>
    


    <div class="pb-[100px]">
        <section id="authors" class="p-5 bg-primary">
        <div class="container mx-auto">
            <h2 class="text-center text-white text-3xl font-bold mb-5">Our Bloggers</h2>
            <p class="text-center text-white text-lg mb-8">          
                Our bloggers all have 5+ years of experience working in the industry.
            </p>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
            <div class="bg-white rounded-lg shadow-lg">
                <div class="p-6 text-center">
                <img src="https://randomuser.me/api/portraits/men/11.jpg" class="rounded-full w-24 h-24 mx-auto mb-4" alt="">
                <h3 class="text-xl font-semibold mb-2">Sebastian</h3>
                <p class="text-gray-700 text-sm mb-4">
                    Sebastian Gates is a seasoned blogger with over 5 years of experience in the industry. He specializes in writing insightful articles on technology, web development, and digital marketing. John's passion for writing and deep understanding of the subject matter make his blog posts both informative and engaging. In his free time, he enjoys experimenting with new blogging platforms, exploring different writing styles, and interacting with his readers through social media.
                </p>
                </div>
            </div>

            <div class="bg-white rounded-lg shadow-lg">
                <div class="p-6 text-center">
                <img src="https://randomuser.me/api/portraits/men/10.jpg" class="rounded-full w-24 h-24 mx-auto mb-4" alt="">
                <h3 class="text-xl font-semibold mb-2">Derek</h3>
                <p class="text-gray-700 text-sm mb-4">
                    Derek O'Riely is a technology enthusiast and blogger with a passion for exploring the latest gadgets and innovations. She shares her insights, reviews, and recommendations on cutting-edge gadgets, software, and technology trends. Jane's engaging writing style and in-depth knowledge make her blog a go-to resource for tech enthusiasts seeking reliable information and reviews.
                </p>
                </div>
            </div>

            <div class="bg-white rounded-lg shadow-lg">
                <div class="p-6 text-center">
                <img src="https://randomuser.me/api/portraits/men/12.jpg" class="rounded-full w-24 h-24 mx-auto mb-4" alt="">
                <h3 class="text-xl font-semibold mb-2">Dermot</h3>
                <p class="text-gray-700 text-sm mb-4">
                    Dermot Logue is a passionate blogger specializing in gadgets and consumer electronics. With over 10 years of experience in reviewing and testing various gadgets, he provides in-depth analysis, hands-on reviews, and comparisons to help consumers make informed purchasing decisions. Steve's expertise and honest opinions make his blog a trusted source for gadget enthusiasts looking for reliable insights and recommendations.
                </p>
                </div>
            </div>

            <div class="bg-white rounded-lg shadow-lg">
                <div class="p-6 text-center">
                <img src="https://randomuser.me/api/portraits/men/13.jpg" class="rounded-full w-24 h-24 mx-auto mb-4" alt="">
                <h3 class="text-xl font-semibold mb-2">Lance</h3>
                <p class="text-gray-700 text-sm mb-4">
                    Lance Gonsalves is a software developer and blogger with a knack for demystifying complex technical concepts. With over 20 years of experience in software development, she shares her expertise through tutorials, tips, and insights on programming languages, frameworks, and best practices. Sara's clear explanations and practical advice make her blog an invaluable resource for aspiring and experienced software developers alike.
                </p>
                </div>
            </div>
            </div>
        </div>
        </section>
    </div>

    
@endsection