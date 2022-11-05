@extends("Layout.Master")
  @section("title","UpdatePost")
  @section('content')

  <div class="container mt-5">
    @foreach($array as $EditAr)
      @if($EditAr['id']== $idd)
      
    <form action="/Posts/update/{{$EditAr['id']}}" method="POST">
      @csrf 
     
      
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Title</label>
        <input type="text" class="form-control" id="exampleInputEmail1" name="tititle" aria-describedby="emailHelp" value="{{$EditAr['title']}}">
        
      </div>
      <div class="mb-3">
          <div class="form-floating">
              <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px" >{{$EditAr['Desc']}}</textarea>
              <label for="floatingTextarea2">Description</label>
            </div>
        </div>
     
        <div class="mb-3">
        <select class="form-select" aria-label="Default select example">
          <option selected>{{$EditAr['Posted_by']}}</option>
          <option value="1">Omar</option>
          <option value="2">Marwan</option>
          <option value="3">Badr</option>
        </select>
      </div>

      @endif
      @endforeach

        <button type="submit" class="btn btn-success">Update</button>
      </form>
    </div>


  @endsection