@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">crée un un devis</div>
                <div class="card-body">
                    <form action="{{route('quotation.store')}}" method="post">
                        @csrf
                        <input type="text" name="test"> <br>
                        <input type="text" name="test2" id=""> <br>
                        <button> envoyer </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
