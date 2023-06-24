@extends('layout-admin.main')

@section('judul')
Tables
@endsection

@section('title')
Table Mobil
@endsection

@section('highlight2')
active
@endsection

@section('navbar')
<div class="container-fluid py-4 px-5">
      <div class="row">
        <div class="col-12">
          <div class="card card-background card-background-after-none align-items-start mt-1 mb-1">
            <div class="full-background" style="background-image: url('../assets/img/hijau-biru.jpeg')"></div>
            <div class="card-body text-start p-4 w-100">
              <h3 class="text-white mb-2">Management Geopark Information Sistem 🔥</h3>
              <p class="mb-4 font-weight-semibold">
              Badan Perencanaan Daerah Kabupaten Malang.
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <div class="card border shadow-xs mb-4">
            <div class="card-header border-bottom pb-0">
              <div class="d-sm-flex align-items-center">
                <div>
                  <h6 class="font-weight-semibold text-lg mb-0">List Cultural Diversity</h6>
                </div>
                <div class="ms-auto d-flex">
                  <button type="button" class="btn btn-sm btn-white me-2">
                    View all
                  </button>
                  <button type="button" class="btn btn-sm btn-dark btn-icon d-flex align-items-center me-2">
                    <span class="btn-inner--icon">
                      <svg width="16" height="16" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="d-block me-2">
                        <path d="M6.25 6.375a4.125 4.125 0 118.25 0 4.125 4.125 0 01-8.25 0zM3.25 19.125a7.125 7.125 0 0114.25 0v.003l-.001.119a.75.75 0 01-.363.63 13.067 13.067 0 01-6.761 1.873c-2.472 0-4.786-.684-6.76-1.873a.75.75 0 01-.364-.63l-.001-.122zM19.75 7.5a.75.75 0 00-1.5 0v2.25H16a.75.75 0 000 1.5h2.25v2.25a.75.75 0 001.5 0v-2.25H22a.75.75 0 000-1.5h-2.25V7.5z" />
                      </svg>
                    </span>
                    <span>
                      <a href="/culturaldiversity/create" class="btn-inner--text">Add Product></a>
                    </span>
                  </button>

                  {{-- tombol Ekspor PDF --}}
                  <form action="{{route('create-pdf3')}}"class="d-inline">
                    <button class="btn btn-outline-info  btn-icon-split">
                      <span class="icon text-white-50">
                        <i class="fas fa-download"></i>
                      </span>
                      <span class="text">Ekspor Data (PDF)</span>
                    </button>
                  </form>
                </div>
              </div>
            </div>
            <div class="card-body px-0 py-0">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0" id="myTable">
                  <thead class="bg-gray-100">
                    <tr>
                      <th class="text-secondary text-xs font-weight-semibold opacity-7">No</th>
                      <th class="text-secondary text-xs font-weight-semibold opacity-7">Nama</th>
                      <th class="text-secondary text-xs font-weight-semibold opacity-7">Foto</th>
                      <th class="text-secondary text-xs font-weight-semibold opacity-7">Deskripsi</th>
                      <th class="text-center text-secondary text-xs font-weight-semibold opacity-7">Alamat</th>
                      <th class="text-center text-secondary text-xs font-weight-semibold opacity-7">Titik koordinat</th>
                      <th class="text-center text-secondary text-xs font-weight-semibold opacity-7">Operasional</th>
                      <th class="text-center text-secondary text-xs font-weight-semibold opacity-7">Harga Tiket</th>
                      <th class="text-center text-secondary text-xs font-weight-semibold opacity-7">Kontak</th>
                      <th class="text-center text-secondary text-xs font-weight-semibold opacity-7">Sosial Media</th>
                      <th class="text-secondary opacity-7"></th>
                      <th class="text-center text-secondary text-xs font-weight-semibold opacity-7">Aksi</th>
                      <th class="text-secondary opacity-7 ps-2"></th>
                    </tr>
                  </thead>
                  <tbody>
                    @if ($spaces->count() > 0)
                    @foreach ($spaces as $space)
                    <tr>
                    <td class="align-middle text-center text-sm">
                        <p class="text-sm text-dark font-weight-semibold mb-0">{{ ++$i }}</p>
                      </td>
                    <td class="align-middle text-center text-sm">
                        <p class="text-sm text-dark font-weight-semibold mb-0">{{ $space->nama}}</p>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-sm font-weight-normal"><img src ="{{ url('storage/'.$space->foto) }}" alt ="" style="width: 150px;"></span>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <p class="text-sm text-dark font-weight-semibold mb-0">{{ $space->deskripsi}}</p>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <p class="text-sm text-dark font-weight-semibold mb-0">{{ $space->alamat}}</p>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <p class="text-sm text-dark font-weight-semibold mb-0"> {{ $space->titik_koordinat}}</p>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-sm font-weight-normal">{{ $space->jam_buka}}</span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-sm font-weight-normal"> {{ $space->harga_weekday}}</span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-sm font-weight-normal">{{ $space->kontak}}</span>
                      </td>
                      <td class="align-middle text-center">
                      <span class="text-secondary text-sm font-weight-normal">{{ $space->sosmed}}</span>
                      </td>
                      <td class="align-middle text-center">
                      </td>
                      <td class="align-middle text-center">
                      <form action="{{ route('culturaldiversity.destroy', $space->id) }}" method="POST" class="text-secondary font-weight-bold text-xs" data-bs-toggle="tooltip" >
                        @method('DELETE')
                        @csrf
                        <button  onclick="return confirm('Anda yakin ingin hapus data ini?')">
                        <i class="fas fa-trash"></i> 
                      </button>
                      </form>
                      <a href="{{ route('culturaldiversity.show', $space->id) }}" class="text-secondary font-weight-bold text-xs" data-bs-toggle="tooltip" >
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                        <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
                        <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
                      </svg>
                        </a>
                        <a href="{{ route('culturaldiversity.edit', $space->id) }}" class="text-secondary font-weight-bold text-xs" data-bs-toggle="tooltip" >
                          <svg width="14" height="14" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M11.2201 2.02495C10.8292 1.63482 10.196 1.63545 9.80585 2.02636C9.41572 2.41727 9.41635 3.05044 9.80726 3.44057L11.2201 2.02495ZM12.5572 6.18502C12.9481 6.57516 13.5813 6.57453 13.9714 6.18362C14.3615 5.79271 14.3609 5.15954 13.97 4.7694L12.5572 6.18502ZM11.6803 1.56839L12.3867 2.2762L12.3867 2.27619L11.6803 1.56839ZM14.4302 4.31284L15.1367 5.02065L15.1367 5.02064L14.4302 4.31284ZM3.72198 15V16C3.98686 16 4.24091 15.8949 4.42839 15.7078L3.72198 15ZM0.999756 15H-0.000244141C-0.000244141 15.5523 0.447471 16 0.999756 16L0.999756 15ZM0.999756 12.2279L0.293346 11.5201C0.105383 11.7077 -0.000244141 11.9624 -0.000244141 12.2279H0.999756ZM9.80726 3.44057L12.5572 6.18502L13.97 4.7694L11.2201 2.02495L9.80726 3.44057ZM12.3867 2.27619C12.7557 1.90794 13.3549 1.90794 13.7238 2.27619L15.1367 0.860593C13.9869 -0.286864 12.1236 -0.286864 10.9739 0.860593L12.3867 2.27619ZM13.7238 2.27619C14.0917 2.64337 14.0917 3.23787 13.7238 3.60504L15.1367 5.02064C16.2875 3.8721 16.2875 2.00913 15.1367 0.860593L13.7238 2.27619ZM13.7238 3.60504L3.01557 14.2922L4.42839 15.7078L15.1367 5.02065L13.7238 3.60504ZM3.72198 14H0.999756V16H3.72198V14ZM1.99976 15V12.2279H-0.000244141V15H1.99976ZM1.70617 12.9357L12.3867 2.2762L10.9739 0.86059L0.293346 11.5201L1.70617 12.9357Z" fill="#64748B" />
                          </svg>
                        </a>
                        <td class="align-middle">
                      </td>
                      </td>
                    </tr>
                    @endforeach
                    @endif
                  </tbody>
                </table>
              </div>
              <div class="border-top py-3 px-3 d-flex align-items-center">
              </div>
            </div>
          </div>
        </div>
      </div>
    @endsection