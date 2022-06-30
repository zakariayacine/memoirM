@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Tableau des contrats</div>

                <div class="card-body">
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">id</th>
                            <th scope="col">duration </th>
                            <th scope="col">started_at </th>
                            <th scope="col">user_id </th>
                            <th scope="col">quotation_id</th>
                            <th scope="col">created_at</th>
                            <th scope="col"> updated_at </th>
                           		 		
                          </tr>
                        </thead>
                        <tbody>
                         
                            @foreach ($contracts as $contrat)
                            <tr>
                                <th scope="row">{{$contrat->id}}</th>
                                <td>{{$contrat->duration}}</td>
                                <td>{{$contrat->started_at}}</td>
                                <td>{{$contrat->user->name}}</td>
                                <td>{{$contrat->quotation->habitation_type}}</td>
                                <td>{{$contrat->created_at}}</td>
                                <td>{{$contrat->updated_at}}</td>
                             </tr> 
                            @endforeach
                            
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
