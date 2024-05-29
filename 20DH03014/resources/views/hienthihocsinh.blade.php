@extends('trangchu')
@section('Content')
    @if (session('Note'))
        <div class="alert alert-scucess">
            {{ session('Note') }}
        </div>
    @endif
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th class="text-center">ID</th>
                <th class="text-center">Name</th>
                <th class="text-center">Gender</th>
                <th class="text-center">Field</th>
                <th class="text-center">Mark</th>            
            </tr>
        </thead>
        <tbody>
            @foreach ($hocsinhs as $hehe)
            <tr>
                <td class="text-left">{{ $hehe->id }}</td>
                <td class="text-left">{{ $hehe->name }}</td>
                <td class="text-left">{{ $hehe->gender }}</td>   
                <td class="text-left">{{ $hehe->field }}</td>
                <td class="text-left">{{ $hehe->mark }}</td>   
                  
                <td class="center"><i class="fa fa-pencil fa-fw"></i>
                    <a href="updateProduct/{{ $hehe->pid }}">Edit</a></td>
                <td class="center"><i class="fa fa-trash-o fa-fw"></i>
                    <a href="deleteProduct/{{ $hehe->pid }}">Delete</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
