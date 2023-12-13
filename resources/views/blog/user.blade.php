<!doctype html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MyData</title>
    <link
href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.c
ss" rel="stylesheet" integrity="sha384-
T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
crossorigin="anonymous">

</head>
<body style="background: lightgray">

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div>
                    <h3 class="text-center my-4">HALAMAN USER</h3>
                    <hr>
                </div>
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                    <form class="d-flex mb-5">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">GAMBAR</th>
                                    <th scope="col">JUDUL</th>
                                    <th scope="col">CONTENT</th>
                                    
                                </tr>
                            </thead>
                        <tbody>
                        @forelse ($blog as $post)
                            <tr>
                                <td class="text-center">
                                    <img src="{{ 
                                            asset('/storage/blog/'.$post->image) }}" class="rounded" style="width: 150px">
                                </td>
                                <td>{{ $post->title }}</td>
                                <td>{!! $post->content !!}</td>
                                <td class="text-center">
                                <a href="{{ route('blog.show',$post->id) }}" class="btn btn-sm btn-dark">SHOW</a>
                                </td>
                            </tr>
                        @empty
                            <div class="alert alert-danger">
                                Data Post belum Tersedia.
                            </div>
                        @endforelse
                    </tbody>
                </table>
                {{ $blog->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>