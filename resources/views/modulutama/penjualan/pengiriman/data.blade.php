<<<<<<< HEAD
<x-layout.main>
    <x-slot:title>
        {{ ucfirst($title) }} Penjualan
    </x-slot>
    <div class="page-wrapper position-relative" style="padding-bottom: 80px;"> {{-- padding bawah agar konten tidak tertutup footer --}}
=======
@extends('layouts.master')
@section('content')
    <div class="page-wrapper">
>>>>>>> 8aec55e85e9d6a9b53b74c0e47ea6990ac3bf94a
        <div class="content container-fluid">
            <div class="page-header">
                <div class="row align-items-center">
                    <div class="col">
                        <div class="mt-5">
<<<<<<< HEAD
                            <h4 class="card-title float-left mt-2">Data {{ ucfirst($title) }} Penjualan</h4>
=======
                            <h4 class="card-title float-left mt-2">Data Pengiriman Penjualan</h4>
>>>>>>> 8aec55e85e9d6a9b53b74c0e47ea6990ac3bf94a
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
<<<<<<< HEAD
                <div id="filterBox" class="col-md-2" style="display: block;">
                    <x-form.filter-form>
                        <x-slot:submodul>{{ ucfirst($title) }}</x-slot:submodul>
                    </x-form.filter-form>
                </div>
                <div id="tableContainer" class="col-md-10" style="transition: width 0.3s;">
                    <div class="table-responsive" style="width: 100%;">
                        <table class="table table-striped table-bordered table-hover table-center mb-0"
                            id="PermintaanList">
                            <thead class="thead-dark">
                                <tr>
                                    <th><input type="checkbox" id="select_all"></th>
                                    <th>No</th>
                                    <th hidden>ID</th>
                                    <th>No. Pengiriman</th>
                                    <th>Tanggal Pengiriman</th>
                                    <th>No. PO</th>
                                    <th>Status</th>
                                    <th>No. Pelanggan</th>
                                    <th>Nama Pelanggan</th>
                                    <th>Deskripsi</th>
                                    <th>Pengguna</th>
                                    <th>Cabang</th>
                                    <th>No. Persetujuan</th>
                                    <th>Catatan Pemeriksaan</th>
                                    <th>Tindak Lanjut</th>
                                    <th>Disetujui</th>
                                    <th>Urgensi</th>
                                </tr>
                            </thead>
                        </table>

                    </div>
                </div>

            </div>
        </div>
        <x-form.modul.penjualan.footer-action>
            <x-slot:routeCreate>
                {{ $createRoute }}
            </x-slot:routeCreate>
        </x-form.modul.penjualan.footer-action>
        <x-slot:scripts>

            <link rel="stylesheet"
                href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
            <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
            <script src="https://cdn.datatables.net/buttons/2.4.1/js/dataTables.buttons.min.js"></script>
            <script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.html5.min.js"></script>
            <script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.print.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>
            <script>
                $(document).ready(function() {
                    var table = $('#PermintaanList').DataTable({
                        processing: true,
                        serverSide: true,
                        ordering: true,
                        searching: false,
                        ajax: {
                            url: '{{ $fetchRoute }}',
                            data: function(d) {
                                d.quoteno = $('#keyword').val();
                                d.description = $('input[name="description"]').val();
                                d.pelanggan_id = $('input[name="pelanggan_id"]').val();
                                d.matauang_id = $('input[name="matauang_id"]').val();
                                d.use_date = $('input[name="use_date"]').is(':checked') ? 1 : 0;
                                d.date_from = $('input[name="date_from"]').val();
                                d.date_to = $('input[name="date_to"]').val();

                                d.status = [];
                                $('input[name="status[]"]:checked').each(function() {
                                    d.status.push($(this).val());
                                });

                                d.audit_notes = [];
                                $('input[name="audit_notes[]"]:checked').each(function() {
                                    d.audit_notes.push($(this).val());
                                });

                                // Jika kamu punya Easy Branch aktif, tinggal uncomment:
                                // d.easy_branch = $('select[name="easy_branch"]').val();
                            }

                        },
                        dom: "<'row'<'col-sm-12'B>>" +
                            "<'row'<'col-sm-12 mt-3'tr>>" +
                            "<'row'<'col-sm-12 col-md-6 mt-2'l><'col-sm-12 col-md-6'p>>",
                        buttons: [{
                                extend: 'copyHtml5',
                                text: '<i class="fa fa-copy"></i> <span class="btn_text_align font-weight-bold">Copy</span>',
                                className: 'btn btn-primary veiwbutton',
                                title: 'Daftar Permintaan Pembelian',
                                exportOptions: {
                                    columns: ':not(:first-child):not(:nth-child(2))'
                                }
                            },
                            {
                                extend: 'excelHtml5',
                                text: '<i class="fa fa-file-excel"></i> <span class="btn_text_align font-weight-bold">Excel</span>',
                                className: 'btn btn-primary veiwbutton',
                                titleAttr: 'Export to Excel',
                                title: 'Daftar Permintaan Pembelian',
                                exportOptions: {
                                    columns: ':not(:first-child):not(:nth-child(2))'
                                }
                            },
                            {
                                extend: 'pdfHtml5',
                                text: '<i class="fa fa-file-pdf"></i> <span class="btn_text_align font-weight-bold">PDF</span>',
                                className: 'btn btn-primary veiwbutton',
                                title: 'Daftar Permintaan Pembelian',
                                exportOptions: {
                                    columns: ':not(:first-child):not(:nth-child(2))'
                                }
                            },
                            {
                                extend: 'print',
                                text: '<i class="fa fa-print"></i> <span class="btn_text_align font-weight-bold">Print</span>',
                                className: 'btn btn-primary veiwbutton',
                                title: 'Daftar Permintaan Pembelian',
                                exportOptions: {
                                    columns: ':not(:first-child):not(:nth-child(2))'
                                }
                            },
                        ],
                        columns: [{
                                data: 'checkbox',
                                orderable: false,
                                searchable: false
                            },
                            {
                                data: 'no',
                                orderable: false,
                                searchable: false
                            },
                            {
                                data: 'id',
                                visible: false
                            },

                            {
                                data: 'no_pesanan'
                            },
                            {
                                data: 'tgl_pesanan'
                            },
                            {
                                data: 'no_pelanggan'
                            },
                            {
                                data: 'nama_pelanggan'
                            },
                            {
                                data: 'status'
                            },
                            {
                                data: 'no_po'
                            },

                            {
                                data: 'nilai_diskon'
                            },
                            {
                                data: 'total_pajak'
                            },
                            {
                                data: 'nilai_pajak_1'
                            },
                            {
                                data: 'nilai_pajak_2'
                            },
                            {
                                data: 'nilai_pesanan'
                            },
                            {
                                data: 'uang_muka'
                            },
                            {
                                data: 'uang_muka_terpakai'
                            },
                            {
                                data: 'deskripsi'
                            },

                            {
                                data: 'pengguna'
                            },
                            {
                                data: 'cabang'
                            },
                            {
                                data: 'no_persetujuan'
                            },

                            {
                                data: 'catatan_pemeriksaan',
                                render: data => data ? '<input type="checkbox" checked>' :
                                    '<input type="checkbox">'
                            },
                            {
                                data: 'tindak_lanjut',
                                render: data => data ? '<input type="checkbox" checked>' :
                                    '<input type="checkbox">'
                            },
                            {
                                data: 'disetujui',
                                render: data => data ? '<input type="checkbox" checked>' :
                                    '<input type="checkbox">'
                            },
                            {
                                data: 'urgensi',
                                render: data => data
                            }
                        ]
                    });

                    // Untuk perubahan lainnya
                    $('#filterBox').on('change', 'input, select', function() {
                        $('#PermintaanList').DataTable().draw();
                    });

                    // $('form').on('submit', function(e) {
                    //     e.preventDefault();
                    //     table.draw();
                    // });


                    $('#select_all').on('click', function() {
                        $('.permintaan_checkbox').prop('checked', this.checked);
                    });

                    $('#PermintaanList tbody').on('mouseenter', 'tr', function() {
                        $(this).css('cursor', 'pointer');
                    });

                    $('#deleteSelected').on('click', function() {
                        var selectedIds = $('.permintaan_checkbox:checked').map(function() {
                            return $(this).val();
                        }).get();

                        if (selectedIds.length > 0) {
                            if (confirm('Apakah yakin ingin menghapus data yang dipilih?')) {
                                $.ajax({
                                    url: "{{ route('pembelian/permintaan/delete') }}",
                                    type: "POST",
                                    data: {
                                        ids: selectedIds,
                                        _token: "{{ csrf_token() }}"
                                    },
                                    success: function(response) {
                                        location.reload();
                                    },
                                });
                            }
                        } else {
                            alert('Pilih setidaknya satu data untuk dihapus!');
                        }
                    });

                    $('#PermintaanList tbody').on('click', 'tr', function(e) {
                        if ($(e.target).is('input[type="checkbox"], label')) return;
                        const data = $('#PermintaanList').DataTable().row(this).data();
                        if (data) {
                            const url = "{{ route('penjualan.penawaran.edit', ['id' => '__ID__']) }}".replace(
                                '__ID__', data.id);
                            window.location.href = url;
                        }
                    });
                });
            </script>
            <script>
                document.addEventListener("DOMContentLoaded", function() {
                    const filterBox = document.getElementById("filterBox");
                    const tableContainer = document.getElementById("tableContainer");
                    const toggleText = document.getElementById("filterToggleText");
                    const filterStatus = localStorage.getItem("filterStatus");

                    if (filterStatus === "closed") {
                        filterBox.style.display = "none";
                        tableContainer.className = "col-md-12";
                        toggleText.textContent = "Tampilkan Filter";
                    } else {
                        filterBox.style.display = "block";
                        tableContainer.className = "col-md-10";
                        toggleText.textContent = "Sembunyikan Filter";
                    }
                });

                function toggleFilter() {
                    const filterBox = document.getElementById("filterBox");
                    const tableContainer = document.getElementById("tableContainer");
                    const toggleText = document.getElementById("filterToggleText");
                    const isVisible = filterBox.style.display === "block";

                    if (isVisible) {
                        filterBox.style.display = "none";
                        tableContainer.className = "col-md-12";
                        toggleText.textContent = "Tampilkan Filter";
                        localStorage.setItem("filterStatus", "closed");
                    } else {
                        filterBox.style.display = "block";
                        tableContainer.className = "col-md-10";
                        toggleText.textContent = "Sembunyikan Filter";
                        localStorage.setItem("filterStatus", "open");
                    }
                }
            </script>
        </x-slot:scripts>
