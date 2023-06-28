@extends('template')
@section('content')
<nav class="navbar navbar-expand-lg navbar-white bg-white">
  <div class="container">
      <a class="navbar-brand" href="#">E-Sarpras DTEDI SV UGM</a>
      <button class="navbar-toggler" data-target="#my-nav" data-toggle="collapse">
          <span class="navbar-toggler-icon"></span>
      </button>
      <div id="my-nav" class="collapse navbar-collapse">
          <ul class="navbar-nav ml-auto">
              @guest('admin')
              <li class="nav-item">
                <a href="#"
                    class="nav-link">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Beranda</a>
            </li>
            <li class="nav-item">
                <a href="#sarpras" class="nav-link">&emsp;&emsp;&emsp;&emsp;Sarana dan Prasarana</a>
            </li>
            <li class="nav-item">
                <a href="#panduan" class="nav-link">&emsp;&emsp;Panduan Peminjaman</a>
            </li>
            <li class="nav-item">
                <a href="#lokasi" class="nav-link">&emsp;&emsp;Lokasi</a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.login') }}" class="nav-link">&emsp;&emsp;&emsp;Login</a>
            </li>
                  @else
                  @can('role',['admin','editor','operator'])
                  <li class="nav-item">
                    <a href="#" class="nav-link">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Beranda</a>
                </li>
                <li class="nav-item">
                  <a href="#sarpras" class="nav-link">&emsp;&emsp;&emsp;&emsp;Sarana dan Prasarana</a>
              </li>
              <li class="nav-item">
                <a href="#panduan" class="nav-link">&emsp;&emsp;Panduan Peminjaman</a>
            </li>
            <li class="nav-item">
              <a href="#lokasi" class="nav-link">&emsp;&emsp;Lokasi</a>
          </li>
                  @endcan
                  <li class="nav-item dropdown">
                    <a href="#" class="nav-link" data-toggle="dropdown">&emsp;&emsp;{{ Auth::user()->name }}</a>
                      <div class="dropdown-menu dropdown-menu-right">
                          <a class="dropdown-item"
                          href={{ url('students') }}>Dashboard</a>
                          <a href="{{ route('admin.logout') }}"
                          onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                          class="dropdown-item">Logout</a>
                          <form action="{{ route('admin.logout') }}" id="logout-form" method="post">
                              @csrf
                          </form>
                      </div>
                  </li>
              @endguest
          </ul>
      </div>
  </div>
