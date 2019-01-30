<!--Esto es una subvista-->
  @csrf
  <div class="form-group">
    <label for="exampleInputNombre">Nombre</label>
    <input type="text" class="form-control" id="exampleInputNombre" name="nombre" placeholder="Nombre">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputApell">Apellidos</label>
    <input type="text" class="form-control" id="exampleInputApell" name="apellido" placeholder="Apellidos">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email</label>
    <input type="email" class="form-control" id="exampleInputEmail1" name="mail" aria-describedby="emailHelp" placeholder="Email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="pass" placeholder="Password">
  </div>
  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Subir imagen</label>
    <input type="file" class="form-control" name="avatar" aria-describedby="Subir" placeholder="Subir imágen">
    <small id="fileHelp" class="form-text text-muted">DA click para subir una imagen de perfil.</small>
  </div>