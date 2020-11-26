{{csrf_field()}}
<div class="form-row">
    <div class="form-group col-md-6">
        <input type="text" class="form-control"
               name="namerus"
               value="{{$type ? $type->namerus : old('namerus')}}"
               placeholder="Название на русском"
               id="namerus"
               required>
        <label class="form-control-plaintext" for="namerus">Пожалуйста введите название на русском</label>
    </div>
    <div class="form-group col-md-6">
        <input type="text" class="form-control"
               name="namekz"
               value="{{$type ? $type->namekz : old('namekaz')}}"
               placeholder="Название на казахском"
               id="namekz"
               required>
        <label class="form-control-plaintext" for="namerus">Пожалуйста введите название на казахском</label>
    </div>
    <div class="form-group col-md-6">
        <input type="number" class="form-control"
               name="id"
               value="{{$type ? $type->id : old('id')}}"
               placeholder="1"
               id="id"
               required>
        <label class="form-control-plaintext" for="title">Пожалуйста введите id</label>
    </div>
    <div class="form-group col-md-6">
        <input type="number" class="form-control"
               name="tsena"
               value="{{$type ? $type->tsena : old('tsena')}}"
               placeholder="1"
               id="tsena"
               required>
        <label class="form-control-plaintext" for="tsena">Пожалуйста введите сумму</label>
    </div>
</div>
<div class="form-group col-md-12 text-right">
    <button class="mb-2 btn btn-primary mr-1" type="submit">Сохранить
        <i class="material-icons md-12">check_circle</i>
    </button>
</div>



@include('admin.layouts.parts.error')
