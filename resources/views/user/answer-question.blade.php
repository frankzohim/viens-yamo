@extends("layouts.Frontend.master")
@section("title")
Réinitialisation du mot de passe
@endsection

@section("content")



<section class="bg-light section-100">
    <div class="container">
       <div class="row">
          <div class="col-md-8 col-lg-6 mx-auto">
            @if(Session::get("error"))
            <div id="login_form_message" class="text-danger mb-4 text-center">
                {{ Session::get('error') }}
            </div>
        @endif
                     <div class="text-center py-3">
                      <h1 class="h2">Repondez correctement aux questions pour reinitialiser votre compte</h1>

                   </div>
             <div class="card shadow-sm">
                <div class="card-body p-lg-5">

                   <span class="clearfix"></span>
                   <form class="lostpasswordform" name="lostpasswordform" id="loginform" action="{{ route('answer-verify') }}" method="post">
                      @csrf

                      @foreach ($questions as $q)
                        <label class="custom-control" for="question">{{ $q->question_name }}</label>
                        <div class="form-group">

                            <div class="input-group">

                                <input type="text" name="answer[]" id="user_login"  class="form-control">
                                <input type="hidden" name="question_id[]" value="{{ $q->id }}">
                            </div>

                            </div>
                      @endforeach


                                           <div class="mt-4">
                         <button type="submit" class="btn btn-block btn-primary py-3">Valider</button>
                      </div>
                   </form>
                </div>
             </div>




          </div>
       </div>
    </div>
 </section>

@endsection
