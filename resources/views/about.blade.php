@extends('game.layout')
@section('title', 'About')

@section('navbar')
    @parent
@endsection

@section('content')
    <div class="card mb-3" style="max-width: 700%;">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="img/benzemacrop.jpg" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h2 class="card-title">Mustafa Fathur Rahman</h2>
                    <h6 class="card-desc">2211522036 <br> Sistem Informasi-22 <br> Divisi Programming <br> Sub Divisi Web
                        Programming</h6>
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi debitis
                        voluptates quod quo cum animi quae aspernatur rem laboriosam accusamus molestias, impedit excepturi
                        in nobis eos neque porro, eius, possimus qui quidem recusandae consequuntur voluptatibus quia
                        provident. Nulla recusandae molestiae dicta beatae minima cumque, a accusamus adipisci fugit ad
                        veniam?</p>
                    <a href="https://www.instagram.com/mustafa_fathur/" target="_blank" class="btn btn-primary">More</a>
                </div>
            </div>
        </div>
    </div>

    <a href="game" class="btn btn-primary">Back</a>
@endsection
