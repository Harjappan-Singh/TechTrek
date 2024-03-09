@extends('layouts.app')

@section('content')

    <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-20 border-b border-gray-200 ">
        <div class="m-auto sm:m-auto text-left w-4/5 block">
            <h2 class="text-4xl font-semibold text-white">TechTrek: <br> Where Innovation Meets Insight</h2>
        </div>

        <div>
            <img src="about.svg" width="700" alt="read-img" width="700" class="mt-10">
        </div>
    </div>

    <div class=" w-4/5 mx-auto py-20 border-b border-gray-200 ">
        <h1 class="text-4xl font-semibold text-white">About TechTrek</h1>
        <div class="py-5 flex mx-auto">
            <div class="basis-[60%]">
                <p class="text-white mb-4" >Established with a vision for revolutionizing the tech discourse, TechTrek emerged in 2020, founded by visionary Harjappan Singh. What began as a digital haven for tech enthusiasts seeking the latest in consumer electronics news swiftly evolved into a global powerhouse of tech, entertainment, and science journalism.</p>

                <p class="text-white mb-4">Today, TechTrek stands as a beacon of excellence, attracting millions of readers worldwide with its unparalleled coverage, exclusive previews of upcoming products, and in-depth analyses of industry trends. Our commitment to journalistic integrity and editorial excellence is unwavering, ensuring that every piece of content we produce meets the highest standards of accuracy and reliability.
                </p>

                <p class="text-white mb-4">Driven by a passion for innovation and a relentless pursuit of truth, TechTrek's team of editors, journalists, and contributors spans the globe, offering a diverse array of perspectives and insights. From the bustling streets of Silicon Valley to the bustling markets of Shanghai, our team is dedicated to bringing you the most comprehensive and engaging coverage of the tech world.</p>

                <p class="text-white mb-4">At TechTrek, we understand that knowledge is power. That's why we go to great lengths to ensure that our readers are equipped with the information they need to make informed decisions about the products and technologies that shape our world. From rigorous product testing protocols to in-depth reviews and expert analysis, we leave no stone unturned in our quest to deliver the most accurate and insightful content possible.</p>

                <p class="text-white mb-4">Our reputation for excellence extends far beyond the digital realm. TechTrek's team of experts is regularly featured on some of the world's most esteemed news programs, providing expert analysis and commentary on the latest tech trends and developments. And our insights are sought after by industry insiders, analysts, and executives alike, cementing our status as a trusted authority in the world of technology.</p>

                <p class="text-white mb-4">Whether you're a seasoned tech enthusiast or a casual observer, TechTrek is your go-to destination for all things tech. From breaking news and exclusive previews to in-depth analyses and expert commentary, we've got you covered. Join us on our journey as we explore the ever-changing landscape of technology, one innovation at a time.</p>

                <p class="text-white mb-4">For press inquiries or to learn more about our editorial standards, please contact us [link to press inquiries page].</p>
            </div>

            <div class="basis-[40%]">
                <h3 class="text-2xl font-semibold text-white">Our Stats</h3>
        
                <div>
                    <h3 class="text-white mb-4">100K</h3>
                    <p class="text-white mb-4">Visitors since we launched</p>
                </div>
                <div>
                    <h3 class="text-white mb-4">70K</h3>
                    <p class="text-white mb-4">Readers helped</p>
                </div>
                <div>
                    <h3 class="text-white mb-4">20</h3>
                    <p class="text-white mb-4">Articles published</p>
                </div>
                <div>
                    <h3 class="text-white mb-4">2020</h3>
                    <p class="text-white mb-4">Founded 4 years ago</p>
                </div>

                <div class="timeline">
                    <h1>Highlights</h1>
                        2020
                        Founded by Harjappan Singh
                        2021
                        TechTrek voted a top 100 tech blog website
                        2022
                        TechTrek reaches 100 thousand cumulative users
                        2023
                        Global newsroom expansion focused on news & reviews
                        2024
                        TechTrek reaches 100 million readers in a single month
                </div>

                <div>
                    Our coverage has been seen in
                    <img src="home.svg" alt="">
                    {{-- image caorusel --}}
                </div>

                <div>
                    Our office
                </div>
            </div>
        </div>
    </div>

    <div>
        Youtube review of our website (Our Mission Statement)
        {{-- Team members grid --}}
    </div>

@endsection