@extends('layouts.admin')
@section('admin-title')
    Admin | Edit Review
@endsection

@section('admin-content')
    <div class="border w-100">
        <div class="col-md-12 form-group ">
            {{ show_error_msg() }}
            {{ show_success_msg() }}
            <form method="POST" action="{{ route('updatereview', $review->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">

                    <div class="col-md-12 form-group">
                        <div class="wdinput">
                            @if (!empty($review->client_image))
                                <div style="height: 90px;width:90px">
                                    <img style="width: 95px;height: 95px;"
                                        src="{{ asset('public/uploads/review/' . $review->client_image) }}" alt="">
                                    </td>
                                </div>
                            @endif
                            <label>Client Image</label>
                            <input type="file" name="client_image" id="client_image" class="form-control"
                                accept="image/*">
                        </div>
                        <input type="hidden" name="hide_img" value="{{ $review->client_image }}">
                    </div>
                    <div class="col-md-12">
                        <div class="wdinput">
                            <label>Client Name</label>
                            <input class="form-control" value="{{ $review->client_name }}" name="client_name"
                                id="client_name" placeholder="Client Name" required />
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="wdinput">
                            <label>Client Reviews</label>
                            <textarea class="form-control" name="client_review" id="client_review" cols="5" placeholder="Client Reviews"
                                required>{{ $review->client_review }}</textarea>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="wdinput">
                            <label>Client Rating</label>
                            <select class="form-control" required name="client_rating" id="client_rating">
                                <option value="" selected disabled>Select Review</option>
                                @for ($i = 5; $i >= 1; $i--)
                                    <option {{ $review->client_rating == $i ? 'selected' : '' }}
                                        value="{{ $i }}">
                                        {{ $i }}</option>
                                @endfor

                            </select>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="wdinput mt-2">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </div>


                </div>
            </form>
        </div>
    @endsection
