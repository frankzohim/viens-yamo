@extends("layouts.Frontend.master")
@section("title")
Réinitialisation du mot de passe
@endsection

@section("content")



<section class="bg-light section-100">
    <div class="container">
       <div class="row">
          <div class="col-md-8 col-lg-6 mx-auto">

                     <div class="text-center py-3">
                      <h1 class="h2">Réinitialisation du mot de passe</h1>
                      <p class="text-muted my-3 col-md-10 mx-auto">Entrez votre numéro de téléphone</p>
                   </div>
                   @if(session("message"))
            <div id="login_form_message" class="text-danger mb-4 text-center">
                {{ session('message') }}
            </div>
        @endif
             <div class="card shadow-sm">
                <div class="card-body p-lg-5">

                   <span class="clearfix"></span>
                   <form class="lostpasswordform" name="lostpasswordform" id="loginform" action="{{ route('number-verify') }}" method="post">
                      @csrf
                    <div class="form-group">
                         <div class="input-group">
                            <div class="input-group-prepend">
                               <span class="input-group-text bg-white"><i class="fa fa-phone"></i></span>
                            </div>
                            <input type="text" name="phone_number" id="user_login" placeholder="Mon numéro de téléphone est..." value="" class="form-control">
                         </div>
                      </div>
                                           <div class="mt-4">
                         <button type="submit" class="btn btn-block btn-primary py-3">Valider</button>
                      </div>
                   </form>
                </div>
             </div>

                   <div class="d-block d-sm-flex justify-content-between align-items-center mt-4 mb-5">
              <span> <span class="text-muted">Pas encore enregistré?</span> <a href="{{ route('register') }}">Créer un compte</a> </span>


        <a href="{{ route('login') }}">Connexion</a> </div>



          </div>
       </div>
    </div>
 </section>

@endsection
