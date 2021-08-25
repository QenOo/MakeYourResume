@extends('layouts.resume')
@section('content')


    <div class="max-w-screen-md mx-auto p-5">
        <div class="text-center mt-10 mb-16">
            <p class="mt-4 text-sm leading-7 text-gray-500 font-regular uppercase">
                <div class="text-sm breadcrumbs">
                    <ul class="pt-6 mb-10">
                        <li>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="w-4 h-4 mr-2 stroke-current">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z"></path>
                            </svg>
                            <a>Resume</a>
                        </li>
                        <li>
                            <a>Create</a>
                        </li>
                    </ul>
                </div>
            </p>



            <input type="checkbox" id="my-modal-2" class="modal-toggle">
            <div class="modal">
                <div class="modal-box">

                    <div id="alert-suc" class="hidden">

                        <div class="alert alert-success">
                            <div class="flex-1">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="w-6 h-6 mx-2 stroke-current">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z"></path>
                                </svg>
                                <label>Create Resume, Successful!</label>
                            </div>
                        </div>

                    </div>
                    <div id="alert-err" class="hidden">

                        <div class="alert alert-error">
                            <div class="flex-1">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="w-6 h-6 mx-2 stroke-current">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 18.364A9 9 0 005.636 5.636m12.728 12.728A9 9 0 015.636 5.636m12.728 12.728L5.636 5.636"></path>
                                </svg>
                                <label>Successful, Create Resume!!</label>
                            </div>
                        </div>

                    </div>

                    <div class="modal-action">
                        <a onclick="$('#my-modal-2').prop('checked', false);" class="btn">Close</a>
                    </div>
                </div>
            </div>


            <h3 class="text-3xl mt-5 sm:text-4xl leading-normal font-extrabold tracking-tight text-gray-900">
                Create <span class="text-indigo-600"> Resume </span>
            </h3>
        </div>

        <form class="w-full" id="resumeForm">

            <!-- input group -->
            <div class="flex flex-wrap -mx-3 mb-6">

                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="name">
                        Name
                    </label>
                    <input class="appearance-none block w-full text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none bg-white" id="name" name="name" type="text" placeholder="Your Name..">
                </div>

                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="job">
                        Name
                    </label>
                    <input class="appearance-none block w-full text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none bg-white" id="job" name="job" type="text" placeholder="Your Job Title..">
                </div>

            </div>
            <!-- input group -->

            <!-- input group -->
            <div class="flex flex-wrap -mx-3 mb-6">

                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="description">
                        description
                    </label>
                    <input class="appearance-none block w-full text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none bg-white" id="description" name="description" type="text" placeholder="Description..">
                </div>

                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="fb">
                        Facebook Account
                    </label>
                    <input class="appearance-none block w-full text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none bg-white" id="fb" name="fb" type="url" placeholder="Your Facebook Accout">
                </div>

            </div>
            <!-- input group -->

            <!-- input group -->
            <div class="flex flex-wrap -mx-3 mb-6">

                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="tw">
                        Twitter Account
                    </label>
                    <input class="appearance-none block w-full text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none bg-white" id="tw" name="tw" type="url" placeholder="Your Twitter Account..">
                </div>

                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="git">
                        GitHub Account
                    </label>
                    <input class="appearance-none block w-full text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none bg-white" id="git" name="git" type="url" placeholder="Your GitHub Account..">
                </div>

            </div>
            <!-- input group -->

            <!-- input group -->
            <div class="flex flex-wrap -mx-3 mb-6">

                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="in">
                        LinkedIn Account
                    </label>
                    <input class="appearance-none block w-full text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none bg-white" id="in" name="in" type="url" placeholder="Your LinkedIn Account..">
                </div>

                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="exp">
                        EXPERIENCE
                    </label>
                    <input class="appearance-none block w-full text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none bg-white" id="exp" name="exp" type="text" placeholder="Your EXPERIENCE..">
                </div>

            </div>
            <!-- input group -->

            <!-- input group -->
            <div class="flex flex-wrap -mx-3 mb-6">

                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="edu">
                        EDUCATION
                    </label>
                    <input class="appearance-none block w-full text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none bg-white" id="edu" name="edu" type="text" placeholder="Your EDUCATION..">
                </div>

                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="work">
                        Work
                    </label>
                    <input class="appearance-none block w-full text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none bg-white" id="work" name="work" type="text" placeholder="Your Work..">
                </div>

                <div class="flex justify-between w-full mt-5 px-3">
                    <div class="md:flex md:items-center">
                        Code With ❤️ By: <a class="text-white rounded mx-3 font-extrabold px-3 py-1 bg-indigo-300 hover:bg-indigo-600" href="https://www.facebook.com/Qeno.9" target="_blank">QENO</a>
                    </div>
                    <button id="save" class="shadow bg-indigo-600 hover:bg-indigo-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-6 rounded" type="submit">
                        Make Your Resume
                    </button>
                </div>

            </div>
            <!-- input group -->



        </form>
    </div>

@endsection

@section('script')
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $(document).on('click', '#save', function (e) {
            e.preventDefault()

            var name        = $("input[name=name]").val();
            var job         = $("input[name=job]").val();
            var description = $("input[name=description]").val();
            var fb          = $("input[name=fb]").val();
            var tw          = $("input[name=tw]").val();
            var git         = $("input[name=git]").val();
            var lin         = $("input[name=in]").val();
            var exp         = $("input[name=exp]").val();
            var edu         = $("input[name=edu]").val();
            var work        = $("input[name=work]").val();

            $.ajax({
                type: 'POST',
                url: '/cv/create/post',
                data: {
                    name: name,
                    job: job,
                    description: description,
                    fb: fb,
                    tw: tw,
                    git: git,
                    in: lin,
                    exp: exp,
                    edu: edu,
                    work: work,
                },
                success:function(response){
                    $('#alert-suc').removeClass('hidden');
                    $('#alert-err').addClass('hidden');
                    $('#my-modal-2').prop('checked', true);
                },
                error:function(error){
                    $('#alert-err').removeClass('hidden');
                    $('#alert-suc').addClass('hidden');

                    $('#my-modal-2').prop('checked', true);
                },
            });

            this.form.reset()
        });

    </script>
@endsection
