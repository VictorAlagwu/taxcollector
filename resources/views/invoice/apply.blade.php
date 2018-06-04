@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <a href="{{ route('generate-pdf',['download'=>'pdf']) }}">Apply For Your Tax</a>
    </div>
</div>
@endsection