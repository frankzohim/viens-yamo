@extends('layouts.Backend.Admin.app')

@section('title')
Edition Faq {{ $faq->questions }}
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
                                <li class="breadcrumb-item"><a href="{{ route('faqs.index') }}">Faqs</a></li>
                                <li class="breadcrumb-item active">Nouveau Faq</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Nouveau Faq</h4>
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


                                            <form method="POST" action="{{ route('faqs.update',$faq->id) }}">
                                                @csrf
                                                @method('PUT')
                                                <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="mb-3">
                                                        <label for="simpleinput" class="form-label">Question</label>
                                                        <input type="text" value="{{ $faq->questions }}" name="questions" placeholder="Entrez le titre de votre question" id="simpleinput" class="form-control">
                                                    </div>
                                                </div>

                                            </div>
                                                <div class="mb-3">
                                                    <label for="example-email" class="form-label">Reponse</label>
                                                    <input type="text" value="{{ $faq->answer }}" id="example-email" name="answer" class="form-control" placeholder="Entrez une reponse lié à votre question">
                                                </div>

                                                    <div class="col-auto">
                                                        <button type="submit" class="btn  mb-2" style="background-color: #ED5858;color:white">Ajouter</button>
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
