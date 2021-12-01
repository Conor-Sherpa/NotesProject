<!DOCTYPE HTML>
<html>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{$user->name}} Profile</title>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>

<body>
    <div id="app">

        <div class="min-h-full">

            <toolbartop :user="{{ $user }}"></toolbartop>

            <main class="py-10">
                <!-- Page header -->
                <div class="max-w-3xl mx-auto px-4 sm:px-6 md:flex md:items-center md:justify-between md:space-x-5 lg:max-w-7xl lg:px-8">
                    <div class="flex items-center space-x-5">
                        <div class="flex-shrink-0">
                            <div class="relative">
                                <img class="h-16 w-16 rounded-full" src="https://images.unsplash.com/photo-1463453091185-61582044d556?ixlib=rb-=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=8&w=1024&h=1024&q=80" alt="">
                                <span class="absolute inset-0 shadow-inner rounded-full" aria-hidden="true"></span>
                            </div>
                        </div>
                        <div>
                            <h1 class="text-2xl font-bold text-gray-900">{{ $user->name }}</h1>
                            <p class="text-sm font-medium text-gray-500">Looking for a <a href="#" class="text-gray-900">Maths Tutor</a></p>
                        </div>
                    </div>
                    <div class="mt-6 flex flex-col-reverse justify-stretch space-y-4 space-y-reverse sm:flex-row-reverse sm:justify-end sm:space-x-reverse sm:space-y-0 sm:space-x-3 md:mt-0 md:flex-row md:space-x-3">
                        <button type="button" class="inline-flex items-center justify-center px-4 py-2 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-100 focus:ring-blue-500">
                            Message
                        </button>
                        <button type="button" class="inline-flex items-center justify-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-100 focus:ring-blue-500">
                            Email
                        </button>
                    </div>
                </div>

                <div class="mt-8 max-w-3xl mx-auto grid grid-cols-1 gap-6 sm:px-6 lg:max-w-7xl lg:grid-flow-col-dense lg:grid-cols-3">
                    <div class="space-y-6 lg:col-start-1 lg:col-span-2">
                        <!-- Description list-->
                        <section aria-labelledby="applicant-information-title">
                            <div class="bg-white shadow sm:rounded-lg">
                                <div class="px-4 py-5 sm:px-6">
                                    <h2 id="applicant-information-title" class="text-lg leading-6 font-medium text-gray-900">
                                        Applicant Information
                                    </h2>
                                    <p class="mt-1 max-w-2xl text-sm text-gray-500">
                                        Personal details and application.
                                    </p>
                                </div>
                                <div class="border-t border-gray-200 px-4 py-5 sm:px-6">
                                    <dl class="grid grid-cols-1 gap-x-4 gap-y-8 sm:grid-cols-2">
                                        <div class="sm:col-span-1">
                                            <dt class="text-sm font-medium text-gray-500">
                                                Looking for...
                                            </dt>
                                            <dd class="mt-1 text-sm text-gray-900">
                                                Maths GCSE Tutor
                                            </dd>
                                        </div>
                                        <div class="sm:col-span-1">
                                            <dt class="text-sm font-medium text-gray-500">
                                                Email address
                                            </dt>
                                            <dd class="mt-1 text-sm text-gray-900">
                                                {{ $user->email }}
                                            </dd>
                                        </div>
                                        <div class="sm:col-span-1">
                                            <dt class="text-sm font-medium text-gray-500">
                                                Budget
                                            </dt>
                                            <dd class="mt-1 text-sm text-gray-900">
                                                £30 per hour
                                            </dd>
                                        </div>
                                        <div class="sm:col-span-1">
                                            <dt class="text-sm font-medium text-gray-500">
                                                Phone
                                            </dt>
                                            <dd class="mt-1 text-sm text-gray-900">
                                                +1 555-555-5555
                                            </dd>
                                        </div>
                                    </dl>
                                </div>
                                <div>
                                    <a href="#" class="block bg-gray-50 text-sm font-medium text-gray-500 text-center px-4 py-4 hover:text-gray-700 sm:rounded-b-lg">Set As Converted</a>
                                </div>
                            </div>
                        </section>

                        <!-- Comments-->
                        <section aria-labelledby="notes-title">
                            <div class="bg-white shadow sm:rounded-lg sm:overflow-hidden">
                                <div class="divide-y divide-gray-200">
                                    <div class="px-4 py-5 sm:px-6">
                                        <h2 id="notes-title" class="text-lg font-medium text-gray-900">Notes</h2>
                                    </div>
                                    <div class="px-4 py-6 sm:px-6">
                                        <ul role="list" class="space-y-8">

                                            <!-- NOTE: There is an example component for a note (static) in the ../js/components folder.
                                            This should be updated to make it dynamic -->

                                            <note></note>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <createnote></createnote>
                        </section>
                    </div>

                    <timeline></timeline>
                </div>
            </main>
        </div>

    </div>

<script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
