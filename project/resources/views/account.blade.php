@extends('includes.newmaster')

@section('content')

<div class="home-wrapper">
    <!-- Starting of Account Dashboard area -->
    <div class="section-padding dashboard-account-wrapper wow fadeInUp">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    @include('includes.usermenu')
                </div>
                <div class="col-md-9">
                    <div class="dashboard-content">
                        <div id="account-dashboard-tab">
                            <h2>Tableau de bord</h2>
                            <div class="dashboard-breadcroumb-section">
                                <img src="{{url('/')}}/assets/img/testimonial-bg-img.jpg" alt="">
                                <div class="customer-info">
                                    <h1>{{$user->name}}</h1>
                                    <p class="customer-id">{{$user->email}}</p>
                                    <p class="customer-points">{{$user->phone}}</p>
                                </div>
                            </div>
                            <div class="account-info-div">
                                <h3>Mes informations</h3>
                                <div class="single-account-info-div">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-12 col-sm-12">
                                                <p class="colored-p"></p>
                                                <p><strong>Nom: </strong>{{$user->name}}</p>
                                                <p><strong>Email: </strong>{{$user->email}}</p>
                                                <p><strong>Numéro de téléphone: </strong>{{$user->phone}}</p>
                                                <p><strong>Adresse: </strong>{{$user->address}}</p>
                                                <p><strong>Ville: </strong>{{$user->city}}</p>
                                                <p><strong>Code postale: </strong>{{$user->zip}}</p>
                                                <a href="{{route('user.accinfo')}}" class="address-btn">Editer l'adresse</a>
                                        </div>
                                    </div>
                                </div>
                                {{--<div class="single-account-info-div">--}}
                                    {{--<h4>address book</h4>--}}
                                    {{--<div class="row">--}}
                                        {{--<div class="col-lg-6 col-md-12 col-sm-12">--}}
                                            {{--<div class="col-md-8 col-sm-8">--}}
                                                {{--<p class="colored-p">default billing address</p>--}}
                                                {{--<p>{{$user->name}}</p>--}}
                                                {{--<p>{{$user->email}}</p>--}}
                                                {{--<a href="" class="address-btn">manage address</a>--}}
                                            {{--</div>--}}
                                            {{--<div class="col-md-4  col-sm-4">--}}
                                                {{--<a href="" class="edit-btn">edit address</a>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                        {{--<div class="col-lg-6 col-md-12 col-sm-12">--}}
                                            {{--<div class="col-md-8 col-sm-8">--}}
                                                {{--<p class="colored-p">default billing address</p>--}}
                                                {{--<p>md shamsuzzaman shaon</p>--}}
                                                {{--<p>shaon@gmail.com</p>--}}
                                                {{--<a href="" class="address-btn">manage address</a>--}}
                                            {{--</div>--}}
                                            {{--<div class="col-md-4  col-sm-4">--}}
                                                {{--<a href="" class="edit-btn">edit address</a>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Ending of Account Dashboard area -->
</div>

@stop

@section('footer')

@stop