@extends('main')
@section('content')
<div class="content flex flex-col gap-5">
    <div class="content-list flex flex-col gap-5 px-12 md:flex-row">
        <div class="education w-full flex flex-col gap-5">
            <div class="education-header flex gap-3 place-content-center md:place-content-start">
                <i class="fa-solid fa-graduation-cap text-3xl"></i>
                <h1 class="card-text font-semibold text-xl">Education</h1>
            </div>
            <div class="card rounded-xl p-5 bg-orange-200 flex flex-col gap-1">
                <p class="year flex place-items-center gap-3 font-sans text-gray-700 text-sm">
                    2019 - 2021
                </p>
                <p class="scope font-semibold font-sans text-xl">Automotive - TKR</p>
                <p class="instancy font-sans text-gray-700">SMKN 1 Katapang</p>
            </div>
            <div class="card rounded-xl p-5 bg-indigo-200 flex flex-col gap-1">
                <p class="year flex place-items-center gap-3 font-sans text-gray-700 text-sm">
                    2021 - Present
                </p>
                <p class="scope font-semibold font-sans text-xl">Informatics Engineering</p>
                <p class="instancy font-sans text-gray-700">Universitas Teknologi Bandung</p>
            </div>
        </div>
        <div class="experience w-full flex flex-col gap-5">
            <div class="experience-header flex gap-3 place-content-center md:place-content-start">
                <i class="fa-solid fa-briefcase text-3xl"></i>
                <h1 class="title font-semibold text-xl">Experience</h1>
            </div>
            <div class="card rounded-xl p-5 bg-indigo-200 flex flex-col gap-1">
                <p class="year flex place-items-center gap-3 font-sans text-gray-700 text-sm">
                    2020
                </p>
                <p class="scope font-semibold font-sans text-xl">Auto Mechanics</p>
                <p class="instancy font-sans text-gray-700">Toyota Plaza</p>
            </div>
            <div class="card rounded-xl p-5 bg-orange-200 flex flex-col gap-1">
                <p class="year flex place-items-center gap-3 font-sans text-gray-700 text-sm">
                    2019 - 2021
                </p>
                <p class="scope font-semibold font-sans text-xl">Mobile Developer</p>
                <p class="instancy font-sans text-gray-700">Bangkit Program</p>
            </div>
        </div>
    </div>
    <div class="skills flex px-12 pt-8 gap-4 bg-slate-100 flex-col md:flex-row">
        <div class="working-skills w-full">
            <div class="header text-3xl font-semibold">
                Working Skills
            </div>
            <div class="container flex flex-wrap gap-3 py-10">
                <div class="card-skill font-sans bg-orange-200 px-4 py-2 rounded-xl w-fit">Laravel
                </div>
                <div class="card-skill font-sans bg-orange-200 px-4 py-2 rounded-xl w-fit">Bootstrap
                </div>
                <div class="card-skill font-sans bg-orange-200 px-4 py-2 rounded-xl w-fit">PHP Native
                </div>
                <div class="card-skill font-sans bg-orange-200 px-4 py-2 rounded-xl w-fit">Restful API
                </div>
                <div class="card-skill font-sans bg-orange-200 px-4 py-2 rounded-xl w-fit">Tailwind
                </div>
                <div class="card-skill font-sans bg-orange-200 px-4 py-2 rounded-xl w-fit">Android
                    Studio</div>
                <div class="card-skill font-sans bg-orange-200 px-4 py-2 rounded-xl w-fit">Kotlin</div>
                <div class="card-skill font-sans bg-orange-200 px-4 py-2 rounded-xl w-fit">Java</div>
                <div class="card-skill font-sans bg-orange-200 px-4 py-2 rounded-xl w-fit">XML</div>
                <div class="card-skill font-sans bg-orange-200 px-4 py-2 rounded-xl w-fit">Database SQL</div>
                <div class="card-skill font-sans bg-orange-200 px-4 py-2 rounded-xl w-fit">C++</div>
                <div class="card-skill font-sans bg-orange-200 px-4 py-2 rounded-xl w-fit">Internet of Things</div>
                <div class="card-skill font-sans bg-orange-200 px-4 py-2 rounded-xl w-fit">Microsoft
                    Office</div>
            </div>
        </div>
        <div class="knowledges w-full">
            <div class="header text-3xl font-semibold">
                Knowledges
            </div>
            <div class="container flex flex-wrap gap-3 py-10">
                <div class="card-skill font-sans bg-indigo-200 px-4 py-2 rounded-xl w-fit">
                    Communication</div>
                <div class="card-skill font-sans bg-indigo-200 px-4 py-2 rounded-xl w-fit">Time
                    Management</div>
                <div class="card-skill font-sans bg-indigo-200 px-4 py-2 rounded-xl w-fit">Flexibility
                </div>
                <div class="card-skill font-sans bg-indigo-200 px-4 py-2 rounded-xl w-fit">Critical
                    Thinking</div>
                <div class="card-skill font-sans bg-indigo-200 px-4 py-2 rounded-xl w-fit">Teamwork
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
