@extends('layouts.user_type.auth')
@section('content')
    <div class="row">
        <div class="h4">Criar novo cadastro</div>
        <hr class="border-bottom border-3 border-dark">
    </div>
    <div class="form-container">
        <form action="{{ route('abordagem.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method("POST")
            <div class="card p-3">
                <div class="row">
                    <div class="col-md-3">
                        <label for="nome_cliente">Nome para a abordagem:</label>
                        <input id="nome_cliente" value="" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                    </div>
                    <div class="col-md-3">
                        <label for="exampleFormControlSelect1">Tipo de abordagem:</label>
                        <select class="form-control" id="exampleFormControlSelect1">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <label for="data">Data de realização:</label>
                        <input id="data" class="form-control datepicker" placeholder="Selecione a data" type="text" onfocus="focused(this)" onfocusout="defocused(this)">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label for="exampleFormControlTextarea1">Descrição da abordagem:</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1"></textarea>
                    </div>
                    <div class="col-md-3 mt-4">
                        <button type="submit" class="btn btn-info btn-lg align-itens-end">Adicionar</button>
                    </div>
                </div>
            </div>
        </form>
    </div>


@push('js')
<script>
    if (document.querySelector('.datepicker')) {
        flatpickr('.datepicker', {
            mode: "range"
        });
    }
</script>
@endpush
@endsection
