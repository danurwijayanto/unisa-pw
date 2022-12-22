@extends('layouts.homepage-layout')

@section('content')
<main class="container">

<table class="table table-dark">
    <tr>
        <th>ID</th>
        <th>Nama Matakuliah</th>
    </tr>
    @foreach($mata_kuliah as $mk)
    <tr>
        <td>{{ $mk->id }}</td>
        <td>{{ $mk->nama_mata_kuliah }}</td>
    </tr>
    @endforeach
</table>

</main>
@endsection('content')
