@extends('layouts.main')

@section('title')
    create
@endsection

@section('style')
    <style>
        ::placeholder {
            color: #b0b4b7 !important;
            font-size: .9rem;
        }
    </style>
@endsection

@section('content')
    @include('layouts.sections.nav1')

    <x-form-card action="{{ route('update', $listing->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <h4 class="text-center"><b>Update A GIG</b></h4>
        <p class="text-center"><b>Update a gig to find a developer</b></p>
        <div class="m-3">
            <label class="form-label" for="">Company Name:</label>
            <input class="form-control" type="text" name="company" id="" value="{{ $listing->company }}">
            @error('company')
                <p class="text-danger fs-6 fw-bold">{{ $message }}</p>
            @enderror
        </div>

        <div class="m-3">
            <label class="form-label" for="">Job Title:</label>
            <input class="form-control" type="text" name="title" id=""
                placeholder="Example: Senior Laravel Developer" value="{{ $listing->title }}">
            @error('title')
                <p class="text-danger fs-6
                fw-bold">{{ $message }}</p>
            @enderror
        </div>

        <div class="m-3">
            <label class="form-label" for="">Job Location:</label>
            <input class="form-control" type="text" name="location" id=""
                placeholder="Example: Remote, Cairo, Giza, etc" value="{{ $listing->location }}">
            @error('location')
                <p class="text-danger fs-6
            fw-bold">{{ $message }}</p>
            @enderror
        </div>

        <div class="m-3">
            <label class="form-label" for="">Contact Email</label>
            <input class="form-control" type="text" name="email" id="" placeholder="example@mail.com"
                value="{{ $listing->email }}">
            @error('email')
                <p class="text-danger fs-6
        fw-bold">{{ $message }}</p>
            @enderror
        </div>

        <div class="m-3">
            <label class="form-label" for="">Website/Application URL</label>
            <input class="form-control" type="text" name="website" id="" value="{{ $listing->website }}">
            @error('website')
                <p class="text-danger fs-6 fw-bold">{{ $message }}</p>
            @enderror
        </div>

        <div class="m-3">
            <label class="form-label" for="">Tags (Comma Separated)</label>
            <input class="form-control" type="text" name="tags" id=""
                placeholder="Example: PHP, Laravel, Vue.jx, MySQL, etc" value="{{ $listing->tags }}">
            @error('tags')
                <p class="text-danger fs-6 fw-bold">{{ $message }}</p>
            @enderror
        </div>

        <div class="m-3">
            <label class="form-label" for="">Company Logo:</label>
            <input class="form-control" type="file" name="logo" id="">
            @error('logo')
                <p class="text-danger fs-6 fw-bold">{{ $message }}</p>
            @enderror
        </div>
        <img class="h-75 w-50"
            src="{{ $listing->logo ? asset('storage/' . $listing->logo) : asset('images/no-image.png') }}" alt="">
        <div class="m-3">
            <label class="form-label" for="">Job Description:</label>
            <textarea class="form-control" name="description" id="" rows="7"
                placeholder="Include tsks, requirements, salary,etc">{{ $listing->description }}</textarea>
            @error('description')
                <p class="text-danger fs-6 fw-bold">{{ $message }}</p>
            @enderror
        </div>

        <div class="m-3 d-flex align-items-center">
            <button class="btn btn-danger" type="submit">Update</button>
            <a class="nav-link ms-4" href="/">Back</a>
        </div>

    </x-form-card>
@endsection

@section('script')
    <script src="{{ asset('js/app.js') }}"></script>
@endsection
