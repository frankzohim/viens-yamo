@extends('layouts.Backend.Admin.app')
@section('title')
Liste des quartiers
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
                                <li class="breadcrumb-item active">Quartiers</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Liste des quartiers</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-12">
                    @if(Session::has('success'))
                    <div class="alert alert-primary" role="alert">
                         <div class="container">
                                        <div class="alert alert-success p-3  alert-dismissible fade show" role="alert">
                                            <strong><i class="fa fa-check mr-3"></i>{{ session('success') }}</strong>
                                        </div>
                                    </div>
                    </div>
                    @endif
                    <div class="card">
                        <div class="card-body">
                            
                            @if(session('failure'))
                                <div id="ppt-invalid-fields1" >
                                    <div class="container ">
                                        <div class="alert alert-danger p-3  alert-dismissible fade show" role="alert">
                                            <strong><i class="fas fa-exclamation-triangle mr-2"></i> {{ session('failure') }}  </strong> <span id="ppt-invalid-fields-text">{{$errors->first()}}</span>
                                        </div>
                                    </div>
                                </div>
                                @endif
                            <div class="row mb-2">
                                <div class="col-xl-8">
                                    <form method="get" action="{{ route('user-by-role') }}" class="row gy-2 gx-2 align-items-center justify-content-xl-start justify-content-between">
                                        <div class="col-auto">
                                            <label for="inputPassword2" class="visually-hidden">Search</label>

                                        </div>
                                        <div class="col-auto">
                                          
                                        </div>
                                    </form>
                                </div>
                                <div class="col-xl-4">
                                    <div class="text-xl-end mt-xl-0 mt-2">
                                        <a href="{{ route('quarters.create') }}"><button type="button" class="btn btn-danger mb-2 me-2"> 
                                            Nouveau Quartier</button></a>
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
                                            <th>Nom</th>
                                            <th>Ville</th>
                                            <th style="width: 125px;">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if ($quarters)

                                            @forelse ($quarters as $quarter)
                                            <tr>
                                                <td>
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-input" id="customCheck2">
                                                        <label class="form-check-label" for="customCheck2">&nbsp;</label>
                                                    </div>
                                                </td>
                                                <td><a href="apps-ecommerce-orders-details.html" class="text-body fw-bold">{{ $quarter['id'] }}</a> </td>
                                                <td>
                                                    <h5>{{ $quarter['quarter_name'] }}</h5>
                                                </td>
                                               
                                                <td>
                                                {{ $quarter['town']['town_name'] }}
                                                </td>
                                            

                                                <td>

                                                   
                                                    <a href="{{ route('quarters.edit',$quarter['id']) }}" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal{{$quarter['id']}}"
                                                      class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                                
                                                     <div class="modal fade" id="exampleModal{{$quarter['id']}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title f-w-600" id="exampleModalLabel">Suppression</h5>
                                                                    <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <form method="POST" action="{{ route('quarters.delete',$quarter['id']) }}" id="delete-form{{$quarter['id']}}">
                                                                    @csrf
                                                                    <p>{{ __('Voulez vous supprimer cet élément?') }}</p>

                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="submit" class="btn btn-primary">Oui</button>
                                                                    <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Annuler</button>
                                                                </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            @empty
                                             Pas de ville disponible
                                            @endforelse

                                        @endif


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