</nav>
    {{-- End --}}
    <div class="ay"></div>
    <img class="au" src="images/image 15.png">
    <div class="r"></div>
    <div class="s"></div>
    <div class="t"></div>
    <div class="u"></div>
    <div class="v"></div>
    <div class="bk"></div>
    <div class="bl"></div>
    <div class="bm"></div>
    <p class="a">Platform</p>
    <p class="b">Digitalisasi</p>
    <p class="c">E-Sarpras Vokasi</p>
    <p class="d">E-Sarpras merupakan inovasi layanan dari Sekolah Vokasi UGM dalam membangun sistem sarana dan prasarana yang dapat diakses oleh seluruh civitas akademis UGM</p>
    <p class="e">15+</p>
    <p class="f">200+</p>
    <p class="g">50+</p>
    <p class="h">Ruang & Lab</p>
    <p class="i">Tools & Hardware</p>
    <p class="w">Device</p>
    <p class="j" id="sarpras">SARANA DAN PRASARANA</p>

    <p class="k" id="panduan">PANDUAN PEMINJAMAN</p>
    <p class="l">PERTANYAAN YANG SERING DITANYAKAN</p>
    <div class="accordion" id="accordionExample">
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingOne">
            <button class="mm" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bagaimana proses sistem peminjaman tools dan hardware ?            </button>
          </h2>
          <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
            <div class="mk">
                Proses peminjaman dapat dilakukan melalui platform e-sarpras vokasi sehingga memudahkan civitas akademik untuk memonitoring dan approval peminjaman.            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingTwo">
            <button class="mm" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                &nbsp;&nbsp;&nbsp;&nbsp;Saya tidak memiliki akun microsoft 365 UGM, Apakah bisa meminjam ?            </button>
          </h2>
          <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
            <div class="mk">
            Kalimat    
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingThree">
            <button class="mm" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Berapa lama batas waktu peminjaman ?
            </button>
          </h2>
          <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
            <div class="mk">
            Kalimat
            </div>
          </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingFour">
              <button class="mm" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                  &nbsp;&nbsp;&nbsp;&nbsp;Di mana Saya dapat mengambil barang yang sudah di pinjam ?           </button>
            </h2>
            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
              <div class="mk">
              Kalimat    
              </div>
            </div>
          </div>
      </div>
      <div class="accordion2" id="accordionExample">
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingFive">
            <button class="mm" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bagaimana proses sistem peminjaman tools dan hardware ?            </button>
          </h2>
          <div id="collapseFive" class="accordion-collapse collapse show" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
            <div class="mk">
                Proses peminjaman dapat dilakukan melalui platform e-sarpras vokasi sehingga memudahkan civitas akademik untuk memonitoring dan approval peminjaman.            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingSix">
            <button class="mm" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                &nbsp;&nbsp;&nbsp;&nbsp;Saya tidak memiliki akun microsoft 365 UGM, Apakah bisa meminjam ?            </button>
          </h2>
          <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
            <div class="mk">
            Kalimat    
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingSeven">
            <button class="mm" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Berapa lama batas waktu peminjaman ?
            </button>
          </h2>
          <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#accordionExample">
            <div class="mk">
            Kalimat
            </div>
          </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingEight">
              <button class="mm" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                  &nbsp;&nbsp;&nbsp;&nbsp;Saya tidak memiliki akun microsoft 365 UGM, Apakah bisa meminjam ?            </button>
            </h2>
            <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight" data-bs-parent="#accordionExample">
              <div class="mk">
              Kalimat    
              </div>
            </div>
          </div>
      </div>
      
    <p class="m" id="lokasi">LOKASI</p>
    <p class="n">Target Output E-Sarpras</p>
    <p class="o">Sebagai platform digital Sarana dan Prasarana dengan fitur monitoring realtime</p>
    <p class="p">Fasilitas peminjaman berbasis web untuk meningkatkan layanan Civitas Akademik</p>
    <p class="q">Memaksimalkan potensi fasilitas yang ada di DTEDI untuk meningkatkan potensi akademik</p>
    <p class="aj">1</p>
    <p class="x">2</p>
    <p class="y">3</p>
    <p class="z">4</p>
    <p class="aa">STEP</p>
    <p class="ab">STEP</p>
    <p class="ac">STEP</p>
    <p class="ad">STEP</p>
    <p class="ae">Ini Sample</p>
    <p class="af">Ini Sample</p>
    <p class="ag">Ini Sample</p>
    <p class="ah">Ini Sample</p>
    <img class="ai" src="images/Group.svg">
    <img class="aj" src="images/Frame.png">
    <img class="ak" src="images/Frame (1).png">
    <img class="al" src="images/Frame (2).png">
    <div class="am"></div>
    <div class="an"></div>
    <div class="ao"></div>
    <div class="ap"></div>
    <div class="aq"></div>
    <div class="ar"></div>
    <div class="as"></div>
    <div class="at"></div>
    <p class="au">Departemen Teknik Elektro dan Informatika Sekolah Vokasi Universitas Gadjah Mada Jl. Yacaranda, Sekip Unit III, Yogyakarta. 55281 tedi.sv@ugm.ac.id (0274) 6491302, 561111 | (0274) 542908</p>
    <p class="av">E-Sarpras DTEDI SV UGM</p>
    <p class="aw">© DEPARTEMEN TEKNIK ELEKTRO DAN INFORMATIKA SEKOLAH VOKASI UGM</p>
    <img class="ax" src="images/Lambang UGM-putih (1).png">
    <img class="az" src="images/Logo Horizontal 2.png">
    <a href="civitas" class="ba">Masuk</a>
    <a href="#" class="bb">Daftar Akun</a>
    <p class="bn">Ruangan Lab</p>
    <p class="bo">Deskripsi Ruangan di sini</p>
    <p class="bp">Ruangan Lab</p>
    <p class="bq">Deskripsi Ruangan di sini</p>
    <p class="br">Ruangan Lab</p>
    <p class="bs">Deskripsi Ruangan di sini</p>
    <a href="#" class="bt">Klik untuk peminjaman</a>
    <a href="#" class="bu">Klik untuk peminjaman</a>
    <a href="#" class="bv">Klik untuk peminjaman</a>
    <img class="bw" src="images/l-1.png">
    <img class="bx" src="images/l-2.png">
    <img class="by" src="images/l-3.png">
      <div id="map"
      style="width: 906.75px; height: 338.25px; left: 267.75px; top: 3150px; position: absolute; border-radius: 22px;">
  </div>
  <script>
      const map = L.map('map').setView([-7.775440423721329, 110.37424686589556], 13);

      const tiles = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
          maxZoom: 50000,
          attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
      }).addTo(map);

      const marker = L.marker([-7.775440423721329, 110.37424686589556]).addTo(map)
          .bindPopup('Sekolah Vokasi UGM at here!').openPopup();

      function onMapClick(e) {
          popup
              .setLatLng(e.latlng)
              .setContent(`You clicked the map at ${e.latlng.toString()}`)
              .openOn(map);
      }

      map.on('click', onMapClick);
  </script>

@endsection