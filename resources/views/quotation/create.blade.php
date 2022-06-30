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
                        <!--code a copier pour les commune est les willaya il faut aussi envoyer la liste des 
                        wilaya avec php -->
                        <select id="wilaya" onchange="getcommune();">
                            @foreach ($wilayas as $wilaya)
                                <option value="{{$wilaya->id}}">{{$wilaya->name}}</option>
                            @endforeach
                        </select>
                        <div id="container">

                        </div>
                        <button> envoyer </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function getcommune(){
        var select = document.getElementById('wilaya');
        var value = select.options[select.selectedIndex].value;
        axios.get('/api/commune/'+value)
        .then(function (response) {
            myDiv = document.getElementById("container");
            myDiv.innerHTML = "";
            var select = document.createElement("select");
            select.name = 'commune';
            for (const val of response.data)
                {
                    var option = document.createElement("option");
                    option.value = val.id;
                    option.text = val.name;
                    select.appendChild(option);
                }
            
            document.getElementById("container").appendChild(select);
        })
        
    }
</script>
@endsection
