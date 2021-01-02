@extends('layouts.inner')


@section('main')

           


    <div class="col-md-12">
        <div class="card card-user">
            
            <div class="author text-center"  style="background-image:url('./main/images/BG.png');">
                <a>
                    <img class="img-circle" src="{{URL::asset('/main/images/call-to-action.png')}}" width="200" height="200"   alt="...">
                   
                </a>
                
            </div>
            
            <div class="contact-form text-center">
            <h2>Your Name</h2>
            <h4>Your Email</h4>
            <h4>Phone</h4>
            <h4>city</h4>
            <h4>services</h4>
            <h4>Description</h4>
            </div>
        </div>
    </div>











@endsection