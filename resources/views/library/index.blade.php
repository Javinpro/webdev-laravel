<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Library</title>
</head>
<body>
    <h1>Our Catalog.</h1>

    <a href="{{ route('library.index', ['sort' => 'asc']) }}">Sort Ascending</a>
    <a href="{{ route('library.index', ['sort' => 'desc']) }}">Sort Descending</a>

    <h2>Book</h2>
    @foreach($book as $books) 
        <p>{{ $books->title }} by {{ $books->author }} ({{ $books->published_year }})</p>
    @endforeach

    <h2>CD</h2>
    @foreach($cd as $cds) 
        <p>{{ $cds->title }} by {{ $cds->artist }} ({{ $cds->release_year }})</p>
    @endforeach

    <h2>Newspaper</h2>
    @foreach($newspaper as $koran) 
        <p>{{ $koran->title }} by {{ $koran->publisher }} ({{ $koran->published_date }})</p>
    @endforeach

    <h2>Final Year Project</h2>
    @foreach($final_year_project as $skripsi) 
        <p>{{ $skripsi->title }} by {{ $skripsi->student_name }} ({{ $skripsi->year }})</p>
    @endforeach
</body>
</html>