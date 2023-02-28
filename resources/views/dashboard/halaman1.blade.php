@extends('layouts.main')

@section('content')
    @if (Auth::guard('user')->user())
        ayam
    @elseif (Auth::guard('masyarakat')->user())
        kucing
    @endif

    <form action="{{ route('logout') }}" method="post">
        @csrf
        <button type="submit" class="btn btn-primary">logout</button>
    </form>
@endsection
