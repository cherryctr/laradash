@extends('layout.app')

@section('content')

            <div id="content">
            @include('layout.header.top-nav')
                <!-- Begin Page Content -->
                <div class="container-fluid">
                        

                      

                        <form action="{{ route('about.add') }}" id="contactForm" method="POST" enctype="multipart/form-data">
                          @csrf
                          <div class="mb-3">
                                <label class="form-label" for="judul">judul</label>
                                <input class="form-control" id="judul" type="text" name="judul" placeholder="judul" data-sb-validations="required" />
                                <div class="invalid-feedback" data-sb-feedback="judul:required">judul is required.</div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="deskripsi">Deskripsi</label>
                                <textarea class="ckeditor form-control" id="deskripsi" type="text" placeholder="Deskripsi" name="deskripsi" style="height: 10rem;" data-sb-validations="required"></textarea>
                                <div class="invalid-feedback" data-sb-feedback="deskripsi:required">Deskripsi is required.</div>
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="deskripsi">Pilih Gambar</label>
                              
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="inputGroupFile01" name="gambar">
                                <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                            </div>
                            </div>
                
                          


                          

                         


                       
                            <div class="d-grid">
                                <button class="btn btn-primary btn-lg" id="submitButton" type="submit">Submit</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.container-fluid -->
            </div>
                    
@endsection