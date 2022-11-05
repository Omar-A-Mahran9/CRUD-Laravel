  @extends('Layout.Master')
  @section('title', 'Create Post')
  @section('content')

      <div class="container mt-5">
          <form action="/Posts" method="POST">
              @csrf
              <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Title</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

              </div>
              <div class="mb-3">
                  <div class="form-floating">
                      <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                      <label for="floatingTextarea2">Description</label>
                  </div>
              </div>

              <div class="mb-3">
                  <select class="form-select" aria-label="Default select example">
                      <option selected>Open this select Option</option>
                      <option value="1">Omar</option>
                      <option value="2">Marwan</option>
                      <option value="3">Badr</option>
                  </select>
              </div>
              <button type="submit" class="btn btn-primary">Create</button>
          </form>
      </div>

  @endsection
