<!-- resources/views/admin/dashboard.blade.php -->
@extends('admin.layouts.admin')

@section('title', 'Admin Dashboard')

@section('content')
<div class="container-fluid">
    <h1 class="mb-4">Admin Dashboard</h1>

    <div class="row">
        <!-- Card 1 -->
        <div class="col-md-3 mb-4">
            <div class="card text-white bg-primary shadow">
                <div class="card-body">
                    <h5 class="card-title">Users</h5>
                    <p class="card-text">Total Registered Users</p>
                    <h3>120</h3>
                </div>
            </div>
        </div>

        <!-- Card 2 -->
        <div class="col-md-3 mb-4">
            <div class="card text-white bg-success shadow">
                <div class="card-body">
                    <h5 class="card-title">Posts</h5>
                    <p class="card-text">Published Blog Posts</p>
                    <h3>45</h3>
                </div>
            </div>
        </div>

        <!-- Card 3 -->
        <div class="col-md-3 mb-4">
            <div class="card text-white bg-warning shadow">
                <div class="card-body">
                    <h5 class="card-title">Messages</h5>
                    <p class="card-text">New Contact Messages</p>
                    <h3>8</h3>
                </div>
            </div>
        </div>

        <!-- Card 4 -->
        <div class="col-md-3 mb-4">
            <div class="card text-white bg-danger shadow">
                <div class="card-body">
                    <h5 class="card-title">Visitors</h5>
                    <p class="card-text">Website Visits Today</p>
                    <h3>320</h3>
                </div>
            </div>
        </div>
    </div>

    <!-- Recent Table Example -->
    <div class="card shadow mt-4">
        <div class="card-header">
            <h5>Recent Activities</h5>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Description</th>
                        <th>Date</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>User John Doe created an account</td>
                        <td>2025-01-10</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Blog post "Mental Health Awareness" published</td>
                        <td>2025-01-09</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>New message received from contact form</td>
                        <td>2025-01-09</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
