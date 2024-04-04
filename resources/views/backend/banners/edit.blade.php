@extends('layouts.Backend.Admin.app')
@section('title')
Édition
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
                        <h4 class="page-title">Édition</h4>
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
                            
                            @if(Session::has('failure'))
                                <div id="ppt-invalid-fields1" >
                                    <div class="container ">
                                        <div class="alert alert-danger p-3  alert-dismissible fade show" role="alert">
                                            <strong><i class="fas fa-exclamation-triangle mr-2"></i> Hello {{ session('failure') }}  </strong> <span id="ppt-invalid-fields-text">{{$errors->first()}}</span>
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


                            <div class="tab-content">
                                <div class="tab-pane show active" id="input-types-preview">


                                            <form method="POST" action="{{ route('banners.update') }}" enctype="multipart/form-data">
                                                @csrf
                                          
                                           
                                                    <input type="hidden" name="banner_id" value="{{ $banner['id'] }}">
                                                
                                                    <h4>{{ $banner['description'] }}</h4> 
                                                    <hr>
                                                    <div class="mb-3">
                                                        <label for="example-multiselect" class="form-label">Image</label>
                                                        @if ($banner['path']=="")
                                                            Aucune image
                                                        @else
                                                         <br>
                                                            <img src="{{ route('display.banner',['id'=>$banner['id'] , 'path'=>$banner['path']] )}}" alt="" srcset="">
                                                        @endif
                                                        
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="example-fileinput" class="form-label">Charger une image</label>
                                                        <input type="file" name='image' id="example-fileinput" class="form-control">
                                                    </div>
                                                    <div class="mb-3">
                                                        <div class="d-flex flex-row">
                                                            <div class="p-2"><label for="example-email" class="form-label">Publié</label></div>

                                                            <div class="p-2"><!-- Success Switch-->
                                                        <input type="checkbox" id="status" name="status" @if($banner['status']) checked @endif data-switch="success"/>
                                                        <label for="status" data-on-label="Oui" data-off-label="Non"></label></div>
                                                        </div>
                                                       
                                            
                                                                
                                                    </div>
                                              
                                                    <div class="col-auto">
                                                        <button type="submit" class="btn btn-primary mb-2">Enregistrer</button>
                                                    </div>
                                            </form>



                                    <!-- end row-->
                                </div> <!-- end preview-->


                            </div> <!-- end tab-content-->
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
