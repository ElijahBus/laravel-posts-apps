@extends('layouts.main_lay')

@section('content-body')
    {{-- Defining the banner --}}
    <div class="container-fluid welcome-banner bg-dark ">
      
    </div>
    {{-- Defining the boxes under the banner --}}
    <div class="container  mt-2">
        <div class="card-group ">
            <div class="card pr-1" style="background-color: transparent; border-color: transparent;">
                <h4 class="card-title p-2 card-title-style card-header-bg">Scheduled flights ...</h4>
                <img src="{{ asset('img/city-dark-dawn-248159.jpg') }}" class="card-img no-border-radius">
            </div>
            <div class="card pr-1 pl-1" style="background-color: transparent; border-color: transparent;">
                <h4 class="card-title p-2 card-title-style card-header-bg">Scheduled city tours ...</h4>
                <img src="{{ asset('img/city-dark-dawn-248159.jpg')}}" alt="" class="card-img no-border-radius">
            </div>
            <div class="card pl-1" style="background-color: transparent; border-color: transparent;">
                <h4 class="card-title p-2 card-title-style card-header-bg">Scheduled ship travels ...</h4>
                <img src="{{ asset('img/city-dark-dawn-248159.jpg')}}" alt="" class="card-img no-border-radius">
            </div>
        </div>
    </div>

    <div class="container-fluid body-bg mt-2">
        <div class="row">
            <div class="col-12 pr-0 pl-0 ">
                {{-- main card container --}}
                <div class="col-8">
                    {{-- main card body --}}
                    <div class="card-body pt-0 pl-3 pr-3 pb-3">
                        {{-- inner card container --}}

                        {{-- card one --}}
                        <div class="card mt-2 ">
                            {{-- inner card header --}}
                            <div class="card-header">
                                <div class="row">
                                    <div class="col-12"> 
                                        <img src="{{ asset('img/obatap/obatap-icon-41-48.png') }}" alt="">
                                        <b class="pl-1">Company name</b>  |  
                                        <span>Company about</span>
                                    </div>
                                    {{-- inner card body --}}
                                    <div class="card-body col-6">
                                        <div class="">
                                            <p class="card-text  text-justify">
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                                                Pellentesque vel diam urna. Suspendisse mollis sapien neque, 
                                                sit amet tempor ligula finibus sit amet. Donec sed finibus 
                                            </p>
                                        </div>
                                        <div class="card-footer-alignment">
                                            <a href="#">Learn more about us</a>
                                        </div>
                                    </div>
                                    <div class="card-body col-6 ">
                                        <p class="text-center" >
                                                <img class="card-img" src="{{ asset('img/city-dark-dawn-248159.jpg')}}" alt="Description" srcset="">
                                        </p>
                                    </div>
                                </div>
                            </div>                    
                        </div>

                        {{-- card two --}}
                        <div class="card mt-2 bg-white">
                            {{-- inner card header --}}
                            <div class="card-header">
                                <div class="row">
                                    <div class="col-12"> 
                                        <img src="{{ asset('img/logo/product_logo_48.png') }}" alt="">
                                        <b class="pl-1">Company name</b>  |  
                                        <span>Company about</span>
                                    </div>
                                    {{-- inner card body --}}
                                    <div class="card-body col-6">
                                        <div class="">
                                            <p class="card-text  text-justify">
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                                                Pellentesque vel diam urna. Suspendisse mollis sapien neque 
                                            </p>
                                        </div>
                                        <div class="card-footer-alignment">
                                            <a href="#">Learn more about us</a>
                                        </div>
                                    </div>
                                    <div class="card-body col-6">
                                        <p class="text-center" >
                                                <img src="{{ asset('img/logo/product_logo_256.png') }}" alt="Description" srcset="">
                                        </p>
                                    </div>
                                </div>
                            </div>                    
                        </div>

                        {{-- card three --}}
                        <div class="card mt-2 bg-white">
                            {{-- inner card header --}}
                            <div class="card-header">
                                <div class="row">
                                    <div class="col-12"> 
                                        <img src="{{ asset('img/obatap/obatap-icon-41-48.png') }}" alt="">
                                        <b class="pl-1">Company name</b>  |  
                                        <span>Company about</span>
                                    </div>
                                    {{-- inner card body --}}
                                    <div class="card-body col-6">
                                        <div class="">
                                            <p class="card-text  text-justify">
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                                                Pellentesque vel diam urna. Suspendisse mollis sapien neque, 
                                                sit amet tempor ligula finibus sit amet. Donec sed finibus 
                                            </p>
                                        </div>
                                        <div class="card-footer-alignment">
                                            <a href="#">Learn more about us</a>
                                        </div>
                                    </div>
                                    <div class="card-body col-6 ">
                                        <p class="text-center" >
                                                <img class="card-img" src="{{ asset('img/city-dark-dawn-248159.jpg')}}" alt="Description" srcset="">
                                        </p>
                                    </div>
                                </div>
                            </div>                    
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
@endsection