{{csrf_field()}}
<div class="form-row">
    <div class="form-group col-md-6">
        <input type="text" class="form-control"
               name="namemo"
               value="{{$mt ? $mt->namemo : old('namemo')}}"
               placeholder="Название МО"
               id="namemo"
               required>
        <label class="form-control-plaintext" for="namemo">Пожалуйста введите Название МО</label>
    </div>
    <div class="form-group col-md-6">
        <input type="text" class="form-control"
               name="region"
               value="{{$mt ? $mt->region : old('region')}}"
               placeholder="Регион"
               id="region"
               required>
        <label class="form-control-plaintext" for="title">Пожалуйста введите Регион</label>
    </div>
    <div class="form-group col-md-6">
        <input type="text" class="form-control"
               name="raion"
               value="{{$mt ? $mt->raion : old('raion')}}"
               placeholder="Район"
               id="raion"
               required>
        <label class="form-control-plaintext" for="title">Пожалуйста введите Район</label>
    </div>
    <div class="form-group col-md-6">
        <input type="text" class="form-control"
               name="namemt"
               value="{{$mt ? $mt->namemt : old('namemt')}}"
               placeholder="Название МТ"
               id="namemt"
               required>
        <label class="form-control-plaintext" for="title">Пожалуйста введите Наименование МT</label>
    </div>
    <div class="form-group col-md-6">
        <input type="number" class="form-control"
               name="countmt"
               value="{{$mt ? $mt->countmt : old('countmt')}}"
               placeholder="1"
               id="countmt"
               required>
        <label class="form-control-plaintext" for="title">Пожалуйста введите Количество МТ</label>
    </div>
</div>
<div class="form-group col-md-12 text-right">
    <button class="mb-2 btn btn-primary mr-1" type="submit">Сохранить
        <i class="material-icons md-12">check_circle</i>
    </button>
</div>

@section('scripts')
    <script>
        function toggleImage(el) {
            document.getElementById('file').disabled = !el.checked;
        }
    </script>
@endsection


@include('admin.layouts.parts.error')
