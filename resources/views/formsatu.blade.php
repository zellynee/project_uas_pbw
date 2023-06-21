<form action="/formsatu/simpan" method = "get">
    @csrf
 <div class="custom-control custom-radio">
    <label> Pilih Asal Jurusan </label><br>
  <input type="radio" id="customRadio1" name="customRadio" value = "Sistem Informasi" class="custom-control-input">
  <label class="custom-control-label" for="customRadio1"  > Sistem Informasi </label>
</div>
<div class="custom-control custom-radio">
  <input type="radio" id="customRadio2" name="customRadio" value = "Informatika" class="custom-control-input">
  <label class="custom-control-label" for="customRadio2" > Informatika </label>
</div>
<button type="submit" class="btn btn-primary">Submit</button>
</form>
     





