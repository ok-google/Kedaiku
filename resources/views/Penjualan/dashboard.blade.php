@extends('layouts.app')

@section('content')
    <div class="breadcome-list shadow-reset">
        <div class="row">
            <div align="center">
                Penjualan Hari ini
            </div>
        </div>
    </div>
    <div id="listPenjualan">
        
    </div>

    <div class="chat-list-wrap">
        <div class="chat-list-adminpro">
            <div class="chat-button">
                <span data-toggle="modal" data-target="#input-modal" class="chat-icon-link collapsed" style="background: blue;">
                    <i class="fa fa-plus" style="margin-top: 30%"></i>
                </span>
            </div>
        </div>
    </div>

    <div id="input-modal" class="modal modal-adminpro-general default-popup-PrimaryModal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-close-area modal-close-df">
                    <a class="close" data-dismiss="modal" >
                        <i class="fa fa-close" style="margin-top: 25%;"></i>
                    </a>
                </div>
                <div class="modal-body">
                    <form action="#">
                        @csrf
                        <div class="form-group data-custon-pick" id="data_1" align="left">
                            <label>Tanggal</label>
                            <div class="input-group date">
                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                <input type="text" class="form-control" id="tgl" data-date-format="dd-mm-yyyy">
                            </div>
                        </div>
                        <div class="form-group-inner" align="left">
                            <label>Produk</label>
                            <div class="form-select-list">
                                <select class="form-control custom-select-value" name="Produk" id="produk">
                                    @foreach ($Produk as $value)
                                        <option value="{{ $value->id }}">{{ $value->nama }}</option>    
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group-inner" align="left">
                            <label>Harga</label>
                            <input type="number" id="harga" class="form-control" placeholder="Harga Produk">
                        </div>
                        <div class="form-group-inner" align="left">
                            <label>Qty</label>
                            <input type="number" id="qty" class="form-control" placeholder="Qty Produk">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <a data-dismiss="modal" href="#">Batal</a>
                    <a href="#" id="btnSave"">Simpan</a>
                </div>
            </div>
        </div>
    </div>

    <script>
        function insert(e){
            e.preventDefault();
                
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                url: "{{ url('/transaksi/penjualan/store') }}",
                method: 'post',
                data: {
                    _token: $("input[name=_token]").val(),
                    ProdukId: $('#produk').val(),
                    Tanggal: $('#tgl').val(),
                    Qty: $('#qty').val(),
                    Harga: $('#harga').val()
                },

                success: function(result){
                    $('#produk').val('');
                    $('#tgl').datepicker('setDate', 'today');
                    $('#qty').val('');
                    $('#harga').val('');

                    $('#input-modal').modal('hide');
                }
            });
        }

        function numberSeparator(x) {
            return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        }

        function getData(today){
            $.ajax({
                url: "{{ url('/transaksi/penjualan/getAll') }}",
                method: 'get',
                data: {
                    start: today,
                    end: today,
                },
                success: function(result){
                    $('#listPenjualan').empty();

                    $.each(result, function(index) {
                        var tgl = new Date(result[index].tanggal);
                        var html;
                        html = '<div class="breadcome-list shadow-reset">' +
                                        '<div class="row">' +
                                            '<div style="margin-left: 90%; font-size: 16px; font-weight: black; font-style: bold;">' +
                                                tgl.getDate() + '-' + (tgl.getMonth() + 1) + '-' +  tgl.getFullYear() +
                                            '</div>' +
                                            '<div style="margin-left: 2%; font-size: 12px; font-weight: black; font-style: bold;">' +
                                                result[index].NamaProduk +                                 
                                            '</div>' +
                                            '<div style="margin-left: 2%; font-size: 12px; font-weight: black; font-style: bold;">' +
                                            result[index].qty  + 'x' +  numberSeparator(result[index].harga) + ' = ' + numberSeparator(result[index].qty * result[index].harga) +
                                            '</div>' +
                                        '</div>' +
                                    '</div>';

                        $('#listPenjualan').append(html);
                    });
                }
            });   
        }

        $( document ).ready(function(){
            var today = new Date();
            $('#tgl').datepicker('setDate', 'today');
            getData(today.getDate() + '-' + (today.getMonth() + 1) + '-' + today.getFullYear());

            $('#btnSave').click(function(e){
                insert(e);

                getData(today.getDate() + '-' + (today.getMonth() + 1) + '-' + today.getFullYear());
            });
        });
    </script>
@endsection