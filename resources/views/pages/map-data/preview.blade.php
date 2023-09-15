@extends('inc.master')


@section('content')

    <div class="table-responsive">
        <div class="d-flex justify-content-between">
            <h2> Map Data Preview From Excel</h2>
        </div>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <table class="table table-bordered">
            <thead>
            <tr>
                <th scope="col">Description</th>
                <th scope="col">Main Data ID</th>
                <th scope="col">Reason</th>
            </tr>
            </thead>
            <tbody>

            @php
                $count =count($rows[0]);
            @endphp
            <form action="{{route('map-data.store')}}" method="post">
                @csrf
                @for($j = 0; $j < $count ; $j++)
                    <tr>
                        <td>
                            <input type="text" name="description[]" value="{{$rows[0][$j]['description']}}">
                        </td>
                        <td>
                            <select name="main_data_id[]" id="main_data_id">
                                <option value="">Select</option>
                                @foreach($all_main_data as $data)
                                    <option value="{{$data->id}}">{{$data->description}}</option>
                                @endforeach
                            </select>
                        </td>
                        <td>
                            <select name="reason[]" id="reason">
                                <option value="">Select</option>
                                <option value="A">A</option>
                                <option value="B">B</option>
                                <option value="C">C</option>
                            </select>
                        </td>
                    </tr>
                @endfor
                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-success">Save</button>
                </div>
            </form>
            </tbody>
        </table>
    </div>
@endsection


