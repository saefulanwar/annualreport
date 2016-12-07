  <style type="text/css">
  .sidebar-menu,
  .main-sidebar .user-panel,
  .sidebar-menu > li.header {
    white-space: normal!important;
  }
  </style>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <?php $currentUser = Auth::user();?>
          <img src="{{ $currentUser->gravatar() }}" class="img-circle" alt="{{$currentUser->name}}">
        </div>
        <div class="pull-left info">
          <p>{{ $currentUser->name }}</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li>
          <a href="{{ url('/home') }}">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-pencil"></i>
            <span>Laporan Tahunan</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="treeview">
              <a href="#">
              <i class="fa fa-pencil"></i>
            <span>Bidang I</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
              <ul class="treeview-menu">
                  <li class="treeview">
                    <a href="#"><i class="fa fa-circle-o"></i> Tabel 1.1 Perkembangan Jumlah Mhs</span> <i class="fa fa-angle-left pull-right"></i></a>
                    <ul class="treeview-menu">
                      <li><a href="{{ route('dayatampung.index') }}">Daya Tampung Calon Mhs Baru</a></li>
                      <li><a href="{{ route('animo.index') }}">Animo Calon Mhs Baru</a></li>
                      <li><a href="{{ route('maba.index') }}">Mahasiswa Baru Diterima</a></li>
                      <li><a href="{{ route('mabareg.index') }}">Mahasiswa Baru Daftar Ulang</a></li>
                      <li><a href="{{ route('mhsaktif.index') }}">Mahasiswa Aktif</a></li>
                    </ul>
                  </li>
                <li class="treeview"><a href="{{ url('/backend/tabel12') }} "><i class="fa fa-circle-o"></i> Tabel 1.2 Rangking Nasional Nilai Rerataan Saintek SBMPTN</a></li>
                <li class="treeview">
                    <a href="{{ url('backend/tabel13') }}"><i class="fa fa-circle-o"></i> Tabel 1.3 Rangking Nasional Nilai Rerataan Soshum SBMPTN</a>
                </li>
                <li class="treeview">
                   <a href="{{ url('backend/tabel14') }}"><i class="fa fa-circle-o"></i> Tabel 1.4 Rangking Nasional PTN Paling Diminati</a>
                </li>
                <li class="treeview" class="treeview">
                   <a href="{{ url('backend/tabel15') }}"><i class="fa fa-circle-o"></i> Tabel 1.5 Jumlah Mahasiswa Peserta Pelatihan TIK</a>
                </li>
                <li class="treeview">
                   <a href="{{ url('backend/tabel16') }}"><i class="fa fa-circle-o"></i> Tabel 1.6 Jumlah Mahasiswa Lulus ProTEFL</a>
                </li>
                <li class="treeview">
                   <a href="{{ url('backend/tabel18') }}"><i class="fa fa-circle-o"></i> Tabel 1.8 IPK Mahasiswa UNY dalam Delapan Tahun</a>
                </li>
                <li class="treeview">
                   <a href="{{ url('backend/tabel19') }}"><i class="fa fa-circle-o"></i> Tabel 1.9 Lama Studi Mahasiswa UNY dalam Delapan Tahun</a>
                </li>
                <li class="treeview">
                   <a href="{{ url('backend/tabel110') }}"><i class="fa fa-circle-o"></i> Tabel 1.10 Data Dosen UNY Menurut Kualifikasi Akademik</a>
                </li>
                <li class="treeview">
                   <a href="{{ url('backend/tabel111') }}"><i class="fa fa-circle-o"></i> Tabel 1.11 Data Dosen yang Sedang Melakukan Studi Lanjut</a>
                </li>    

                <li class="treeview">
                   <a href="{{ url('backend/tabel114') }}"><i class="fa fa-circle-o"></i> Tabel 1.14 Tawaran Penulisan Buku, Animo dan Finalisasi</a>
                </li>
                <li class="treeview">
                   <a href="{{ url('backend/tabel115') }}"><i class="fa fa-circle-o"></i> Tabel 1.15 Jumlah Dosen yang Lulus Sertifikasi dan Kuotanya</a>
                </li>
                <li class="treeview">
                   <a href="{{ url('backend/tabel116') }}"><i class="fa fa-circle-o"></i> Tabel 1.16 Data Dosen yang Telah dan Belum Lulus Sertifikasi
                </li>
                <li class="treeview">
                   <a href="{{ url('backend/tabel117') }}"><i class="fa fa-circle-o"></i> Tabel 1.17 Jumlah Guru Besar UNY yang Aktif</a>
                </li>
                <li class="treeview">
                   <a href="{{ url('backend/tabel118') }}"><i class="fa fa-circle-o"></i> Tabel 1.18 Jumlah Guru Besar Baru UNY</a>
                </li>
                <li class="treeview">
                    <a href="{{ url('backend/tabel119') }}"><i class="fa fa-circle-o"></i> Tabel 1.19 Jumlah Dosen yang Difasilit</a>
                </li>
                <li class="treeview">
                    <a href="{{ url('backend/tabel120') }}"><i class="fa fa-circle-o"></i> Tabel 1.20 Daftar Nama Dosen yang Mendapatkan Insentif Seminar Nasional/Internasional</a>
                 </li>
                <li class="treeview">
                    <a href="{{ url('backend/tabel121') }}"><i class="fa fa-circle-o"></i> Tabel 1.21 Data Rekapitulasi Pelatihan Dalam Negeri Non Gelar</a>
                </li>
                <li class="treeview">
                    <a href="{{ url('backend/tabel122') }}"><i class="fa fa-circle-o"></i> Tabel 1.22 Data Rekapitulasi Pelatihan Luar Negeri Non Gelar</a>
                </li>
                <li class="treeview">
                    <a href="{{ url('backend/tabel129') }}"><i class="fa fa-circle-o"></i> Tabel 1.29 Acara Seminar dan/atau Internasional</a>
                </li>   
                <li class="treeview">
                    <a href="{{ url('backend/tabel130') }}"><i class="fa fa-circle-o"></i> Tabel 1.30 Guest Lecturing</a>
                </li>  
                <li class="treeview">
                    <a href="{{ url('backend/tabel131') }}"><i class="fa fa-circle-o"></i> Tabel 1.31 Kegiatan Studium General</a>
                </li>  
                <li class="treeview">
                    <a href="{{ url('backend/tabel132') }}"><i class="fa fa-circle-o"></i> Tabel 1.32 Rekapitulasi Penelitian Menurut Skim Penelitian</a>
                </li> 
                <li class="treeview">
                    <a href="{{ url('backend/tabel134') }}"><i class="fa fa-circle-o"></i> Tabel 1.34 Jumlah Usulan Proposal dan Kontrak Penelitian Menurut Skim Penelitian</a>
                </li> 
                <li class="treeview">
                    <a href="{{ url('backend/tabel135') }}"><i class="fa fa-circle-o"></i> Tabel 1.35 Jumlah Sertifikat Penelitian</a>
                </li> 
                <li class="treeview">
                     <a href="{{ url('backend/tabel136') }}"><i class="fa fa-circle-o"></i> Tabel 1.36 Rekapitulasi Usulan Proposal PPM Masuk</a>
                </li> 
                <li class="treeview">
                    <a href="{{ url('backend/tabel137') }}"><i class="fa fa-circle-o"></i> Tabel 1.37 Jumlah Kontrak PPM Menurut Skim, Jumlah Dosen Pengabdi dan Jumlah Mahasiswa Terlibat</a>
                </li> 
                <li class="treeview">
                    <a href="{{ url('backend/tabel141') }}"><i class="fa fa-circle-o"></i> Tabel 1.41 Jumlah Dosen Yang Melaksanakan PPM di Lembaga</a>
                </li> 
                <li class="treeview">
                    <a href="{{ url('backend/tabel142') }}"><i class="fa fa-circle-o"></i> Tabel 1.42 Jumlah Kontrak PPM yang Dilaksanakan Fakultas dan Pascasarjana</a>
                </li> 
                <li class="treeview">
                    <a href="{{ url('backend/tabel144') }}"><i class="fa fa-circle-o"></i> Tabel 1.44 Jumlah Peserta KKN Semester gasal, Khusus dan PPKHB</a>
                </li>
                <li class="treeview">
                    <a href="{{ url('backend/tabel147') }}"><i class="fa fa-circle-o"></i> Tabel 1.47 Daftar Usulan HKI UNY</a>
                </li>
                <li class="treeview">
                    <a href="{{ url('backend/tabel148') }}"><i class="fa fa-circle-o"></i> Tabel 1.48 Daftar Penerima HKI UNY</a>
                </li>
                <li class="treeview">
                    <a href="{{ url('backend/tabel151') }}"><i class="fa fa-circle-o"></i> Tabel 1.51 Pelatihan dan Workshop di LPPMP (P2KIS)</a>
                </li>
                <li class="treeview">
                    <a href="{{ url('backend/tabel169') }}"><i class="fa fa-circle-o"></i> Tabel 1.69 Perkembangan Jumlah KPerpustakaan UNY Menurut Subyek</a>
               </li>
                <li class="treeview">
                    <a href="{{ url('backend/tabel171') }}"><i class="fa fa-circle-o"></i> Tabel 1.71 Perkembangan Jumlah Peminjam Buku Perpustakaan UNY Menurut Subyek</a>
                </li>
                <li class="treeview">
                    <a href="{{ url('backend/tabel172') }}"><i class="fa fa-circle-o"></i> Tabel 1.72 Perkembangan Jumlah Peminjam Buku Perpustakaan UNY Menurut Subyek</a>
                </li>
                <li class="treeview">
                    <a href="{{ url('backend/tabel173') }}"><i class="fa fa-circle-o"></i> Tabel 1.73 Perkembangan Jumlah Koleksi Buku Perpustakaan UNY Menurut Subyek Berbahasa Asing</a>
                </li>
                <li class="treeview">
                    <a href="{{ url('backend/tabel174') }}"><i class="fa fa-circle-o"></i> Tabel 1.74 Perkembangan Jumlah Koleksi Buku Perpustakaan UNY Menurut Subyek Berbahasa Indonesia</a>
                </li>
                 <li class="treeview">
                    <a href="{{ url('backend/tabel178') }}"><i class="fa fa-circle-o"></i> Tabel 1.78 Daftar Anggota Forum Kerjasama Perpustakaan Perguruan Tinggi Negeri(FKP2TN)</a>
                </li>
                <li class="treeview">
                    <a href="{{ url('backend/tabel184') }}"><i class="fa fa-circle-o"></i> Tabel 1.84 Data Permintaan TambahanDomain dn Hosting</a>
                </li>
                <li class="treeview">
                     <a href="{{ url('backend/tabel185') }}"><i class="fa fa-circle-o"></i> Tabel 1.85 Daftar Advokasi LKBH yang Telah Terlaksana</a>
                </li>
                <li class="treeview">
                    <a href="{{ url('backend/tabel186') }}"><i class="fa fa-circle-o"></i> Tabel 1.86 Jumlah Konseli UPT LBK</a>
                 </li>
                <li class="treeview">
                    <a href="{{ url('backend/tabel187') }}"><i class="fa fa-circle-o"></i> Tabel 1.87 Jumlah Pasien dan Besarnya Dana yang Terkumpul</a>
                </li>
                <li class="treeview">
                    <a href="{{ url('backend/tabel188') }}"><i class="fa fa-circle-o"></i> Tabel 1.88 Jumlah Pasien dan Besarnya Dana yang Terkumpul untuk Pemeriksaan Mini Lab </a>
                </li>
                <li class="treeview">
                     <a href="{{ url('backend/tabel189') }}"><i class="fa fa-circle-o"></i> Tabel 1.89 Jumlah Pasien dan Besarnya Dana yang Terkumpul untuk Biaya Pembuatan Surat Ket Dokter </a>
                </li>
                <li class="treeview">
                    <a href="{{ url('backend/tabel190') }}"><i class="fa fa-circle-o"></i> Tabel 1.90 Layanan P3K dari UPT LK UNY </a>
                </li>                
                                        
              </ul>
            </li>
          </ul>
          <ul class="treeview-menu">
            <li class="treeview">
              <a href="#">
              <i class="fa fa-pencil"></i>
            <span>Bidang II</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
              <ul class="treeview-menu">           
              
              <li class="treeview"><a href="{{ url('/backend/tabel21') }} "><i class="fa fa-circle-o"></i> Tabel 2.1 Daftar Surat Masuk dan Surat Keluar serta Surat Tugas & SPPD</a></li>  
              <li class="treeview"><a href="{{ url('/backend/tabel22') }} "><i class="fa fa-circle-o"></i> Tabel 2.2 Data Siswa Prakerin</a></li> 
              <li class="treeview"><a href="{{ url('/backend/tabel23') }} "><i class="fa fa-circle-o"></i> Tabel 2.3 Balik Nama Akta Tanah</a></li> 
              <li class="treeview"><a href="{{ url('/backend/tabel24') }} "><i class="fa fa-circle-o"></i> Tabel 2.4 Total Pengadaan Jasa Konstruksi</a></li> 
              <li class="treeview"><a href="{{ url('/backend/tabel25') }} "><i class="fa fa-circle-o"></i> Tabel 2.5 Pengadaan Jasa Konstruksi</a></li> 
              <li class="treeview"><a href="{{ url('/backend/tabel213') }} "><i class="fa fa-circle-o"></i> Tabel 2.13 Pengadaan Jasa Non Konstruksi</a></li> 
              <li class="treeview">
                  <a href="{{ url('/backend/tabel214') }}"><i class="fa fa-circle-o"></i> Tabel 2.14 Pengadaan Jasa Non Konstruksi</a>
              </li>
              <li class="treeview">
                  <a href="{{ url('/backend/tabel225') }}"><i class="fa fa-circle-o"></i> Tabel 2.25 Anggaran Pedapatan DIPA UNY</a>
              </li>
              <li class="treeview"> 
                  <a href="{{ url('/backend/tabel226') }}"><i class="fa fa-circle-o"></i> Tabel 2.26 Realisasi Belanja DIPA UNY</a>
              </li>
              <li class="treeview">
                  <a href="{{ url('/backend/tabel227') }}"><i class="fa fa-circle-o"></i> Tabel 2.27 Daftar Program Kerjasama UNY</a>
              </li>
              <li class="treeview">
                  <a href="{{ url('/backend/tabel228') }}"><i class="fa fa-circle-o"></i> Tabel 2.28 Laporan Pendapatan BPPU</a>
              </li>              

              </ul>

            </li>
          </ul>
          <ul class="treeview-menu">
            <li class="treeview">
              <a href="#">
              <i class="fa fa-pencil"></i>
            <span>Bidang III</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
              <ul class="treeview-menu">
                  
                <li>
                    <a href="{{ url('/backend/tabel31') }}"><i class="fa fa-circle-o"></i> Tabel 3.1 Rekapitulasi Mahasiswa Penerima Penghargaan Perestasi Mahasiswa</a>
                </li>
                <li class="treeview">
                    <a href="{{ url('/backend/tabel32') }}"><i class="fa fa-circle-o"></i> Tabel 3.2 Rekapitulasi Prestasi Mahasiswa UNY</a>
                </li>
                <li class="treeview">
                    <a href="{{ url('/backend/tabel33') }}"><i class="fa fa-circle-o"></i> Tabel 3.3 Rincian Proposal PKM yang Didanai Ditjen Dikti</a>
                </li>
                <li class="treeview">
                    <a href="{{ url('/backend/tabel34') }}"><i class="fa fa-circle-o"></i> Tabel 3.4 Sepuluh Besar Perguruan Tinggi Peraih Juara Kompetisi Penalaran Mahasiswa</a>
                </li>
                <li class="treeview">
                    <a href="{{ url('/backend/tabel35') }}"><i class="fa fa-circle-o"></i> Tabel 3.5 Mahasiswa Berprestasi UNY</a>
                </li>
                <li class="treeview">
                    <a href="{{ url('/backend/tabel37') }}"><i class="fa fa-circle-o"></i> Tabel 3.7 Mahasiswa UNY Penerima Beasiswa</a>
                </li>
                <li class="treeview">
                    <a href="{{ url('/backend/tabel38') }}"><i class="fa fa-circle-o"></i> Tabel 3.8 Klaim Asuransi dan Dana Kesejahteraan Kesehatan</a>
                </li>      
                                        
              </ul>
            </li>
          </ul>
          <ul class="treeview-menu">
            <li class="treeview">
              <a href="#">
              <i class="fa fa-pencil"></i>
            <span>Bidang IV</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
              <ul class="treeview-menu">
                  <li class="treeview">
                      <a href="{{ url('/backend/tabel41') }}"><i class="fa fa-circle-o"></i> Tabel 4.1 Partisipasi dalam Pameran Bidang KDN</a>
                  </li>
                  <li class="treeview">
                      <a href="{{ url('/backend/tabel42') }}"><i class="fa fa-circle-o"></i> Tabel 4.2 Kegiatan Pengembangan Wawasan Internasional Mahasiswa</a>
                  </li>
                  <li class="treeview">
                      <a href="{{ url('/backend/tabel43') }}"><i class="fa fa-circle-o"></i> Tabel 4.3 Kegiatan dalam Rangka Internasionalisasi Prodi</a>
                  </li>
                  <li class="treeview">
                      <a href="{{ url('/backend/tabel44') }}"><i class="fa fa-circle-o"></i> Tabel 4.4 Kegiatan guest lecturing </a>
                  </li>
                  <li class="treeview">
                      <a href="{{ url('/backend/tabel46') }}"><i class="fa fa-circle-o"></i> Tabel 4.6 Kegiatan pre departure training </a>
                  </li>
                  <li class="treeview">
                      <a href="{{ url('/backend/tabel47') }}"><i class="fa fa-circle-o"></i> Tabel 4.7 MoU Kerja sama Luar Negeri</a>
                  </li>                
                                        
              </ul>
            </li>
          </ul>

              


        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>