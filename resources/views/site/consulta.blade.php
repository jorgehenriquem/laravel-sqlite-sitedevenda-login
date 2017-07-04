@extends('layouts.site')

@section('content')

<div class="container">
    <div class="row section">
        <h3 align="center">Consulta</h3>
        <div class="divider"></div>
    </div>
    <div class="row section">
        <div class="col s12 m8">
            <div class="row">
                <div class="slider">
                    <ul class="slides">
                        <li>
                            <img src="{{ asset('img/doctor.jpg') }}">
                            <div class="caption center-align">
                                <h3>Título da Imagem</h3>
                                <h5>Descrição do Slide</h5>
                            </div>
                        </li>
                        <li>
                            <img src="{{ asset('img/ampola.jpg') }}">
                            <div class="caption left-align">
                                <h3>Título da Imagem</h3>
                                <h5>Descrição do Slide</h5>
                            </div>
                        </li>
                        <li>
                            <img src="{{ asset('img/operacao.jpg') }}">
                            <div class="caption right-align">
                                <h3>Título da Imagem</h3>
                                <h5>Descrição do Slide</h5>
                            </div>
                        </li>
                        <li>
                            <img src="{{ asset('img/pills.jpg') }}">
                            <div class="caption left-align">
                                <h3>Título da Imagem</h3>
                                <h5>Descrição do Slide</h5>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row" align="center">
                <button onclick="sliderPrev()" class="btn blue">Anterior</button>
                <button onclick="sliderNext()" class="btn blue">Próxima</button>
            </div>
        </div>
        <div class="col s12 m4">
            <h4>Título da Consulta</h4>
            <blockquote>
                Descrição breve sobre consulta.
            </blockquote>
            <p><b>Código:</b> 245</p>
            <p><b>Status:</b>Iniciada</p>
            <p><b>Tipo:</b> Alvenaria</p>
            <p><b>Endereço:</b> Centro</p>
            <p><b>Cep:</b> 84568955</p>
            <p><b>Cidade:</b> Santa Cruz do Sul</p>
            <p><b>Valor:</b> R$ 200.000,00</p>
            <a class="btn deep-orange darken-1" href="{{ route('site.contato') }}">Entrar em contato</a>
        </div>
    </div>
</div>
@endsection