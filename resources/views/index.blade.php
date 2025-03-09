@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row mb-3" >
            <div class="col-xl-6 d-flex align-items-center"  >
                <div class="form-group" >
                    <label for="start-date" >Start Date</label>
                    <input type="date" class="form-control w-100" id="start-date" />
                </div>
                <div class="form-group" >
                    <label for="end-date" >End Date</label>
                    <input type="date" class="form-control w-100" id="end-date" />
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header">Manage Users</div>
            <div class="card-body">
                {{ $dataTable->table() }}
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    {{ $dataTable->scripts(attributes: ['type' => 'module']) }}
@endpush
