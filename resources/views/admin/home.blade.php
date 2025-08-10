@extends('layouts.admin')

@section('title')
    Dashboard
@endsection

@section('page-info')
    <div class="br-pagetitle">
        <i class="icon ion-ios-home-outline"></i>
        <div>
            <h4>Dashboard</h4>
            <p class="mg-b-0">Here is today's information</p>
        </div>
    </div>
@endsection

@section('content')
    <div class="row row-sm">
        <div class="col-sm-6 col-xl-3">
            <div class="bg-info rounded overflow-hidden">
                <div class="pd-x-20 pd-t-20 d-flex align-items-center">
                    <i class="ion ion-earth tx-60 lh-0 tx-white op-7"></i>
                    
                </div>
                <div id="ch1" class="ht-50 tr-y-1"></div>
            </div>
        </div><!-- col-3 -->

        <div class="col-sm-6 col-xl-3">
            <div class="bg-info rounded overflow-hidden">
                <div class="pd-x-20 pd-t-20 d-flex align-items-center">
                    <i class="ion ion-earth tx-60 lh-0 tx-white op-7"></i>
                    
                </div>
                <div id="ch1" class="ht-50 tr-y-1"></div>
            </div>
        </div><!-- col-3 -->

        <div class="col-sm-6 col-xl-3 mg-t-20 mg-sm-t-0">
            <div class="bg-purple rounded overflow-hidden">
                <div class="pd-x-20 pd-t-20 d-flex align-items-center">
                    <i class="ion ion-bag tx-60 lh-0 tx-white op-7"></i>
                  
                </div>
                <div id="ch3" class="ht-50 tr-y-1"></div>
            </div>
        </div><!-- col-3 -->

        <div class="col-sm-6 col-xl-3 mg-t-20 mg-sm-t-0">
            <div class="bg-purple rounded overflow-hidden">
                <div class="pd-x-20 pd-t-20 d-flex align-items-center">
                    <i class="ion ion-bag tx-60 lh-0 tx-white op-7"></i>
                   
                </div>
                <div id="ch3" class="ht-50 tr-y-1"></div>
            </div>
        </div><!-- col-3 -->
    </div>
@endsection
