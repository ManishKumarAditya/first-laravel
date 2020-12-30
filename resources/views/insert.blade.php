@extends('base')
@section('title')
insertpage
@endsection
@section('content')
<div class="conatiner">
    <div class="row">
        <div class="col-lg-6 mx-auto">
            <div class="card mt-5 bg-light">
                <div class="card-body">
                    <form action="{{route('insertPost')}}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name" id="name" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="contact">contact</label>
                            <input type="text" name="contact" id="contact" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="math">math</label>
                            <input type="text" name="math" id="math" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="sci">sci</label>
                            <input type="text" name="sci" id="sci" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="ssc">ssc</label>
                            <input type="text" name="ssc" id="ssc" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="eng">eng</label>
                            <input type="text" name="eng" id="eng" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="hindi">hindi</label>
                            <input type="text" name="hindi" id="hindi" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="submit" name="send" class="btn btn-danger">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
