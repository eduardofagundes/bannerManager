@extends('home')

@section('contentContainer')
    <div class="container-fluid border-bottom">
        <h1>Banners</h1>
    </div>
    <div class="container mt-5">
        <form action="{{ route('banner.edit') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="id" value="{{ Crypt::encryptString($banner->id) }}">
            <div class="border-bottom mb-3 text-muted">Dados do cliente</div>
            <div class="form-group row">
                <div class="col-2">
                    <label for="client_name">Nome do cliente</label>
                </div>
                <div class="col">
                    <input type="text" class="form-control" name="client_name" id="client_name" value="{{ $banner->client_name }}" required>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-2">
                    <label for="client_email">email do cliente</label>
                </div>
                <div class="col">
                    <input type="email" class="form-control" name="client_email" id="client_email" value="{{ $banner->client_email }}" required>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-2">
                    <label for="client_phone">Telefone do cliente</label>
                </div>
                <div class="col">
                    <input type="text" class="form-control" name="client_phone" id="client_phone"  value="{{ $banner->client_phone }}" required>
                </div>
            </div>

            <div class="border-bottom mb-3 text-muted">Dados do banner</div>
            <div class="form-group row">
                <div class="col-2">
                    <label for="banner_name">Nome do banner</label>
                </div>
                <div class="col">
                    <input type="text" class="form-control" name="banner_name" id="banner_name" value="{{ $banner->banner_name }}" required>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-2">
                    <label for="url">Link direçao do banner</label>
                </div>
                <div class="col">
                    <input type="text" class="form-control" name="url" id="url" value="{{ $banner->url }}"required>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-2">
                    <label for="banner_image">Imagem do banner</label>
                </div>
                <div class="col">
                    <input type="file" name="banner_image" id="banner_image">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-2">
                    <label for="preview">preview</label>
                </div>
                <div class="col">
                    <img src="{{ asset('storage/'.$banner->banner_image) }}" alt="{{ $banner->banner_alt }}" style="width: {{$banner->banner_imgage_width}}px;height: {{$banner->banner_image_heigth}}px">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-2">
                    <label for="">Dimensões do banner</label>
                </div>
                <div class="col d-flex justify-content-between align-items-center">
                    <label for="banner_imgage_width">Largura: </label>
                    <input type="string" class="form-control" name="banner_imgage_width" id="banner_imgage_width" value="{{ $banner->banner_imgage_width }}" required>
                    <label for="banner_image_heigth">Altura: </label>
                    <input type="string" class="form-control" name="banner_image_heigth" id="banner_image_heigth" value="{{ $banner->banner_image_heigth }}" required>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-2">
                    <label for="banner_alt">Tag alt do banner</label>
                </div>
                <div class="col">
                    <input type="string" class="form-control" name="banner_alt" value="{{ $banner->banner_alt }}" id="banner_alt">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-2">
                    <label for="banner_top_text">Texto no topo do banner</label>
                </div>
                <div class="col">
                    <input type="string" class="form-control" name="banner_top_text" value="{{ $banner->banner_top_text }}" id="banner_top_text">
                </div>
            </div>

            <div class="text-muted border-bottom mb-3">Preços e filtros</div><div class="form-group row">
                <div class="col-2">
                    <label for="banner_top_text">Intervalo de apresentação do banner</label>
                </div>
                <div class="col">
                    <label for="banner_begin">início</label>
                    <input type="date" class="form-control" name="banner_begin" value="{{ $banner->banner_begin }}" id="banner_begin">
                    <label for="banner_end">fim</label>
                    <input type="date" class="form-control" name="banner_end" value="{{ $banner->banner_end }}" id="banner_end">
                </div>
            </div>

            <div class="form-group row">
                <div class="col-2">
                    <label for="banner_price_model">Modelo de preço do banner</label>
                </div>
                <div class="col">
                    <select class="form-control" name="banner_price_model" value="{{ $banner->banner_price_model }}" id="banner_price_model">
                        <option value="2">CPC</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-2">
                    <label for="banner_price">Preço Banner</label>
                </div>
                <div class="col">
                    <input type="string" class="form-control" name="banner_price" id="banner_price" value="{{ $banner->banner_price }}" required>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-2">
                    <label for="banner_impressions_limit">Limite de impressão do Banner</label>
                </div>
                <div class="col">
                    <input type="string" class="form-control" name="banner_impressions_limit" value="{{ $banner->banner_impressions_limit }}" id="banner_impressions_limit">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-2">
                    <label for="banner_clicks_limit">Limite de cliques do Banner</label>
                </div>
                <div class="col">
                    <input type="string" class="form-control" name="banner_clicks_limit" value="{{ $banner->banner_clicks_limit }}" id="banner_clicks_limit">
                </div>
            </div>
            <button type="submit" class="btn bg-dark text-light">Salvar</button>
        </form>
    </div>
    @if ($errors->any())
        <div class="container mt-4 alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
@endsection

@section('scriptContainer')
    <script>
        $(function(){
            $("#client_phone").mask('(99) 99999-9999');
            $("#banner_price").mask('000.000.000.000.000,00', {reverse: true})
        });
    </script>
@endSection