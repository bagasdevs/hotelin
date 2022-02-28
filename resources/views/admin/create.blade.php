@extends('layouts.admin',['title'=>'Tambah Admin'])
@section('content-header')
<h1 class="m-0"> <i class="fas fa-users"></i> User Admin</h1>
@endsection

@section('content')
<div class="row">
    <div class="col-6">
        <x-form-create :action="route('admin.store')">
            <x-input label="Nama Lengkap" name="nama_lengkap" />
            <x-input label="Email" name="email" />
            <x-input label="Password" name="password" type="password" />
            <x-input label="Konfirmasi Password" type="password" name="password_confirmation" />
        </x-form-create>
    </div>
</div>
@endsection
