@extends('layouts.Frontend.escort.profile.master')

@section('content')
<div class="p-5 w-100">





        <div style="padding-bottom: 20px;" class="w-full p-4 text-center bg-dark border border-gray-200 rounded-lg shadow sm:p-8 border-gray-700">

                <img  class="w-20 m-auto" src="{{ asset('assets/images/bombe-de-table.png') }}">

            <h5 class="mb-2 text-3xl font-bold text-gray-900 text-white">Félicitation votre compte à été securise avec success</h5>

            <div class="items-center justify-center space-y-4 sm:flex sm:space-y-0 sm:space-x-4">

                <a href="{{ route('db.escort.index') }}" class="w-full sm:w-auto bg-gray-800 hover:bg-gray-700 focus:ring-4 focus:outline-none focus:ring-gray-300 text-white rounded-lg inline-flex items-center justify-center px-4 py-2.5 bg-gray-700 hover:bg-gray-600 focus:ring-gray-700">

                    <div class="text-left">
                        <div class="mb-1 text-xs">Retour</div>
                        <div class="-mt-1 font-sans text-sm font-semibold">à votre dashboard</div>
                    </div>
                </a>
            </div>
        </div>




    </div>
</div>
@endsection
