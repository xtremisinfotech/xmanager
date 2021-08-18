@extends('admin::layouts.master')

@section('title', 'Dashboard')

@section('page-header')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Dashboard</h1>
            </div>
        </div>
    </div>
</section>
@endsection

@section('page-content')
<section class="content">
    <div class="card card-primary card-outline">
        <div class="card-header">
            <h2 class="card-title">Dashboard</h2>
            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
                    <i class="fas fa-minus"></i></button>
                <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip"
                    title="Remove">
                    <i class="fas fa-times"></i></button>
            </div>
        </div>
        <div class="card-body">
            <h4>Welcome back, {{ XI_ADMIN()->name }}</h4>
        </div>
    </div>
</section>
@endsection