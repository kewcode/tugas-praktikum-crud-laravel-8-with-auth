
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
              <h1 class="text-white">Edit Jadwal</h1>
            </div>
          </div>
        </div>
      </div>

      
    
      <div class="row m-auto container ">
       
        <div class="col-lg-6 m-auto bg-white py-4" style="border-radius:30px">
            <form method="POST" action="/jadwal/update/{{$jadwal->id}}">
              @csrf

              <div class="form-group mb-3">
                <label for="tim">Tim</label>
                <div class="input-group input-group-merge input-group-alternative">
                 
                  <input name="tim" class="form-control" placeholder="Tim" type="text" value="{{$jadwal->tim}}" required>
                </div>
              </div>

              <div class="form-group mb-3">
                <label >Tim Lawan</label>
                <div class="input-group input-group-merge input-group-alternative">
               
                  <input name="tim_lawan" class="form-control" placeholder="Tim" type="text" value="{{$jadwal->tim_lawan}}" required>
                </div>
              </div>

              <div class="form-group mb-3">
                <label >Jadwal Mulai</label>
                <div class="input-group input-group-merge input-group-alternative">
                
                  <input id="jadwal_mulai" name="jadwal_mulai" class="form-control" placeholder="Jadwal Mulai" type="datetime" value="{{$jadwal->jadwal_mulai}}" required>
                </div>
              </div>


              <div class="form-group mb-3">
                <label >Jadwal Selesai</label>
                <div class="input-group input-group-merge input-group-alternative">
                 
                  <input id="jadwal_selesai" name="jadwal_selesai" class="form-control" placeholder="Jadwal Selesai" type="datetime" value="{{$jadwal->jadwal_selesai}}" required>
                </div>
              </div>

              <div class="form-group mb-3">
                <label >Studion</label>

                <div class="input-group input-group-merge input-group-alternative">
                 
                  <input name="studion" class="form-control" placeholder="Studion" type="text" value="{{$jadwal->studion}}" required>
                </div>
              </div>

              <div class="form-group mb-3">
                <label >Skor Tim</label>
                <div class="input-group input-group-merge input-group-alternative">
                 
                  <input name="skor_tim" class="form-control" placeholder="Skor TIM" type="number" value="{{$jadwal->skor_tim}}" required>
                </div>
              </div>


              <div class="form-group mb-3">
                <label>Skor Lawan</label>
                <div class="input-group input-group-merge input-group-alternative">
               
                  <input name="skor_lawan" class="form-control" placeholder="Skor TIM Lawan" value="{{$jadwal->skor_lawan}}" type="number" required>
                </div>
              </div>


              <div class="text-center">
                <button type="submit" class="btn btn-block btn-primary my-4">Simpan</button>
              </div>
            </form>
        </div>
        
        </div>
      </div>
    </div>
    </div>
  </div>

  @endsection


  @section('js')
  <script src="/assets/vendor/moment.min.js"></script>
  <script src="/assets/vendor/bootstrap-datetimepicker.js"></script>
  <script type="text/javascript">
    $(function () {
        $('#jadwal_mulai').datetimepicker({
          format:'YYYY-MM-DD HH:mm',
          icons: {
            time: "fa fa-clock",
            date: "fa fa-calendar-day",
            up: "fa fa-chevron-up",
            down: "fa fa-chevron-down",
            previous: 'fa fa-chevron-left',
            next: 'fa fa-chevron-right',
            today: 'fa fa-screenshot',
            clear: 'fa fa-trash',
            close: 'fa fa-remove'
          }
        });
        $('#jadwal_selesai').datetimepicker({
          format:'YYYY-MM-DD HH:mm',
          icons: {
            time: "fa fa-clock",
            date: "fa fa-calendar-day",
            up: "fa fa-chevron-up",
            down: "fa fa-chevron-down",
            previous: 'fa fa-chevron-left',
            next: 'fa fa-chevron-right',
            today: 'fa fa-screenshot',
            clear: 'fa fa-trash',
            close: 'fa fa-remove'
          }
        });
    });
</script>
  @endsection

