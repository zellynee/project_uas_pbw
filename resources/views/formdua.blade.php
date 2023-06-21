<form action="/formdua/ceksimpan" method = "post">
    @csrf
<div class="form-check">
<label for="">Pilih Hoby</label> <br>
  <input class="form-check-input" type="checkbox" value="Membaca" name="satu" id="defaultCheck1">
  <label class="form-check-label" for="defaultCheck1">
    Membaca
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="Melukis" name = "dua" id="defaultCheck2">
  <label class="form-check-label" for="defaultCheck2">
    Melukis
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="Berenang" name = "tiga" id="defaultCheck2">
  <label class="form-check-label" for="defaultCheck2">
    Berenang
  </label>
</div>
<button type="submit" class="btn btn-primary">Submit</button>
</form>
