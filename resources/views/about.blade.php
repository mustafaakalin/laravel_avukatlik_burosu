@extends('app')
@section('content')
    
<x-header/>

    <!-- slider_area_start -->
    <div class="slider_area ">
        <div class="slider_area_inner slider_area_inner2 slider_bg_2 d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-xl-7">
                        <div class="single_slider">
                            <div class="slider_text">
                                <h3>Önde Gelen Polonyalı <br> 
                                    Şehrinizdeki avukat</h3>
                                <p class="name" >- Tansu</p>
                                <a href="#" class="boxed-btn4 ">Randevu Alın</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider_area_end -->

    <!-- about_area _start  -->
    <x-about/>
    <!-- about_area _end -->

    <!-- our_loyers-start  -->
    <x-ekibimiz/>
    <!-- our_loyers-end  -->

    <!-- testmonial_area_start  -->
    <x-gorusler/>
    <!-- testmonial_area_end  -->

    <x-randevu/>

    <!-- footer_start -->
    <x-footer/>
    <!-- footer_end -->
@endsection