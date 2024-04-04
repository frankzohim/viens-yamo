@extends('layouts.Backend.Admin.app')
@section('title')
Gestions des bannières du site web
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
                                <li class="breadcrumb-item active">Bannières</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Liste des Bannières</h4>
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
                                            <th>Position</th>
                                            <th>Image</th>
                                            <th>Status</th>
                                            <th style="width: 125px;">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if ($banners)

                                            @forelse ($banners as $banner)
                                            <tr>
                                                <td>
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-input" id="customCheck2">
                                                        <label class="form-check-label" for="customCheck2">&nbsp;</label>
                                                    </div>
                                                </td>
                                                <td><a href="apps-ecommerce-orders-details.html" class="text-body fw-bold">{{ $banner['id'] }}</a> </td>
                                                <td>
                                                    <h5>{{ $banner['description'] }}</h5>
                                                </td>
                                               
                                                <td>
                                                    {{ $banner['path'] }}
                                                </td>
                                               
                                               
                                                <td>
                                                    @if ($banner['status'] == 0)
                                                        Non Traité
                                                    @else
                                                        Traité
                                                    @endif
                                                </td>
                                            

                                                <td>

                                                   
                                                    <a href="{{ route('banners.edit',$banner['id']) }}" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                                   
                                    
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
                        <a href="javascript: void(0);">banner Us</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- end Footer -->

</div>
@endsection
