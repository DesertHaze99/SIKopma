<section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <img src="{{url('/')}}/bsb/images/user.png" width="48" height="48" alt="User" />
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">John Doe</div>
                    <div class="email">john.doe@example.com</div>
                    <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="javascript:void(0);"><i class="material-icons">person</i>Profile</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">group</i>Followers</a></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">shopping_cart</i>Sales</a></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">favorite</i>Likes</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">input</i>Sign Out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #User Info -->

            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">MAIN NAVIGATION</li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons"></i>
                            <span>Stok Display</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="{{Route('lihatstok')}}">
                                    <span>Lihat Stok</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{Route('stokmasuk')}}">
                                    <span>Stok Masuk</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{Route('kadaluarsaproduk')}}">
                                    <span>Kadaluarsa Produk</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{Route('retur')}}">
                                    <span>Retur</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{Route('ekspordatapenjualan')}}">
                                    <span>Ekspor Data Penjualan</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{Route('hasilstockopname')}}">
                                    <span>Hasil Stok Opname</span>
                                </a>
                            </li>  
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons"></i>
                            <span>Delivery Barang</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="{{Route('purchaseorder')}}">
                                    <span>Purchase Order</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{Route('penerimaanbarang')}}">
                                    <span>Penerimaan Barang</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons"></i>
                            <span>Pembayaran</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="{{Route('invoice')}}">
                                    <span>Invoice</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{Route('pembayaran')}}">
                                    <span>Pembayaran</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{Route('rekapbayar')}}">
                                    <span>Rekap Bayar</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons"></i>
                            <span>Administrasi Produk</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="{{Route('daftarsuplier')}}">
                                    <span>Daftar Suplier</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{Route('daftarproduk')}}">
                                    <span>Daftar Produk</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons"></i>
                            <span>Data User</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="{{Route('daftaruser')}}">
                                    <span>Daftar User</span>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">
                                    <span>Ganti Password</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{Route('datastafkonter')}}">
                                    <span>Data Staf Konter</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{Route('datastafgudang')}}">
                                    <span>Data Staf Gudang</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    &copy; 2019 <a href="javascript:void(0);">Tim Pengembangan</a>.
                </div>
                <div class="version">
                    <b>Version: </b> 1.0.5
                </div>
            </div>
            <!-- #Footer -->
        </aside>
    </section>