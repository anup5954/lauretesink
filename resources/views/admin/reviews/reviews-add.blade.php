@extends('layouts.admin')
@section('admin-title')
    Admin | Add Review
@endsection

@section('admin-content')
    <div class="border w-100">
        <div class="col-md-12 form-group ">
            {{ show_error_msg() }}
            {{ show_success_msg() }}
            <form method="POST" action="{{ route('savereview') }}" enctype="multipart/form-data">
                @csrf
                <div class="row">

                    <div class="col-md-12 form-group">
                        <div class="wdinput">
                            <label>Client Image</label>
                            <input type="file" name="client_image" id="client_image" class="form-control" accept="image/*"
                                required>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="wdinput">
                            <label>Client Name</label>
                            <input class="form-control" name="client_name" id="client_name" placeholder="Client Name"
                                required />
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="wdinput">
                            <label>Client Reviews</label>
                            <textarea class="form-control" name="client_review" id="client_review" cols="5" placeholder="Client Reviews"
                                required></textarea>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="wdinput">
                            <label>Client Rating</label>
                            <select class="form-control" required name="client_rating" id="client_rating">
                                <option value="">Select Review</option>
                                @for ($i = 5; $i >= 1; $i--)
                                    <option value="{{ $i }}">{{ $i }}</option>
                                @endfor
                            </select>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="wdinput mt-2">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>


                </div>
            </form>
        </div>
    @endsection
    @section('admin-script')
        <script>
            ClassicEditor
                .create(document.querySelector('#long_description'))
                .then(editor => {
                    console.log(editor);
                })
                .catch(error => {
                    console.error(error);
                });

            ClassicEditor
                .create(document.querySelector('#short_description'))
                .then(editor => {
                    console.log(editor);
                })
                .catch(error => {
                    console.error(error);
                });
        </script>
    @endsection
