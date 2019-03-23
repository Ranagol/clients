@extends('layouts.app')

@section('content')

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="d-flex justify-content-between card-header">Dashboard <a href="/listings/create" class="btn btn-success btn-xs ">Add client</a></div>

                <div class="card-body">
                    

                    <h3>Your clients</h3>
                    @if(count($listings))
                        <table class="table table-striped">
                            <tr>
                                <th>Company</th>
                                <th></th>
                                <th></th>
                            </tr>
                            @foreach($listings as $listing)
                                <tr d-flex>
                                    <td>{{$listing->name}}</td>
                                    <td class="p-2 float-right"><a class="btn btn-primary" href="/listings/{{$listing->id}}/edit">Edit</a></td>
                                    <td class="p-2 float-right">


                                    {!!Form::open(['action' => ['ListingsController@destroy', $listing->id],'method' => 'POST', 'onsubmit' => 'return confirm("Are you sure?")'])!!}
                                        {{Form::hidden('_method', 'DELETE')}}
                                        {{Form::bsSubmit('Delete', ['class' => 'btn btn-danger'])}}
                                    {!! Form::close() !!}
                                    


                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    @endif    
                </div>
            </div>
        </div>
    </div>

@endsection
