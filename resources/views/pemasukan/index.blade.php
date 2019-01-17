@extends('layouts.app')

@section('content')
    <div class="breadcome-list shadow-reset">
        <div class="row">
            <div class="form-group data-custon-pick data-custom-mg" id="data_5">
                <div class="input-daterange input-group  col-md-12" id="datepicker">
                    <input type="text" class="form-control  col-md-6" id="start" data-date-format="dd-mm-yyyy">
                    <span class="input-group-addon"></span>
                    <input type="text" class="form-control  col-md-6" id="end" data-date-format="dd-mm-yyyy">
                </div>
            </div>
        </div>
    </div>
    <div id="listPemasukan">
        
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
                            <label>Transaksi</label>
                            <input type="text" id="transaksi" class="form-control" placeholder="Transaksi">
                        </div>
                        <div class="form-group-inner" align="left">
                            <label>Kas</label>
                            <div class="form-select-list">
                                <select class="form-control custom-select-value" name="Kas" id="kas">
                                    @foreach ($Kas as $value)
                                        <option value="{{ $value->id }}">{{ $value->nama }}</option>    
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group-inner" align="left">
                            <label>Jumlah</label>
                            <input type="number" id="jumlah" class="form-control" placeholder="Jumlah">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <a data-dismiss="modal" href="#">Batal</a>
                    <a href="#" id="btnSave">Simpan</a>
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
                url: "{{ url('/transaksi/pemasukan/store') }}",
                method: 'post',
                data: {
                    _token: $("input[name=_token]").val(),
                    KasId: $('#kas').val(),
                    Tanggal: $('#tgl').val(),
                    Transaksi: $('#transaksi').val(),
                    Jumlah: $('#jumlah').val()
                },

                success: function(result){
                    $('#kas').val('');
                    $('#tgl').datepicker('setDate', 'today');
                    $('#transaksi').val('');
                    $('#jumlah').val('');

                    $('#input-modal').modal('hide');
                }
            });
        }

        function numberSeparator(x) {
            return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        }

        function getData(){
            $.ajax({
                url: "{{ url('/transaksi/pemasukan/getAll') }}",
                method: 'get',
                data: {
                    start: $('#start').val(),
                    end: $('#end').val(),
                },
                success: function(result){
                    $('#listPemasukan').empty();

                    $.each(result, function(index) {
                        var tgl = new Date(result[index].tanggal);
                        var html = '<div class="breadcome-list shadow-reset">' +
                                        '<div class="row">' +
                                            '<div style="margin-left: 90%; font-size: 16px; font-weight: black; font-style: bold;">' +
                                                tgl.getDate() + '-' + (tgl.getMonth() + 1) + '-' +  tgl.getFullYear() +
                                            '</div>' +
                                            '<div style="margin-left: 2%; font-size: 12px; font-weight: black; font-style: bold;">' +
                                                result[index].transaksi +                                 
                                            '</div>' +
                                            '<div style="margin-left: 2%; font-size: 12px; font-weight: black; font-style: bold;">' +
                                                result[index].NamaKas +
                                            '</div>' +
                                            '<div style="margin-left: 2%; font-size: 12px; font-weight: black; font-style: bold;">' +
                                                'Rp ' + numberSeparator(result[index].jumlah) +
                                            '</div>' +
                                        '</div>' +
                                    '</div>';

                        $('#listPemasukan').append(html);
                    });
                }
            });   
        }

        $( document ).ready(function(){
            $('#tgl').datepicker('setDate', 'today');
            $('#start').datepicker('setDate', 'today');
            $('#end').datepicker('setDate', 'today');

            getData();

            $('#btnSave').click(function(e){
                insert(e);

                getData();
            });

            $('#start').change(function(){
                getData();
            });

            $('#end').change(function(){
                getData();
            });
        });
    </script>
@endsection