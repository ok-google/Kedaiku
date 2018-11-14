@extends('layouts.app')

@section('content')
    <div class="breadcome-list shadow-reset">
        <div class="row">
            <div style="margin-left: 3%; font-size: 18px;"> Bawang </div>
        </div>
    </div>
    <div class="breadcome-list shadow-reset">
        <div class="row">
            <div style="margin-left: 3%; font-size: 18px;"> Lombok </div>
        </div>
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
                        <div class="form-group-inner" align="left">
                            <label>Nama Bahan</label>
                            <input type="text" id="nama" class="form-control" placeholder="Nama Bahan">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <a data-dismiss="modal" href="#">Batal</a>
                    <a href="#" id="btnSave" onclick="addBahan()">Simpan</a>
                </div>
            </div>
        </div>
    </div>

@endsection
