@extends('layouts.Frontend.escort.profile.master')

@section('content')
<div class="p-5 w-100">

    <div class="mt-8 p-4 mx-10">

        <form method="POST" action="{{ route('answer-store') }}">
            @csrf
            <div>

                @foreach ($questionArray as $question)
                    <div class="flex flex-col md:flex-row">

                        <div class="w-full flex-1 mx-2 svelte-1l8159u">
                            <div class="mb-6">
                                <label for="base-input" class="block mb-2 text-sm font-medium text-gray-900 text-white">{{ $question->question_name }}</label>
                                <input name="answer[]" required  type="text" id="base-input" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 bg-gray-700 border-gray-600 placeholder-gray-400 text-white focus:ring-blue-500 focus:border-blue-500">
                                <input type="hidden" name="question_id[]" value="{{ $question->id }}">
                            </div>
                        </div>



                    </div>
                @endforeach




            </div>
            <div class="flex p-2 mt-4">

                <div class="flex-auto flex flex-row-reverse">
                    <button type="submit" class="text-base  ml-2  hover:scale-110 focus:outline-none flex justify-center px-4 py-2 rounded font-bold cursor-pointer
            hover:bg-teal-600
            bg-teal-600
            text-teal-100
            border duration-200 ease-in-out
            border-teal-600 transition">Enregistrer</button>
        </form>


        </div>
    </div>
</div>
@endsection