</x-layout.main>
=======
                <div id="filterBox" class="col-md-4" style="{{ request('filter') == '1' ? '' : 'display: none;' }}">
                    <div class="card rounded-default p-3 bg-dark text-white">
                        <form method="GET" action="{{ route('pembelian/permintaan/list/page') }}">
                            <input type="hidden" name="filter" value="1">
                            <div class="form-group">
                                <label>Pencarian</label>
                                <input type="text" name="no_barang" class="form-control" onchange="this.form.submit()"
                                    placeholder="Cari berdasarkan ID" value="{{ request('no_barang') }}">
                            </div>
                            <div class="form-group">
                                <input type="text" name="nama_barang" class="form-control" onchange="this.form.submit()"
                                    placeholder="Nama Barang" value="{{ request('nama_barang') }}">
                            </div>
                            <div class="form-group">
                                <label>Dihentikan</label><br>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" onchange="this.form.submit()"
                                        name="dihentikan" value=""
                                        {{ request('dihentikan') === null ? 'checked' : '' }}>
                                    <label class="form-check-label">Semua</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" onchange="this.form.submit()"
                                        name="dihentikan" value="1"
                                        {{ request('dihentikan') === '1' ? 'checked' : '' }}>
                                    <label class="form-check-label">Ya</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" onchange="this.form.submit()"
                                        name="dihentikan" value="0"
                                        {{ request('dihentikan') === '0' ? 'checked' : '' }}>
                                    <label class="form-check-label">Tidak</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Tipe Barang</label>
                                <select class="form-control" name="tipe_barang" onchange="this.form.submit()">
                                    <option value="" selected></option>
                                    @foreach ($tipe_barang as $items)
                                        <option value="{{ $items->nama }}"
                                            {{ request('tipe_barang') == $items->nama ? 'selected' : '' }}>
                                            {{ $items->nama }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Kategori Barang</label>
                                <select class="form-control" name="kategori_barang" onchange="this.form.submit()">
                                    <option value="" selected> Tipe Pelanggan </option>
                                    @foreach ($kategori_barang as $items)
                                        <option value="{{ $items->nama }}"
                                            {{ request('kategori_barang') == $items->nama ? 'selected' : '' }}>
                                            {{ $items->nama }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Tipe Persediaan</label>
                                <select class="form-control" name="tipe_persediaan" onchange="this.form.submit()">
                                    <option value="" selected> Tipe Pelanggan </option>
                                    @foreach ($tipe_persediaan as $items)
                                        <option value="{{ $items->nama }}"
                                            {{ request('tipe_persediaan') == $items->nama ? 'selected' : '' }}>
                                            {{ $items->nama }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="card card-table">
                        <div class="card-body booking_card">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover table-center mb-0"
                                    id="PermintaanList">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th><input type="checkbox" id="select_all"></th>
                                            <th>No</th>
                                            <th hidden>ID</th>
                                            <th>No. Pengiriman</th>
                                            <th>Tanggal Pengiriman</th>
                                            <th>No. PO</th>
                                            <th>Status</th>
                                            <th>No. Pelanggan</th>
                                            <th>Nama Pelanggan</th>
                                            <th>Deskripsi</th>
                                            <th>Pengguna</th>
                                            <th>Cabang</th>
                                            <th>No. Persetujuan</th>
                                            <th>Catatan Pemeriksaan</th>
                                            <th>Tindak Lanjut</th>
                                            <th>Disetujui</th>
                                            <th>Urgensi</th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="page-header">
                        <div class="mb-15 row">
                            <div class="col">
                                <a href="{{ route('penjualan.penawaran.create') }}" class="btn btn-primary"><i
                                        class="fas fa-plus mr-2"></i>Tambah</a>
                                <button class="btn btn-primary float-left veiwbutton ml-3" onclick="toggleFilter()"><i
                                        class="fas fa-filter mr-2"></i>Filter</button>
                                <button id="deleteSelected" class="btn btn-primary float-left veiwbutton ml-3"><i
                                        class="fas fa-trash mr-2"></i>Hapus</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@section('script')
    <script src="https://cdn.datatables.net/buttons/2.4.1/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.print.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            var table = $('#PermintaanList').DataTable({
                processing: true,
                serverSide: true,
                ordering: true,
                searching: false,
                ajax: {
                    url: '{{ $routeFetch }}',
                    // data: function(d) {
                    //     d.nama_barang = $('input[name=nama_barang]').val(),
                    //     d.no_barang = $('input[name=no_barang]').val(),
                    //     d.kategori_barang = $('select[name=kategori_barang]').val(),
                    //     d.tipe_barang = $('select[name=tipe_barang]').val(),
                    //     d.tipe_persediaan = $('select[name=tipe_persediaan]').val(),
                    //     d.dihentikan = $('input[name=dihentikan]:checked').val();
                    // }
                },
                dom: "<'row'<'col-sm-12'B>>" +
                    "<'row'<'col-sm-12 mt-3'tr>>" +
                    "<'row'<'col-sm-12 col-md-6 mt-2'l><'col-sm-12 col-md-6'p>>",
                buttons: [{
                        extend: 'copyHtml5',
                        text: '<i class="fa fa-copy"></i> <span class="btn_text_align font-weight-bold">Copy</span>',
                        className: 'btn btn-primary veiwbutton',
                        title: 'Daftar Permintaan Pembelian',
                        exportOptions: {
                            columns: ':not(:first-child):not(:nth-child(2))'
                        }
                    },
                    {
                        extend: 'excelHtml5',
                        text: '<i class="fa fa-file-excel"></i> <span class="btn_text_align font-weight-bold">Excel</span>',
                        className: 'btn btn-primary veiwbutton',
                        titleAttr: 'Export to Excel',
                        title: 'Daftar Permintaan Pembelian',
                        exportOptions: {
                            columns: ':not(:first-child):not(:nth-child(2))'
                        }
                    },
                    {
                        extend: 'pdfHtml5',
                        text: '<i class="fa fa-file-pdf"></i> <span class="btn_text_align font-weight-bold">PDF</span>',
                        className: 'btn btn-primary veiwbutton',
                        title: 'Daftar Permintaan Pembelian',
                        exportOptions: {
                            columns: ':not(:first-child):not(:nth-child(2))'
                        }
                    },
                    {
                        extend: 'print',
                        text: '<i class="fa fa-print"></i> <span class="btn_text_align font-weight-bold">Print</span>',
                        className: 'btn btn-primary veiwbutton',
                        title: 'Daftar Permintaan Pembelian',
                        exportOptions: {
                            columns: ':not(:first-child):not(:nth-child(2))'
                        }
                    },
                ],
                columns: [{
                        data: 'checkbox',
                        orderable: false,
                        searchable: false
                    },
                    {
                        data: 'no',
                        orderable: false,
                        searchable: false
                    },
                    {
                        data: 'id',
                        visible: false
                    },

                    {
                        data: 'no_pengiriman'
                    },
                    {
                        data: 'tgl_pengiriman'
                    },
                    {
                        data: 'no_po'
                    },
                    {
                        data: 'status'
                    },
                    {
                        data: 'no_pelanggan'
                    },
                    {
                        data: 'nama_pelanggan'
                    },
                    {
                        data: 'deskripsi'
                    },
                    {
                        data: 'pengguna'
                    },
                    {
                        data: 'cabang'
                    },
                    {
                        data: 'no_persetujuan'
                    },

                    {
                        data: 'catatan_pemeriksaan',
                        render: data => data ? '<input type="checkbox" checked>' :
                            '<input type="checkbox">'
                    },
                    {
                        data: 'tindak_lanjut',
                        render: data => data ? '<input type="checkbox" checked>' :
                            '<input type="checkbox">'
                    },
                    {
                        data: 'disetujui',
                        render: data => data ? '<input type="checkbox" checked>' :
                            '<input type="checkbox">'
                    },
                    {
                        data: 'urgensi',
                        render: data => data ?? '-'
                    }
                ]
            });

            $('form').on('submit', function(e) {
                e.preventDefault();
                table.draw();
            });

            $('#select_all').on('click', function() {
                $('.permintaan_checkbox').prop('checked', this.checked);
            });

            $('#PermintaanList tbody').on('mouseenter', 'tr', function() {
                $(this).css('cursor', 'pointer');
            });

            $('#deleteSelected').on('click', function() {
                var selectedIds = $('.permintaan_checkbox:checked').map(function() {
                    return $(this).val();
                }).get();

                if (selectedIds.length > 0) {
                    if (confirm('Apakah yakin ingin menghapus data yang dipilih?')) {
                        $.ajax({
                            url: "{{ route('pembelian/permintaan/delete') }}",
                            type: "POST",
                            data: {
                                ids: selectedIds,
                                _token: "{{ csrf_token() }}"
                            },
                            success: function(response) {
                                location.reload();
                            },
                        });
                    }
                } else {
                    alert('Pilih setidaknya satu data untuk dihapus!');
                }
            });

            $('#PermintaanList tbody').on('click', 'tr', function(e) {
                if ($(e.target).is('input[type="checkbox"], label')) return;
                const data = $('#PermintaanList').DataTable().row(this).data();
                if (data) {
                    const url = "{{ route('penjualan.penawaran.edit', ['id' => '__ID__']) }}".replace(
                        '__ID__', data.id);
                    window.location.href = url;
                }
            });
        });
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const filterBox = document.getElementById("filterBox");
            const filterStatus = localStorage.getItem("filterStatus");

            if (filterStatus === "open") {
                filterBox.style.display = "block";
            } else {
                filterBox.style.display = "none";
            }
        });

        function toggleFilter() {
            const filterBox = document.getElementById("filterBox");
            const isVisible = filterBox.style.display === "block";

            if (isVisible) {
                filterBox.style.display = "none";
                localStorage.setItem("filterStatus", "closed");
            } else {
                filterBox.style.display = "block";
                localStorage.setItem("filterStatus", "open");
            }
        }
    </script>
@endsection
@endsection
>>>>>>> 8aec55e85e9d6a9b53b74c0e47ea6990ac3bf94a
