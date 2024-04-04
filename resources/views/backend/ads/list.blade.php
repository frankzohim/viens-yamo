@extends('layouts.Backend.Admin.app')
@section('title')
Listes des ads
@endsection

@section("content") 
@include('utils.utils')
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
                                <li class="breadcrumb-item"><a href="{{ route('admin.ads') }}">Annonces</a></li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-xl-12 col-lg-12 order-lg-2 order-xl-1">
                    <div class="card">
                        <div class="d-flex card-header justify-content-between align-items-center">
                            <h4 class="header-title">Annonces</h4>

                        </div>

                       
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

                        <div class="card-body pt-0">

                              <table class="table table-striped table-centered mb-0">
								<thead>
									<tr>
										<th>Utilisateur</th>
										<th>Titre</th>
										<th>Ville</th>
                                        <th>Statut</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
                                    @if (count($ads))

                                        @foreach ($ads as $ad)
                                            <tr>
                                                <td class="table-user" nowrap>
                                                    <img src="{{ route('display.ads.image',['id'=>$ad['id'], 'path'=>$ad['images'][0]['id']] )}}" alt="table-user" class="me-2 rounded-circle" />
                                                     {{  ucfirst($ad['user']['username'])  }}
                                                </td>
                                                <td> {{  ucfirst($ad['title'])  }}</td>
                                                <td> {{ truncate(ucfirst($ad['town']['town_name'])) }}</td>
                                                <td> 
                                                    @if ($ad['isSubscribe'])
                                                        @if ($ad['subscribe_id'] == 3)
                                                            ULTRA VIP
                                                        @elseif ($ad['subscribe_id'] == 2)
                                                             GOLD
                                                        @else
                                                            PREMIUM
                                                        @endif
                                                    @else
                                                        Aucun
                                                    @endif
                                                </td>
                                                <td class="table-action">
                                                    <a target="_blank" href="{{ route('ads.details', ['username' => $ad['user']['username'],'slug'=>$ad['slug']]) }}" class="action-icon"> <i class="mdi mdi-eye"></i></a>
                                                     <a href="#" class="action-icon"
                                                data-toggle="modal" data-target="#deleteModal{{ $ad['id'] }}"> 
                                                    <i class="mdi mdi-delete"></i></a>
                                                   
                                                </td>
                                                
                                                    <!-- Modal -->
                                                    <div class="modal fade" id="deleteModal{{ $ad['id'] }}" tabindex="-1" 
                                                    role="dialog" aria-labelledby="exampleModalLabel{{ $ad['id'] }}" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Suppression</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form method="get" action="{{ route('admin.ads.delete',['id' => $ad['id']]) }}" id="delete-form{{$ad['id']}}">
                                                            @csrf
                                                            <p>{{ __('Voulez vous supprimer cet élément?') }}</p>

                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Non</button>
                                                            <button type="submit" class="btn btn-primary">Oui</button>
                                                        </div>
                                                        </form>
                                                        </div>
                                                    </div>
                                                    </div>
                                            </tr>
                                        @endforeach
                                    @else
                                        Aucune Annonce
                                    @endif


								</tbody>
							</table>


                        </div> <!-- end card-body-->
                    </div> <!-- end card-->
                </div> <!-- end col-->




                <!-- end col -->

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
