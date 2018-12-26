@extends('layouts.app')

@section('content')
    
    <div id = "listBahan">

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
                        <div class="form-group-inner" align="left">
                            <label>Nama Bahan</label>
                            <input type="text" id="nama" class="form-control" placeholder="Nama Bahan">
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

    <script type="text/javascript">
        function insert(e){
            e.preventDefault();
                
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                url: "{{ url('/master/bahan/store') }}",
                method: 'post',
                data: {
                    _token: $("input[name=_token]").val(),
                    Nama: $('#nama').val(),
                },
                success: function(result){
                    $('#nama').val('');
                    $('#input-modal').modal('hide');
                }
            });
        }

        function getData(){
            $.ajax({
                url: "{{ url('/master/bahan/getAll') }}",
                method: 'get',
                data: {
                    
                },
                success: function(result){
                    $('#listBahan').empty();

                    $.each(result, function(index) {
                        var html = '<div class="breadcome-list shadow-reset">' +
                                    '<div class="row">' +
                                        '<div style="margin-left: 3%; font-size: 18px;"> '+ result[index].nama +' </div> ' +
                                    '</div>' +
                                '</div>';

                        $('#listBahan').append(html);
                    });
                }
            });   
        }

        $( document ).ready(function(){
            getData();

            $('#btnSave').click(function(e){
                insert(e);
                getData();
            });
        });
    </script>

@endsection
