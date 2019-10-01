@extends('./../layouts/main')

@section('title')
    NTVC | Home
@endsection

@section('content')
    <header class="header">
        <div class="header__logo-box">
            <img src="{{URL::asset('Images/logo.png')}}" alt="Institution Logo" class="header__logo">
        </div>
        <div class="header__text-box u-center-text">
            <h1 class="heading__primary heading__primary--main">Naivasha Technical and Vocational College</h1>
            <h1 class="heading__primary heading__primary--sub u-margin-bottom-medium">School Mission comes here</h1>
            <p class="paragraph u-margin-bottom-medium u-center-text">Experience NTVC</p>
            <a href="#!" class="btn btn-white btn-animated">Learn more</a>
        </div>
    </header>

    <main>
        <section class="section-about">
            <div class="u-center-text u-margin-bottom-small">
                <h1 class="heading__secondary ">Welcome</h1>
            </div>
            <div class="row">
                <div class="col-1-of-2">
                    <h2 class="heading-tertiary">College starts here</h2>
                    <p class="paragraph u-margin-bottom-small">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quae aspernatur fuga id itaque perferendis praesentium magnam, sit corrupti illum sunt!
                    </p>
                    <h2 class="heading-tertiary">Where we are</h2>
                    <p class="paragraph u-margin-bottom-small">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quae aspernatur fuga id itaque perferendis praesentium magnam, sit corrupti illum sunt!
                    </p>
                    <a href="#!" class="btn btn-green">More info &rarr;</a>
                </div>
                <div class="col-1-of-2">
                    <div class="composition">
                        <img src="{{URL::asset('Images/books-dark.jpg')}}" alt="Photo 1" class="composition__photo composition__photo--p1">
                        <img src="{{URL::asset('Images/books-light.jpg')}}" alt="Photo 2" class="composition__photo composition__photo--p2">
                        <img src="{{URL::asset('Images/work-and-play.jpg')}}" alt="Photo 3" class="composition__photo composition__photo--p3">
                    </div>
                </div>
            </div>
        </section>
        <!-- End of about section -->
        <section class="section-features">
            <div class="row">
                <div class="col-1-of-4">
                    <div class="feature-box">
                        <i class="feature-box__icon icon-basic-world u-margin-bottom-small"></i>
                        <h3 class="heading-tertiary u-margin-bottom-small">Tomorrow's Leaders</h3>
                        <p class="feature-box__text">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum doloribus, fugiat repudiandae est quibusdam totam?
                        </p>
                    </div>
                </div>
                <div class="col-1-of-4">
                    <div class="feature-box">
                        <i class="feature-box__icon icon-basic-lightbulb u-margin-bottom-small"></i>
                        <h3 class="heading-tertiary u-margin-bottom-small">making a difference</h3>
                        <p class="feature-box__text">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Volrepudiandae est quibusdam totam?
                        </p>
                    </div>
                </div>
                <div class="col-1-of-4">
                    <div class="feature-box">
                        <i class="feature-box__icon icon-basic-heart u-margin-bottom-small"></i>
                        <h3 class="heading-tertiary u-margin-bottom-small">Strong bond that last</h3>
                        <p class="feature-box__text">
                            Lorem ipsum dolor sit ame elit. Voluptatum doloribus, fugiat repudiandae est quibusdam totam?
                        </p>
                    </div>
                </div>
                <div class="col-1-of-4">
                    <div class="feature-box">
                        <i class="feature-box__icon icon-ecommerce-diamond u-margin-bottom-small"></i>
                        <h3 class="heading-tertiary u-margin-bottom-small">Goverment sponsored</h3>
                        <p class="feature-box__text">
                            Lorem ipsum dolor sit amet consectetur adipisici udiandae est quibusdam totam?
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!-- End of features section -->
        <section class="section-about">
            <div class="u-center-text">
                <h1 class="heading__secondary u-margin-bottom-small">Welcome</h1>
            </div>
            <div class="row">
                <div class="col-1-of-2">
                    <h2 class="heading-tertiary">College starts here</h2>
                    <p class="paragraph u-margin-bottom-small">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quae aspernatur fuga id itaque perferendis praesentium magnam, sit corrupti illum sunt!
                    </p>
                    <h2 class="heading-tertiary">Where we are</h2>
                    <p class="paragraph u-margin-bottom-small">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quae aspernatur fuga id itaque perferendis praesentium magnam, sit corrupti illum sunt!
                    </p>
                    <a href="#!" class="btn btn-green">More info &rarr;</a>
                </div>
                <div class="col-1-of-2">
                    <div class="composition">
                        <img src="{{URL::asset('Images/books-dark.jpg')}}" alt="Photo 1" class="composition__photo composition__photo--p1">
                        <img src="{{URL::asset('Images/books-light.jpg')}}" alt="Photo 2" class="composition__photo composition__photo--p2">
                        <img src="{{URL::asset('Images/work-and-play.jpg')}}" alt="Photo 3" class="composition__photo composition__photo--p3">
                    </div>
                </div>
            </div>
        </section>
        <!-- End of about section -->
        <section class="section-stories">

            <div class="bg-videos">
                <video class="bg-videos__content" autoplay muted loop>
                    <source src="{{URL::asset('videos/MP4/typer.mp4')}}" type="video/mp4">
                    <source src="{{URL::asset('videos/WEBM/typer.webm')}}" type="video/mp4">
                    <p>Your browser is not supported</p>
                </video>
            </div>
            <div class="u-center-text u-margin-bottom-small">
                <h1 class="heading__secondary ">Welcome</h1>
            </div>
            <div class="row">
                <div class="story">
                    <figure class="story__shape">
                        <img src="{{URL::asset('Images/black-and-white.jpg')}}" alt="Photo 3" class="story__img">
                    </figure>
                    <div class="story__text">                        
                        <h3 class="heading-tertiary">Best Tutors</h3>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio maiores, et debitis iste rem facilis deserunt eum doloremque in, eveniet enim molestias animi qui repellendus.
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio maiores, et debitis iste rem facilis deserunt eum doloremque
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="story">
                    <figure class="story__shape">
                        <img src="{{URL::asset('Images/black-and-white.jpg')}}" alt="Photo 3" class="story__img">
                    </figure>
                    <div class="story__text">                        
                        <h3 class="heading-tertiary">Best Tutors</h3>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio maiores, et debitis iste rem facilis deserunt eum doloremque in, eveniet enim molestias animi qui repellendus.
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio maiores, et debitis iste rem facilis deserunt eum doloremque
                        </p>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection

    <!-- <div class="grid">

        <div class="row">
            <div class="col-1-of-2">1 of 2</div>
            <div class="col-1-of-2">1 of 2</div>
        </div>

        <div class="row">
            <div class="col-1-of-3">1 of 3</div>
            <div class="col-1-of-3">1 of 3</div>
            <div class="col-1-of-3">1 of 3</div>
        </div>

        <div class="row">
            <div class="col-1-of-3">1 of 3</div>
            <div class="col-2-of-3">2 of 3</div>
        </div>
    
        <div class="row">
            <div class="col-1-of-4">1 of 4</div>
            <div class="col-1-of-4">1 of 4</div>
            <div class="col-1-of-4">1 of 4</div>
            <div class="col-1-of-4">1 of 4</div>
        </div>
 
        <div class="row">
            <div class="col-1-of-4">1 of 4</div>
            <div class="col-1-of-4">1 of 4</div>
            <div class="col-2-of-4">2 of 4</div>
        </div>
 
        <div class="row">
            <div class="col-1-of-4">1 of 4</div>
            <div class="col-3-of-4">3 of 4</div>
        </div>
    </div> -->