@extends('layouts.Backend.Admin.app')

@section('title')
Éditer une dénonciation
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
                                <li class="breadcrumb-item"><a href="{{ route('reports') }}">Dénonciations</a></li>
                                <li class="breadcrumb-item active">Éditer une dénonciation</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Éditer une dénonciation</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            @if (session('success'))
                                <div id="" >
                                    <div class="container">
                                        <div class="alert alert-success p-3  alert-dismissible fade show" role="alert">
                                            <strong><i class="fa fa-check mr-3"></i>  Super</strong> - le statut a été bien modifiée.
                                        </div>
                                    </div>
                                </div>
                                @endif
                            @if($errors->any())
                                <div id="ppt-invalid-fields1" >
                                    <div class="container ">
                                        <div class="alert alert-danger p-3  alert-dismissible fade show" role="alert">
                                            <strong><i class="fas fa-exclamation-triangle mr-2"></i>  
                                                Erreur : </strong> 
                                                <span id="ppt-invalid-fields-text">{{$errors->first()}}</span>
                                        </div>
                                    </div>
                                </div>
                                @endif

                            <div class="tab-content">
                                <div class="tab-pane show active" id="input-types-preview">


                                            <form method="POST" action="{{ route('reports.update') }}">
                                                @csrf
                                                <input type="hidden" name="id"  value="{{ $report['id'] }}">
                                                <div class="row">
                                               
                                                    <div class="mb-3">
                                                        <label for="simpleinput" class="form-label">Nom</label>
                                                        <input type="text" name="name"  disabled
                                                         class="form-control" 
                                                        value="{{ $report['name'] }}" required>
                                                    </div>
                                                
                                        
                                                    <div class="mb-3">
                                                        <label for="simpleinput" class="form-label">Téléphone</label>
                                                        <input type="text" name="phone"  disabled
                                                         class="form-control" 
                                                        value="{{ $report['phone'] }}" required>
                                                    </div>
                                                
                                              
                                               
                                                    <div class="mb-3">
                                                        <label for="simpleinput" class="form-label">Message</label>
                                                        <input type="text" name="message"  
                                                         class="form-control"  disabled
                                                        value="{{ $report['message'] }}" required>
                                                    </div>
                                              

                                                    <div class="mb-3">
                                                        <label for="simpleinput" class="form-label">Preuve</label> <br>
                                                        <img src="{{ route('display.report.image',['id'=>$report['id'] , 'adsId'=>$report['ads'][0]['id']] )}}"  width="100%" alt="" srcset="">
                                                    </div>
												
												
												 <div class="mb-3">
                                                    <label for="example-email" class="form-label">Status</label>
                                                      <select name="statut" id="statut" class="form-control" required>
                                                          <option value="0" @if ($report['status'] == 0) selected @endif>Non Traité</option>
                                                            <option value="1" @if ($report['status'] == 1) selected @endif>Traité</option>
                                                      </select>
                                                </div>
                                               
                                            </div>
                                              
                                               

                                            <div class="col-auto">
                                                <button type="submit" class="btn btn-primary mb-2">Enregistrer</button>
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
                        <a href="javascript: void(0);">report Us</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- end Footer -->

</div>
@endsection
