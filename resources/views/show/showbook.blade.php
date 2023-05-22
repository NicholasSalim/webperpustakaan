        <!-- Portfolio Section-->
        <section class="page-section portfolio" style="background-color:#F7F7F7" id="list">
            <div class="container">
                 <!-- Portfolio Section Heading-->
                 <h5 class="page-section-heading text-center text-uppercase text-secondary mb-0">List Buku</h5>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>

                <form class="navbar-search mb-3" action="/" method="GET">
        <div class="input-group">
            <input type="search" name="search" class="form-control bg-light border-1 small" placeholder="Cari Judul Buku"
                aria-label="Search" aria-describedby="basic-addon2" style="border-color: secondary">
            <div class="input-group-append">
                <button class="btn btn-primary" type="submit">
                    <i class="fas fa-search fa-sm"></i>
                </button>
            </div>
        </div>
    </form>

    <div class="card container-fluid mb-3" style="border-style:none;">

        <div class="row d-flex flex-wrap justify-content-center" style="background-color:#F7F7F7" >

            @forelse ($buku as $item)
                <div class="col-auto my-2" style="width:18rem;">
                    <div class="card mx-2 my-2" style="min-height:28rem; border-style:none;">
                        @if ($item->gambar != null)
                            <img class="card-img-top" style="max-height:180px;" src="{{ asset('/images/' . $item->gambar) }}">
                        @else
                            <img class="card-img-top" style="height:200px;" src="{{ asset('/images/noImage.jpg') }}">
                        @endif
                        <div class="card-body d-flex flex-column justify-content-between">
                            <div class="detai-buku">
                                <h5 class="card-title text-primary"><a
                                        href="/buku/{{ $item->id }}"style="text-decoration: none; font-size:1rem;font-weight:bold;">
                                        {{ $item->judul }}</a></h5>
                                <p class = "cart-text m-0">Kode Buku : {{ $item->kode_buku }}</p>
                                <p class="card-text m-0">Pengarang : <a href="#"
                                        style="text-decoration: none;">{{ $item->pengarang }}</a></p>
                                <p class="card-text m-0">Kategori : </p>
                                <p class="text-primary">
                                    @foreach ($item->kategori_buku as $kategori )
                                    {{ $kategori->nama, }},
                                    @endforeach
                            </p>
                                <p class="card-text m-0">Status : {{$item->status  }}</p>
                            </div>
                           

                           
                                <div class="button-area">
                                    <button class="btn-sm btn-primary px-2" style="background-color:#1abc9c; border-style: none; border-radius: 10px;"> <a href="/buku/{{ $item->id }}"
                                    style="text-decoration: none; color:white;">Detail</a></button>
                               
                                </div>
                          

                          

                            </form>
                        </div>
                    </div>
                </div>
            @empty
                <h1 class="text-primary mt-3">Tidak ada buku</h1>
            @endforelse

        </div>

        <div class="d-flex justify-content-between mx-2 my-2">
            <p class="text-primary my-2">Menampilkan {{ $buku->currentPage() }} dari {{ $buku->lastPage() }} Halaman</p>

            {{ $buku->links() }}
        </div>

    </div>
    
            </div>
        </section>