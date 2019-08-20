@extends('layouts.app')

@section('title', 'Laravel | List Account')

@push('page-styles')

@endpush

@section('content')

<div class="container home">
    <div class="row">
        <div class="col-ms-12 text-center"><span class="title-home conlections">Bộ Sưu Tập</span></div>
        <div>
            <div class="col-sm-4 col-xs-6 col-ms-4 col-mm-4">
                <div class="cathome">
                    <a href="https://hoyang.vn/dam/"> <img src="https://hoyang.vn/wp-content/uploads/2019/02/cate-dam.jpg" alt="ảnh"> </a>
                </div>
            </div>
            <div class="col-sm-4 col-xs-6 col-ms-4 col-mm-4">
                <div class="cathome">
                    <a href="https://hoyang.vn/chan-vay/"> <img src="https://hoyang.vn/wp-content/uploads/2019/02/cate-vay.jpg" alt="ảnh"> </a>
                </div>
            </div>
            <div class="col-sm-4 col-xs-6 col-ms-4 col-mm-4">
                <div class="cathome">
                    <a href="https://hoyang.vn/ao-nu/"> <img src="https://hoyang.vn/wp-content/uploads/2019/02/cate-ao.jpg" alt="ảnh"> </a>
                </div>
            </div>
            <div class="col-sm-4 col-xs-6 col-ms-4 col-mm-4">
                <div class="cathome">
                    <a href="https://hoyang.vn/quan-nu/"> <img src="https://hoyang.vn/wp-content/uploads/2019/02/cate-quan.jpg" alt="ảnh"> </a>
                </div>
            </div>
            <div class="col-sm-4 col-xs-6 col-ms-4 col-mm-4">
                <div class="cathome">
                    <a href="https://hoyang.vn/do-nam/"> <img src="https://hoyang.vn/wp-content/uploads/2019/02/cate-do-nam.jpg" alt="ảnh"> </a>
                </div>
            </div>
            <div class="col-sm-4 col-xs-6 col-ms-4 col-mm-4">
                <div class="cathome">
                    <a href="https://hoyang.vn/phu-kien/"> <img src="https://hoyang.vn/wp-content/uploads/2019/02/cate-phu-kien.jpg" alt="ảnh"> </a>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-ms-12 text-center"><span class="title-home new">Sản Phẩm Mới</span></div>
    </div>
    <div class="row">
        <div class="col-ms-12 text-center"><span class="title-home brand">Thương Hiệu</span></div>
    </div>
</div>
@endsection

@push('page-scripts')

@endpush