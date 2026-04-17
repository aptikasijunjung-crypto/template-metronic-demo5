@extends('frontend.template')
@section('konten')
    <div class="row">
        <div class="col-md-4">
            <x-frontend.cardkosong>

                <x-frontend.alert>Identitas Korban</x-frontend.alert>


                <x-frontend.formgroup>
                    <x-slot name="title">Nama Korban</x-slot>
                    <x-slot name="keterangan">Nama Korban sertakan dengan alias</x-slot>
                    <input type="text" class="form-control" placeholder="Nama Korban" name="nama_korban" id="nama_korban">
                </x-frontend.formgroup>
                <x-frontend.formgroup>
                    <x-slot name="title">Umur</x-slot>
                    <x-slot name="keterangan">Perkiraan Umur Korban</x-slot>
                    <input type="text" class="form-control" placeholder="Umur Korban" name="umur_korban" id="">
                </x-frontend.formgroup>
                <x-frontend.formgroup>
                    <x-slot name="title">Alamat</x-slot>
                    <x-slot name="keterangan">Alamat Korban sebisanya dengan jelas</x-slot>
                    <textarea name="alamat_korban" id="alamat_korban" class="form-control" placeholder="Alamat Korban"></textarea>
                </x-frontend.formgroup>
                <x-frontend.formgroup>
                    <x-slot name="title">Hubungan Dengan Pelaku</x-slot>
                    <x-slot name="keterangan">Hubungan Korban Dengan Pelaku</x-slot>
                    <input type="text" class="form-control" placeholder="Nama Korban" name="hubungan" id="hubungan">
                </x-frontend.formgroup>


            </x-frontend.cardkosong>
        </div>

        <div class="col-md-4">
            <x-frontend.cardkosong>

                <x-frontend.alert>Identitas Pelaku</x-frontend.alert>


                <x-frontend.formgroup>
                    <x-slot name="title">Nama Pelaku</x-slot>
                    <x-slot name="keterangan">Nama Pelaku sertakan dengan alias</x-slot>
                    <input type="text" class="form-control" placeholder="Nama Pelaku" name="nama_pelaku"
                        id="nama_pelaku">
                </x-frontend.formgroup>
                <x-frontend.formgroup>
                    <x-slot name="title">Umur</x-slot>
                    <x-slot name="keterangan">Perkiraan Umur Pelaku</x-slot>
                    <input type="text" class="form-control" placeholder="Umur Pelaku" name="umur_pelaku" id="">
                </x-frontend.formgroup>
                <x-frontend.formgroup>
                    <x-slot name="title">Alamat</x-slot>
                    <x-slot name="keterangan">Alamat Pelaku sebisanya dengan jelas</x-slot>
                    <textarea name="alamat_pelaku" id="alamat_pelaku" class="form-control" placeholder="Alamat Pelaku"></textarea>
                </x-frontend.formgroup>



            </x-frontend.cardkosong>
        </div>
    </div>
@endsection
