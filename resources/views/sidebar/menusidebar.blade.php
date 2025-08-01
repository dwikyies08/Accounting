<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li class="{{ set_active(['home']) }}"> <a href="{{ route('home') }}"><span>Dashboard</span></a> </li>
                <li class="list-divider"></li>
                {{-- <li class="submenu"> <a href="#"><i class="fas fa-suitcase"></i> <span> Booking </span> <span class="menu-arrow"></span></a>
                    <ul class="submenu_class" style="display: none;">
                        <li><a class="{{ set_active(['form/allbooking']) }}" href="{{ route('form/allbooking') }}"> All Booking </a></li>
                        <li><a class="{{ request()->is('form/booking/edit/*') ? 'active' : '' }}"> Edit Booking </a></li>
                        <li><a class="{{ set_active(['form/booking/add']) }}" href="{{ route('form/booking/add') }}"> Add Booking </a></li>
                    </ul>
                </li>
                <li class="submenu"> <a href="#"><i class="fas fa-user"></i> <span> Customers </span> <span class="menu-arrow"></span></a>
                    <ul class="submenu_class" style="display: none;">
                        <li><a class="{{ set_active(['form/allcustomers/page']) }}" href="{{ route('form/allcustomers/page') }}"> All customers </a></li>
                        <li><a class="{{ request()->is('form/customer/edit/*') ? 'active' : '' }}"> Edit Customer </a></li>
                        <li><a class="{{ set_active(['form/addcustomer/page']) }}" href="{{ route('form/addcustomer/page') }}"> Add Customer </a></li>
                    </ul>
                </li>
                <li class="submenu"> <a href="#"><i class="fas fa-key"></i> <span> Rooms </span> <span class="menu-arrow"></span></a>
                    <ul class="submenu_class" style="display: none;">
                        <li><a class="{{ set_active(['form/allrooms/page']) }}" href="{{ route('form/allrooms/page') }}">All Rooms </a></li>
                        <li><a class="{{ request()->is('form/room/edit/*') ? 'active' : '' }}"> Edit Rooms </a></li>
                        <li><a class="{{ set_active(['form/addroom/page']) }}" href="{{ route('form/addroom/page') }}"> Add Rooms </a></li>
                    </ul>
                </li>
                <li class="submenu"> <a href="#"><i class="fas fa-user"></i> <span> Employees </span> <span class="menu-arrow"></span></a>
                    <ul class="submenu_class" style="display: none;">
                        <li><a  class="{{ set_active(['form/emplyee/list']) }}" href="{{ route('form/emplyee/list') }}">Employees List </a></li>
                        <li><a  class="{{ set_active(['form/employee/add']) }}" href="{{ route('form/employee/add') }}">Employees Add </a></li>
                        <li><a  class="{{ set_active(['form/leaves/page']) }}" href="{{ route('form/leaves/page') }}">Leaves </a></li>
                        <li><a href="holidays.html">Holidays </a></li>
                        <li><a href="attendance.html">Attendance </a></li>
                    </ul>
                </li>
                <li class="submenu"> <a href="#"><i class="far fa-money-bill-alt"></i> <span> Accounts </span> <span class="menu-arrow"></span></a>
                    <ul class="submenu_class" style="display: none;">
                        <li><a href="invoices.html">Invoices </a></li>
                        <li><a href="payments.html">Payments </a></li>
                        <li><a href="expenses.html">Expenses </a></li>
                        <li><a href="taxes.html">Taxes </a></li>
                        <li><a href="provident-fund.html">Provident Fund </a></li>
                    </ul>
                </li>
                <li class="submenu"> <a href="#"><i class="fas fa-book"></i> <span> Payroll </span> <span class="menu-arrow"></span></a>
                    <ul class="submenu_class" style="display: none;">
                        <li><a href="salary.html">Employee Salary </a></li>
                        <li><a href="salary-veiw.html">Payslip </a></li>
                    </ul>
                </li> --}}
                <li class="submenu"> <a href="#"></i> <span> Master Data </span> <span
                            class="menu-arrow"></span></a>
                    <ul class="submenu_class" style="display: none;">
                        <li><a @class(['active' => request()->is('matauang/*')])
                                href="{{ route('matauang/list/page') }}">Mata Uang</a></li>
                        <li><a @class(['active' => request()->is('statuspemasok/*')])
                                href="{{ route('statuspemasok/list/page') }}">Status Pelanggan & Pemasok</a></li>
                        <li><a @class(['active' => request()->is('tipepelanggan/*')])
                                href="{{ route('tipepelanggan/list/page') }}">Tipe Pelanggan</a></li>
                        <li><a @class(['active' => request()->is('pelanggan/*')])
                                href="{{ route('pelanggan/list/page') }}">Pelanggan</a></li>
                        <li><a class="{{ set_active(['pegawai/list/page']) }}"
                                href="{{ route('pegawai/list/page') }}">Pegawai</a></li>
                        <li><a class="{{ set_active(['konsumen/list/page']) }}"
                                href="{{ route('konsumen/list/page') }}">Konsumen</a></li>
                        <li><a @class(['active' => request()->is('pemasok/*')])
                                href="{{ route('pemasok/list/page') }}">Pemasok</a></li>
                        <li><a @class(['active' => request()->is('penjual/*')])
                                href="{{ route('penjual/list/page') }}">Penjual</a></li>
                        <li><a @class(['active' => request()->is('departemen/*')])
                                href="{{ route('departemen/list/page') }}">Departemen</a></li>
                        <li class="submenu"> <a href="#"></i> <span> Proyek </span> <span
                                    class="menu-arrow"></span></a>
                            <ul class="submenu_class" style="display: none;">
                                <li class="submenu"> <a href="#"></i> <span> Proyek Perumahan </span> <span
                                            class="menu-arrow"></span></a>
                                    <ul class="submenu_class" style="display: none;">
                                        <li><a class="{{ set_active(['cluster/list/page']) }}"
                                                href="{{ route('cluster/list/page') }}">Cluster</a></li>
                                        <li><a class="{{ set_active(['proyek/list/page']) }}"
                                                href="{{ route('proyek/list/page') }}">Unit</a></li>
                                        <li><a class="{{ set_active(['proyek/list/page']) }}"
                                                href="{{ route('proyek/list/page') }}">Kapling</a></li>
                                        <li><a class="{{ set_active(['proyek/list/page']) }}"
                                                href="{{ route('proyek/list/page') }}">Fasum</a></li>
                                        <li><a class="{{ set_active(['proyek/list/page']) }}"
                                                href="{{ route('proyek/list/page') }}">Fasos</a></li>
                                    </ul>
                                </li>
                                <li><a class="{{ set_active(['proyek/list/page']) }}"
                                        href="{{ route('proyek/list/page') }}">Unit</a></li>
                                <li><a class="{{ set_active(['proyekumum/list/page']) }}"
                                        href="{{ route('proyekumum/list/page') }}">Proyek UMUM</a></li>
                            </ul>
                        </li>
                        <li><a @class(['active' => request()->is('syarat/*')])
                                href="{{ route('syarat/list/page') }}">Syarat Pembayaran</a></li>
                        <li><a @class(['active' => request()->is('pajak/*')])
                                href="{{ route('pajak/list/page') }}">Pajak</a></li>
                        <li><a @class(['active' => request()->is('jasapengiriman/*')])
                                href="{{ route('jasapengiriman/list/page') }}">Jasa Pengiriman</a></li>
                    </ul>
                </li>
                <li class="submenu"> <a href="#"></i> <span> Modul Utama </span> <span
                            class="menu-arrow"></span></a>
                    <ul class="submenu_class" style="display: none;">
                        <li class="submenu"> <a href="#"></i> <span> Pembelian </span> <span
                                    class="menu-arrow"></span></a>
                            <ul class="submenu_class" style="display: none;">
                                <li><a class="{{ set_active(['pembelian/permintaan/list/page']) }}"
                                        href="{{ route('pembelian/permintaan/list/page') }}">Permintaan Pembelian</a>
                                </li>
                            </ul>
                        </li>
                        <li class="submenu"> <a href="#"></i> <span> Penjualan </span> <span
                                    class="menu-arrow"></span></a>
                            <ul class="submenu_class" style="display: none;">
                                <li><a class="{{ set_active(['penjualan.penawaran_penjualan.index'], 1) }}"
                                        href="{{ route('penjualan.penawaran_penjualan.index') }}">Penawaran Penjualan</a></li>
                                <li><a class="{{ set_active(['penjualan.pesanan_penjualan.index'], 1) }}"
                                        href="{{ route('penjualan.pesanan_penjualan.index') }}">Pesanan Penjualan</a></li>
                                <li><a class="{{ set_active(['penjualan.pengiriman_penjualan.index'], 1) }}"
                                        href="{{ route('penjualan.pengiriman_penjualan.index') }}">Pengiriman Penjualan</a></li>
                                <li><a class="{{ set_active(['penjualan.faktur_penjualan.index'], 1) }}"
                                        href="{{ route('penjualan.faktur_penjualan.index') }}">Faktur Penjualan</a></li>
                                <li><a class="{{ set_active(['penjualan.faktur_penagihan.index'], 1) }}"
                                        href="{{ route('penjualan.faktur_penagihan.index') }}">Faktur Penagihan</a></li>
                                <li><a class="{{ set_active(['penjualan.penerimaan_penjualan.index'], 1) }}"
                                        href="{{ route('penjualan.penerimaan_penjualan.index') }}">Penerimaan Penjualan</a></li>
                                <li><a class="{{ set_active(['penjualan.retur_penjualan.index'], 1) }}"
                                        href="{{ route('penjualan.retur_penjualan.index') }}">Retur Penjualan</a></li>
                            </ul>
                        </li>
                        <li class="submenu"> <a href="#"></i> <span> Persediaan </span> <span
                                    class="menu-arrow"></span></a>
                            <ul class="submenu_class" style="display: none;">
                                <li><a @class(['active' => request()->is('satuan/*')])
                                        href="{{ route('satuan/list/page') }}">Satuan</a></li>
                                <li><a @class(['active' => request()->is('gudang/*')])
                                        href="{{ route('gudang/list/page') }}">Gudang</a></li>
                                <li><a @class(['active' => request()->is('kategoribarang/*')])
                                        href="{{ route('kategoribarang/list/page') }}">Kategori Barang</a></li>
                                <li><a class="{{ set_active(['barang/list/page']) }}"
                                        href="{{ route('barang/list/page') }}">Barang</a></li>
                                <li><a class="{{ set_active(['penyesuaian/list/page']) }}"
                                        href="{{ route('penyesuaian/list/page') }}">Penyesuaian Barang</a></li>
                                <li><a class="{{ set_active(['pindahbarang/list/page']) }}"
                                        href="{{ route('pindahbarang/list/page') }}">Pindah Barang</a></li>
                            </ul>
                        </li>
                        <li class="submenu"> <a href="#"></i> <span> Aktiva Tetap </span> <span
                                    class="menu-arrow"></span></a>
                            <ul class="submenu_class" style="display: none;">
                                <li><a href="{{ route('satuan/list/page') }}">Aktiva Tetap</a></li>
                                <li><a href="{{ route('gudang/list/page') }}">Tipe Aktiva Tetap Pajak</a></li>
                                <li><a href="{{ route('kategoribarang/list/page') }}">Tipe Aktiva Tetap</a></li>
                            </ul>
                        </li>
                        {{-- <li><a class="{{ set_active(['pegawai/list/page']) }}" href="{{ route('pegawai/list/page') }}">Pegawai</a></li> --}}
                        {{-- <li><a class="{{ set_active(['matauang/list/page']) }}" href="{{ route('matauang/list/page') }}">Mata Uang</a></li>
                        <li><a class="{{ set_active(['statuspemasok/list/page']) }}" href="{{ route('statuspemasok/list/page') }}">Status Pelanggan & Pemasok</a></li>
                        <li><a class="{{ set_active(['tipepelanggan/list/page']) }}" href="{{ route('tipepelanggan/list/page') }}">Tipe Pelanggan</a></li>
                        <li><a class="{{ set_active(['pelanggan/list/page']) }}" href="{{ route('pelanggan/list/page') }}">Pelanggan</a></li>
                        <li><a class="{{ set_active(['pemasok/list/page']) }}" href="{{ route('pemasok/list/page') }}">Pemasok</a></li>
                        <li><a class="{{ set_active(['penjual/list/page']) }}" href="{{ route('penjual/list/page') }}">Penjual</a></li>
                        <li><a class="{{ set_active(['departemen/list/page']) }}" href="{{ route('departemen/list/page') }}">Departemen</a></li>
                        <li><a class="{{ set_active(['proyek/list/page']) }}" href="{{ route('proyek/list/page') }}">Proyek</a></li>
                        <li><a class="{{ set_active(['syarat/list/page']) }}" href="{{ route('syarat/list/page') }}">Syarat Pembayaran</a></li>
                        <li><a class="{{ set_active(['pajak/list/page']) }}" href="{{ route('pajak/list/page') }}">Pajak</a></li> --}}
                    </ul>
                </li>
                <li class="submenu"> <a href="#"></i> <span> Buku Besar </span> <span
                            class="menu-arrow"></span></a>
                    <ul class="submenu_class" style="display: none;">
                        <li><a @class(['active' => request()->is('akun/*')])
                                href="{{ route('akun/list/page') }}">Daftar Akun</a></li>
                        <li><a @class(['active' => request()->is('jurnal/*')])
                                href="{{ route('jurnal/list/page') }}">Jurnal Umum</a></li>
                        <li><a @class(['active' => request()->is('anggaranakun/*')])
                                href="{{ route('anggaranakun/list/page') }}">Anggaran Akun</a></li>
                        <li><a @class(['active' => request()->is('pembayaranlainnya/*')])
                                href="{{ route('pembayaranlainnya/list/page') }}">Pembayaran Lainnya</a></li>
                        <li><a @class(['active' => request()->is('penerimaanlainnya/*')])
                                href="{{ route('penerimaanlainnya/list/page') }}">Penerimaan Lainnya</a></li>
                        {{-- <li><a class="{{ set_active(['gudang/list/page']) }}" href="{{ route('gudang/list/page') }}">Gudang</a></li>
                        <li><a class="{{ set_active(['kategoribarang/list/page']) }}" href="{{ route('kategoribarang/list/page') }}">Kategori Barang</a></li> --}}
                        {{-- <li><a class="{{ set_active(['pegawai/list/page']) }}" href="{{ route('pegawai/list/page') }}">Pegawai</a></li> --}}
                        {{-- <li><a class="{{ set_active(['matauang/list/page']) }}" href="{{ route('matauang/list/page') }}">Mata Uang</a></li>
                        <li><a class="{{ set_active(['statuspemasok/list/page']) }}" href="{{ route('statuspemasok/list/page') }}">Status Pelanggan & Pemasok</a></li>
                        <li><a class="{{ set_active(['tipepelanggan/list/page']) }}" href="{{ route('tipepelanggan/list/page') }}">Tipe Pelanggan</a></li>
                        <li><a class="{{ set_active(['pelanggan/list/page']) }}" href="{{ route('pelanggan/list/page') }}">Pelanggan</a></li>
                        <li><a class="{{ set_active(['pemasok/list/page']) }}" href="{{ route('pemasok/list/page') }}">Pemasok</a></li>
                        <li><a class="{{ set_active(['penjual/list/page']) }}" href="{{ route('penjual/list/page') }}">Penjual</a></li>
                        <li><a class="{{ set_active(['departemen/list/page']) }}" href="{{ route('departemen/list/page') }}">Departemen</a></li>
                        <li><a class="{{ set_active(['proyek/list/page']) }}" href="{{ route('proyek/list/page') }}">Proyek</a></li>
                        <li><a class="{{ set_active(['syarat/list/page']) }}" href="{{ route('syarat/list/page') }}">Syarat Pembayaran</a></li>
                        <li><a class="{{ set_active(['pajak/list/page']) }}" href="{{ route('pajak/list/page') }}">Pajak</a></li> --}}
                    </ul>
                </li>
                <li class="submenu"> <a href="#"></i> <span> Laporan </span> <span
                            class="menu-arrow"></span></a>
                    <ul class="submenu_class">
                        <li>
                            <a @class(['active' => request()->is('laporan*')]) href="{{ route('laporan') }}">
                                Semua Laporan
                            </a>
                        </li>
                        {{-- {{-- <li><a class="{{ set_active(['gudang/list/page']) }}" href="{{ route('gudang/list/page') }}">Gudang</a></li> --}}
                        {{-- <li><a class="{{ set_active(['pegawai/list/page']) }}" href="{{ route('pegawai/list/page') }}">Pegawai</a></li> --}}
                        {{-- <li><a class="{{ set_active(['matauang/list/page']) }}" href="{{ route('matauang/list/page') }}">Mata Uang</a></li>
                        <li><a class="{{ set_active(['statuspemasok/list/page']) }}" href="{{ route('statuspemasok/list/page') }}">Status Pelanggan & Pemasok</a></li>
                        <li><a class="{{ set_active(['tipepelanggan/list/page']) }}" href="{{ route('tipepelanggan/list/page') }}">Tipe Pelanggan</a></li>
                        <li><a class="{{ set_active(['pelanggan/list/page']) }}" href="{{ route('pelanggan/list/page') }}">Pelanggan</a></li>
                        <li><a class="{{ set_active(['pemasok/list/page']) }}" href="{{ route('pemasok/list/page') }}">Pemasok</a></li>
                        <li><a class="{{ set_active(['penjual/list/page']) }}" href="{{ route('penjual/list/page') }}">Penjual</a></li>
                        <li><a class="{{ set_active(['departemen/list/page']) }}" href="{{ route('departemen/list/page') }}">Departemen</a></li>
                        <li><a class="{{ set_active(['proyek/list/page']) }}" href="{{ route('proyek/list/page') }}">Proyek</a></li>
                        <li><a class="{{ set_active(['syarat/list/page']) }}" href="{{ route('syarat/list/page') }}">Syarat Pembayaran</a></li>
                        <li><a class="{{ set_active(['pajak/list/page']) }}" href="{{ route('pajak/list/page') }}">Pajak</a></li> --}}
                    </ul>
                </li>
                <li class="submenu">
                    <a href="#">
                        <span> Pengguna </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="submenu_class" style="display: none;">
                        {{-- <li><a class="{{ set_active(['users/add/new']) }}" href="{{ route('users/add/new') }}">Add User</a></li> --}}
                        <li><a class="{{ set_active(['users/list/page']) }}"
                                href="{{ route('users/list/page') }}">Data Pengguna</a></li>
                        {{-- <li><a class="{{ request()->is('users/add/edit/*') ? 'active' : '' }}"> Edit User </a></li> --}}
                    </ul>
                </li>
            </ul>
        </div>
        {{-- <div id="sidebar-menu" class="sidebar-menu">
            <ul> --}}
        {{-- <li class="{{ set_active(['home_2']) }}"> <a href="{{ route('/home_2') }}"><span>Dashboard 2</span></a> </li> --}}
        {{-- <li class="list-divider"></li> --}}
        {{-- <li class="submenu"> <a href="#"><i class="fas fa-suitcase"></i> <span> Booking </span> <span class="menu-arrow"></span></a>
                    <ul class="submenu_class" style="display: none;">
                        <li><a class="{{ set_active(['form/allbooking']) }}" href="{{ route('form/allbooking') }}"> All Booking </a></li>
                        <li><a class="{{ request()->is('form/booking/edit/*') ? 'active' : '' }}"> Edit Booking </a></li>
                        <li><a class="{{ set_active(['form/booking/add']) }}" href="{{ route('form/booking/add') }}"> Add Booking </a></li>
                    </ul>
                </li>
                <li class="submenu"> <a href="#"><i class="fas fa-user"></i> <span> Customers </span> <span class="menu-arrow"></span></a>
                    <ul class="submenu_class" style="display: none;">
                        <li><a class="{{ set_active(['form/allcustomers/page']) }}" href="{{ route('form/allcustomers/page') }}"> All customers </a></li>
                        <li><a class="{{ request()->is('form/customer/edit/*') ? 'active' : '' }}"> Edit Customer </a></li>
                        <li><a class="{{ set_active(['form/addcustomer/page']) }}" href="{{ route('form/addcustomer/page') }}"> Add Customer </a></li>
                    </ul>
                </li>
                <li class="submenu"> <a href="#"><i class="fas fa-key"></i> <span> Rooms </span> <span class="menu-arrow"></span></a>
                    <ul class="submenu_class" style="display: none;">
                        <li><a class="{{ set_active(['form/allrooms/page']) }}" href="{{ route('form/allrooms/page') }}">All Rooms </a></li>
                        <li><a class="{{ request()->is('form/room/edit/*') ? 'active' : '' }}"> Edit Rooms </a></li>
                        <li><a class="{{ set_active(['form/addroom/page']) }}" href="{{ route('form/addroom/page') }}"> Add Rooms </a></li>
                    </ul>
                </li>
                <li class="submenu"> <a href="#"><i class="fas fa-user"></i> <span> Employees </span> <span class="menu-arrow"></span></a>
                    <ul class="submenu_class" style="display: none;">
                        <li><a  class="{{ set_active(['form/emplyee/list']) }}" href="{{ route('form/emplyee/list') }}">Employees List </a></li>
                        <li><a  class="{{ set_active(['form/employee/add']) }}" href="{{ route('form/employee/add') }}">Employees Add </a></li>
                        <li><a  class="{{ set_active(['form/leaves/page']) }}" href="{{ route('form/leaves/page') }}">Leaves </a></li>
                        <li><a href="holidays.html">Holidays </a></li>
                        <li><a href="attendance.html">Attendance </a></li>
                    </ul>
                </li>
                <li class="submenu"> <a href="#"><i class="far fa-money-bill-alt"></i> <span> Accounts </span> <span class="menu-arrow"></span></a>
                    <ul class="submenu_class" style="display: none;">
                        <li><a href="invoices.html">Invoices </a></li>
                        <li><a href="payments.html">Payments </a></li>
                        <li><a href="expenses.html">Expenses </a></li>
                        <li><a href="taxes.html">Taxes </a></li>
                        <li><a href="provident-fund.html">Provident Fund </a></li>
                    </ul>
                </li>
                <li class="submenu"> <a href="#"><i class="fas fa-book"></i> <span> Payroll </span> <span class="menu-arrow"></span></a>
                    <ul class="submenu_class" style="display: none;">
                        <li><a href="salary.html">Employee Salary </a></li>
                        <li><a href="salary-veiw.html">Payslip </a></li>
                    </ul>
                </li> --}}
        {{-- <li class="submenu"> <a href="#"></i> <span> HRM </span> <span class="menu-arrow"></span></a>
                    <ul class="submenu_class" style="display: none;">
                        <li><a class="{{ set_active(['matauang/list/page']) }}" href="{{ route('matauang/list/page') }}">Mata Uang</a></li>
                        <li><a class="{{ set_active(['statuspemasok/list/page']) }}" href="{{ route('statuspemasok/list/page') }}">Status Pelanggan & Pemasok</a></li>
                        <li><a class="{{ set_active(['tipepelanggan/list/page']) }}" href="{{ route('tipepelanggan/list/page') }}">Tipe Pelanggan</a></li>
                        <li><a class="{{ set_active(['pelanggan/list/page']) }}" href="{{ route('pelanggan/list/page') }}">Pelanggan</a></li>
                        <li><a class="{{ set_active(['pemasok/list/page']) }}" href="{{ route('pemasok/list/page') }}">Pemasok</a></li>
                        <li><a class="{{ set_active(['penjual/list/page']) }}" href="{{ route('penjual/list/page') }}">Penjual</a></li>
                        <li><a class="{{ set_active(['departemen/list/page']) }}" href="{{ route('departemen/list/page') }}">Departemen</a></li>
                        <li><a class="{{ set_active(['proyek/list/page']) }}" href="{{ route('proyek/list/page') }}">Proyek</a></li>
                        <li><a class="{{ set_active(['syarat/list/page']) }}" href="{{ route('syarat/list/page') }}">Syarat Pembayaran</a></li>
                        <li><a class="{{ set_active(['pajak/list/page']) }}" href="{{ route('pajak/list/page') }}">Pajak</a></li>
                    </ul>
                </li> --}}
        {{-- <li class="submenu"> <a href="#"></i> <span> Marketing </span> <span class="menu-arrow"></span></a>
                    <ul class="submenu_class" style="display: none;">
                        <li class="submenu"> <a href="#"></i> <span> Perumahan </span> <span class="menu-arrow"></span></a>
                            <ul class="submenu_class" style="display: none;">
                                <li><a class="{{ set_active(['cluster/list/page']) }}" href="{{ route('cluster/list/page') }}">Kluster/Perumahan</a></li>
                            </ul>
                        </li>
                        <li><a class="{{ set_active(['pegawai/list/page']) }}" href="{{ route('pegawai/list/page') }}">Pegawai</a></li>
                        <li><a class="{{ set_active(['matauang/list/page']) }}" href="{{ route('matauang/list/page') }}">Mata Uang</a></li>
                        <li><a class="{{ set_active(['statuspemasok/list/page']) }}" href="{{ route('statuspemasok/list/page') }}">Status Pelanggan & Pemasok</a></li>
                        <li><a class="{{ set_active(['tipepelanggan/list/page']) }}" href="{{ route('tipepelanggan/list/page') }}">Tipe Pelanggan</a></li>
                        <li><a class="{{ set_active(['pelanggan/list/page']) }}" href="{{ route('pelanggan/list/page') }}">Pelanggan</a></li>
                        <li><a class="{{ set_active(['pemasok/list/page']) }}" href="{{ route('pemasok/list/page') }}">Pemasok</a></li>
                        <li><a class="{{ set_active(['penjual/list/page']) }}" href="{{ route('penjual/list/page') }}">Penjual</a></li>
                        <li><a class="{{ set_active(['departemen/list/page']) }}" href="{{ route('departemen/list/page') }}">Departemen</a></li>
                        <li><a class="{{ set_active(['proyek/list/page']) }}" href="{{ route('proyek/list/page') }}">Proyek</a></li>
                        <li><a class="{{ set_active(['syarat/list/page']) }}" href="{{ route('syarat/list/page') }}">Syarat Pembayaran</a></li>
                        <li><a class="{{ set_active(['pajak/list/page']) }}" href="{{ route('pajak/list/page') }}">Pajak</a></li>
                    </ul>
                </li> --}}
        {{-- </ul>
        </div> --}}
    </div>
</div>
