@extends('layouts.Backend.Admin.app')
@section('title')
Listes des escorts
@endsection

@section("content") vccv
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
                                <li class="breadcrumb-item"><a href="{{ route('users.create') }}">Ajouter un(e) escort</a></li>
                                <li class="breadcrumb-item active">Escorts</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Ajouter un(e) escort</h4>
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
                     @if(Session::has('msg'))
                            <div class="alert alert-danger" role="alert">
                                {{ Session::get('msg') }}
                            </div>
                            @endif
                    <div class="card">
                        <div class="card-body">
                            <div class="row mb-2">
                                <div class="col-xl-8">
                                  
                                </div>
                                <div class="col-xl-4">
                                    <div class="text-xl-end mt-xl-0 mt-2">
                                        <a href="{{ route('users.create') }}"><button type="button" class="btn btn-danger mb-2 me-2"> Nouvel utilisateur</button></a>
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
                                            <th>Username</th>
                                            <th>Ville</th>
                                            <th>Numéro de Téléphone</th>
                                             <th>Balance</th>
                                            <th>Vérifié</th>
                                            <th style="width: 125px;">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($escorts as $escort)


                                        <tr>
                                            <td>
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="customCheck2">
                                                    <label class="form-check-label" for="customCheck2">&nbsp;</label>
                                                </div>
                                            </td>
                                           
                                            <td>
                                                {{ ucfirst($escort->username) }}</small>
                                            </td>
                                            <td>
                                                <h5>{{ $escort->town->town_name }} </h5>
                                            </td>
                                            <td>
                                               {{ $escort->phone_number }}
                                            </td>
                                             <td>
                                               {{ $escort->balance }}
                                            </td>
                                            <td>

                                                 <form method="POST" action="{{ route('verify', ['id' => $escort->id ]) }}"
                                                    id="verify{{ $escort->id }}">

                                                        @csrf

                                                 <input type="checkbox" id="isVerify{{ $escort->id }}" name="isVerify{{ $escort->id }}" @if($escort->isVerify) checked @endif data-switch="success"
                                                 onclick="event.preventDefault(); document.getElementById('verify{{ $escort->id }}').submit();"/>
                                                 <label for="isVerify{{ $escort->id }}" data-on-label="Oui" data-off-label="Non"></label></div>
                                                 </form>
                                            </td>

                                            <td>
                                            
                                                <a href="#" class="action-icon"
                                                data-toggle="modal" data-target="#deleteModal{{ $escort->id }}"> 
                                                    <i class="mdi mdi-delete"></i></a>
                                            </td>
                                            
                                             <div class="modal fade" id="deleteModal{{ $escort->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title f-w-600" id="exampleModalLabel">Suppression</h5>
                                                            <button class="btn-close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form method="GET" action="{{ route('user-delete',['id' => $escort->id]) }}" 
                                                                id="delete-form{{$escort->id}}">
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
