@extends('inc.master')


@section('content')

    @if(session()->has('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
    @endif
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
     @endif

    <form action="{{route('map-data.import')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group d-flex">
            <label for="file">Import File</label>
            <input type="file" name="excel_file" class="form-control-file" id="file">
        </div>
        <button type="submit" class="btn btn-primary">Import</button>
    </form>
    <div class="table-responsive mt-5">
        <table class="table table table-hover table-striped">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Description</th>
                <th scope="col">Main Data ID</th>
                <th scope="col">Reason</th>
            </tr>
            </thead>
            <tbody>
            @foreach($mapData as $data)
                <tr>
                    <th scope="row">{{$data->id}}</th>
                    <td>{{$data->description}}</td>
                    <td>{{$data->main_data_id}} {{ $data->mainData->description ?? 'Unmapped'}}</td>
                    <td> {{$data->reason ?? 'Unmapped' }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection


