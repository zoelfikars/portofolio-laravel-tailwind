@extends('main')
@section('content')
    <div class="content flex flex-col gap-5">
        <p class="desc text-justify px-12 font-sans">
            I'm a sixth-semester student from Bandung, Indonesia, proficient in
            full-stack
            web development and
            Android app development using Kotlin and XML in Android Studio. My passion lies in creating
            seamless
            user experiences, believing that good design is pivotal in effectively communicating messages
            and
            identities. Beyond coding, I find relaxation and inspiration through swimming and gaming,
            activities
            that fuel my creativity. With a blend of technical expertise and a penchant for design, I aim to
            continue making impactful contributions in the realms of web and app development, both locally
            and
            globally.
        </p>
        <h1 class="font-semibold text-3xl px-12">What I do</h1>
        <div class="content-list grid grid-cols-1 gap-4 px-12 md:grid md:grid-cols-2 md:gap-4">
            <div class="card rounded-xl p-5 bg-indigo-200 flex flex-col gap-3">
                <div class="card-header flex place-items-center gap-3">
                    <i class="fas fa-user text-3xl"></i>
                    <h1 class="card-header font-semibold text-xl text-justify">Front-End Web Developer</h1>
                </div>
                <p class="text ">ini isinya</p>
            </div>
            <div class="card rounded-xl p-5 bg-orange-200 flex flex-col gap-3">
                <div class="card-header flex place-items-center gap-3">
                    <i class="fas fa-user text-3xl"></i>
                    <h1 class="card-header font-semibold text-xl text-justify">Back-End Web Developer</h1>
                </div>
                <p class="text ">ini isinya</p>
            </div>
            <div class="card rounded-xl p-5 bg-orange-200 flex flex-col gap-3">
                <div class="card-header flex place-items-center gap-3">
                    <i class="fas fa-user text-3xl"></i>
                    <h1 class="card-header font-semibold text-xl text-justify">Android Developer</h1>
                </div>
                <p class="text ">ini isinya</p>
            </div>
        </div>
    </div>
@endsection
