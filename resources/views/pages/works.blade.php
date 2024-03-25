@extends('main')
@section('content')
    <div class="content flex flex-col gap-5">
        <div class="filter px-12">
            <div x-data="{ activeTab: 'tab1' }">
                <ul class="flex mb-0 list-none">
                    <li class="-mb-px mr-2 last:mr-0 flex-auto text-center">
                        <a :class="{ 'border-b-2 border-blue-500': activeTab === 'tab1' }"
                            class="text-xs font-bold uppercase px-5 py-3 shadow-lg rounded block leading-normal"
                            @click="activeTab = 'tab1'">Tab 1</a>
                    </li>
                    <li class="-mb-px mr-2 last:mr-0 flex-auto text-center">
                        <a :class="{ 'border-b-2 border-blue-500': activeTab === 'tab2' }"
                            class="text-xs font-bold uppercase px-5 py-3 shadow-lg rounded block leading-normal"
                            @click="activeTab = 'tab2'">Tab 2</a>
                    </li>
                    <!-- Tambahkan tab-pane lain jika diperlukan -->
                </ul>

                <div x-show="activeTab === 'tab1'" class="py-4">
                    <!-- Konten untuk Tab 1 -->
                </div>

                <div x-show="activeTab === 'tab2'" class="py-4">
                    <!-- Konten untuk Tab 2 -->
                </div>
                <!-- Tambahkan konten untuk tab-pane lain jika diperlukan -->
            </div>


        </div>

        <div class="container">

        </div>

    </div>
@endsection
