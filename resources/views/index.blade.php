@extends('layout')
@section('content')

  <div class="container" id="mydiv">
    <div class="row">
      <div class="col-12">
        <div class="card mt-5">
          <div class="card-header">
            <div class="card-title">
              Employer List
              <button class="btn btn-success float-right" onclick="addForm();">Add Employer</button>
            </div>
          </div>
          <div class="card-body">
            <table class="table table-bordered" id="employerTable">
              <thead>
                <tr>
                  <th>SL No.</th>
                  <th>Employer Name</th>
                  <th>Employer Age</th>
                  <th>Position</th>
                  <th>Salery</th>
                  <th>Created At</th>
                  <th>Updated At</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody id="refresh">
                @foreach($employers as $row)
                  <tr>
                    <th>{{ $loop->index + 1 }}</th>
                    <td>{{ $row->name }}</td>
                    <td>{{ $row->age }}</td>
                    <td>
                      @if ($row->position == 1)
                        Manager
                      @elseif ($row->position == 2)
                        Account Manager
                      @else
                        Worker
                      @endif
                    </td>
                    <td>{{ $row->salery }}</td>
                    <td>{{ $row->created_at->diffForHumans() }}</td>
                    <td>
                      @if ($row->updated_at)
                        {{ $row->updated_at->diffForHumans() }}
                      @endif
                    </td>
                    <td>
                      <div class="btn-group" role="group" aria-label="Basic example">
                        <button id="editForm" data-id="{{ $row->id }}" class="btn btn-primary">Edit</button>
                        <a id="deleteData" class="btn btn-danger" data-id="{{ $row->id }}">Delete</a>
                      </div>
                    </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
        @include('form')
      </div>
    </div>
  </div>

@endsection
