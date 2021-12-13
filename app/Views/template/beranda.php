<!-- Page content-->
<div class="container mt-5">
    <div class="row">
        <div class="col-lg-8">
            <!-- Post content-->
            <article>
                <!-- Post header-->
                <header class="mb-4">
                    <!-- Post title-->
                    <h1 class="fw-bolder mb-1">Beranda</h1>
                    <!-- Post meta content-->

                    <!-- Post categories-->
                    <a class="badge bg-secondary text-decoration-none link-light" href="#!">Beranda</a>
                    <a class="badge bg-secondary text-decoration-none link-light" href="#!">Produk</a>
                </header>
                <!-- Preview image figure-->
                <!-- <figure class="mb-4"><img class="img-fluid rounded" src="https://media.istockphoto.com/photos/various-sport-equipments-on-grass-picture-id949190756?k=20&m=949190756&s=612x612&w=0&h=9loU1wPMKi9eK89EDxBfz4AarpAl8BFo1iO5XGHpXX0=" alt="..." /></figure> -->
                <!-- Post content-->
                <div class="row">
                    <?php foreach ($dataBarang as $Barang) { ?>
                        <div class="card mb-3 mx-3" style="width: 18rem;">
                            <img class="card-img-top" src="<?= base_url('/assets/img') . "/" . $Barang['barang_img'] ?>" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title"><?= $Barang['barang_title'] ?></h5>
                                <p class="card-text">Rp.<?= $Barang['barang_harga'] ?></p>
                                <p class="card-text">Stok : <?= $Barang['barang_stok'] ?></p>
                                <a href="#" class="btn btn-primary">Beli</a>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </article>

        </div>
        <!-- Side widgets-->
        <div class="col-lg-4">
            <!-- Search widget-->
            <div class="card mb-4">
                <div class="card-header">Search</div>
                <div class="card-body">
                    <div class="input-group">
                        <input class="form-control" type="text" placeholder="Enter search term..." aria-label="Enter search term..." aria-describedby="button-search" />
                        <button class="btn btn-primary" id="button-search" type="button">Go!</button>
                    </div>
                </div>
            </div>
            <!-- Categories widget-->
            <div class="card mb-4">
                <div class="card-header">Categories</div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-6">
                            <ul class="list-unstyled mb-0">
                                <li><a href="#!">About</a></li>
                                <li><a href="#!">Company Profil</a></li>
                            </ul>
                        </div>
                        <div class="col-sm-6">
                            <ul class="list-unstyled mb-0">
                                <!-- <li><a href="#!">JavaScript</a></li>
                                        <li><a href="#!">CSS</a></li>
                                        <li><a href="#!">Tutorials</a></li> -->
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Side widget-->
            <div class="card mb-4">
                <div class="card-header">Marketplace Kami</div>
                <img src="https://www.freepnglogos.com/uploads/logo-tokopedia-png/tokopedia-apa-itu-startup-pengertian-cara-memulai-dan-1.png" class="card-img-top mt-3" alt="...">
                <div class="card-body">Dapatkan produk kami di marketplace official Tokopedia <strong>Van_Store</strong></div>
            </div>
        </div>
    </div>
</div>