@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ $title }}</div>
                <a href="home"><div class="card-header">Refresh</div></a>

                <div class="card-body">
                <table id="example" class="table table-striped" style="width:100%">
        <thead>
            
            <tr>
            @foreach($headers as $val)
                <th>{{$val}}</th>
            @endforeach
            </tr>
            
        </thead>
        <tbody>
        @foreach ($rows as $row)
            <tr>
                <td>{{ $row->id }}</td>
                <td>{{ $row->fname }}</td>
                <td>{{ $row->lname }}</td>
                <td>{{ $row->email }}</td>
                <td>{{ $row->date }}</td>
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