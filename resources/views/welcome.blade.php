@extends('layouts.frontpage')


@section('content')

<!-- MAIN -->
<div
    class="relative sm:flex sm:justify-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter cover-mosaico xxxdark:bg-gray-900 selection:bg-red-500 selection:text-white">

    <div>

        <div class="v-pos">

            <div class="grid">

                <div
                    class="scale-100 p-8 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">

                    <h2 class="text-center text-xl font-semibold text-gray-900 dark:text-white">Welcome to PHOTOs | Laravel Web App.<br>
                    Register an account to start to use it.<br>
                    <p>Already Signed Up? Login Now ! </p>
                    </h2>

                </div>

            </div>
        </div>

    </div>

</div>

@endsection