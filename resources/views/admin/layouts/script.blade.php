<!-- Panggil SweetAlert2 terlebih dahulu -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    function confirmLogout(event) {
        event.preventDefault();

        Swal.fire({
            title: 'Yakin ingin keluar?',
            text: "Sesi kamu akan diakhiri.",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#6c757d',
            confirmButtonText: 'Ya, logout',
            cancelButtonText: 'Batal'
        }).then((result) => {
            if (result.isConfirmed) {
                document.getElementById('logout-form').submit();
            }
        });
    }
</script>
<!-- base:js -->
<script src="{{ asset('admin/vendors/js/vendor.bundle.base.js') }}"></script>
<!-- endinject -->
<!-- Plugin js for this page-->
<script src="{{ asset('admin/vendors/chart.js/Chart.min.js') }}"></script>
<!-- End plugin js for this page-->
<!-- inject:js -->
<script src="{{ asset('admin/js/off-canvas.js') }}"></script>
<script src="{{ asset('admin/js/hoverable-collapse.js') }}"></script>
<script src="{{ asset('admin/js/template.js') }}"></script>
<script src="{{ asset('admin/js/settings.js') }}"></script>
<script src="{{ asset('admin/js/todolist.js') }}"></script>
<!-- endinject -->
<!-- Custom js for this page-->
<script src="{{ asset('admin/js/dashboard.js') }}"></script>
<!-- End custom js for this page-->
<!-- Bootstrap JS (versi 5.x) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
{{-- js table n expore --}}
<script src="{{ asset('admin/js/dashboard.js') }}"></script>
<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
<script src="https://cdn.datatables.net/2.3.2/js/dataTables.js"></script>
<script src="https://cdn.datatables.net/buttons/3.2.4/js/dataTables.buttons.js"></script>
<script src="https://cdn.datatables.net/buttons/3.2.4/js/buttons.dataTables.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/3.2.4/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/3.2.4/js/buttons.print.min.js"></script>
<script>
$(document).ready(function () {
    $.fn.dataTable.ext.search.push(function (settings, data) {
        let selectedYear = $('#filter-tahun').val();
        let tanggal = data[4]; // Ganti dengan index kolom tanggal lahir

        if (!selectedYear) return true; // Tidak ada filter

        let masa_jabatan_mulai = new Date(tanggal).getFullYear();

        return masa_jabatan_mulai == selectedYear;
    });
    $('[data-toggle="data-table"]').each(function () {
        const $table = $(this);
        const id = $table.attr('id');

        let config = {};

        if (id === 'manajemen-akun') {
            config = {
                dom: 'Bfrtip',
                buttons: [
                    {
                        extend: 'excelHtml5',
                        autoFilter: true,
                        sheetName: 'Manajemen Akun',
                        exportOptions: { columns: [0, 1, 2, 3, 5] }
                    },
                    {
                        extend: 'pdfHtml5',
                        sheetName: 'Manajemen Akun',
                        exportOptions: { columns: [0, 1, 2, 3, 5] }
                    },
                    {
                        extend: 'print',
                        sheetName: 'Manajemen Akun',
                        exportOptions: { columns: [0, 1, 2, 3, 5] }
                    }
                ],
                columnDefs: [
                    {
                        targets: [4, 6], // kolom password dan aksi, misalnya
                        searchable: false
                    }
                ]
            };
        } else if (id === 'data-anggota') {
            config = {
                dom: 'Bfrtip',
                buttons: [
                    {
                        extend: 'excelHtml5',
                        autoFilter: true,
                        sheetName: 'Data Anggota Saka Bhayangkara Polsek Mayong',
                        exportOptions: {
                            columns: Array.from({ length: 6 }, (_, i) => i).filter(i => i !== 1) // kolom 0-6 kecuali 1
                        }
                    },
                    {
                        extend: 'pdfHtml5',
                        sheetName: 'Data Anggota Saka Bhayangkara Polsek Mayong',
                        exportOptions: {
                            columns: Array.from({ length: 6 }, (_, i) => i).filter(i => i !== 1) // kolom 0-6 kecuali 1
                        }
                    },
                    {
                        extend: 'print',
                        sheetName: 'Data Anggota Saka Bhayangkara Polsek Mayong',
                        exportOptions: {
                            columns: Array.from({ length: 6 }, (_, i) => i).filter(i => i !== 1) // kolom 0-6 kecuali 1
                        }
                    }
                ],
            };
        } else if (id === 'data-kegiatan') {
            config = {
                dom: 'Bfrtip',
                buttons: [
                    {
                        extend: 'excelHtml5',
                        autoFilter: true,
                        sheetName: 'Data Kegiatan Saka Bhayangkara Polsek Mayong',
                        exportOptions: {
                            columns: Array.from({ length: 7 }, (_, i) => i).filter(i => i !== 1) // kolom 0-6 kecuali 1
                        }
                    },
                    {
                        extend: 'pdfHtml5',
                        sheetName: 'Data Anggota Saka Bhayangkara Polsek Mayong',
                        exportOptions: {
                            columns: Array.from({ length: 7 }, (_, i) => i).filter(i => i !== 1) // kolom 0-6 kecuali 1
                        }
                    },
                    {
                        extend: 'print',
                        sheetName: 'Data Anggota Saka Bhayangkara Polsek Mayong',
                        exportOptions: {
                            columns: Array.from({ length: 7 }, (_, i) => i).filter(i => i !== 1) // kolom 0-6 kecuali 1
                        }
                    }
                ],
                columnDefs: [
                    {
                        targets: [1], // Foto dan Aksi
                        searchable: false
                    }
                ]
            };
        } else if (id === 'datapendaftar') {
            config = {
                dom: 'Bfrtip',
                buttons: [
                    {
                        extend: 'excelHtml5',
                        autoFilter: true,
                        sheetName: 'Data Pendaftaran Saka Bhayangkara Polsek Mayong',
                        exportOptions: {
                            columns: Array.from({ length: 14 }, (_, i) => i) // kolom 0-14
                        }
                    },
                    {
                        extend: 'pdfHtml5',
                        sheetName: 'Data Pendaftaran Saka Bhayangkara Polsek Mayong',
                        exportOptions: {
                            columns: Array.from({ length: 14 }, (_, i) => i)
                        }
                    },
                    {
                        extend: 'print',
                        sheetName: 'Data Pendaftaran Saka Bhayangkara Polsek Mayong',
                        exportOptions: { columns: [0, 1, 2, 3, 4, 5, 6] }
                    }
                ],
                columnDefs: [
                    {
                        targets: [15, 16], // Foto dan Aksi
                        searchable: false
                    }
                ]
            };
        }

        $table.DataTable(config);
    });
    // Trigger saat dropdown berubah
    $('#filter-tahun').on('change', function () {
        $('#data-anggota').DataTable().draw();
    });
});

</script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const toastElement = document.getElementById('session-toast');
        if (toastElement) {
            const toast = new bootstrap.Toast(toastElement, {
                delay: 3000, // 3 detik
                autohide: true
            });
            toast.show();
        }
    });
</script>
{{-- end script --}}
