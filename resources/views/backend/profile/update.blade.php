@extends('layouts.Backend.Admin.app')

@section('title')
Edition de votre profil
@endsection

@section('content')
<div class="content-page">
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    @if(Session::has('error'))
                    <div class="alert alert-danger" role="alert">
                        {{ Session::get('error') }}
                    </div>
                    @endif
                    @if(Session::has('success'))
                    <div class="alert alert-primary" role="alert">
                        {{ Session::get('success') }}
                    </div>
                    @endif
                    <div class="page-title-box">
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="{{ route('users') }}">Users</a></li>
                                <li class="breadcrumb-item active">Edition Profile</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Edition profil</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">



                            <div class="tab-content">
                                <div class="tab-pane show active" id="input-types-preview">


                                            <form method="POST" action="{{ route('admin.update.profile') }}">
                                                @csrf
                                                <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="mb-3">
                                                        <label for="simpleinput" class="form-label">Nom</label>
                                                        <input type="text" name="username" value="{{ $user->username }}" id="simpleinput" class="form-control">
                                                    </div>
                                                </div>

                                            </div>
                                                <div class="mb-3">
                                                    <label for="example-email" class="form-label">Numéro de Téléphone</label>
                                                    <input type="text" id="example-email" name="phone_number" class="form-control" value="{{ $user->phone_number }}">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="example-email" class="form-label">Email</label>
                                                    <input type="text" id="example-email" name="email" class="form-control" value="{{ $user->email }}">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="example-email" class="form-label">Mot de passe</label>
                                                    <input type="password" id="example-email" name="password" class="form-control">
                                                </div>
                                                <div class="mb-3">
                                                    <label class="text-600">Ville</label>
                                                    <select name="town_id" id="town" data-key="town" class="form-control">
                                                        @foreach ($towns as $town)
                                                            <option value="{{ $town['id'] }}" @if ($town['id'] == $user->town->id) selected @endif>
                                                                 {{ $town['town_name'] }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                    <div class="col-auto">
                                                        <button type="submit" class="btn  mb-2" style="background-color: #ED5858;color:white">Mise à jour</button>
                                                    </div>
                                            </form>



                                    <!-- end row-->
                                </div> <!-- end preview-->


                            </div> <!-- end tab-content-->
                        </div> <!-- end card-body -->
                    </div> <!-- end card -->
                </div><!-- end col -->
            </div><!-- end row -->
            <!-- end row -->

        </div> <!-- container -->

    </div> <!-- content -->

    <!-- Footer Start -->
    <footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <script>document.write(new Date().getFullYear())</script> © Stillforce Technologies
                </div>
                <div class="col-md-6">
                    <div class="text-md-end footer-links d-none d-md-block">
                        <a href="javascript: void(0);">About</a>
                        <a href="javascript: void(0);">Support</a>
                        <a href="javascript: void(0);">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- end Footer -->

</div>
@endsection
