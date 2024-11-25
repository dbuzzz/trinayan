@extends('frontend.layout')
@section('extern-css')
    <style>
        .owl-nav {
            display: none;
        }

        .active,
        .dot:hover {
            background-color: #fff;
        }

        .cont-item {
            border-right: 2px solid #fff;
        }
        .owl-item{
            border-radius: 10px
        }
    </style>
@endsection
@section('content')
    <div id="about-us">
        <div class="container-fluid ">
            <div class="about-banner position-relative">
                <img src="{{ asset('') }}uploads/default/aa.jpg" style="height: 65vh;">
                <div class="about-breadcrumb container-xxl">
                    <p class="ab-1">about us</p>
                    <p>|</p>
                    <p class="ab-2"><a href="#proples" style="
                        text-transform: uppercase;
                        font-family: Bison;
                        color: #ffff !important;
                        font-size: 25px;
                        margin: 0;
                        line-height: 30px;
                    ">People's</a></p>
                </div>
            </div>
            <div class="about-text my-5 container">
                <p>Trinayan, founded by a team of professionals that started in the year 2005, has its office based at
                    Faridabad, Haryana. Teamed with extensive experience, dedication and competence in all the fields the
                    group has its business activities, Trinayan evolved as a group in the early 2010. We are a fast-growing
                    organization with active presence in building construction, land development, facility management and
                    Hospitality and has completed projects in cities like Faridabad and Gurgaon in Haryana, Ranikhet &
                    Rishikesh in Uttarakhand, Ranchi & Hazaribagh in Jharkhand. We love crafting dreams and desires into
                    reality because we strongly believe in “a home is where the story begins…” Trinayan has emerged as one
                    of the prominent entities in the building industry. From Building small residential buildings to
                    creating state of the art holiday homes to a boutique hotel and various commercial spaces, the group has
                    done it all by complete dedication to reach higher and build better.</p>
                <p>Qualified Engineers, experienced team, ethical practices, transparent approach, multi-location presence,
                    in house resources, consistent, varied exposure (Hills, Plains, Low Rise to High Rise Projects,
                    Commercial and Residential projects etc.) and financially sound. Supported by powerful work resource and
                    qualified skilled engineers, Trinayan is acknowledged for its quality, commitments, timely execution,
                    and value additions, which are maintained in their every projects. We work closely with well known &
                    high credential Architecture firms, Structural Engineers, Interior Designers, Outdoor Landscape Artists
                    and other experienced Consultants making sure what we create is the best in its class, most secure and
                    adds value to the property. Whether Residential or Commercial, large or small we carefully incorporate
                    nature to our design with ample greenery, lighting, water features, sculptures, innovative & trendy
                    modern technologies, stunning furniture, space management thus creating atmosphere and drama whilst
                    ensuring the space is practical and user friendly. We collaborate with land owners and offer our
                    services with all advantages from Planning, Designing, Engineering, Construction and take all necessary
                    permissions from relevant authorities. Further with complete clarity and detailing to in-depth
                    management and supervision representing Partner’s interest throughout, Trinayan develops lands to
                    landmark Residential and Commercial spaces.</p>
                <!-- <p>Its current flagship project is situated in Sectors 61 and 62 of Gurugram. Spread over 75 acres, this mixed-use development features commercial complexes and residential units surrounded by lush green landscapes. Launched in 2009, Pioneer Park and Urban Square received widespread acclaim and success. Subsequently, the company went on to launch Presidia, Araya, and Pioneer Square, surpassing all consumer expectations and setting new benchmarks in the industry. The project is designed by top international architects, ensuring world-class standards and setting new benchmarks in the industry.</p> -->
            </div>
        </div>
    </div>
    <div class="leadershipd">
        <div class="container">
            {{-- <h1>our leadership</h1>
        <div class="founder-info mt-3">
            <div class="row ">
                <div class="col-12 col-lg-4 founder px-3">
                    <img src="https://realestate.ustains.com/wp-content/uploads/2023/03/team_img01.jpg">
                    <h3 class="mt-3">Mr. Manish Periwal</h3>
                    <i>Founder & CMD</i>
                </div>
                <div class="col-12 col-lg-8 founder-text">
                    <p>A graduate from St. Xavier’s College, Kolkata, Mr. Manish Periwal swiftly transitioned into entrepreneurship, driving remarkable growth Trinayan Homes Pvt. Ltd.. Under his dynamic leadership, Trinayan Homes Pvt. Ltd. has co-developed expansive mixed-use townships covering 600 acres, including iconic landmarks such as South City II, Greenwoods City, and Nirvana Country.</p>
                    <p>Leveraging his extensive experience and expertise, Mr. Periwal is steering Trinayan Homes Pvt. Ltd. towards establishing an independent brand for the future. His vision is brought to life in our flagship projects, where beautifully landscaped surroundings harmonize with a multi-purpose development. Pioneer Park, Presidia, Araya, Pioneer Square, and Urban Square are some projects that exemplify his vision.</p>
                    <p>Mr. Periwal is actively engaged in various trade organizations and professional bodies, including the Entrepreneurs’ Organization (EO), The Indian Chamber of Commerce (ICC), and The Young Leaders Forum (YLF) of FICCI. He is deeply committed to philanthropy, particularly in supporting educational institutions in the North-East Region as well. His passion for sports is evident through his roles as a Committee Member of the Cricket Association of Bengal, Sports Federation of West Bengal, and Mohun Bagan Athletic Football Club, reflecting a well-rounded persona beyond his business endeavors.</p>
                </div>
            </div>
        </div> --}}
            <!--   <hr style="border:1px solid white;opacity:1">
            <div class="founder-info mt-3">
                <div class="row">
                    <div class="col-12 col-lg-4 founder">
                        <img src="{{ asset('') }}frontend_assets/img/Rishabh Periwal-min.jpg">
                        <h3 class="mt-3">Mr. Rishabh Periwal</h3>
                        <i>Managing Director</i>
                    </div>
                    <div class="col-12 col-lg-8 founder-text">
                        <p>A graduate from St. Xavier’s College, Kolkata, Mr. Manish Periwal swiftly transitioned into entrepreneurship, driving remarkable growth for his company, Trinayan Homes Pvt. Ltd.. Under his dynamic leadership, Trinayan Homes Pvt. Ltd. has co-developed expansive mixed-use townships covering 600 acres, including iconic landmarks such as South City II, Greenwoods City, and Nirvana Country</p>
                        <p>Leveraging his extensive experience and expertise, Mr. Periwal is steering Trinayan Homes Pvt. Ltd. towards establishing an independent brand for the future. This vision is embodied in the flagship project, Pioneer Park Phase - I, a premier mixed-use development featuring a luxury hotel, residential spaces, and offices amidst beautifully landscaped surroundings. Additionally, Mr. Periwal oversees the group’s other ventures such as Pioneer Polyfeb Ltd., Pioneer Plastic Industries Ltd., and Purma Plast Pvt. Ltd. (specializing in Plastic Pipes & Fittings).</p>
                        <p>Actively engaged in various trade organizations and professional bodies, including the Entrepreneurs’ Organization (EO), The Indian Chamber of Commerce (ICC), and The Young Leaders Forum (YLF) of FICCI,Mr. Periwal is deeply committed to philanthropy, particularly in supporting educational institutions in the North-East Region. His passion for sports is evident through his roles as a Committee Member of the Cricket Association of Bengal, Sports Federation of West Bengal, and Mohun Bagan Athletic Football Club, reflecting a well-rounded persona beyond his business endeavors.</p>
                    </div>
                </div>
            </div>  -->
        </div>
    </div>
    <style>
        .slider-item {
            position: relative;
            overflow: hidden;
            padding: 20px;
            margin: 10px;
            /* box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); */
            /* background: #fff; */
            border-radius: 10px;
        }

        .description-content {
            opacity: 0;
            max-height: 0;
            overflow: hidden;
            transition: opacity 0.3s ease, max-height 0.3s ease;
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(255, 255, 255, 0.9);
            padding: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            z-index: 1;
            box-sizing: border-box;
            font-family: Optima Medium;
        }

        .slider-item:hover .description-content {
            opacity: 1;
            max-height: 100%;
            overflow-y: auto;
        }

        .slider-item img {
            width: 100%;
            display: block;
            border-radius: 10px;
        }

        @media (max-width: 768px) {
            .description-content {
                font-size: 14px;
            }
        }

        @media (max-width: 480px) {
            .description-content {
                font-size: 12px;
            }
        }

        .owl-nav {
            display: flex;
            justify-content: space-between;
            position: absolute;
            width: 100%;
            top: 50%;
            transform: translateY(-50%);
        }

        .owl-nav button {
            background: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 50%;
        }

        .owl-nav button:hover {
            background: #0056b3;
        }
    </style>
    <div class="py-5 team" id="proples">
        <div class="container">
            <h3>Board of Directors</h3>
            <div class="row py-5">
                <div class="col-md-2"></div>
                <div class="slider-item col-md-4 col-12 item" style=" background: white; ">
                    <img src="{{ asset('') }}uploads/default/d4.jpeg">
                    <b style="color:black">ABHISHEK KUMAR</b>
                    <p style="color:black">Managing Director</p>
                    <p class="description-content">
                       
                        Abhishek is a Civil Engineer and started his professional journey, after passing out from NERIST, in 2002. His first stint with Godrej and Boyce Mfg. Co. Ltd. in Delhi went on for a year and after that he joined NHPC Ltd. (A govt. of India PSU) in executive category and worked with NHPC for five years. In all these days he was aspiring to become and entrepreneur and in pursuit of same he resigned from NHPC Ltd. and started his journey as an entrepreneur in 2009. Thereafter, he established a diversified business and presently having presence in construction and real estate development, Hospitality, Engineering Consulting, Education and Indian ethnic apparel and accessories for females. He, along with his family is based in Faridabad (NCR) with his businesses in Delhi NCR, Uttarakhand, and Jharkhand in India and Helsinki in Finland.
                    </p>
                </div>

                <div class="slider-item col-md-4 col-12 item " style=" background: white; ">
                    <img src="{{ asset('') }}uploads/default/d3.jpeg">
                    <b style="color:black">NIKOONZ AGARWAL</b>
                    <p style="color:black">Director</p>
                    <p class="description-content">
                        Management graduate carrying about 12+ years of experience in Operations and Sales. He started
                        working in family owned manufacturing unit for plastic utility, taking ownership for the branding
                        and sales for the business. Later took up Marketing activities for Trinayan’s Real Estate &
                        Hospitality businesses and converting the sales by capitalizing on core. Also, apart from the
                        business development, is engaged in taking charge of operations for projects in Ranikhet-
                        Uttarakhand, from a strategic point of view in order to maintain process excellence. In addition to
                        it, a key contributor in maintaining/ managing customer relationship and satisfaction by expectation
                        integration”
                    </p>
                </div>
                
                
            </div>
        </div>
    </div>

    <div class="py-5 team">
        <div class="container">
            <h3>Board of Advisors</h3>
            <div class="team-sliders owl-carousel py-5">
                <div class="slider-item col-12 item">
                    <img src="{{ asset('') }}uploads/default/vivek.jpg">
                    <b style="color:black">VIVEK SRIVASTAVA</b>
                    <p style="color:black">Executive Director</p>
                    <p class="description-content">
                        His mission is not only to achieve the making of a nation, where reason and good sense prevail, he
                        pines for a human society based on peace and understanding and development.

                        A self-made person who has a clear idea about life that give and take policy simultaneously works
                        for nature also. After getting degree in commerce mindset was not only to walk freely but also to
                        gain ideas and experiences in real estate by polishing himself with new as well as running projects.

                        He is always eager to acquire business skills by learning different norms and policies that outline
                        structural activities.

                    </p>
                </div>

                <div class="slider-item col-12 item">
                    <img src="{{ asset('') }}uploads/default/vk.jpg">
                    <b style="color:black">VK ABBEY</b>
                    <p style="color:black">Engineer</p>
                    <p class="description-content">VK Abbey has been serving as an engineer to power infrastructure sector of india since last four and half decades. He has worked with group A PSUs of India in  senior positions and last held designation with NEEPCO( Govt. Of India) was Chairman and Nanaginf director. After his superannuation he was roles for Indian private sector organisations line Jindal group etc in capacities of CEO. He advises Trinayan in the areas of risk assessment, mitigation plans, project evaluation and process management. His long and hands on experience has been of great value to Trinayan in building a culture of equality in organisation and adherence to commitments made to company’s vendors or customers.

                    </p>
                </div>

                <div class="slider-item col-12 item">
                    <img src="https://realestate.ustains.com/wp-content/uploads/2023/03/team_img01.jpg">
                    <b style="color:black">SANJAY RANA PRASAD</b>
                    <p style="color:black">Advisor</p>
                    <p class="description-content">
                        Sanjay Rana Prasad (1995 pass out in Civil Engineering, NERIST) is an entrepreneur who last worked (till 2011) as the head of the real estate business of the fortune 100 corporate - Johnson Controls in West Asia region, where he managed corporate real estate portfolios of global corporations (including JCI).  He has also held national leadership positions in CapitaLand (Temasek Singapore company) and Cushman & Wakefield. He has a management degree in finance from IBS Hyderabad. <br>
                        He is an expert in enterprise-wide real estate strategy & business development, handling multi-region complexities and has been involved with many marquee real estate & infra projects in the country. <br>
                        He is currently involved with a portfolio-wide asset monetization program for the Indian Railways across India, and in some PPP projects for government entities as a retained advisor. He lives in Gurgaon, India.

                    </p>
                </div>
              
                <div class="slider-item col-12 item">
                    <img src="{{ asset('') }}uploads/default/d5.jpeg">
                    <b style="color:black">KHUSBOO AGARWAL</b>
                    <p style="color:black">Advisor</p>
                    <p class="description-content">
                        A MBA in Finance with 16+ Years of experience. She is multi-tasker with hands on experience in
                        managing Finance and Accounts, Taxation, overlooks complete Procurement and Man-Power management of
                        all Residential- Commercial Site and all other projects of Trinayan. She has been involved in
                        managing her family business since early years even before completion of her education and hence has
                        a sound understanding of diverse business processes and intricacies for smooth and consistent
                        management of business.
                    </p>
                </div>
                <div class="slider-item col-12 item">
                    <img src="{{ asset('') }}uploads/default/rn.jpg">
                    <b style="color:black">RN JHA</b>
                    <p style="color:black">Advisor</p>
                    <p class="description-content">
                        .

                    </p>
                </div>
            </div>
        </div>
    </div>

    {{-- <div class="team py-5">
    <div class="container">
        <h3>Board of advisors</h3>
        <div class="team-slider owl-carousel team-carousel py-5">
            <div class="slider-item col-12 item">
                <img src="https://realestate.ustains.com/wp-content/uploads/2023/03/team_img01.jpg">
                <b style="color:black" >RANA SANJAY PRASAD</b>
                <i style="color:black" >Strategic planning</i>
            </div>
            <div class="slider-item col-12 item">
                <img src="https://realestate.ustains.com/wp-content/uploads/2023/03/team_img01.jpg">
                <b style="color:black">SM MEHTA</b>
                <i style="color:black">Project Planning </i>
            </div>
            <div class="slider-item col-12 item">
                <img src="https://realestate.ustains.com/wp-content/uploads/2023/03/team_img01.jpg">
                <b style="color:black">ANKUR KHULLAR</b>
                <i style="color:black">Architect </i>
            </div>
            <div class="slider-item col-12 item">
                <img src="https://realestate.ustains.com/wp-content/uploads/2023/03/team_img01.jpg">
                <b style="color:black">SHAILESH GARG</b>
                <i style="color:black">Architect </i>
            </div>
            <div class="slider-item col-12 item">
                <img src="https://realestate.ustains.com/wp-content/uploads/2023/03/team_img01.jpg">
                <b style="color:black">RN JHA</b>
                <i style="color:black"> Company Secretary </i>
            </div>
            <div class="slider-item col-12 item">
                <img src="https://realestate.ustains.com/wp-content/uploads/2023/03/team_img01.jpg">
                <b style="color:black">SUKHAM AHLUWALIA</b>
                <i style="color:black">Law </i>
            </div>
        </div>
    </div>
</div> --}}
    <div class="py-5">
        <div class="container">
            <h3 class="text-center">MISSION & VISION</h3>
            <div class="team-slider py-5 row">
                <div class="col-12 col-lg-4 my-2">
                    <div class="p-15">
                        <div class="news-text mt-3">
                            <h3 class="text-center"><strong>Vision</strong></h3>
                            <p>To establish an ethical and transparent housing business practice with customer centric
                                approach.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4 my-2">
                    <div class="p-15">
                        <div class="news-text mt-3">
                            <h3 class="text-center"><strong>Differentiator </strong></h3>
                            <p><span class="readmore">Qualified Engineers, experienced team, ethical practices, transparent
                                    approach, multi-location... <a href="javascript:void(0);"
                                        onclick="$('.readmore').hide(); $('.readless').show();">read more</a></span> <span
                                    class="readless" style="display: none">Qualified Engineers, experienced team, ethical
                                    practices, transparent approach, multi-location presence, in house resources,
                                    consistent, varied exposure (Hills, Plains, Low Rise to High Rise Projects, Commercial
                                    and Residential projects etc.) and financially sound.

                                    Supported by powerful work resource and qualified skilled engineers, Trinayan is
                                    acknowledged for its quality, commitments, timely execution, and value additions, which
                                    are maintained in their every projects. We work closely with well known & high
                                    credential Architecture firms, Structural Engineers, Interior Designers, Outdoor
                                    Landscape Artists and other experienced Consultants making sure what we create is the
                                    best in its class, most secure and adds value to the property.

                                    Whether Residential or Commercial, large or small we carefully incorporate nature to our
                                    design with ample greenery, lighting, water features, sculptures, innovative & trendy
                                    modern technologies, stunning furniture, space management thus creating atmosphere and
                                    drama whilst ensuring the space is practical and user friendly.

                                    We collaborate with land owners and offer our services with all advantages from
                                    Planning, Designing, Engineering, Construction and take all necessary permissions from
                                    relevant authorities. Further with complete clarity and detailing to in-depth management
                                    and supervision representing Partner’s interest throughout, Trinayan develops lands to
                                    landmark Residential and Commercial spaces.
                                    ... <a href="javascript:void(0);"
                                        onclick="$('.readless').hide(); $('.readmore').show();">read Less</a></span></p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4 my-2">
                    <div class="p-15">
                        <div class="news-text mt-3">
                            <h3 class="text-center"><strong>Mission</strong></h3>
                            <p>To achieve a stage where we are recognized by our focused efforts, quality and dedicated
                                business practices.</p>
                        </div>
                    </div>
                </div>



            </div>
        </div>
    </div>

    <div class="logo-origin py-5">
        <div class="container">
            <div class="row py-5">
                <div class="col-12 col-lg-4">
                    <div class="about-logo">
                        <img src="{{ asset('') }}frontend_assets/img/logo.png">
                    </div>
                </div>
                <div class="col-12 col-lg-8">
                    <div class="logo-text">
                        <p>The Trinayan Homes Pvt. Ltd. logo is based on our philosophy of ‘<b>Foundations for Life</b>’.
                            Just like a real
                            home is built brick by brick, each block signifies a brick of <b>Relaxation, Joy, Comfort,
                                Pleasure, Happiness</b> and <b>Pride</b> which <b>Trinayan Homes Pvt. Ltd.</b> promises to
                            offer!</p>
                    </div>
                </div>
            </div>
            <div class="origin-info">
                <p>Your <b>needs</b> are our blueprint.</p>
                <p>Your <b>dreams</b> are our inspiration.</p>
                <p>Your <b>life</b> is our foundation.</p>
                <br>
                <b>Foundations of Quality:</b>
                <p>We are committed to working with the best talent the world has to offer to surpass your expectations.</p>
                <br>
                <b>Foundations of Imagination:</b>
                <p>Our buildings are fuelled by the power of your imagination. Your desires steer our endeavors.</p>
                <br>
                <b>Foundations of Transparency:</b>
                <p>What you see is what you get. We assure you of fair dealings in all your transactions with us.</p>
                <br>
                <b>Foundations of Trust:</b>
                <p>When you trust us with a gift of your hopes and dreams, we promise to honor them to the best of our
                    ability.</p>
                <br>
                <b>Foundations for the Future:</b>
                <p>Our expansive future plans include homes, workspaces, hotels, retail spaces and much more.</p>
                <br>
            </div>
        </div>
    </div>

    <div class="partners container">
        <h3 class="py-5">Partners in Excellence</h3>
        <p>At Trinayan Homes Pvt. Ltd., we deeply value the pivotal role our partners play within our ecosystem. They are
            part of a vibrant community comprising professional organizations and individuals united by a shared vision - to
            deliver excellence in luxury, architectural design, landscaping, and lifestyle amenities.</p>
        <div class="data-text container ">
            <div class="cont-main py-5 owl-carousel partner-carousel">
                <div class="cont-item  col-12 item">
                    <h3>
                        <img src="{{ asset('') }}frontend_assets/img/partner/p1.png">
                    </h3>
                </div>
                <div class="cont-item  col-12 item">
                    <h3>
                        <img src="{{ asset('') }}frontend_assets/img/partner/p2.png">
                    </h3>
                </div>
                <div class="cont-item  col-12 item">
                    <h3>
                        <img src="{{ asset('') }}frontend_assets/img/partner/p3.png">
                    </h3>
                </div>
                <div class="cont-item  col-12 item">
                    <h3>
                        <img src="{{ asset('') }}frontend_assets/img/partner/p4.png">
                    </h3>
                </div>
                <div class="cont-item  col-12 item">
                    <h3>
                        <img src="{{ asset('') }}frontend_assets/img/partner/p5.png">
                    </h3>
                </div>
                <div class="cont-item  col-12 item">
                    <h3>
                        <img src="{{ asset('') }}frontend_assets/img/partner/p6.png">
                    </h3>
                </div>

            </div>
        </div>

    </div>
@endsection
@section('extern-js')
    <script src="{{ url('frontend_assets/custom_js/cart.js') }}"></script>
    <script>
        $(document).ready(function() {
            $(".team-sliders").owlCarousel({
                items: 3,
                loop: true,
                nav: true,
                dots: true,
                autoplay: false, // Prevents the carousel from moving automatically
                margin: 30, // Adds margin between items
                padding: 10, // Adds padding inside the items
                responsive: {
                    0: {
                        items: 1 // Number of items for 0px to 600px
                    },
                    600: {
                        items: 1 // Number of items for 600px to 1000px
                    },
                    1000: {
                        items: 3 // Number of items for 1000px and up
                    }
                }
            });
        });
    </script>
@endsection
