@extends('layouts.app')

@section('content')


    <div class=" w-4/5 mx-auto py-20 border-b border-gray-200 ">
        <div class="flex items-end space-x-[700px]">
        <h1 class="text-4xl font-semibold text-white border-b border-gray-200 mb-5">About TechTrek</h1>
        <img src="about.svg" alt="" class="w-[400px] pb-10">
        </div>
        
        <div class="py-5 flex mx-auto">
            <div class="basis-[60%] mr-[100px]">
                <p class="text-white mb-4 text-xl" >Established with a vision for revolutionizing the tech discourse, TechTrek emerged in 2020, founded by visionary <span class="font-semibold">Harjappan Singh</span>. What began as a digital haven for tech enthusiasts seeking the latest in consumer electronics news swiftly evolved into a global powerhouse of tech, entertainment, and science journalism.</p>

                <p class="text-white my-10 text-xl ">Today, TechTrek stands as a beacon of excellence, attracting millions of readers worldwide with its unparalleled coverage, exclusive previews of upcoming products, and in-depth analyses of industry trends. Our commitment to journalistic integrity and editorial excellence is unwavering, ensuring that every piece of content we produce meets the highest standards of accuracy and reliability.
                </p>

                <p class="text-white my-10 text-xl">Driven by a passion for innovation and a relentless pursuit of truth, TechTrek's team of editors, journalists, and contributors spans the globe, offering a diverse array of perspectives and insights. From the bustling streets of Silicon Valley to the bustling markets of Shanghai, our team is dedicated to bringing you the most comprehensive and engaging coverage of the tech world.</p>

                <p class="text-white my-10 text-xl">At TechTrek, we understand that knowledge is power. That's why we go to great lengths to ensure that our readers are equipped with the information they need to make informed decisions about the products and technologies that shape our world. From rigorous product testing protocols to in-depth reviews and expert analysis, we leave no stone unturned in our quest to deliver the most accurate and insightful content possible.</p>

                <img src="https://annarborusa.org/wp-content/uploads/2022/06/2018-05-10T15-54-03-01-scaled.jpeg" alt="" class="rounded-lg">


                <p class="text-white my-10 text-xl">Our reputation for excellence extends far beyond the digital realm. TechTrek's team of experts is regularly featured on some of the world's most esteemed news programs, providing expert analysis and commentary on the latest tech trends and developments. And our insights are sought after by industry insiders, analysts, and executives alike, cementing our status as a trusted authority in the world of technology.</p>


                <p class="text-white  my-10 text-xl">Whether you're a seasoned tech enthusiast or a casual observer, TechTrek is your go-to destination for all things tech. From breaking news and exclusive previews to in-depth analyses and expert commentary, we've got you covered. Join us on our journey as we explore the ever-changing landscape of technology, one innovation at a time.</p>

                <p class="text-white my-10 text-xl">For press inquiries or to learn more about our editorial standards, please contact us [link to press inquiries page].</p>

                <div class="flex flex-col items-center pt-20">
                    <a href="mailto: d0023215@student.dkit.ie" class="bg-darkBlue hover:bg-pink text-white font-bold px-40 py-5 rounded inline-flex items-center hover:animate-pulse" type="button" id="button-addon2">Contact Us</a>
                </div>
                
            </div>

            <div class="basis-[40%]">
                <h3 class="text-3xl font-bold pb-5 text-white">Our Stats</h3>
                <div class="stats bg-gray-200 flex">
                     <div class="p-5 border-r-4 border-gray-300 m-3">
                        <h3 class="text-pink mb-4 font-bold text-4xl">100K+</h3>
                        <p class="text-darkBlue mb-4 text-m">Visitors since we launched</p>
                    </div>
                    <div class="p-5 border-r-4 border-gray-300 m-3">
                        <h3 class="text-pink mb-4 font-bold text-4xl">70K+</h3>
                        <p class="text-darkBlue mb-4">Readers helped</p>
                    </div>
                    <div class="p-5 border-r-4 border-gray-300 m-3">
                        <h3 class="text-pink mb-4 font-bold text-4xl">20+</h3>
                        <p class="text-darkBlue mb-4">Articles published</p>
                    </div>
                    <div class="p-5 m-3">
                        <h3 class="text-pink mb-4 font-bold text-4xl">2020</h3>
                        <p class="text-darkBlue mb-4">Founded 4 years ago</p>
                    </div>
                </div>
               

                <h1 class="text-3xl font-bold py-5 text-white mt-[80px]">Highlights</h1>

                <div class="timeline bg-gray-200 p-5">
                    
                    <p class="bg-white">
                        <div>
                            <span class="bg-darkBlue text-white px-5 py-2 ">
                                2020
                            </span>
                            <span class="p-4 font-semibold">
                                Founded by Harjappan Singh 
                            </span>
                        </div>
                        <svg role="presentation" aria-hidden="true" class="ml-[43px] mt-[8px]" width="1" height="61" viewBox="0 0 1 61" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <line x1="0.5" y1="-2.18557e-08" x2="0.500027" y2="614" stroke="darkBlue" stroke-dasharray="2 2"></line>
                        </svg>
                        <div>
                            <span class="bg-darkBlue text-white px-5 py-2">
                                2021
                            </span>
                            <span class="p-4 font-semibold">
                                TechTrek voted a top 100 tech blog website
                            </span>
                        </div>
                            <svg role="presentation" aria-hidden="true" class="ml-[43px] mt-[8px]" width="1" height="61" viewBox="0 0 1 61" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <line x1="0.5" y1="-2.18557e-08" x2="0.500027" y2="614" stroke="darkBlue" stroke-dasharray="2 2"></line>
                        </svg>
                        <div>
                            <span class="bg-darkBlue text-white px-5 py-2 ">
                            2022
                            </span>
                            <span class="p-4 font-semibold">
                            TechTrek reaches 100 thousand cumulative users
                            </span>
                        </div>
                        <svg role="presentation" aria-hidden="true" class="ml-[43px] mt-[8px]" width="1" height="61" viewBox="0 0 1 61" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <line x1="0.5" y1="-2.18557e-08" x2="0.500027" y2="614" stroke="darkBlue" stroke-dasharray="2 2"></line>
                        </svg>
                        <div>
                            <span class="bg-darkBlue text-white px-5 py-2">
                                2023
                            </span>
                            <span class="p-4 font-semibold">
                                Global newsroom expansion focused on news & reviews
                            </span>
                        </div>
                        <svg role="presentation" aria-hidden="true" class="ml-[43px] mt-[8px]" width="1" height="61" viewBox="0 0 1 61" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <line x1="0.5" y1="-2.18557e-08" x2="0.500027" y2="614" stroke="darkBlue" stroke-dasharray="2 2"></line>
                        </svg>
                        <div class="">
                            <span class="bg-darkBlue text-white px-5 py-2">
                                2024
                            </span>
                            <span class="p-4 font-semibold">
                               TechTrek reaches 100 million readers in a single month
                            </span>
                        </div>
                    </p>
                       
                </div>

                <div>
                    <h1 class="text-3xl font-bold py-5 text-white  mt-[80px]">What our users think</h1>
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/YeybJL4Ll8U?si=BEylMQpp3m2EumPe" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    
                </div>
                <div class="pt-10 ">
                    <h1 class="text-3xl font-bold text-white mt-[80px] pb-5"> Our office</h1>
                    <img src="https://www.dkit.ie/assets/uploads/DkIT-Campus-2020.jpg" alt="" class="rounded-lg">
                </div>
            </div>
        </div>
    </div>
@endsection