@extends('dashboard.base')

@section('content')

<div class="container-fluid">
  <div class="fade-in">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header"><strong>Dashboard</strong> Perawat</div>
          <div class="card-body">
            <table class="table table-responsive-sm">
              <thead>
                <tr>
                  <th>Tanggal</th>
                  <th>No RM</th>
                  <th>Nama Pasien</th>
                  <th>Status</th>
                  <th>Detail</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($dataResponden as $data)
                <tr>
                  <td>{{ $data['tanggal'] }}</td>
                  <td>{{ $data['noRM'] }}</td>
                  <td>{{ $data['nama'] }}</td>
                  <td>
                    @if ($data['status'] === 'baru')
                      <span class="badge badge-success">Baru</span>
                    @else
                      <span class="badge badge-danger">Selesai</span>
                    @endif
                  </td>
                  <td><button>Detail</button></td>
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

@section('javascript')
<script type="text/javascript">
  $(document).ready(function () {
    console.log('tes jquery')
  });

</script>
@endsection
