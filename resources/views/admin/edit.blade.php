@extends('layouts.admin',['title'=>'Edit Admin'])
@section('content-header')
<h1 class="m-0"> <i class="fas fa-users"></i> User Admin</h1>
@endsection

@section('content')
<div class="row">
    <div class="col-6">
        <x-form-edit :action="route('admin.update',['admin'=>$row->id])">
            <x-input label="Nama Lengkap" name="nama_lengkap" :value="$row->nama" />
            <x-input label="Email" name="email" :value="$row->email" />
            <x-input label="Password" name="password" type="password" />
            <x-input label="Konfirmasi Password" type="password" name="password_confirmation" />
        </x-form-edit>
    </div>
</div>
@endsection
