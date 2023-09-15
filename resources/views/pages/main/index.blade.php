@extends('inc.master')


@section('content')

    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Add Main Data
    </button>

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <form action="{{route('main-data.store')}}" method="POST">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add Main Data </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                            <svg> ...</svg>
                        </button>
                    </div>
                    <div class="modal-body">
                        <label for="description" class="form-label">Description</label>
                        <input type="text" name="description" class="form-control" id="description"
                               placeholder="Description">
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn btn-light-dark" data-bs-dismiss="modal"><i
                                class="flaticon-cancel-12"></i> Discard
                        </button>
                        @csrf
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </div>
            </form>
        </div>
    </div>


    <div class="table-responsive">
        <table class="table table-bordered">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Description</th>
            </tr>
            </thead>
            <tbody>
            @foreach($mainData as $data)
                <tr>
                    <th scope="row">{{$data->id}}</th>
                    <td>{{$data->description}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection


