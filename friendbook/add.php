<form method="POST" action="index.php">
    <input type="hidden" name="save">
  <div class="form-group">
    <label for="exampleFormControlInput1">Fistname</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" name='firstname' placeholder="Veselov" required>
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Name</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" name='name' placeholder="Matvey" required>
  </div>
  <div class="form-group">
      <label for="exampleFormControlInput1">Lastname</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" name='lastname' placeholder="Aleksandrovich" required>
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Gender</label>
    <select class="form-control" id="exampleFormControlSelect1" name='gender'>
      <option>Male</option>
      <option>Female</option>
    </select>
  </div>
  <div class="form-group">
      <label for="exampleFormControlInput1">Birthdate</label>
    <input type="date" class="form-control" id="exampleFormControlInput1" name='birthdate' value='<?=date('Y-m-d')?>' required>
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Email</label>
    <input type="email" class="form-control" id="exampleFormControlInput1" name='email' placeholder="m.a.ves@mail.ru" required>
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Address</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" name='address' placeholder="Bol. Semenovskaya St. 38" required>
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Phone</label>
    <input type="tel" class="form-control" id="exampleFormControlInput1" name='phone' placeholder="88005553535" required>
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Comment</label>
    <textarea type="text" class="form-control" id="exampleFormControlInput1" name='comment'></textarea>
  </div>
  <button type='submit' class='btn btn-primary mt-3'>Отправить</button>
</form>