@extends('layouts.master')

@section('section')
  <div class="ml-3 mb-4">
    <h1 class="h3 text-gray-800">Daftar Artikel</h1>
    <a href="/artikel/create" type="submit" class="btn btn-primary">Buat artikel baru</a>
  </div>

  {{-- tabel --}}
  <div class="mt-4 mx-3">
     @foreach($artikels as $key => $artikel)
        <div class="card w-100">
          <div class="card-body">
            <h5 class="card-title font-weight-bold">{{ $artikel->judul }}</h5>
            <p class="card-text col-10 text-truncate">{{ $artikel->isi }}</p>
            <footer class="blockquote-footer">{{$artikel->user_id}}</footer><br>
            <a href="/artikel/{{$artikel->id}}" type="submit" class="btn btn-primary btn-sm">Baca selengkapnya</a>
            <a href="/artikel/{{$artikel->id}}/edit" type="submit" class="btn btn-secondary btn-sm">Edit</a>
            <form action="/artikel/{{$artikel->id}}" method="POST" style="display: inline">
              @csrf
              @method('DELETE')
              <button class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
            </form>
          </div>
        </div>
      @endforeach
  </div>
@endsection

@push('scripts')
  <script>
    Swal.fire({
        title: 'Berhasil!',
        text: 'Memasangkan script sweet alert',
        icon: 'success',
        confirmButtonText: 'Cool'
    })
  </script>
@endpush