
@extends('layouts.app')
@section('content')
 
  <!-- Main content -->
  <div class="main-content">
    <!-- Header -->
    <div class="header bg-gradient-primary py-7 py-lg-8 pt-lg-5">

      <div class="container">
        <div class="header-body text-center mb-5">
          <div class="row justify-content-center">
            <div class="col-xl-5 col-lg-6 col-md-8 px-5">
              <h1 class="text-white">Jadwal Sepak Bola</h1>

              <a class="btn btn-secondary " href="/jadwal/create">Tambah Jadwal</a>
            </div>
          </div>
        </div>
      </div>

      
      <div class="container bg-white pt-3" style="border-radius:30px">
                <div class="table-responsive py-4">
                    <table class="table table-flush" id="jadwal">
                        <thead class="thead-light">
                            <tr>
                                <th >No</th>
                                <th >Tim</th>
                                <th >Jadwal</th>
                                <th >Tim Lawan</th>
                                <th >Studion</th>
                                <th >Hasil</th>
                                <th ></th>
                            </tr>
                        </thead>
                        {{-- <tfoot>
                            <tr>
                                <th >No</th>
                                <th >Tim</th>
                                <th >Jadwal</th>
                                <th >Tim Lawan</th>
                                <th >Studion</th>
                                <th >Hasil</th>
                                <th ></th>
                            </tr>
                        </tfoot> --}}
                        <tbody>
                            @foreach ($jadwal as $key => $i)
                              <tr>
                                <td> {{ $key+1 }}</td>
                                <td> {{$i->tim }}</td>
                                <td> {{$i->jadwal_mulai }} - {{ $i->jadwal_selesai }}</td>
                                <td> {{$i->tim_lawan }}</td>
                                <td> {{$i->studion }}</td>
                                <td> 
                                  {{ $i->skor_tim}} - 
                                  {{ $i->skor_lawan}}
                                </td>
                                <td>
                                  <a href="/jadwal/update/{{$i->id}}" class="btn btn-sm btn-primary">
                                  edit</a>

                                  <a href="/jadwal/delete/{{$i->id}}" class="btn btn-sm btn-danger">
                                    hapus</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
        </div>
      </div>
    </div>
    </div>
  </div>

  @endsection


  @section('css')
     
  <link rel="stylesheet" href="assets/vendor/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
  @endsection
  
  @section('js')

  <script src="assets/vendor/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="assets/vendor/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>

  <script>
       $('#jadwal').DataTable();
   </script>

  @endsection


