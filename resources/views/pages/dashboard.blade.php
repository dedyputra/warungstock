@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4">
  <div>
    <h3 class="fw-bold mb-3">Dashboard</h3>
    <h6 class="op-7 mb-2">Ringkasan stok dan penjualan warung</h6>
  </div>
  <div class="ms-md-auto py-2 py-md-0">
    <a href="{{ url('/ingredients/create') }}" class="btn btn-label-info btn-round me-2">Tambah Bahan</a>
    <a href="{{ url('/transactions') }}" class="btn btn-primary btn-round">Transaksi Baru</a>
  </div>
</div>

{{-- TODO: ganti data dummy dengan data dari controller/Livewire --}}
<div class="row">
  <div class="col-sm-6 col-md-3">
    <x-stat-card label="Total Bahan" value="128" icon="fas fa-boxes" color="primary" />
  </div>
  <div class="col-sm-6 col-md-3">
    <x-stat-card label="Stok Menipis" value="7" icon="fas fa-exclamation-triangle" color="secondary" />
  </div>
  <div class="col-sm-6 col-md-3">
    <x-stat-card label="Penjualan Hari Ini" value="Rp 1.345.000" icon="fas fa-cash-register" color="success" />
  </div>
  <div class="col-sm-6 col-md-3">
    <x-stat-card label="Transaksi" value="48" icon="far fa-check-circle" color="info" />
  </div>
</div>

<div class="row">
  <div class="col-md-8">
    <x-card title="Penjualan 7 Hari Terakhir">
      <div class="chart-container" style="min-height: 320px">
        <canvas id="salesChart"></canvas>
      </div>
    </x-card>
  </div>

  <div class="col-md-4">
    <x-card title="Stok Menipis">
      <div class="card-list">
        @foreach ([['Beras', '3 kg'], ['Minyak Goreng', '2 L'], ['Gula', '1 kg']] as [$nama, $sisa])
        <div class="item-list">
          <div class="info-user ms-3">
            <div class="username">{{ $nama }}</div>
            <div class="status text-danger">Sisa {{ $sisa }}</div>
          </div>
        </div>
        @endforeach
      </div>
    </x-card>
  </div>
</div>

<div class="row">
  <div class="col-md-12">
    <x-card title="Transaksi Terbaru">
      <div class="table-responsive">
        <table class="table align-items-center mb-0">
          <thead class="thead-light">
            <tr>
              <th>No. Transaksi</th>
              <th class="text-end">Waktu</th>
              <th class="text-end">Total</th>
              <th class="text-end">Status</th>
            </tr>
          </thead>
          <tbody>
            @foreach (range(1, 5) as $i)
            <tr>
              <td>TRX-{{ str_pad($i, 4, '0', STR_PAD_LEFT) }}</td>
              <td class="text-end">{{ now()->subHours($i)->format('d M Y, H:i') }}</td>
              <td class="text-end">Rp 250.000</td>
              <td class="text-end"><span class="badge badge-success">Selesai</span></td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </x-card>
  </div>
</div>
@endsection

@push('scripts')
<script src="{{ asset('assets/js/plugin/chart.js/chart.min.js') }}"></script>
<script>
  new Chart(document.getElementById('salesChart'), {
    type: 'line'
    , data: {
      labels: ['Sen', 'Sel', 'Rab', 'Kam', 'Jum', 'Sab', 'Min']
      , datasets: [{
        label: 'Penjualan (Rp)'
        , data: [820000, 940000, 760000, 1100000, 1345000, 1580000, 1210000]
        , borderColor: '#177dff'
        , backgroundColor: 'rgba(23, 125, 255, 0.14)'
        , fill: true
        , tension: 0.3
      , }]
    , }
    , options: {
      responsive: true
      , maintainAspectRatio: false
    }
  , });

</script>
@endpush
