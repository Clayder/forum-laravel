@extends('layouts.default')

@section('content')
    <div class="container">
        <h3> {{ __('Most rescent theads') }} </h3>
        <threads>Carregando</threads>
    </div>
@endsection

@section('scripts')
    <script src="/js/threads.js"></script>
@endsection
