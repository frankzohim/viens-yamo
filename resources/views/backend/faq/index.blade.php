@extends('layouts.Backend.Admin.app')
@section('title')
Faqs
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
                                <li class="breadcrumb-item"><a href="{{ route('faqs.create') }}">Ajouter un faq</a></li>
                                <li class="breadcrumb-item active">Faqs</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Listes des Faqs</h4>
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

                    @if(Session::has('error'))
                    <div class="alert alert-danger" role="alert">
                        {{ Session::get('error') }}
                    </div>
                    @endif
                    <div class="card">
                        <div class="card-body">
                            <div class="row mb-2">

                                <div class="col-xl-4">
                                    <div class="text-xl-end mt-xl-0 mt-2">
                                        <a href="{{ route('faqs.create') }}"><button type="button" class="btn btn-danger mb-2 me-2">Nouvel Faq</button></a>

                                    </div>
                                </div><!-- end col-->
                            </div>

                            <div class="table-responsive">
                                <table class="table table-centered table-nowrap mb-0">
                                    <thead class="table-light">
                                        <tr>
                                            <th>Question</th>
                                            <th>Answer</th>
                                            <th style="width: 125px;">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>


                                        @forelse ($faqs as $faq)
                                        <tr>


                                            <td>
                                                {{ $faq->questions }}</small>
                                            </td>

                                            <td>
                                               {{ $faq->answer}}
                                            </td>


                                            <td>


                                                <a href="{{ route('faqs.edit',$faq->id) }}" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>

                                                <form method="POST" action="{{ route('faqs.destroy',$faq->id) }}" onsubmit="return confirm('Are you sure?')">
                                                    @csrf
                                                    @method('delete')
                                                    <a href="" class="action-icon"> </a>
                                                    <a href="javascript:void(0);"> </a>
                                                    <button type="submit" style="background:transparent;
                                                    border:transparent; display:flex; align-items:center;justify-content: space-between;" class="action-icon"><i class="mdi mdi-delete"></i></button>

                                                </form>

                                            </td>
                                        </tr>
                                        @empty
                                        <p>Aucune donnée ajoutée</p>
                                        @endforelse




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
