@extends('frontend.template')
@section('konten')
    <x-frontend.card>
        <x-slot name="title">Profil</x-slot>
        <x-slot name="desc">Detail Profil Pengunjung</x-slot>
        <x-slot name="kanan"></x-slot>
        <form class="form" id="kt_form" action="{{ route('frontend.profile.edit') }}" method="POST">
            @csrf
            <div class="row">
                <div class="col-xl-2"></div>
                <div class="col-xl-8">
                    <div class="my-5">
                        <h3 class="text-dark font-weight-bold mb-10">Profile Info:</h3>

                        <x-frontend.form>
                            <x-slot name="text">ID</x-slot>
                            <x-slot name="icon">la la-check</x-slot>
                            <x-slot name="keterangan">ID Pengunjung</x-slot>
                            <input type="text" class="form-control form-control-solid" name="id" id="id"
                                value="{{ $data['user']->id }}" readonly>
                        </x-frontend.form>

                        <x-frontend.form>
                            <x-slot name="text">Email</x-slot>
                            <x-slot name="icon">flaticon-multimedia</x-slot>
                            <x-slot name="keterangan">Email Pengunjung</x-slot>
                            <input type="text" class="form-control form-control-solid" value="{{ $data['user']->email }}"
                                readonly>
                        </x-frontend.form>

                        <x-frontend.form>
                            <x-slot name="text">Nama Pengunjung</x-slot>
                            <x-slot name="icon">flaticon2-avatar</x-slot>
                            <x-slot name="keterangan">Nama Pengunjung</x-slot>
                            <input type="text" class="form-control form-control-solid" value="{{ $data['user']->name }}"
                                readonly>
                        </x-frontend.form>

                        <x-frontend.form>
                            <x-slot name="text">NIK</x-slot>
                            <x-slot name="icon">flaticon2-browser</x-slot>
                            <x-slot name="keterangan">NIK Wajib Diisi</x-slot>
                            <input type="text" class="form-control form-control-solid" name="nik" id="nik"
                                value="{{ empty($data['user']->nik) ? old('nik') : $data['user']->nik }}">
                        </x-frontend.form>
                        <x-frontend.form>
                            <x-slot name="text">Nama Kartu</x-slot>
                            <x-slot name="icon">flaticon2-user</x-slot>
                            <x-slot name="keterangan">Nama sesuai dengan kartu identitas</x-slot>
                            <input type="text" class="form-control form-control-solid" name="nama_asli" id="nama_asli"
                                value="{{ empty($data['user']->nama_asli) ? old('nama_asli') : $data['user']->nama_asli }}">
                        </x-frontend.form>

                        <x-frontend.form>
                            <x-slot name="text">Nomor Telp</x-slot>
                            <x-slot name="icon">flaticon-whatsapp</x-slot>
                            <x-slot name="keterangan">Nomor Telp Wajib Diisi</x-slot>
                            <input type="text" class="form-control form-control-solid" name="telp" id="telp"
                                value="{{ $data['user']->telp }}">
                        </x-frontend.form>

                    </div>

                </div>
                <div class="col-xl-2"></div>
            </div>
            <div class="card-footer text-center">
                <button type="submit" class="btn btn-primary mr-2">Submit</button>

            </div>
        </form>
    </x-frontend.card>
@endsection
@section('jquery')
    @include('sweetalert2::index')
@endsection
