@extends('admin.layouts.app')

@section('content-admin')
    <div class="container-xxl flex-grow-1 container-p-y">
        <!-- Basic Layout & Basic with Icons -->
        <div class="row">
            <!-- Basic Layout -->
            <div class="col-xxl">
                <div class="card mb-4">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <h5 class="mb-0">Review Edit</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('review-update', $review->id) }}" method="POST">
                            @csrf
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="nama-pengguna">Nama Pengguna</label>
                                <div class="col-sm-10">
                                    <select class="form-control" id="nama-pengguna" name="user_id" disabled>
                                        <option value="" disabled selected>{{ $review->user->name }}</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="ulasan-pengguna">Ulasan</label>
                                <div class="col-sm-10">
                                    <textarea id="ulasan-pengguna" class="form-control" rows="3" name="ulasan" required>{{ $review->ulasan }}</textarea>
                                </div>
                            </div>
                            <div class="row justify-content-end">
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Basic with Icons -->
@endsection
