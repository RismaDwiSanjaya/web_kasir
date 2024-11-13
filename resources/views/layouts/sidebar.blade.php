<!-- resources/views/layouts/sidebar.blade.php -->
<div class="bg-light border-end" id="sidebar-wrapper">
  <div class="sidebar-heading text-center py-4 primary-text fs-4 fw-bold text-uppercase border-bottom">
      <i class="fas fa-cogs"></i> My App
  </div>
  <div class="list-group list-group-flush my-3">
      <a href="{{ route('admin.dashboard') }}" class="list-group-item list-group-item-action bg-transparent second-text fw-bold d-flex align-items-center">
          <i class="fas fa-tachometer-alt me-3"></i> Dashboard
      </a>
      <a href="{{ route('petugas.index') }}" class="list-group-item list-group-item-action bg-transparent second-text fw-bold d-flex align-items-center">
          <i class="fas fa-user me-3"></i> Petugas
      </a>
      <a href="{{ route('products.index') }}" class="list-group-item list-group-item-action bg-transparent second-text fw-bold d-flex align-items-center">
          <i class="fa-brands fa-product-hunt me-3"></i> Produk
      </a>
      <a href="{{ route('payment_methods.index') }}" class="list-group-item list-group-item-action bg-transparent second-text fw-bold d-flex align-items-center">
          <i class="fa-solid fa-money-check-dollar me-3"></i> Metode Bayar
      </a>
      <a href="{{ route('transaksi.index') }}" class="list-group-item list-group-item-action bg-transparent second-text fw-bold d-flex align-items-center">
          <i class="fas fa-exchange-alt me-3"></i> Transaksi
      </a>
      <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold d-flex align-items-center">
          <i class="fas fa-chart-line me-3"></i> Laporan
      </a>
      <a href="{{ route('logout') }}" class="list-group-item list-group-item-action bg-transparent second-text fw-bold d-flex align-items-center">
          <i class="fas fa-sign-out-alt me-3"></i> Logout
      </a>
  </div>
</div>
