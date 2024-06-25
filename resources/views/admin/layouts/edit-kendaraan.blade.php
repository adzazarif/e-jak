@extends('admin.template')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <form method="post" action="{{ route('kendaraan.update',$kendaraan->no_uji) }}">
            @method("PUT")
        <div class="col-xxl">
            <div class="card mb-4">
                <div class="card-body">
                        @csrf
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Nama Pemilik</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" value="{{ $kendaraan->pemilik }}" name="pemilik" value="{{ old('name') }}"
                                    id="basic-default-name" placeholder="John Doe" />
                                @error('name')
                                    <small style="color: red">* {{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="d-flex gap-3 mb-3 w-100">
                            <div class="w-100">
                                <label class="form-label" for="basic-icon-default-company">No uji</label>
                                <div class="input-group input-group-merge">

                                    <input type="text" name="no_uji" 
                                        id="basic-icon-default-company" value="{{ $kendaraan->no_uji }}" placeholder="JKT21331" class="form-control" />
                                </div>
                            </div>
                            <div class="w-100">
                                <label class="form-label" for="basic-icon-default-company">Nomor Kendaraan</label>
                                <div class="input-group input-group-merge">
                                    <input type="text" name="no_kendaraan"
                                        id="basic-icon-default-company" placeholder="B 2332 AB" value="{{ $kendaraan->no_kendaraan }}" class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="d-flex gap-3 mb-3 w-100">
                            <div class="w-100">
                                <label class="form-label" for="basic-icon-default-company">Nomor chasis</label>
                                <div class="input-group input-group-merge">

                                    <input type="text" name="no_chasis" 
                                        id="basic-icon-default-company" value="{{ $kendaraan->no_chasis }}" placeholder="JKT21331" class="form-control" />
                                </div>
                            </div>
                            <div class="w-100">
                                <label class="form-label" for="basic-icon-default-company">Nomor mesin</label>
                                <div class="input-group input-group-merge">
                                    <input type="text" name="no_mesin"
                                        id="basic-icon-default-company" value="{{ $kendaraan->no_mesin }}" placeholder="B 2332 AB" class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="d-flex gap-3 mb-3 w-100">
                            <div class="w-100">
                                <label for="exampleFormControlSelect1" class="form-label">Jenis kendaraan</label>
                                <select class="form-select" name="jenis_kendaraan" id="exampleFormControlSelect1"
                                    aria-label="Default select example">
                                    <option value="{{ $kendaraan->jenis_kendaraan }}" selected>{{ $kendaraan->jenis_kendaraan }}</option>
                                    <option value="Pickup">Pickup</option>
                                    <option value="Truk">Truk</option>
                                </select>
                            </div>
                            <div class="col-xxl-4">
                                <div class="mb-3">
                                    <label for="html5-date-input" class="col-md-3 col-form-label">Masa Berlaku</label>
                                    <div class="col-md-10">
                                      <input class="form-control" name="masa_berlaku" value="{{ $kendaraan->masa_berlaku }}" type="date" value="2021-06-18" id="html5-date-input" />
                                    </div>
                                  </div>
                            </div>
                            {{-- <div class="w-100">
                                <label for="exampleFormControlSelect1" class="form-label">Tipe</label>
                                <select class="form-select" name="category" id="exampleFormControlSelect1"
                                    aria-label="Default select example">
                                    <option selected>Open this select menu</option>
                                    <option value="try-out">Try Out</option>
                                    <option value="kursus">Kursus</option>
                                </select>
                            </div> --}}

                        </div>

                        <div class="d-flex gap-3 mb-3 w-100">
                            <div class="w-100">
                                <label class="form-label" for="basic-icon-default-company">Nomor buku</label>
                                <div class="input-group input-group-merge">

                                    <input type="text" name="no_buku" 
                                        id="basic-icon-default-company" value="{{ $kendaraan->no_buku }}" placeholder="123312" class="form-control" />
                                </div>
                            </div>
                            <div class="w-100">
                                <label class="form-label" for="basic-icon-default-company">Jbb</label>
                                <div class="input-group input-group-merge">
                                    <input type="text" name="jbb" value="{{ $kendaraan->jbb }}"
                                        id="basic-icon-default-company" placeholder="2132" class="form-control" />
                                </div>
                            </div>
                        </div>

                </div>
            </div>
        </div>

        <button type="submit" class="btn btn-info w-100">Kirim</button>
    </form>

        

    </div>


@endsection
