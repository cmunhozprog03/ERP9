@csrf
<div class="form-group">
  <label>Nome da Categoria</label>
  <input type="text" class="form-control" name="name">
  @error('name')
      <div class="text-danger">{{ $message }}</div>
  @enderror
</div>
<div class="form-group">
  <label>Descrição da Categoria</label>
  <textarea name="description" id="" rows="5" class="form-control"></textarea>
  @error('description')
      <div class="text-danger">{{ $message }}</div>
  @enderror
</div>
<div class="row justify-content-between">
  <div class="form-group">
    <label>Imagem Categoria</label>
    <input type="file" class="form-control" name="photo">
    @error('photo')
        <div class="text-danger">{{ $message }}</div>
    @enderror
  </div>
  <div class="form-group">
    <label for="">Ativo?</label>
    <br>
    <div class="custom-control custom-radio custom-control-inline">
      <input type="radio" id="customRadioInline1" name="active" class="custom-control-input" value="1" checked>
      <label class="custom-control-label" for="customRadioInline1">SIM</label>
    </div>
    <div class="custom-control custom-radio custom-control-inline">
      <input type="radio" id="customRadioInline2" name="active" class="custom-control-input" value="2">
      <label class="custom-control-label" for="customRadioInline2">NÃO</label>
    </div>
  </div>
</div>