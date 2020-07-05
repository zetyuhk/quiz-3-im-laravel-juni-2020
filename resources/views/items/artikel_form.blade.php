@extends('layouts.master')

@section('section')
  <div class="mx-3 mt-3">
    <div class="card card-primary w-100">
    
      {{-- header --}}
      <div class="card-header">
        <h3 class="card-title">Artikel Baru</h5>
      </div>

      {{-- isi form --}}
      <form action="/artikel" method="POST" class="ml-4 mr-4">
      @csrf
        <div class="card-body">
          <div class="form-group">
            <label for="judul">Judul:</label>
            <input type="text" class="form-control" name="judul" placeholder="Masukkan judul" id="judul">
          </div>
          <div class="form-group">
            <label for="isi">Isi:</label>
            <textarea type="text" class="form-control" name="isi" placeholder="Tuliskan isi" id="isi" rows="10"></textarea>
          </div>
          <div class="form-group">
            <label for="tag">Tag:</label>
            <input type="text" class="form-control" name="tag" placeholder="Tambahkan tag" id="tag">
          </div>
          <button type="submit" class="btn btn-primary">Upload</button>
        </div>
      </form>
    </div>
  </div>
@endsection