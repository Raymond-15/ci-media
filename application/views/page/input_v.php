<button class="btn btn-primary" onclick="navigation()">kembali</button>

<div class="card mt-4">
  <div class="card-header">
    INPUT
  </div>
  <div class="card-body">
    <form onsubmit="simpan(); return false;" id="form">
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input type="email" class="form-control" id="exampleInputEmail1" name="email">
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1" name="password">
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
</div>