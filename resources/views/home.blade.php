@extends('layouts.app')
  
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Pemberitahuan') }}</div>
  
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
  
                    Kamu Adalah User
                  <a href="{{ route('dashboard') }}" class="filled-button">Lanjut Ke Halaman Kantin</a>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection