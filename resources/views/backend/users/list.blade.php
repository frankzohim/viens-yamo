@extends('layouts.Backend.Admin.app')
@section('title')
Listes des utilisateurs
@endsection

@section("content")
<div class="content-page">
    <div class="content">



        <!-- Start Content-->
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="{{ route('users.create') }}">Ajouter un utilisateur</a></li>
                                <li class="breadcrumb-item active">utilisateurs</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Ajouter un Utilisateur</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-12">
                    @if(Session::has('success'))
                    <div class="alert alert-primary" role="alert">
                        {{ Session::get('success') }}
                    </div>
                    @endif
                    <div class="card">
                        <div class="card-body">
                            <div class="row mb-2">
                                <div class="col-xl-8">
                                    <form method="get" action="{{ route('user-by-role') }}" class="row gy-2 gx-2 align-items-center justify-content-xl-start justify-content-between">
                                        <div class="col-auto">
                                            <label for="inputPassword2" class="visually-hidden">Search</label>

                                        </div>
                                        <div class="col-auto">
                                            <div class="d-flex align-items-center">



                                                <select name="role_id" class="form-select" id="status-select">
                                                    <option selected>Filtrer par role...</option>
                                                    @foreach ($roles as $role)
                                                    @foreach ($role as $r)
                                                    <option value="{{ $r->id }}">{{ $r->role_name }}</option>
                                                    @endforeach

                                                    @endforeach



                                                </select>
                                                <button type="submit" class="btn" style="background-color: #ED5858;color:white"> Filtrer</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-xl-4">
                                    <div class="text-xl-end mt-xl-0 mt-2">
                                        <a href="{{ route('users.create') }}"><button type="button" class="btn btn-danger mb-2 me-2"> Nouvel utilisateur</button></a>
                                        <button type="button" class="btn btn-light mb-2">Export</button>
                                    </div>
                                </div><!-- end col-->
                            </div>

                            <div class="table-responsive">
                                <table class="table table-centered table-nowrap mb-0">
                                    <thead class="table-light">
                                        <tr>
                                            <th style="width: 20px;">
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="customCheck1">
                                                    <label class="form-check-label" for="customCheck1">&nbsp;</label>
                                                </div>
                                            </th>
                                            <th>ID</th>
                                            <th>Username</th>
                                            <th>Email</th>
                                            <th>Numéro de Téléphone</th>
                                            <th>Role</th>
                                            <th>Balance</th>
                                            <th style="width: 125px;">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($users as $user)

                                        @forelse ($user as $u)
                                         @if ($u->username == "system")
                                             @continue
                                         @endif
                                        <tr>
                                            <td>
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="customCheck2">
                                                    <label class="form-check-label" for="customCheck2">&nbsp;</label>
                                                </div>
                                            </td>
                                            <td><a href="apps-ecommerce-orders-details.html" class="text-body fw-bold">{{ $u->id }}</a> </td>
                                            <td>
                                                {{ $u->username }}</small>
                                            </td>
                                            <td>
                                                <h5>{{ $u->email ?? "Aucun" }} </h5>
                                            </td>
                                            <td>
                                               {{ $u->phone_number }}
                                            </td>
                                            <td>
                                                {{ $u->role->role_name }}
                                            </td>
                                            <td>
                                                {{ $u->balance }}
                                            </td>
                                            <td style="display: flex;alig-items:center;">

                                                <a href="{{ route('suspend-user',$u->id) }}" style="cursor: pointer" class="action-icon"> <i data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Suspendre le compte" class="ri-user-unfollow-fill"></i></a>
                                                <a href="{{ route('credit.view',$u->id) }}" style="cursor: pointer" class="action-icon" data-bs-toggle="tooltip" data-bs-title="Attribuer un nombre de pièce à cet utilisateur"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><g fill="none"><path d="M24 0v24H0V0zM12.593 23.258l-.011.002l-.071.035l-.02.004l-.014-.004l-.071-.035c-.01-.004-.019-.001-.024.005l-.004.01l-.017.428l.005.02l.01.013l.104.074l.015.004l.012-.004l.104-.074l.012-.016l.004-.017l-.017-.427c-.002-.01-.009-.017-.017-.018m.265-.113l-.013.002l-.185.093l-.01.01l-.003.011l.018.43l.005.012l.008.007l.201.093c.012.004.023 0 .029-.008l.004-.014l-.034-.614c-.003-.012-.01-.02-.02-.022m-.715.002a.023.023 0 0 0-.027.006l-.006.014l-.034.614c0 .012.007.02.017.024l.015-.002l.201-.093l.01-.008l.004-.011l.017-.43l-.003-.012l-.01-.01z"/><path fill="currentColor" d="M21 16.143V17.5c0 .814-.381 1.51-.91 2.057c-.523.542-1.233.984-2.032 1.334C16.456 21.591 14.314 22 12 22c-2.314 0-4.456-.408-6.058-1.109c-.799-.35-1.509-.792-2.032-1.334c-.485-.5-.845-1.128-.902-1.856L3 17.5v-1.357c.465.264.962.498 1.494.695c2.03.751 4.685 1.17 7.506 1.17c2.821 0 5.476-.419 7.506-1.17c.399-.148.778-.316 1.139-.503zm-18-5.5c.465.264.962.498 1.494.695c2.03.751 4.685 1.17 7.506 1.17c2.821 0 5.476-.419 7.506-1.17A10.08 10.08 0 0 0 21 10.643v3.105a8.328 8.328 0 0 1-2.188 1.214c-1.755.65-4.164 1.047-6.812 1.047c-2.647 0-5.056-.397-6.812-1.047A8.328 8.328 0 0 1 3 13.748zM12 3c2.314 0 4.456.408 6.058 1.109c.799.35 1.509.792 2.032 1.334c.485.5.845 1.128.902 1.856L21 7.5v.748a8.326 8.326 0 0 1-2.188 1.214c-1.755.65-4.164 1.047-6.812 1.047c-2.647 0-5.056-.397-6.812-1.047a8.267 8.267 0 0 1-1.905-1.006L3 8.248V7.5c0-.814.381-1.51.91-2.057c.523-.542 1.233-.984 2.032-1.334C7.544 3.409 9.686 3 12 3"/></g></svg></a>
                                                <a href="#" class="action-icon"
                                                data-toggle="modal" data-target="#deleteModal{{ $u->id }}"> 
                                                    <i class="mdi mdi-delete"></i></a>

                                            </td>
                                             <div class="modal fade" id="deleteModal{{ $u->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title f-w-600" id="exampleModalLabel">Suppression</h5>
                                                            <button class="btn-close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form method="GET" action="{{ route('user-delete',['id' => $u->id]) }}" 
                                                                id="delete-form{{$u->id}}">
                                                            @csrf
                                                            <p>{{ __('Voulez vous supprimer cet utilisateur avec ses annonces?') }}</p>

                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="submit" class="btn btn-primary">Oui</button>
                                                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Annuler</button>
                                                        </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </tr>
                                        @empty

                                        @endforelse

                                        @endforeach


                                    </tbody>
                                </table>
                            </div>
                        </div> <!-- end card-body-->
                    </div> <!-- end card-->
                </div> <!-- end col -->
            </div>
            <!-- end row -->

        </div> <!-- container -->

    </div> <!-- content -->

    <!-- Footer Start -->
    <footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <script>document.write(new Date().getFullYear())</script> © Stillforce Technology
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
