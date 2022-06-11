@extends('layouts.app')

@section('title', 'Todo List')

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="text-center mt-4">Todo List</h1>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="add task" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">send</button>
            </form>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th style="width: 10%" scope="col"></th>
                        <th style="width: 70%" scope="col"></th>
                        <th style="width: 10%" scope="col"></th>
                        <th style="width: 10%" scope="col"></th>

                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark Mark Mark Mark Mark Mark Mark Mark Mark Mark Mark Mark Mark</td>
                        <td><a href="#">completed</a></td>
                        <td><a href="#">delete</a></td>

                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td><a href="#">completed</a></td>
                        <td><a href="#">delete</a></td>

                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>@twitter</td>
                        <td><a href="#">completed</a></td>
                        <td><a href="#">delete</a></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection



