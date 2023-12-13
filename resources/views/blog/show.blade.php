<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body style="background: grey">

    <div class="container mt-5 mb-5">
        <div class="mt-4 p-5 bg-light text-black rounded">
            <div class="row align-items-start">
                <div class="col">
                <img src="{{ asset('storage/blog/'.$blog->image) }}" class="w-10 rounded" style="width: 100%; aspect-ratio:3/2; object-fit: contain; padding-right:4cm;">
                </div>
                <div class="col" style="padding-right:5cm">
                    <h4>{{ $blog->title }}</h4>
                    <p class="tmt-3">
                        {!! $blog->content !!}
                    </p>
                </div>
            </div>
            <a href="/#menu" class="btn btn-dark mt-2">Back</a>
        </div>
    </div>
</body>
</html>
<!-- <div class="row align-items-start">
                <div class="col-3">
                    <img src="{{ asset('storage/blog/'.$blog->image) }}" class="w-20 rounded" alt="">
                </div>

                <div class="col ms-4">
                    <h4>{{ $blog->title }}</h4>
                    <p class="tmt-3">
                        {!! $blog->content !!}
                    </p>
                    
                    <div class="rate">
                        <input type="radio" id="star5" name="rate" value="5" />
                        <label for="star5" title="text">5 stars</label>
                        <input type="radio" id="star4" name="rate" value="4" />
                        <label for="star4" title="text">4 stars</label>
                        <input type="radio" id="star3" name="rate" value="3" />
                        <label for="star3" title="text">3 stars</label>
                        <input type="radio" id="star2" name="rate" value="2" />
                        <label for="star2" title="text">2 stars</label>
                        <input type="radio" id="star1" name="rate" value="1" />
                        <label for="star1" title="text">1 star</label>
                      </div>

                </div>
            </div> -->
