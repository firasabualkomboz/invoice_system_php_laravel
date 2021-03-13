@extends('layouts.app')

@section('content')

    <div class="row justify-content-center">
        <div class="col-12">


            <div class="card">
                <div class="card-header">
                    i am index
                </div>

                <div class="card-body">
                    {{config('app.locale')}}
                    <p>{{__('frontend/frontend.invoice_system')}}</p>
                </div>

            </div>


        </div>
    </div>

@endsection
