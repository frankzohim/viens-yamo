@extends('layouts.Backend.Admin.app')

@section('title')
Nouvel utilisateur
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
                    <div class="page-title-box">
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="{{ route('users') }}">utilisateurs</a></li>
                                <li class="breadcrumb-item active">Nouvel utilisateur</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Nouvel utilisateur</h4>
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


                                            <form method="POST" action="{{ route('users.create') }}">
                                                @csrf
                                                <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="mb-3">
                                                        <label for="simpleinput" class="form-label">Nom utilisateur</label>
                                                        <input type="text" name="username" placeholder="Entrez le nom d'utilisateur" id="simpleinput" class="form-control">
                                                    </div>
                                                </div>

                                            </div>
                                                <div class="mb-3">
                                                    <label for="example-email" class="form-label">Email</label>
                                                    <input type="email" id="example-email" name="email" class="form-control" placeholder="Entrez une adresse email valide">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="example-email" class="form-label">Numéro de Téléphone</label>
                                                    <input type="text" id="phone_number" name="phone_number" class="form-control" placeholder="Entrez le numéro de téléphone">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="password" class="form-label">Mot de passe</label>
                                                    <div class="input-group input-group-merge">
                                                        <input name="password" type="password" id="password" class="form-control" placeholder="Entrez le mot de passe de l'utilisateur">
                                                        <div class="input-group-text" data-password="false">
                                                            <span class="password-eye"></span>
                                                        </div>
                                                    </div>
                                                </div>

                                                    <div class="mb-3">
                                                        <label for="example-select" class="form-label">Role</label>
                                                        <select name="role_id" class="form-select" id="example-select">
                                                            @foreach ($roles as $role)
                                                            @foreach ($role as $r)
                                                            <option value="{{ $r->id }}">{{ $r->role_name }}</option>
                                                            @endforeach

                                                            @endforeach
                                                        </select>

                                                    </div>
                                                    <div class="col-auto">
                                                        <button type="submit" class="btn mb-2" style="background-color: #ED5858;color:white">Ajouter</button>
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
