@extends('layouts.app')

@section('content')



    <div class="container">
        <br><br>
        <div class="pricing-header p-3 pb-md-4 mx-auto text-center">
            <h1 class="display-4 fw-normal">{{$title}}</h1>
            <p class="fs-5 text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
          </div>
        <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
          <div class="col">
            <div class="card mb-4 rounded-3 shadow-sm">
              <div class="card-header py-3">
                <h4 class="my-0 fw-normal">{{$plan1}}</h4>
              </div>
              <div class="card-body">
                <h1 class="card-title pricing-card-title">$0<small class="text-muted fw-light">/mo</small></h1>
                @if(count($free) > 0)
                <ul class="list-unstyled mt-3 mb-4">
                    @foreach($free as $plan)
                    <li>{{$plan}}</li>
                @endforeach
                @endif  
                </ul> 

                <button type="button" class="w-100 btn btn-lg btn-outline-primary">Sign up for free</button>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card mb-4 rounded-3 shadow-sm">
              <div class="card-header py-3">
                <h4 class="my-0 fw-normal">{{$plan2}}</h4>
              </div>
              <div class="card-body">
                <h1 class="card-title pricing-card-title">$15<small class="text-muted fw-light">/mo</small></h1>
                @if(count($premium) > 0)
                <ul class="list-unstyled mt-3 mb-4">
                    @foreach($premium as $plan)
                    <li>{{$plan}}</li>
                @endforeach
                @endif  
                </ul> 
                <button type="button" class="w-100 btn btn-lg btn-primary">Get started</button>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card mb-4 rounded-3 shadow-sm border-primary">
              <div class="card-header py-3 text-white bg-primary border-primary">
                <h4 class="my-0 fw-normal">{{$plan3}}</h4>
              </div>
              <div class="card-body">
                <h1 class="card-title pricing-card-title">$29<small class="text-muted fw-light">/mo</small></h1>
                @if(count($enterprise) > 0)
                <ul class="list-unstyled mt-3 mb-4">
                    @foreach($enterprise as $plan)
                    <li>{{$plan}}</li>
                @endforeach
                @endif  
                </ul> 
                <button type="button" class="w-100 btn btn-lg btn-primary">Contact us</button>
              </div>
            </div>
          </div>
        </div>
    </div>
    
    
    {{-- @if(count($services) > 0)
    <ul class ="list-group">
        @foreach($services as $service)
            <li class ="list-group-item">{{$service}}</li>
        @endforeach
    </ul>
    @endif --}} 
@endsection