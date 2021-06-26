@extends('layouts.app')

@section('content')
    <div class="container">
        <p class="text-danger">測試</p>
    </div>
@endsection


@section('localJS')
<script>
    $(document).ready(function(){
        alert(123)
    })
</script>
@endsection