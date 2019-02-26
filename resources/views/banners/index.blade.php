@extends('home')

@section('contentContainer')
    <div class="container-fluid border-bottom d-flex justify-content-between align-items-center">
        <h1>Banners</h1>
        <a href="{{ route('banner.addPage') }}" class="btn bg-dark text-light">Adicionar Banner</a>
    </div>
    <div class="container-fluid">
        <table class="table mt-5">
            <thead class="thead-dark">
            <tr>
                <th scope="col">Nome do cliente</th>
                <th scope="col">Nome do banner</th>
                <th scope="col">Número de cliques</th>
                <th scope="col">Número de impressões</th>
                <th scope="col">Modelo de preço</th>
                <th scope="col">Valor total por modelo de preço</th>
                <th scope="col">Ações</th>
            </tr>
            </thead>
            <tbody>
            @foreach($banners as $banner)
                <tr>
                    <td>{{ $banner->client_name }}</td>
                    <td>{{ $banner->banner_name }}</td>
                    <td>{{ $banner->banner_clicks }}</td>
                    <td>{{ $banner->banners_impressions }}</td>
                    <td>cpc</td>
                    <td>{{ number_format($banner->banner_price,2,',','.') }}</td>
                    <td>
                        <a href="{{ action('BannerController@show' , ['id' => Crypt::encryptString($banner->id)]) }}" class="btn bg-dark text-light">Detalhes/ Editar</a>
                        <a href="{{ route('banner.delete') }}" class="btn bg-dark text-light"onclick="event.preventDefault();
                                                     document.getElementById('delete-form').submit();" >Excluir</a>
                        <form id="delete-form" action="{{ route('banner.delete') }}" method="POST"  style="display: none;">
                            <input type="hidden" name="id" value="{{Crypt::encryptString($banner->id)}}">
                            @csrf
                        </form>
                        <a href="{{ route('banner.generate', ['id' => Crypt::encryptString($banner->id)]) }}" class="btn bg-dark text-light">Gerar codigo &lsaquo;/&rsaquo; </a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection