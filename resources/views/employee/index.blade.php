@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <div class="row mb-0">
            <div class="col-lg-9 col-xl-10">
                <h4 class="mb-3">{{ $pageTitle }}</h4>
            </div>
            <div class="col-lg-3 col-xl-2">
                <div class="d-grid gap-2">
                    <a href="{{ route('employees.create') }}" class="btn btn-primary"><i class="bi bi-person-plus-fill"></i> Create Employee</a>
                </div>
            </div>
        </div>
        <hr>
        <div class="table-responsive border p-3 rounded-3">
            <table class="table table-bordered table-hover table-striped mb-0 bg-white">
                <thead>
                    <tr>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Age</th>
                        <th>Position</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($employees as $employee)
                    <tr>
                        <td>{{ $employee->firstname }}</td>
                        <td>{{ $employee->lastname }}</td>
                        <td>{{ $employee->email }}</td>
                        <td>{{ $employee->age }}</td>
                        <td>{{ $employee->position->name }}</td>
                        <td>@include('employee.actions')</td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            {{--
            <table class="table table-bordered table-hover table-striped mb-0 bg-white">
                <thead>
                    <tr>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Age</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Purnama</td>
                        <td>Anaking</td>
                        <td>purnama.anaking@gmail.com</td>
                        <td>20</td>
                        <td>
                            <div class="d-flex">
                                <a href="{{ route('employees.show', ['employee' => 1]) }}" class="btn btn-outline-dark btn-sm me-2"><i class="bi-person-lines-fill"></i></a>
                                <a href="{{ route('employees.edit', ['employee' => 1]) }}" class="btn btn-outline-dark btn-sm me-2"><i class="bi-pencil-square"></i></a>

                                <div>
                                    <form action="{{ route('employees.destroy', ['employee' => 1]) }}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-outline-dark btn-sm me-2"><i class="bi-trash"></i></button>
                                    </form>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Adzanil</td>
                        <td>Rachmadhi</td>
                        <td>adzanil.rachmadhi@gmail.com</td>
                        <td>25</td>
                        <td>
                            <div class="d-flex">
                                <a href="{{ route('employees.show', ['employee' => 2]) }}" class="btn btn-outline-dark btn-sm me-2"><i class="bi-person-lines-fill"></i></a>
                                <a href="{{ route('employees.edit', ['employee' => 2]) }}" class="btn btn-outline-dark btn-sm me-2"><i class="bi-pencil-square"></i></a>

                                <div>
                                    <form action="{{ route('employees.destroy', ['employee' => 2]) }}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-outline-dark btn-sm me-2"><i class="bi-trash"></i></button>
                                    </form>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Berlian</td>
                        <td>Rahmy</td>
                        <td>berlian.rahmy@gmail.com</td>
                        <td>23</td>
                        <td>
                            <div class="d-flex">
                                <a href="{{ route('employees.show', ['employee' => 3]) }}" class="btn btn-outline-dark btn-sm me-2"><i class="bi-person-lines-fill"></i></a>
                                <a href="{{ route('employees.edit', ['employee' => 3]) }}" class="btn btn-outline-dark btn-sm me-2"><i class="bi-pencil-square"></i></a>

                                <div>
                                    <form action="{{ route('employees.destroy', ['employee' => 3]) }}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-outline-dark btn-sm me-2"><i class="bi-trash"></i></button>
                                    </form>
                                </div>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
            --}}
        </div>
    </div>
    @endsection
