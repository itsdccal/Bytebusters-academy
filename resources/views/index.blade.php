@extends('layouts.front')

@section('content')
    <section class="home" id="home">
        <div class="home-container container grid">
            <div class="home-img-bg">
                {{-- <img src="assets/images/bg-hero.jpg" alt="" class="home-img" /> --}}
            </div>
            <div class="home-data">
                <h1 class="home-title">
                    We Teach You <br />
                    Everything You Need To Know
                </h1>
                <p class="home-description">
                    Discover the way you learn & take control of your life and make
                    something useful for others.
                </p>
                <div class="home-btns">
                    <a href="{{ route('courses.index') }}" class="button btn-gray btn-small"> My Course </a>
                    <a href="#course" class="button button-home">Discover Course</a>
                </div>
            </div>
        </div>
    </section>

    <section class="story section container">
        <div class="story-container grid">
            <div class="story-data">
                <h2 class="section-title story-section-title">Our Goals</h2>
                <h1 class="story-title">
                    Enjoy learning without any pressure
                </h1>

                <p class="story-description">
                    Learn make something with real world project that help you increase creativity
                </p>
                <a href="#course" class="button btn-small">Discover</a>
            </div>
            <div class="story-images">
                <img src="{{ asset('frontend/assets/images/programer.jpg') }}" alt="" class="story-img" />
                <div class="story-square"></div>
            </div>
        </div>
    </section>

    <section class="products section container" id="course">
        <h2 class="section-title">All Course</h2>

        <div class="new-container">
            <div class="swiper new-swipper">
                <div class="swiper-wrapper">
                    @foreach ($courses as $course)
                        <article class="products-card swiper-slide">
                            <a style="color: inherit;" href="{{ route('courses.show', [$course->slug]) }}"
                                class="products-link">
                                <img src="{{ Storage::url($course->course_image) }}" class="products-img" alt="" />
                                <h3 class="products-title">{{ $course->title }}</h3>
                                <div class="products-star">
                                    @for ($star = 1; $star <= 5; $star++)
                                        @if ($course->rating >= $star)
                                            <i class="bx bxs-star"></i>
                                        @else
                                            <i class='bx bx-star'></i>
                                        @endif
                                    @endfor
                                </div>
                                <span class="products-price">Rp{{ $course->price }}</span>
                                @if ($course->students()->count() > 5)
                                    <button class="products-button">
                                        Popular
                                    </button>
                                @endif
                                <span class="products-student">
                                    {{ $course->students()->count() }} students
                                </span>
                            </a>
                        </article>
                    @endforeach

                </div>
                <div class="swiper-button-next"
                    style="bottom: initial;
                            top: 50%;
                            right: 0;
                            left: initial;
                            border-radius: 50%;">
                    <i class="bx bx-right-arrow-alt"></i>
                </div>
                <div class="swiper-button-prev" style="bottom: initial; top: 50%; border-radius: 50%">
                    <i class="bx bx-left-arrow-alt"></i>
                </div>
            </div>
        </div>
    </section>

    <section class="testimonial section container">
        <div class="testimonial grid">
            <div class="swiper testimonial-swipper">
                <div class="swiper-wrapper">
                    <div class="testimonial-card swiper-slide" style="text-align: center;">
                        <div class="testimonial-quote">
                            <i class="bx bxs-quote-alt-left"></i>
                        </div>
                        <p class="testimonial-description">
                            Saya sangat senang telah bergabung dengan ByteBuster Academy!
                            Materi pembelajaran coding yang disajikan sangat jelas dan mudah dipahami.
                            Instruktur-instruktur handal dan ramah, serta platform interaktifnya membuat proses belajar
                            menjadi menyenangkan.
                            Saya merasa semakin percaya diri dalam menguasai keterampilan coding setiap harinya.
                        </p>
                        <h3 class="testimonial-date">March 28, 2023</h3>

                        <div class="testimonial-profile"
                            style="justify-content: center;flex-direction: column;row-gap: 1.4rem;">
                            <img src="{{ asset('frontend/assets/images/joy-wibu.jpg') }}" alt=""
                                class="testimonial-profile-img" />

                            <div class="testimonial-profile-data">
                                <span class="testimonial-profile-name">joy abraham lincon</span>
                                <span class="testimonial-profile-detail">wibu of ByteBuster</span>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-card swiper-slide" style="text-align: center;">
                        <div class="testimonial-quote">
                            <i class="bx bxs-quote-alt-left"></i>
                        </div>
                        <p class="testimonial-description">
                            " Saya benar-benar merasa bahwa keputusan untuk bergabung dengan ByteBuster Academy
                            telah memberikan dampak positif signifikan pada kemampuan pemrograman saya.
                        </p>
                        <h3 class="testimonial-date">March 21, 2023</h3>

                        <div class="testimonial-profile"
                            style="justify-content: center;flex-direction: column;row-gap: 1.4rem;">
                            <img src="{{ asset('frontend/assets/images/mayko.jpg') }}" alt=""
                                class="testimonial-profile-img" />

                            <div class="testimonial-profile-data">
                                <span class="testimonial-profile-name">maykora</span>
                                <span class="testimonial-profile-detail">the all father</span>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-card swiper-slide" style="text-align: center;">
                        <div class="testimonial-quote">
                            <i class="bx bxs-quote-alt-left"></i>
                        </div>
                        <p class="testimonial-description">
                            platform pembelajaran online mereka sangat intuitif,
                            memudahkan saya untuk mengakses materi-materi pembelajaran kapan pun dibutuhkan.
                        </p>
                        <h3 class="testimonial-date">March 17, 2021</h3>

                        <div class="testimonial-profile"
                            style="justify-content: center;flex-direction: column;row-gap: 1.4rem;">
                            <img src="{{ asset('frontend/assets/images/iqbal.jpg') }}" alt=""
                                class="testimonial-profile-img" />

                            <div class="testimonial-profile-data">
                                <span class="testimonial-profile-name">iqbal ramadan</span>
                                <span class="testimonial-profile-detail">bookstagram</span>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-card swiper-slide" style="text-align: center;">
                        <div class="testimonial-quote">
                            <i class="bx bxs-quote-alt-left"></i>
                        </div>
                        <p class="testimonial-description">
                            Materi-materinya tidak hanya memberikan pemahaman mendalam tentang bahasa pemrograman,
                            tetapi juga memberikan pelatihan praktis yang sangat berguna
                        </p>
                        <h3 class="testimonial-date">March 20, 2021</h3>

                        <div class="testimonial-profile"
                            style="justify-content: center;flex-direction: column;row-gap: 1.4rem;">
                            <img src="{{ asset('frontend/assets/images/yufi.jpg') }}" alt=""
                                class="testimonial-profile-img" />

                            <div class="testimonial-profile-data">
                                <span class="testimonial-profile-name">yusuf fikri</span>
                                <span class="testimonial-profile-detail">taekwondo championship</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-button-next" style="right: 30%;left: initial;top:initial;bottom: 3rem;">
                    <i class="bx bx-right-arrow-alt"></i>
                </div>
                <div class="swiper-button-prev" style="right: initial;left: 30%;top:initial;bottom: 3rem;">
                    <i class="bx bx-left-arrow-alt"></i>
                </div>
            </div>
    </section>

    <section class="newsletter section container">
        <div class="newsletter-bg grid">
            <div>
                <h2 class="newsletter-title">
                    Subscribe Our <br />
                    Newsletter
                </h2>
                <p class="newsletter-description">
                    Be the first to know the new course and discount.
                </p>
            </div>

            <form action="" class="newsletter-subscribe">
                <input type="email" placeholder="Enter your email" class="newsletter-input" />
                <button class="button">BUTTON</button>
            </form>
        </div>
    </section>
@endsection
