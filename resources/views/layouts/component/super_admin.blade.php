<li class="nav-item">
    <a class="nav-link" href="{{ route('super-admin.dashboard') }}">
        <i class="ni ni-chart-bar-32 text-primary"></i>
        <span class="nav-link-text">Dashboard</span>
    </a>
</li>
<li class="nav-item">
  <a class="nav-link" href="#Data-Master" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="Data-Master">
    <i class="ni ni-single-copy-04 text-success"></i>
    <span class="nav-link-text">Data Master</span>
  </a>
  <div class="collapse" id="Data-Master">
    <ul class="nav nav-sm flex-column">
      <li class="nav-item">
        <a href="{{ route('super-admin.data-master.kategori-industri') }}" class="nav-link">Kategori Industri</a>
      </li>
      <li class="nav-item">
        <a href="{{ route('super-admin.data-master.kategori') }}" class="nav-link">Kategori Perusahaan</a>
      </li>
      <li class="nav-item">
        <a href="{{ route('super-admin.data-master.posisi-responden') }}" class="nav-link">Posisi Responden</a>
      </li>
      <li class="nav-item">
        <a href="{{ route('super-admin.data-master.perusahaan') }}" class="nav-link">Perusahaan</a>
      </li>
      <li class="nav-item">
        <a href="{{ route('super-admin.data-master.ukuran-perusahaan') }}" class="nav-link">Ukuran Perusahaan</a>
      </li>
       <li class="nav-item">
        <a href="{{ route('super-admin.data-master.kelompok-pertanyaan') }}" class="nav-link">Kelompok Pertanyaan</a>
      </li>
       <li class="nav-item">
        <a href="{{ route('super-admin.data-master.pertanyaan-bpo') }}" class="nav-link">Pertanyaan BPO</a>
      </li>
      <li class="nav-item">
        <a href="{{ route('super-admin.data-master.pertanyaan-kinerja') }}" class="nav-link">Pertanyaan Kinerja</a>
      </li>
    </ul>
  </div>
</li>

<li class="nav-item">
  <a class="nav-link" href="#dashboard-klaster" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="dashboard-klaster">
    <i class="ni ni-atom text-warning"></i>
    <span class="nav-link-text">Klaster</span>
  </a>
  <div class="collapse" id="dashboard-klaster">
    <ul class="nav nav-sm flex-column">
      <li class="nav-item">
        <a href="{{ route('super-admin.data-master.kategori-klaster') }}" class="nav-link">Kategori Klaster</a>
      </li>
      <li class="nav-item">
        <a href="{{ route('super-admin.klaster') }}" class="nav-link">Daftar Klaster</a>
      </li>
      <li class="nav-item">
        <a href="{{ route('super-admin.klaster-ukuran') }}" class="nav-link">Klaster Ukuran</a>
      </li>
      <li class="nav-item">
        <a href="{{ route('super-admin.klaster-perusahaan') }}" class="nav-link">Klaster Perusahaan</a>
      </li>
    </ul>
  </div>
</li>

<li class="nav-item">
  <a class="nav-link" href="#dahsboard-berita" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="dahsboard-berita">
    <i class="ni ni-notification-70 text-danger"></i>
    <span class="nav-link-text">Berita</span>
  </a>
  <div class="collapse" id="dahsboard-berita">
    <ul class="nav nav-sm flex-column">
      <li class="nav-item">
        <a href="{{ route('super-admin.data-master.kategori-berita') }}" class="nav-link">Kategori Berita</a>
      </li>
      <li class="nav-item">
        <a href="{{ route('super-admin.data-master.berita') }}" class="nav-link">Daftar Berita</a>
      </li>
    </ul>
  </div>
</li>

<li class="nav-item">
    <a class="nav-link" href="{{ route('super-admin.feedback') }}">
        <i class="ni ni-email-83 text-primary"></i>
        <span class="nav-link-text">Feedback User</span>
    </a>
</li>

<li class="nav-item">
    <a class="nav-link" href="{{ route('super-admin.pengguna') }}">
        <i class="ni ni-single-02 text-danger"></i>
        <span class="nav-link-text">Pengguna</span>
    </a>
</li>

<li class="nav-item">
    <a class="nav-link" href="{{ route('super-admin.dashboard-internal') }}">
        <i class="ni ni-chart-bar-32 text-warning"></i>
        <span class="nav-link-text">Dashboard Internal</span>
    </a>
</li>