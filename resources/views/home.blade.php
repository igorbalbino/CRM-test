@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @guest
                        {{ __('You are logged out!') }}
                    @else
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                        {{ __('You are logged in!') }}

                        <ul class="">
                            @if(isset($leads))
                                @foreach ($leads as $lead)
                                    <li><span>{{ $lead['name'].'-'.$lead['date']  }}</span>
                                        <a href="route('/delete')">Delete</a></li>
                                @endforeach
                            @else
                                <li>{{ __('Nenhum lead ainda') }}</li>
                            @endif
                        </ul>
                    @endguest
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
