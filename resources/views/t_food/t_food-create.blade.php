<!doctype html>
<html lang="en">
  <head>
    <title>them moi sp</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <h2 class="my-4">Tạo mới xe</h2>
        <form action="{{ route('t_foods.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            
            <div class="form-group">
                <label for="name">name:</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name">
                @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            
            <div class="form-group">
                <label for="price">price:</label>
                <input type="text" class="form-control @error('price') is-invalid @enderror" id="price" name="price">
                @error('price')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="price_sale">price_sale:</label>
                <input type="text" class="form-control @error('price_sale') is-invalid @enderror" id="price_sale" name="price_sale">
                @error('price_sale')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="image">Image:</label>
                <input type="file" class="form-control @error('image_file') is-invalid @enderror" id="image_file" name="image_file" onchange="previewImage(event)">
                @error('image_file')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <img id="imagePreview" src="#" alt="Image Preview" class="img-fluid mt-2" style="display: none;">
            </div>
            
            <div class="form-group">
                <label for="detail">detail:</label>
                <input type="text" class="form-control @error('detail') is-invalid @enderror" id="detail" name="detail">
                @error('detail')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            
            <div class="form-group">
                <label for="lsp_id">lsp Name:</label>
                <select class="form-control @error('lsp_id') is-invalid @enderror" name="lsp_id" id="lsp_id">
                  @foreach ($lsps as $lsp)
                   <option value="{{ $lsp->id }}">{{ $lsp->lsp_name }}</option>
                  @endforeach
                </select>
                @error('lsp_id')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            
            <button type="submit" class="btn btn-primary">Thêm</button>
<a href="{{ route('t_foods.index') }}" class="btn btn-secondary">Quay lại danh sách</a>
        </form>
    </div>
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4xF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
    <script>
      function previewImage(event) {
        var reader = new FileReader();
        reader.onload = function(){
          var output = document.getElementById('imagePreview');
          output.src = reader.result;
          output.style.display = 'block';
        };
        reader.readAsDataURL(event.target.files[0]);
      }
    </script>
  </body>
</html>