@extends('trangchu')
@section('Content')
<form method="get" action="{{ route('timkiemtheoGender') }}">
    <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
    <div class="mb-3 mt-3">
        <label for="" class="form-label">Select Band</label>
        <select class="form-select form-select-lg" name="selectGender" id="">
            <option value="Male">Male</option>
            <option value="Female">Female</option>
            
        </select>
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary" name="btSearch">
            Submit
        </button>
    </div>
</form>  

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
        @foreach ($he as $hehe)
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
