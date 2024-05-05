<?php
$sql = "SELECT * FROM `friend` WHERE `id`=".$_GET['id'];
$res = mysqli_query($connect, $sql);
if (mysqli_errno($connect)) echo mysqli_error($connect);
$row = mysqli_fetch_assoc($res);
?>
<form method="POST" action="index.php">
    <input type="hidden" name="edit">
    <input type="hidden" name="id" value='<?=$row['id']?>'>
  <div class="form-group">
    <label for="exampleFormControlInput1">Fistname</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" name='firstname' placeholder="Veselov" required value='<?=$row['firstname']?>'>
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Name</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" name='name' placeholder="Matvey" required value='<?=$row['name']?>'>
  </div>
  <div class="form-group">
      <label for="exampleFormControlInput1">Lastname</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" name='lastname' placeholder="Aleksandrovich" required value='<?=$row['lastname']?>'>
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Gender</label>
    <select class="form-control" id="exampleFormControlSelect1" name='gender'>
      <option <?php if($row['gender'] == 'Male') echo 'selected';?>>Male</option>
      <option <?php if($row['gender'] == 'Fema') echo 'selected';?>>Female</option>
    </select>
  </div>
  <div class="form-group">
      <label for="exampleFormControlInput1">Birthdate</label>
    <input type="date" class="form-control" id="exampleFormControlInput1" name='birthdate' value='<?=$row['birthdate']?>' required>
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Email</label>
    <input type="email" class="form-control" id="exampleFormControlInput1" name='email' placeholder="m.a.ves@mail.ru" required value='<?=$row['email']?>'>
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Address</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" name='address' placeholder="Bol. Semenovskaya St. 38" required value='<?=$row['address']?>'>
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Phone</label>
    <input type="tel" class="form-control" id="exampleFormControlInput1" name='phone' placeholder="88005553535" required value='<?=$row['phone']?>'>
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Comment</label>
    <textarea type="text" class="form-control" id="exampleFormControlInput1" name='comment'><?=$row['comment']?></textarea>
  </div>
  <button type='submit' class='btn btn-primary mt-3'>Обновить</button>
</form>