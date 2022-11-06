  @extends('Layout.Master')
  @section('title', 'Create Post')
  @section('content')

      <div class="container mt-5">
          <form action="{{ route('posts.store') }}" method="POST">
              @csrf
              <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Title</label>
                  <input type="text" name="title" class="form-control" id="exampleInputEmail1"
                      aria-describedby="emailHelp">
              </div>

              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email</label>
                <input type="Email" name="Emaill" class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp">
            </div>

              <div class="mb-3">
                  <div class="form-floating">
                      <textarea class="form-control" name="Desc" placeholder="Leave a comment here" id="floatingTextarea2"
                          style="height: 100px"></textarea>
                      <label for="floatingTextarea2">Description</label>
                  </div>
              </div>

              <div class="mb-3">
                  <select class="form-select" name="sel" aria-label="Default select example">
                      <option selected>Open this select Option</option>
                      <option value="Omar">Omar</option>
                      <option value="Marwan">Marwan</option>
                      <option value="Badr">Badr</option>
                  </select>
              </div>
              <button type="submit" class="btn btn-primary">Create</button>
          </form>
      </div>

  @endsection
