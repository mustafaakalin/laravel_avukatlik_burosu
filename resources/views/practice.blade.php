@extends('app')
@section('content')
    
    <!-- header-start -->
        <x-header/>
    <!-- header-end -->

    <!-- bradcam_area_start  -->
    <div class="bradcam_area">
        <div class="bradcam_inner bradcam_bg d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="bradcam_text text-center">
                            <h3>En İyi ve En Güçlü Kanun <br>
                                Firma Dünyayı Kazanıyor</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- bradcam_area_end  -->
    <!-- practice_area_start -->
    <x-faaliyetalanlarimiz/>
    <!-- practice_area_end -->
    <!-- about_area _start  -->
    <x-about/>
    <!-- about_area _end -->

    <!-- testmonial_area_start  -->
    <x-gorusler/>
    <!-- testmonial_area_end  -->

    <x-randevu/>

    <!-- footer_start -->
    <x-footer/>
    <!-- footer_end -->


@endsection